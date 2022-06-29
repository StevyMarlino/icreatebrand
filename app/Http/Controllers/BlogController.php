<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
          'posts' => \TCG\Voyager\Models\Post::where('status','PUBLISHED')->orderBy('created_at','desc')->paginate(8)
        ];
        return view('blog.index',$data);
    }

    public function details($slug)
    {
        $data = [
            'details' => \TCG\Voyager\Models\Post::where('slug', $slug)->get()[0]
        ];
        return view('blog.details',$data);
    }
}
