<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index(Post $post)
    {
        return $post::paginate(10);
    }

    public function show(Post $post)
    {
       return $post;
    }
}
