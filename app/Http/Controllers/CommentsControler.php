<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use App\Team;

class CommentsController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    public function store(Request $request,$id)
    {
        $this->validate(request(),
        ['required'=>'text']);

        $id = Auth::id();


        $comment = new Comment();
        $comment->text = $request['text'];
        $comment->user_id = $id;
        $comment->save();
        return back();

    }
}