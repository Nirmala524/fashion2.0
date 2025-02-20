<?php

namespace App\Http\Controllers;

use App\Models\Accessories;
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
    public function index()
    {
        $data = Accessories::find(1);
        return view('Admin.banner.accessories', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $data = Accessories::find(1);
        $request->validate([
            'title' => 'required',
        ]);
        
        $image = $request->file('image');
        // dd($image);
        if (isset($request->image)) {
            $request->validate([
                'image' => 'required',
            ]);
            if (file_exists(public_path('storage/Accessories/' . $data->image))) {
                unlink(public_path('storage/Accessories/' . $data->image));
            }
            $imageName = time() . '.' .  $image->getClientOriginalExtension();
            $image->storeAs('Accessories', $imageName);
            request()->image->move(public_path('image/Accessories/'), $imageName);
            $data['image'] = $imageName;
        }
        $data['title'] = $request->title;
        $data->update();
        return redirect('admin/Accessories/');
    }
}
