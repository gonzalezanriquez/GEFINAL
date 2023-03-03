<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function index()
    {
            return view('posts.index', [
                'posts' => Post::paginate(10)
                
            ]);

    }



    public function create()
    {

           return view('posts.createOrEdit');

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

       

        // Public Folder
       
        
        Image::create([
            'post_id'=>$post['id'],
            'image'=>$request->image,
            'created_by'=>$post['user_id'],


        ]);

        return redirect()->route('posts.index')->with('message','La noticia se ha creado exitosamente');


    }

    public function edit(Request $request)
    {

        $post = Post::findOrFail($request->id);

           return view('posts.createOrEdit', [
                'post' => $post
          ]);
      }



    public function update(Request $request, $id)

    {


        $post = Post::where('id',  $id)->first();

           $request->validate([
                     'title'=>'required|max:255',
                     'body'=>'required|max:500',
             
           ]);


            $post->title = $request['title'];
            $post->body = $request['body'];
            $post->updated_at = (new DateTime())->format('Y-m-d H:i:s');

            $post->save();

            return redirect('/posts')->with('message','La noticia ha sido actualizada exitosamente');
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

        return redirect('/posts')->with('message','La noticia ha sido borrada exitosamente');;
    }

}
