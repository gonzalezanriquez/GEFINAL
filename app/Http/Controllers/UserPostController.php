<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->mode === 'Externas')
        {
            return view('noticias.index', [
                'posts' => Post::paginate(10),
                'mode' => $request->mode
                /*'images' => Image::all(),*/
            ]);
        }
        else if ($request->mode === 'Internas')
        {
            return view('noticias.index', [
                'posts' => Post::paginate(10),
                'mode' => $request->mode
                /*'images' => Image::all(),*/
            ]);
        }

    }



    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
