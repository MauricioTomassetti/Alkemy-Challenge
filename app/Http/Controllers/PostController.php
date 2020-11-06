<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create']]);
    }

    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.detail', ['post' => $post, 'category' => $post->category()->first()->name]);
    }

    public function create(Category $category)
    {
        return view('posts.create', ['categories' => $category->all()]);
    }

    public function store()
    {

        $path = request('image')->store('images');

        $post = Post::create($this->validatePost());

        // $post->image = @end(explode('/', $path));
        $post->image = basename($path);

        $post->save();

        return redirect()->route('posts.show', $post->id);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $post->update(request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]));

        return redirect('posts');
    }

    public function destroy(Post $post)
    {
        if ($post->image) {

            Storage::delete('/images/' . $post->image);
        }

        $post->delete();

        return redirect('posts');
    }

    public function validatePost()
    {
        return request()->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }
}
