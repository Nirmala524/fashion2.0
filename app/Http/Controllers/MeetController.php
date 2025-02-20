<?php

namespace App\Http\Controllers;

use App\Models\Meet;
use Illuminate\Http\Request;

class MeetController extends Controller
{
    public function index()
    {
        $data = Meet::find(1);
        return view('Admin.about.Meet.index', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $data = Meet::find(1);
        $request->validate([
            // 'firstImg' => 'required ',
            // 'midlleImg' => 'required',
            // 'lastImg' => 'required',
            'desc' => 'required',
            'schultz' => 'required',
            'design' => 'required',
            'our' => 'required',
            'team' => 'required',
            'partner' => 'required',
            'client' => 'required',
        ]);

        $firstImg = $request->file('firstImg');
        if (isset($request->firstImg)) {
            $request->validate([
                'firstImg' => 'required | mimes:jpeg,png,jpg,gif,svg',
            ]);
            if (file_exists(public_path('storage/about/meet/first/' . $data->firstImg))) {
                unlink(public_path('storage/about/meet/first/' . $data->firstImg));
            }
            $NewimageName = time() . '.' . $firstImg->getClientOriginalExtension();
            $firstImg->storeAs('about/meet/first', $NewimageName);
            request()->firstImg->move(public_path('image/about/meet/first/'), $NewimageName);
            $data['firstImg'] = $NewimageName;
        }

        $midlleImg = $request->file('midlleImg');
        if (isset($request->midlleImg)) {
            $request->validate([
                'midlleImg' => 'required | mimes:jpeg,png,jpg,gif,svg',
            ]);
            if (file_exists(public_path('storage/about/meet/midlle/' . $data->midlleImg))) {
                unlink(public_path('storage/about/meet/midlle/' . $data->midlleImg));
            }
            $NewimageName = time() . '.' . $midlleImg->getClientOriginalExtension();
            $midlleImg->storeAs('about/meet/midlle', $NewimageName);
            request()->midlleImg->move(public_path('image/about/meet/midlle/'), $NewimageName);
            $data['midlleImg'] = $NewimageName;
        }

        $lastImg = $request->file('lastImg');
        if (isset($request->lastImg)) {
            $request->validate([
                'lastImg' => 'required | mimes:jpeg,png,jpg,gif,svg',
            ]);
            if (file_exists(public_path('storage/about/meet/last/' . $data->lastImg))) {
                unlink(public_path('storage/about/meet/last/' . $data->lastImg));
            }
            $NewimageName = time() . '.' . $lastImg->getClientOriginalExtension();
            $lastImg->storeAs('about/meet/last', $NewimageName);
            request()->lastImg->move(public_path('image/about/meet/last/'), $NewimageName);
            $data['lastImg'] = $NewimageName;
        }

        // $data['firstImg'] = $request->firstImg;
        // $data['midlleImg'] = $request->midlleImg;
        // $data['lastImg'] = $request->lastImg;
        $data['desc'] = $request->desc;
        $data['schultz'] = $request->schultz;
        $data['design'] = $request->design;
        $data['our'] = $request->our;
        $data['team'] = $request->team;
        $data['partner'] = $request->partner;
        $data['client'] = $request->client;
        $data->save();
        return redirect('admin/about/meet/');
    }
}
