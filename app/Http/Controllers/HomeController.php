<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use function GuzzleHttp\Psr7\copy_to_string;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user_id=auth()->user()->id;
        echo($user_id);

        $user=User::find($user_id);

        return view('home')->with('posts',$user->posts);
    }
}
