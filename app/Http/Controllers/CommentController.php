<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index() {
        // Laravel question, how to get all resource data from model in index controller 
        //method so that i can display it in index view

        // dabūjam datus no datubāzes
        $comments = Comment::all();
        

        // dd($comments);  // var_dump + die

        
        
        return view('comments.index', ['comments' => $comments]);
    }
}
