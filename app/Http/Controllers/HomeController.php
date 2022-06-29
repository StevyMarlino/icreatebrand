<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'posts' => \TCG\Voyager\Models\Post::where('status','PUBLISHED')->orderBy('created_at','desc')->paginate(3)
        ];
        return view('icreate.index',$data);
    }

    public function contact()
    {
        return view('icreate.contact');
    }
}
