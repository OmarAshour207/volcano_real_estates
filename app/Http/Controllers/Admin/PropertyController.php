<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OtherData;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\State;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::with('state')
                ->orderBy('id', 'desc')
                ->paginate(10);
        return view('dashboard.properties.index', compact('properties'));
    }

    public function create()
    {
        $property = Property::create([
            'ar_name'       => ''
        ]);

        if (!empty($property)) {
            return redirect()->route('properties.edit', ['property' => $property->id]);
        }
    }

    public function edit(Property $property)
    {
        $states = State::orderBy('id', 'desc')->get();
        return view('dashboard.properties.edit',
                compact('property', 'states'));
    }

    public function update(Request $request, Property $property)
    {
        if ($request->ajax()) {
            $data = $request->validate([
                'ar_name'           => 'required|string',
                'en_name'           => 'required|string',
                'ar_description'    => 'required|string|min:10',
                'en_description'    => 'required|string|min:10',
                'type'              => 'required|numeric', // 0 => Home, 1 => Villa, 3 => chalet
                'area'              => 'required|string',
                'status'            => 'required|numeric', // 0 => rent, 1 => own
                'price'             => 'sometimes|nullable|numeric',
                'ar_meta'           => 'sometimes|nullable|string',
                'en_meta'           => 'sometimes|nullable|string',
                'ar_address'        => 'sometimes|nullable|string',
                'en_address'        => 'sometimes|nullable|string',
                'latitude'          => 'sometimes|nullable|string',
                'longitude'         => 'sometimes|nullable|string',
                'state_id'          => 'sometimes|nullable|numeric',
            ]);
            if ($request->has('input_key') && $request->has('input_value')) {
                $this->storeOtherData($property->id);
            }
            $property->update($data);
            return response(['status' => true, 'message' => __('admin.added_successfully')], 200);
        }
        return abort('403');
    }

    public function destroy(Property $property)
    {
        if ($property->image != null) {
            Storage::deleteDirectory('public/properties/' . $property->id);
        }
        $property->delete();
        session()->flash('success', __('admin.deleted_successfully'));
        return redirect()->route('properties.index');
    }

    public function storeOtherData($id)
    {
        $i = 0;
        $other_data = '';
        OtherData::where('property_id' , $id)->delete();
        foreach(request('input_key') as $key) {
            $data_value = !empty(request('input_value')[$i]) ? request('input_value')[$i] : '';
            OtherData::create([
                'property_id'   => $id,
                'data_key'      => $key,
                'data_value'    => $data_value,
            ]);
            $i++;
        }
    }

    public function uploadMainPhoto($id, Request $request)
    {
        $imageName = Image::make($request->image)
            ->resize($request->width, $request->height)
            ->encode('jpg');

        Storage::disk('local')->put('public/properties/' . $id .'/'. $request->image->hashName(), (string) $imageName, 'public');

        Property::where('id', $id)->update([
            'image' => $request->image->hashName()
        ]);

        return response(['status' => true],200);
    }

    public function removeMainPhoto($id)
    {
        $property = Property::findOrFail($id);
        $property->update([
            'image' => null
        ]);
        Storage::disk('local')->delete('public/properties/' . $property->id .'/'. $property->image);
        return response(['status' => true], 200);
    }

    public function uploadImage($id, Request $request)
    {
        $imageName = Image::make($request->file)
            ->resize($request->width, $request->height)
            ->encode('jpg');

        Storage::disk('local')->put('public/properties/' . $id .'/'. $request->file->hashName(), (string) $imageName, 'public');

        $image = PropertyImage::create([
            'original_name'     => $request->file->getClientOriginalName(),
            'new_name'          => $request->file->hashName(),
            'size'              => $request->file->getSize(),
            'path'              => 'properties/' . $id,
            'full_file'         => 'properties/' . $id . '/' . $request->file->hashName(),
            'property_id'       => $id
        ]);
        return response(['status' => true, 'id' => $image->id], 200);
    }

    public function removeImage(Request $request)
    {
        if( $request->has('id')) {
            $property = PropertyImage::findOrFail($request->id);
            Storage::disk('local')->delete('public/' . $property->full_file);
            $property->delete();
            return response(['status' => true, 'message' => 'deleted'], 200);
        }
    }
}
