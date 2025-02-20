<?php

namespace App\Http\Controllers;

use App\Models\Fashion;
use Illuminate\Http\Request;

class FashionController extends Controller
{
    public function index()
    {
        $data = Fashion::find(1);
        return view('Admin.Latests.index', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $data = Fashion::find(1);
        $request->validate([
            'name' => 'required ',
            'title' => 'required',
        ]);
        $data['name'] = $request->name;
        $data['title'] = $request->title;
        $data->save();
        return redirect('admin/latests/');
    }
}
