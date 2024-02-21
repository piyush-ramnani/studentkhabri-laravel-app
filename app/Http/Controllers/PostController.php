<?php

// app/Http/Controllers/PostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        $posts = $response->json();

        return view('posts.index', ['posts' => $posts]);
    }
    public function show($id)
    {
        // $response = Http::get("https://jsonplaceholder.typicode.com/posts/{$id}");
        // $post = $response->json();

        // Save the retrieved post to the database
        $postModel = new Post([
            'title' => $post['title'],
            'body' => $post['body'],
            'userId' => $post['userId']
        ]);

        $postModel->save();

        // Now, fetch the post from the database
        $postFromDatabase = Post::findOrFail($postModel->id);

        return view('posts.show', ['post' => $postFromDatabase]);
    }

    function showPosts(Request $request)
    {

        // $posts = Post::get();

        // dd($po)

    }
}

