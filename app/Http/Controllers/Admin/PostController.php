<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Lang;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('backend.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $postRequest)
    {
        if($postRequest->hasFile('image')){

            $imageName = time().'.'.$postRequest->image->getClientOriginalExtension();

            $postRequest->image->move(public_path('uploads/posts/'), $imageName);

//            $image = Image::make(public_path('uploads/posts/' . $imageName))->fit(100,100);
//            $image->save();
            $postRequest->image = $imageName;
        }else{
            $postRequest->image = 'default.png';
        }

//        dd('test');

        $post = new Post();
//        $post->image = $imageName;
        $post->title = $postRequest->title;
        $post->user_id = $postRequest->user;
        $post->catgory_id = $postRequest->category;

        $post->save();

//        Post::create([
//           'image'=>$imageName,
//           'title'=>$postRequest->title,
//        ]);


        return back()->with('success',Lang::get('post.created'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
