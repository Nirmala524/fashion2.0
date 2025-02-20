<?php

namespace App\Http\Controllers;

use App\Models\Chest;
use Illuminate\Http\Request;

class ChestController extends Controller
{
    public function index()
    {
        $data = Chest::find(1);
        return view('Admin.black.index', ['data' => $data]);
    }

    public function update(Request $request)
    {

        $data = Chest::find(1);
        $request->validate([
            'name' => 'required ',
            'title' => 'required',

        ]);
        $image = $request->file('image');
        if (isset($request->image)) {
            // dd($request);
            $request->validate([
                'image' => 'required ',
            ]);
            // dd($image);
            if (file_exists(public_path('storage/chest/' . $data->images))) {
                unlink(public_path('storage/chest/' . $data->images));
            }
            $imageName = time() . '.' .  $image->getClientOriginalExtension();
            $image->storeAs('chest', $imageName);
            request()->image->move(public_path('image/chest/'), $imageName);
            $data['image'] = $imageName;
        }


        $data['name'] = $request->name;
        $data['title'] = $request->title;
        $data->update();
        return redirect('admin/bagBlack/');
    }
}
