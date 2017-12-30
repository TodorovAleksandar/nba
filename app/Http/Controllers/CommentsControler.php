<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use App\Team;
use Illuminate\Support\Facades\Auth;

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

      


        $comment = new Comment();
        $comment->text = $request['text'];
        $comment->team_id=$id;
        $comment->user_id =Auth::id();
        $comment->save();
        return back();

    }
}