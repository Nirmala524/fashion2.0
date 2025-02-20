<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;

class InsImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inst = Images::paginate(3);
        return view('Admin.insImages.index', compact('inst'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.insImages.addItem');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,avif,webp',
        ]);
        $input['status'] = 1;
        $image = $request->file('image');
        $imageName = str()->random(5) . time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('Instagram', $imageName);
        $input['image'] = $imageName;
        Images::create($input);
        return redirect()->route('InsImages.index')->with('success', 'Instagram Images Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($img)
    {
        $img = Images::find($img);
        if (isset($img)) {
            return view('Admin.insImages.show', compact('img'));
        } else {
            return redirect()->back()->with('error', 'Image Not Found.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($img)
    {
        $img = Images::find($img);
        return view('Admin.insImages.edit', compact('img'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Images $inst)
    {
        $inst = Images::find($inst->id);

        $image = $request->file('image');

        if (isset($request->image)) {
            $request->validate([
                'image' => 'required|mimes:jpeg,png,jpg,gif,svg ',
            ]);
            if (file_exists(public_path('storage/Instagram/' . $inst->image))) {
                unlink(public_path('storage/Instagram/' . $inst->image));
            }
            $imageName = time() . '.' .  $image->getClientOriginalExtension();
            $image->storeAs('Instagram', $imageName);
            $inst['image'] = $imageName;
        }
        // $inst['name'] = $request->name;
        $inst['status'] = isset($request->status) ? 1 : 0;
        $inst->update();
        return redirect()->route('InsImages.index')->with('success', 'Instagram Images Upadate SuccessFully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($img)
    {

        $img = Images::find($img);
        if (isset($img)) {
            if (file_exists(public_path('storage/Instagram/' . $img->image))) {
                unlink(public_path('storage/Instagram/' . $img->image));
            }
            $img->delete();
            return redirect()->route('InsImages.index')
                ->with('danger', 'Instagram Images Deleted Successfully!.');
        } else {
            return 'Instagram Images IS Not Exit';
        }
    }
}
