<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index()
    {
        $data = Detail::find(1);
        return view('Admin.Detail.index', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $data = Detail::find(1);
        $request->validate([
            'desc' => 'required',
            'add' => 'required',
        ]);
        $data['desc'] = $request->desc;
        $data['add'] = $request->add;
        $data->save();
        return redirect('admin/detail/');
    }
}
