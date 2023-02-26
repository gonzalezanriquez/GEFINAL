<?php

namespace App\Http\Controllers;
use App\Models\Post;
use DateTime;
use Illuminate\Http\Request;
<<<<<<< Updated upstream
=======
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
>>>>>>> Stashed changes

class PostController extends Controller
{
    public function index()
    {
<<<<<<< Updated upstream
        //trae los registrso
        $posts=Post::where('isVisible',1)->get();
        $postsNot=Post::where('isVisible',0)->get();
=======
        $user = auth()->user();
        $authotizedRole = $user->roles()->get();

        if ($authotizedRole->doesntContain('role_name', 'Editor/a de Noticias') === true) {
            return view('notAuthorized');
        } else {
            return view('posts.index', [
                'posts' => Post::all(),
                'images' => Image::all(),
            ]);
        }

>>>>>>> Stashed changes

    }

    public function create()
    {
        $user = auth()->user();
        $authotizedRole = $user->roles()->get();

        if ($authotizedRole->doesntContain('role_name', 'Editor/a de Noticias') === true ){
            return view('notAuthorized');
        } else {
            return view('posts.create');
        }
    }

    public function store(Request $request)
    {
<<<<<<< Updated upstream
        $request->validate([
            'titulo'=>'required',
            'contenido'=>'required',


        ]);
        Post::create($request->all());
        return redirect()->route('posts.index');
=======

        $user = auth()->user();
        $authotizedRole = $user->roles()->get();

        if ($authotizedRole->doesntContain('role_name', 'Editor/a de Noticias') === true ){
            return view('notAuthorized');
        } else {
            $post = Post::create([

                'title' => $request->title,
                'body' => $request->body,
                'user_id' => Auth::user()->id,
                'slug' => Str::random(20),
            ]);

            Image::create([
                'post_id' => $post['id'],
                'image' => $request->image,
                'created_by' => $post['user_id']
            ]);

            return redirect('/posts');
        }


>>>>>>> Stashed changes
    }

    public function edit(Post $post)
    {
        $user = auth()->user();
        $authotizedRole = $user->roles()->get();

        if ($authotizedRole->doesntContain('role_name', 'Editor/a de Noticias') === true ){
            return view('notAuthorized');
        } else {
            /*$post = Post::find($id);*/

            return view('posts.create', [
                'post' => $post
            ]);
        }
    }

    public function update(Request $request, Post $post)

    {
        $user = auth()->user();
        $authotizedRole = $user->roles()->get();

        if ($authotizedRole->doesntContain('role_name', 'Editor/a de Noticias') === true ){
            return view('notAuthorized');
        } else {
            $request->validate([
                'title' => ['required', 'max:255'],
                'body' => ['required', 'max:255'],

<<<<<<< Updated upstream
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->update(['titulo'=>0,
    'contenido'=>'Jueves y viesadnes ',
    'isVisible'=>'0',
]);

     return redirect()->route('posts.index');

    }
=======
            ]);

            /*$post = Post::find($request->id);*/

            $post->name = $request['name'];
            $post->username = $request['username'];
            $post->email = $request['email'];
            $post->updated_at = (new DateTime())->format('Y-m-d H:i:s');
            $post->save();

            return redirect('/posts');
        }


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
        DB::table('posts')->delete($id);

        return redirect('/posts');
    }
>>>>>>> Stashed changes
}
