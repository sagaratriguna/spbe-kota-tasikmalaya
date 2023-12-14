<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {

        $tittle = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $tittle = ' in ' . $category->name; 
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $tittle = ' by '. $author->name;
        }


        return view('posts', [
            "tittle" => "All Posts" . $tittle,
            "active" => "posts",
            "image_1" => "kota_tasikmalaya.png",
            "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "image_1" => "kota_tasikmalaya.png",
            "tittle" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
