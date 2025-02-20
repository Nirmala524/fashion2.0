<?php

namespace App\Http\Controllers;

use App\Models\Trends;
use Illuminate\Http\Request;

class TrendsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trend = Trends::paginate(3);
        return view('Admin.trends.index', compact('trend'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.trends.addItem');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'name' => 'required|min:3|max:60',
            'image' => 'required|mimes:jpeg,png,jpg,avif,webp',
            'date' => 'required|',
        ]);
        $input['status'] = 1;

        $image = $request->file('image');
        $imageName = str()->random(5) . time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('trends', $imageName);

        $input['image'] = $imageName;
        // dd($input);

        Trends::create($input);
        return redirect()->route('trends.index')
            ->with('success', 'Trends Created Successfully!.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trends $trend)
    {
        // dd($trend);
        return view('Admin.trends.show', compact('trend'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trends $trend)
    {
        return view('Admin.trends.edit', compact('trend'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trends $trend)
    {
        $trend = Trends::find($trend->id);
        $request->validate([
            'name' => 'required|min:3|max:60',
            'date' => 'required|',
        ]);
        $image = $request->file('image');
        if (isset($request->image)) {
            $request->validate([
                'image' => 'required|mimes:jpeg,png,jpg,gif,svg,webp ',
            ]);
            if (file_exists(public_path('storage/trends/' . $trend->image))) {
                unlink(public_path('storage/trends/' . $trend->image));
            }
            $imageName = time() . '.' .  $image->getClientOriginalExtension();
            $image->storeAs('trends', $imageName);
            $trend['image'] = $imageName;
        }
        $trend['name'] = $request->name;
        $trend['date'] = $request->date;
        $trend['status'] = isset($request->status) ? 1 : 0;
        $trend->update();
        return redirect()->route('trends.index')->with('success', 'Trends Upadate SuccessFully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trends $trend)
    {
        if (isset($trend)) {
            if (file_exists(public_path('storage/trends/' . $trend->image))) {
                unlink(public_path('storage/trends/' . $trend->image));
            }
            $trend->delete();
            return redirect()->route('trends.index')
                ->with('danger', 'Trend Deleted Successfully!.');
        } else {
            return 'Trend IS Not Exit';
        }
    }
}
