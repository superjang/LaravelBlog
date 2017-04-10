<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $users = \App\User::paginate(5);
        $modelView = [ 'data' => $users ];

        return view('contents.user._base')->with($modelView);
    }

    public function show(Request $request)
    {
        $user = \App\User::find($request->input('id'));

        $modelView = [ 'data' => $user ];

        return view('contents.user._detail')->with($modelView);
    }
}
