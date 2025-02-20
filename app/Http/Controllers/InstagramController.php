<?php

namespace App\Http\Controllers;

use App\Models\Instagram;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    public function index()
    {
        $data = Instagram::find(1);
        return view('Admin.instagram.index', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $data = Instagram::find(1);
        $request->validate([
            'name' => 'required ',
            'desc' => 'required',
            'title' => 'required',

        ]);

        $data['name'] = $request->name;
        $data['desc'] = $request->desc;
        $data['title'] = $request->title;
        $data->save();
        return redirect('admin/instagram/');
    }
}
