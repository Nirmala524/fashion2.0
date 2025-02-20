<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partner = Partner::paginate(4);
        return view('Admin.about.Partner.index', compact('partner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.about.Partner.addItem');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg ',
        ]);
        $input['status'] = 1;

        $image = $request->file('image');
        $imageName = str()->random(5) . time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('about/partner', $imageName);
        $input['image'] = $imageName;
        Partner::create($input);
        return redirect()->route('partner.index')
            ->with('success', 'Partner Created Successfully!.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        return view('Admin.about.Partner.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        return view('Admin.about.Partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        $partner = Partner::find($partner->id);
        
        $image = $request->file('image');

        if (isset($request->image)) {
            $request->validate([
                'image' => 'required|mimes:jpeg,png,jpg,gif,svg ',
            ]);

            if (file_exists(public_path('storage/about/partner/' . $partner->image))) {
                unlink(public_path('storage/about/partner/' . $partner->image));
            }
            $imageName = time() . '.' .  $image->getClientOriginalExtension();
            $image->storeAs('about/partner', $imageName);
            $partner['image'] = $imageName;
        }
        $partner['status'] = isset($request->status) ? 1 : 0;
        $partner->update();
        return redirect()->route('partner.index')
            ->with('success', 'Partner Updates successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        if (isset($partner)) {
            if (file_exists(public_path('storage/about/partner/' . $partner->image))) {
                unlink(public_path('storage/about/partner/' . $partner->image));
            }
            $partner->delete();
            return redirect()->route('partner.index')
                ->with('danger', 'Partner Deleted Successfully.');
        } else {
            return 'Partner IS Not Exit';
        }
    }
}
