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

        //trae los registrso
        $posts=Post::where('isVisible',1)->get();
        $postsNot=Post::where('isVisible',0)->get();
        $activePosts=Post::where('isVisible',1)->count();


        $user = auth()->user();
        // $authotizedRole = $user->roles()->get();
        //    if ($authotizedRole->doesntContain('role_name', 'Editor/a de Noticias') === true) {
        //     return view('notAuthorized');
        // } else {
            return view('posts.noticias', [
                'posts' => Post::paginate(2),
                'images' => Image::all(),
            ]);




    }

    public function create()
    {
        $user = auth()->user();
        // $authotizedRole = $user->roles()->get();

    //     if ($authotizedRole->doesntContain('role_name', 'Editor/a de Noticias') === true ){
    //         return view('notAuthorized');
    //     } else {
    //         return view('posts.create');
    //     }
    //
}
    public function store(Request $request)
    {

        $request->validate([
            'titulo'=>'required',
            'contenido'=>'required',


        ]);
        $post= Post::create([
            'titulo'=> $request->titulo,
            'contenido'=> $request->contenido,
            'user_id'=> Auth::user()->id,
        ]);


        Image::create([
            'post_id'=>$post['id'],
            'image'=>$request->image,
            'created_by'=>$post['user_id'],


        ]);


        return redirect()->route('posts.index');


        $user = auth()->user();
       // $authotizedRole = $user->roles()->get();

        // if ($authotizedRole->doesntContain('role_name', 'Editor/a de Noticias') === true ){
        //     return view('notAuthorized');
        // } else {
        //     $post = Post::create([

        //         'title' => $request->title,
        //         'body' => $request->body,
        //         'user_id' => Auth::user()->id,
        //         'slug' => Str::random(20),
        //     ]);

        //     Image::create([
        //         'post_id' => $post['id'],
        //         'image' => $request->image,
        //         'created_by' => $post['user_id']
        //     ]);

        //     return redirect('/posts');
        // }



    }

    public function edit(Post $post)
    {
        $user = auth()->user();
    //     $authotizedRole = $user->roles()->get();

    //     if ($authotizedRole->doesntContain('role_name', 'Editor/a de Noticias') === true ){
    //         return view('notAuthorized');
    //     } else {
    //         /*$post = Post::find($id);*/

    //         return view('posts.create', [
    //             'post' => $post
    //         ]);
    //     }
    //
}

    public function update(Request $request, Post $post)

    {
        $user = auth()->user();
        // $authotizedRole = $user->roles()->get();

        // if ($authotizedRole->doesntContain('role_name', 'Editor/a de Noticias') === true ){
        //     return view('notAuthorized');
        // } else {
        //     $request->validate([
        //         'title' => ['required', 'max:255'],
        //         'body' => ['required', 'max:255'],
        //     ]);

            /*$post = Post::find($request->id);*/

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
        DB::table('posts')->delete($id);

        return redirect('/posts');
    }


    public function destroyLean(Post $post)
    {
        $post->update(['titulo' => 0,
            'contenido' => 'Jueves y viesadnes ',
            'isVisible' => '0',
        ]);

        return redirect()->route('posts.index');

    }

/* referencia codigo*/

/*

index()
    {
        $products = Product::latest()->paginate(5);

        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('products.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Product::create($input);

        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }


    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }


    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $product->update($input);

        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
*/



}
