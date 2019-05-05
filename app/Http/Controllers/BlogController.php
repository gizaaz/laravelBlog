<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->paginate(20);

        return view('blog', compact('posts', $posts));
    }

    public function getCategoryPosts(Request $request)
    {
        $posts = Post::with('category')
            ->where('category_id',$request->id)
            ->paginate(20);

        return view('blog', compact('posts', $posts));
    }

    public function post($id)
    {
        $post = Post::with('category', 'author')
            ->where('id', $id)->first();

        return view('post', compact( 'post', $post));
    }
}
