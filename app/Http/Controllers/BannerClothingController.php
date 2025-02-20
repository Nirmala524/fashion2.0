<?php

namespace App\Http\Controllers;

use App\Models\BannerClothing;
use Illuminate\Http\Request;

class BannerClothingController extends Controller
{
    public function index()
    {
        $data = BannerClothing::find(1);
        return view('Admin.banner.index', ['data' => $data]);
    }

    public function update(Request $request)
    {

        $data = BannerClothing::find(1);
        $request->validate([
            'title' => 'required',
        ]);
        $image = $request->file('image');
        if (isset($request->image)) {
            $request->validate([
                'image' => 'required ',
            ]);
            if (file_exists(public_path('storage/BannerClothing/' . $data->images))) {
                unlink(public_path('storage/BannerClothing/' . $data->images));
            }
            $imageName = time() . '.' .  $image->getClientOriginalExtension();
            $image->storeAs('BannerClothing', $imageName);
            request()->image->move(public_path('image/BannerClothing/'), $imageName);
            $data['image'] = $imageName;
        }
        $data['title'] = $request->title;
        $data->update();
        return redirect('admin/BannerClothing/');
    }
}
