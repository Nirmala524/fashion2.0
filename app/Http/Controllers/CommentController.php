<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function index()
    {
        $comment = Comment::all();
        return view('Admin.Comment.index', compact('comment'));
    }

    public function store(Request $request)
    {
        $user = Session::get('email');
        if (isset($user)) {
            return redirect('customlogin');
        }
        // dd($request);
        $comment = $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'comment' => 'required',
        ]);
        Comment::create($comment);
        return redirect('/');
    }
}
