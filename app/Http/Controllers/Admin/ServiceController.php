<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::paginate(10);
        return view('dashboard.services.index', compact('services'));
    }

    public function create()
    {
        return view('dashboard.services.create');
    }

    public function store(Request $request, Service $service)
    {
        $data = $request->validate([
            'ar_title'             => 'required|string',
            'en_title'             => 'required|string',
            'ar_description'       => 'required|string|min:10',
            'en_description'       => 'required|string|min:10',
            'ar_meta_tag'          => 'required|string',
            'en_meta_tag'          => 'required|string'
        ]);
        $data['image'] = $request->image;

        Service::create($data);
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->route('services.index');
    }

    public function edit(Service $service)
    {
        return view('dashboard.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'ar_title'             => 'required|string',
            'en_title'             => 'required|string',
            'ar_description'       => 'required|string|min:10',
            'en_description'       => 'required|string|min:10',
            'ar_meta_tag'          => 'required|string',
            'en_meta_tag'          => 'required|string'
        ]);
        $data['image'] = $request->image;

        $service->update($data);
        session()->flash('success', trans('admin.added_successfully'));
        return redirect()->route('services.index');
    }

    public function destroy(Service $service)
    {
        Storage::disk('local')->delete('public/services/'. $service->image);
        $service->delete();
        session()->flash('success', trans('admin.deleted_successfully'));
        return redirect()->route('services.index');
    }

}
