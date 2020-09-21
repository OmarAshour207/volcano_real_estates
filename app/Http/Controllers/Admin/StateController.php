<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index()
    {
        $states = State::orderBy('id', 'desc')->paginate(10);
        return view('dashboard.states.index', compact('states'));
    }

    public function create()
    {
        return view('dashboard.states.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'ar_name'       => 'required|string',
            'en_name'       => 'required|string',
        ]);

        State::create($data);
        session()->flash('success', __('admin.added_successfully'));
        return redirect()->route('states.index');
    }

    public function edit(State $state)
    {
        return view('dashboard.states.edit', compact('state'));
    }

    public function update(State $state, Request $request)
    {
        $data = $request->validate([
            'ar_name'       => 'required|string',
            'en_name'       => 'required|string',
        ]);

        $state->update($data);
        session()->flash('success', __('admin.updated_successfully'));
        return redirect()->route('states.index');
    }

    public function destroy(State $state)
    {
        $state->delete();
        session()->flash('success', __('admin.deleted_successfully'));
        return redirect()->route('states.index');
    }

}
