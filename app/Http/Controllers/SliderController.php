<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::all();
         
        return view('Admin.slider.index', (compact('slider')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.slider.addItem');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'name' => 'required|min:3|max:25',
            'title' => 'required|min:10|max:100',
            'desc' => 'required|min:10|max:200',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg ',
        ]);

        $input['status'] = 1;

        $image = $request->file('image');
        $imageName = str()->random(5) . time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('slider', $imageName);
        $input['image'] = $imageName;

        Slider::create($input);
        return redirect()->route('slider.index')
            ->with('success', 'Slider created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        return view('Admin.slider.show',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('Admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {

        $slider = Slider::find($slider->id);
        $request->validate([
            'name' => 'required|min:3|max:25',
            'title' => 'required|min:10|max:50',
            'desc' => 'required|min:10|max:200',
        ]);

        $image = $request->file('image');

        if (isset($request->image)) {
            $request->validate([
                'image' => 'required|mimes:jpeg,png,jpg,gif,svg ',
            ]);

            if (file_exists(public_path('storage/slider/' . $slider->image))) {
                unlink(public_path('storage/slider/' . $slider->image));
            }
            $imageName = time() . '.' .  $image->getClientOriginalExtension();
            $image->storeAs('slider', $imageName);
            $slider['image'] = $imageName;
        }

        $slider['name'] = $request->name;
        $slider['title'] = $request->title;
        $slider['desc'] = $request->desc;
        $slider['status'] = isset($request->status) ? 1 : 0;

        $slider->update();

        return redirect()->route('slider.index')
            ->with('success', 'Slider Updates successfully.');
    }

    /**
     * 
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        if (isset($slider)) {
            if (file_exists(public_path('storage/slider/' . $slider->image))) {
                unlink(public_path('storage/slider/' . $slider->image));
            }
            $slider->delete();
            return redirect()->route('slider.index')
                ->with('danger', 'Slider deleted successfully.');
        } else {
            return 'Slider IS Not Exit';
        }
    }
}