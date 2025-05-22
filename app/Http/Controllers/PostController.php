<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;
use App\Services\PostService;

class PostController extends Controller
{
    protected $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

    public function index()
    {

        $posts = Post::all(); // Eloquent ORM
        return view('posts.index', compact('posts'));
        // $posts = $this->service->getAll();
        // return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->service->create([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);

        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        $post = $this->service->find($id);
        if (!$post) return redirect()->route('posts.index');

        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = $this->service->find($id);
        if (!$post) return redirect()->route('posts.index');

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $this->service->update($id, [
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);

        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        $this->service->delete($id);
        return redirect()->route('posts.index');
    }
}
