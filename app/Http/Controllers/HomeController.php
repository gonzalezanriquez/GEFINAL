<?php

namespace App\Http\Controllers;


use App\Models\User;
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
        $activePosts=Post::count();
        $profesores=User::role('profesor')->get()->count();
        $alumnos=User::role('alumno')->get()->count();

        
        return view('home', [
            'activePosts' => $activePosts,
            'profesores' => $profesores,
            'alumnos' => $alumnos,
        ]);
    }
}
