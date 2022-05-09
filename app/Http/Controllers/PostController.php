<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Vote;
use http\Message\Body;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('body', 'ASC', 'str')->get();



        return view('posts.index',[
            'posts' => $posts

        ]);


    }

    public function show(Post $post) {
        /*dd($post);*/

        return view('posts.show', [
            'post' => $post

        ]);
    }


    public function create()
    {
        return view('posts.create');
    }


    public function search(Request $request){
        // Get the search value from the request


        // Return the search view with the resluts compacted
        return view('posts.search');
    }

    public function searchResults(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $posts = Post::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('body', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('posts.searchResults', compact('posts'));
    }

    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect()->route('posts.index');
    }


}
