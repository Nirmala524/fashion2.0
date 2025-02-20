<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tag = Tag::all();
        return view('Admin.tag.index', compact('tag'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.tag.addItem');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'tag' => 'required',
        ]);
        $input['status'] = 1;
        Tag::create($input);
        return redirect()->route('tag.index')->with('success', 'Tag Create Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {

        return view('Admin.tag.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('Admin.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $tag = Tag::find($id);
        $request->validate([
            'tag' => 'required',
        ]);
        $tag['tag'] = $request->tag;
        $tag['status'] = isset($request->status) ? 1 : 0;
        $tag->update();
        return redirect()->route('tag.index')->with('success', 'Tag Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($tag)
    {
        $tag = Tag::find($tag);
        if (isset($tag)) {
            $tag->delete();
            return redirect()->route('tag.index')->with('danger', 'Tag Delete Successfully!');
        } else {
            return "Record Not Found";
        }
    }
}
