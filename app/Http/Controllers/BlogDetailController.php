<?php

namespace App\Http\Controllers;

use App\Models\BlogDetail;
use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    public function index()
    {
        $data = BlogDetail::find(1);
        return  view('Admin.Blog.index', compact('data'));
    }

    public function update(Request $request)
    {
        $data = BlogDetail::find(1);
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'youtube' => 'required',
            'linkedin' => 'required',
            'desc' => 'required',
            'descr' => 'required',
        ]);
        $data['title'] = $request->title;
        $data['name'] = $request->name;
        $data['facebook'] = $request->facebook;
        $data['twitter'] = $request->twitter;
        $data['youtube'] = $request->youtube;
        $data['linkedin'] = $request->linkedin;
        $data['desc'] = $request->desc;
        $data['descr'] = $request->descr;
        $data->update();
        return redirect('admin/blogDetail/');
    }
}
