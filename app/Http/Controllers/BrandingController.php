<?php

namespace App\Http\Controllers;

use App\Models\Branding;
use Illuminate\Http\Request;

class BrandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brand = Branding::all();
        return view('Admin.Branding.index', compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Branding.addItem');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'brand' => 'required',
        ]);
        $input['status'] = 1;
        Branding::create($input);
        return redirect()->route('brand.index')->with('success', 'Brand Create Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Branding $brand)
    {
        return view('Admin.Branding.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branding $brand)
    {
        return view('Admin.Branding.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Branding $brand)
    {
        $brand = Branding::find($brand->id);
        $request->validate([
            'brand' => 'required',
        ]);
        $brand['brand'] = $request->brand;
        $brand['status'] = isset($request->status) ? 1 : 0;
        $brand->update();
        return redirect()->route('brand.index')->with('success', 'Brand Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branding $brand)
    {
        if (isset($brand)) {
            $brand->delete();
            return redirect()->route('brand.index')->with('danger', 'Brand Delete Successfully!');
        } else {
            return "Record Not Found";
        }
    }
}
