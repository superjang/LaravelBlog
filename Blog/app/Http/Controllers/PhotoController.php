<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        $photo = \App\Post::orderBy('created_at', 'desc')->get();
        $modelView = [ 'photo' => $photo, ];

        return view('contents.photo._base')->with($modelView);
    }
}
