<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $size = Size::all();
        return view('Admin.size.index', compact('size'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.size.addItem');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'size' => 'required',
        ]);
        $input['status'] = 1;
        Size::create($input);
        return redirect()->route('size.index')->with('success', 'Size Create Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Size $size)
    {

        return view('Admin.size.show', compact('size'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Size $size)
    {
        return view('Admin.size.edit', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Size $size)
    {
        $size = Size::find($size->id);
        $request->validate([
            'size' => 'required',
        ]);
        $size['size'] = $request->size;
        $size['status'] = isset($request->status) ? 1 : 0;
        $size->update();
        return redirect()->route('size.index')->with('success', 'Size Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Size $size)
    {
         
        if (isset($size)) {
            $size->delete();
            return redirect()->route('size.index')->with('danger', 'Size Delete Successfully!');
        } else {
            return "Record Not Found";
        }
    }
}
