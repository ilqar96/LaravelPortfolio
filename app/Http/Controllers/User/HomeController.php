<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

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
        return view('frontend.pages.blog');
    }


    public function singleBlog()
    {
        return view('frontend.pages.single_blog');
    }


}
