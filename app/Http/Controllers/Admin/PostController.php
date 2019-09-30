<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class PostController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
//        $posts = Post::with(['category','user'])->orderBy('created_at','desc')->get();
        return view('backend.posts.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->authorize('create',Post::class);
        return view('backend.posts.create');
    }

    /**
     * @param PostRequest $postRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostRequest $postRequest)
    {
        $imageName =  Post::storeImage($postRequest);

        $post = Post::create([
            'image' => $imageName,
            'title' => $postRequest->title,
            'content' => $postRequest->post_content,
            'user_id' => $postRequest->user ?? Auth::user()->id,
            'category_id' => $postRequest->category,
        ]);


        $tags = $postRequest->tags;
        $tagIds = [];
        foreach ($tags as $tag) {
            $tag = strtolower(trim($tag));
            if ($tag == '') {
                continue;
            }
            $fTag = Tag::firstOrCreate( [ 'name' => $tag ] );

            $tagIds[] = $fTag->id;
        }
        $post->tags()->sync($tagIds);

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
        return view('backend.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('update',$post);

        return view('backend.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $postRequest, Post $post)
    {
        $imageName =  Post::storeImage($postRequest,$post->image);

        $post->update([
            'image' => $imageName,
            'title' => $postRequest->title,
            'content' => $postRequest->post_content,
            'user_id' => $postRequest->user,
            'category_id' => $postRequest->category,
        ]);

        return redirect()->route('admin.posts.index')->with('success',Lang::get('post.edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete',$post);

        if(file_exists($post->imagePath()) && $post->image!='default.png' ){
            unlink($post->publicImagePath());
        }
        $post->delete();

        return redirect()->route('admin.posts.index')->with('success',Lang::get('post.deleted'));
    }
}


// edit and store methods need tags
//$tagIds = [];
//
//foreach ($tags as $tag) {
//    $tag = trim($tag);
//    if ($tag == '') {
//        continue;
//    }
//    $fTag = Tag::firstOrCreate( [ 'title' => $tag, 'url' => $tag ] );
//
//    $tagIds[] = $fTag->id;
//}
//
//$place->tags()->sync($tagIds);
