<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;


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
        $activePosts=Post::where('isVisible',1)->count();

        return view('home')->with('activePosts',$activePosts);
    }
}
