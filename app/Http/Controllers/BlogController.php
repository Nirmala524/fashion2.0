<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::find(1);
        return view('Admin.trends.blog', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $data = Blog::find(1);
        $request->validate([
            'title' => 'required',
        ]);

        $image = $request->file('image');
        if (isset($request->image)) {
            $request->validate([
                'image' => 'required',
            ]);
            if (file_exists(public_path('storage/Blog/' . $data->image))) {
                unlink(public_path('storage/Blog/' . $data->image));
            }
            $imageName = time() . '.' .  $image->getClientOriginalExtension();
            $image->storeAs('Blog', $imageName);
            request()->image->move(public_path('image/Blog/'), $imageName);
            $data['image'] = $imageName;
        }
        $data['title'] = $request->title;
        $data->update();
        return redirect('admin/Blog/');
    }
}
