<?php

namespace App\Http\Controllers;

use App\Models\Happy;
use Illuminate\Http\Request;

class HappyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $happy = Happy::all();
        return view('Admin.about.Happy.index', compact('happy'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.about.Happy.addItem');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $input = $request->all();
        $request->validate([
            'name' => 'required|min:3|max:25',
            'number' => 'required',
        ]);
        $input['status'] = 1;
        Happy::create($input);
        return redirect()->route('happy.index')
            ->with('success', 'Happy Created Successfully!.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Happy $happy)
    {
        return view('Admin.about.Happy.show', compact('happy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Happy $happy)
    {
        return view('Admin.about.Happy.edit', compact('happy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Happy $happy)
    {
        $happy = Happy::find($happy->id);
        $request->validate([
            'name' => 'required|min:3|max:25',
            'number' => 'required',
        ]);

        $happy['name'] = $request->name;
        $happy['number'] = $request->number;
        $happy['status'] = isset($request->status) ? 1 : 0;
        $happy->update();
        return redirect()->route('happy.index')
            ->with('success', 'Happy Updates successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Happy $happy)
    {
        if (isset($happy)) {
            $happy->delete();
            return redirect()->route('happy.index')->with('danger', 'Happy Delete Successfully!');
        } else {
            return "Record Not Found";
        }
    }
}
