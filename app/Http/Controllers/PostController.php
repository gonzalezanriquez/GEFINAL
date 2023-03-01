<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use DateTime;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function index()
    {
            return view('posts.index', [
                'posts' => Post::paginate(5),
                /*'images' => Image::all(),*/
            ]);

    }

    public function create()
    {

           return view('posts.create');

}
    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required|max:255',
            'body'=>'required|max:255',
            'user_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $post= Post::create([

                  'title' => $request->title,
                  'body' => $request->body,
                  'user_id' => Auth::user()->id,
                  'slug' => Str::random(20),
               ]);

        Image::create([
            'post_id'=>$post['id'],
            'image'=>$request->image,
            'created_by'=>$post['user_id'],


        ]);

        return redirect()->route('posts.index');


    }

    public function edit(int $id)
    {

        $post = Post::findOrFail($id);

           return view('posts.create', [
                'post' => $post
          ]);
      }



    public function update(Request $request)

    {
             $request->validate([
                     'title'=>'required|max:255',
                     'body'=>'required|max:255',
                     'user_id' => 'required',
                     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             ]);

            $post = Post::find($request->id);

            $post->name = $request['name'];
            $post->username = $request['username'];
            $post->email = $request['email'];
            $post->updated_at = (new DateTime())->format('Y-m-d H:i:s');
            $post->save();

            return redirect('/posts');
    }

    public function show()
    {
        return view('posts.show', [
            'posts' => Post::all(),
            'images' => Image::all(),
        ]);
    }

    public function destroy($id)
    {
        Post::findOrFail($id)->delete();

        return redirect('/posts')->with('success','La noticia ha sido borrada exitosamente');;
    }

}
