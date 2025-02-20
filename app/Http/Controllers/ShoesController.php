<?php

namespace App\Http\Controllers;

use App\Models\Shoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShoesController extends Controller
{
    public function index()
    {
        $data = Shoes::find(1);
        return view('Admin.banner.Shoes', ['data' => $data]);
    }

    public function update(Request $request)
    {

        $data = Shoes::find(1);
        $request->validate([
            'title' => 'required',
            'image' => 'required', // Validate image, optional
        ]);

        $image = $request->file('image');
        if (isset($request->image)) {
            $request->validate([
                'image' => 'required',
            ]);
            if (file_exists(public_path('storage/Shoes/' . $data->image))) {
                unlink(public_path('storage/Shoes/' . $data->image));
            }
            $imageName = time() . '.' .  $image->getClientOriginalExtension();
            $image->storeAs('Shoes', $imageName);
            request()->image->move(public_path('image/Shoes/'), $imageName);
            $data['image'] = $imageName;
        }
        $data->update();
        return redirect('admin/Shoes/');
    }
}
