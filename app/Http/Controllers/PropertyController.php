<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Property;
use App\Models\State;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function showProperty()
    {
        $properties = Property::orderBy('id', 'desc')->paginate(12);
        $blogs = Blog::orderBy('id', 'desc')->limit(4)->get();
        return view('site.first.properties',
                compact('properties', 'blogs'));
    }

    public function showSingleProperty(Request $request)
    {
        $blogs = Blog::orderBy('id', 'desc')->limit(4)->get();
        $property = Property::with('state')->findOrFail($request->route('id'));
        $properties = Property::with('state')->orderBy('id', 'desc')->limit(3)->get();
        $states = State::orderBy('id', 'desc')->get();

        return view('site.first.single_property',
                compact('property', 'properties',
                                'blogs', 'states'));
    }

    public function PropertiesSearch(Request $request)
    {
        $blogs = Blog::orderBy('id', 'desc')->limit(4)->get();
        $price = explode('-', $request->price);
        $properties = Property::WhenState($request->state)
            ->where('type', $request->type)
            ->whereBetween('area', [$request->min_area, $request->max_area])
            ->where('status', $request->status)
            ->whereBetween('price', [$price[0], $price[1]])
            ->paginate(12);
        return view('site.first.properties',
                compact('properties', 'blogs'));
    }
}
