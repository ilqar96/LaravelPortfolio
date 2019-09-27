<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Lang;

class PostController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
//        $posts = Post::with(['category','user'])->orderBy('created_at','desc')->get();
        return view('backend.posts.index',compact('posts'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * @param PostRequest $postRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostRequest $postRequest)
    {
        $imageName =  Post::storeImage($postRequest);

        Post::create([
            'image' => $imageName,
            'title' => $postRequest->title,
            'content' => $postRequest->post_content,
            'user_id' => $postRequest->user,
            'category_id' => $postRequest->category,
        ]);

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
        if(file_exists($post->imagePath()) && $post->image!='default.png' ){
            unlink($post->publicImagePath());
        }
        $post->delete();

        return back()->with('success',Lang::get('post.deleted'));
    }
}
