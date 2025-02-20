<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::find(1);
        return view('Admin.contact.index',compact('data'));
    }

    public function update(Request $request)
    {
        $data = Contact::find(1);
        $request->validate([
            'map' => 'required',
            'title' => 'required',
            'name' => 'required',
            'desc' => 'required',
            'nameA' => 'required',
            'america' => 'required',
            'nameF' => 'required',
            'france' => 'required',
        ]);
        $data['map'] = $request->map;
        $data['title'] = $request->title;
        $data['name'] = $request->name;
        $data['desc'] = $request->desc;
        $data['nameA'] = $request->nameA;
        $data['america'] = $request->america;
        $data['nameF'] = $request->nameF;
        $data['france'] = $request->france;

        $data->save();
        return redirect('admin/contact/');
    }
}
