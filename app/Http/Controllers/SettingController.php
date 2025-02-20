<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $data = Settings::find(1);
        return view('admin.setting', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $data = Settings::find(1);
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'email' => 'required ',
            'contact' => 'required',
            'desc' => 'required',
            'shopping' => 'required',
            'shop' => 'required',
        ]);

        $hedingImg = $request->file('hedingImg');
        if (isset($request->hedingImg)) {
            $request->validate([
                'hedingImg' => 'required | mimes:jpeg,png,jpg,gif,svg',
            ]);
            if (file_exists(public_path('storage/setting/' . $data->hedingImg))) {
                unlink(public_path('storage/setting/' . $data->hedingImg));
            }
            $imageName = time() . '.' . $hedingImg->getClientOriginalExtension();
            $hedingImg->storeAs('setting', $imageName);
            request()->hedingImg->move(public_path('image/setting/'), $imageName);
            $data['hedingImg'] = $imageName;
        }

        $footerImg = $request->file('footerImg');
        if (isset($request->footerImg)){ 
            $request->validate([
                'footerImg' => 'required | mimes:jpeg,png,jpg,gif,svg',
            ]);
            if (file_exists(public_path('storage/setting/' . $data->footerImg))) {
                unlink(public_path('storage/setting/' . $data->footerImg));
            }

            $NewimageName = time() . '.' . $footerImg->getClientOriginalExtension();
            $footerImg->storeAs('setting', $NewimageName);

            request()->footerImg->move(public_path('image/setting/'), $NewimageName);
            $data['footerImg'] = $NewimageName;
        }
        $data['name'] = $request->name;
        $data['title'] = $request->title;
        $data['email'] = $request->email;
        $data['contact'] = $request->contact;
        $data['desc'] = $request->desc;
        $data['shopping'] = $request->shopping;
        $data['shop'] = $request->shop;
        $data->save();
        return redirect('admin/setting');
    }

}
