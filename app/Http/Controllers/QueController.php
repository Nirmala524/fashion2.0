<?php

namespace App\Http\Controllers;

use App\Models\Que;
use Illuminate\Http\Request;

class QueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $que = Que::all();
        return view('Admin.about.Que.index', compact('que'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.about.Que.addItem');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'title' => 'required',
            'desc' => 'required|max:200',
        ]);

        $input['status'] = 1;
        Que::create($input);
        return redirect()->route('que.index')
            ->with('success', 'Question Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Que $que)
    {
        return view('Admin.about.Que.show', compact('que'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Que $que)
    {
        return view('Admin.about.Que.edit', compact('que'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Que $que)
    {
        $que = Que::find($que->id);
        $request->validate([
            'title' => 'required',
            'desc' => 'required|max:200',
        ]);

        $que['title'] = $request->title;
        $que['desc'] = $request->desc;
        $que['status'] = isset($request->status) ? 1 : 0;
        $que->update();
        return redirect()->route('que.index')
            ->with('success', 'Question Updates successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Que $que)
    {
        if (isset($que)) {
            $que->delete();
            return redirect()->route('que.index')->with('danger', 'Question Delete Successfully!');
        } else {
            return "Record Not Found";
        }
    }
}
