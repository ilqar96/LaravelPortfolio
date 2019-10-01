<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.pages.home');
    }

    public function resume()
    {
        return view('frontend.pages.resume');
    }


    public function portfolio()
    {
        return view('frontend.pages.portfolio');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function blog()
    {
        $posts = Post::with('user','category')->orderBy('created_at','desc')->paginate(6);
        return view('frontend.pages.blog',compact('posts'));
    }


    public function singleBlog($id)
    {
        $post = Post::findOrFail($id);
        return view('frontend.pages.single_blog',compact('post'));
    }


}
