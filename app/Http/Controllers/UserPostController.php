<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
                'posts' => Post::latest()->paginate(10),
                'mode' => $request->mode,
                'images' => Image::all(),
            ]);
        }
        else if ($request->mode === 'Internas')
        {
            return view('noticias.index', [
                'posts' => Post::latest()->paginate(10),
                'mode' => $request->mode,
                'images' => Image::all(),
            ]);
        }

    }



    public function show($id)
    {
        $img = Image::where('post_id', '=' , $id)->get();

        if ($img->isNotEmpty()) {
           $imgStr = $img[0]['image'];
        }

        return view('noticias.show', [
            'post' => Post::findOrFail($id),
            'image' => $imgStr,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
