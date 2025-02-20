<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cat = Category::all();
        return view('Admin.category.index', compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.category.addItem');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'category' => 'required',
        ]);
        $input['status'] = 1;
        Category::create($input);
        return redirect()->route('category.index')->with('success', 'Category Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($cat)
    {
        $cat = Category::find($cat);
        return view('Admin.category.show', compact('cat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($cat)
    {
        $cat = Category::find($cat);
        return view('Admin.category.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $cat = Category::find($id);
        $request->validate([
            'category' => 'required',
        ]);
        $input['category'] = $request->category;
        $input['status'] = isset($request->status) ? 1 : 0;
        $cat->update($input);
        return redirect()->route('category.index')->with('success', 'Category Upadate Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cat)
    {
        $cat = category::find($cat);
        if (isset($cat)) {
            $cat->delete();
            return redirect()->route('category.index')->with('danger', 'Category Deleted Successfuly!');
        } else {
            return "record not found";
        }
    }
}
