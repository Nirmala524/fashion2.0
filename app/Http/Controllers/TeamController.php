<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team = Team::all();
        return view('Admin.about.Team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.about.Team.addItem');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'name' => 'required|min:3|max:25',
            'role' => 'required|min:5|max:20',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg ',
        ]);
        $input['status'] = 1;

        $image = $request->file('image');
        $imageName = str()->random(5) . time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('about/team', $imageName);
        $input['image'] = $imageName;
        Team::create($input);
        return redirect()->route('team.index')
            ->with('success', 'Team Created Successfully!.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return view('Admin.about.Team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('Admin.about.Team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $team = Team::find($team->id);
        $request->validate([
            'name' => 'required|min:3|max:25',
            'role' => 'required|min:5|max:20',
        ]);

        $image = $request->file('image');

        if (isset($request->image)) {
            $request->validate([
                'image' => 'required|mimes:jpeg,png,jpg,gif,svg ',
            ]);

            if (file_exists(public_path('storage/about/team/' . $team->image))) {
                unlink(public_path('storage/about/team/' . $team->image));
            }
            $imageName = time() . '.' .  $image->getClientOriginalExtension();
            $image->storeAs('about/team', $imageName);
            $team['image'] = $imageName;
        }
        $team['name'] = $request->name;
        $team['role'] = $request->role;
        $team['status'] = isset($request->status) ? 1 : 0;
        $team->update();
        return redirect()->route('team.index')
            ->with('success', 'Team Updates successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        if (isset($team)) {
            if (file_exists(public_path('storage/about/team/' . $team->image))) {
                unlink(public_path('storage/about/team/' . $team->image));
            }
            $team->delete();
            return redirect()->route('team.index')
                ->with('danger', 'Team Deleted Successfully.');
        } else {
            return 'Team IS Not Exit';
        }
    }
}
