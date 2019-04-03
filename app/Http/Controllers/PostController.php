<?php

namespace App\Http\Controllers;

use App\Post;
use Spatie\Tags\Tag;
use Illuminate\Http\Request;

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
        $tags = Tag::getWithType('post-tags');

        return view('blog.index', compact('posts', 'tags'));
    }

    public function byTag(string $slug)
    {
        $currentLocale = l10n()->getLocale();
        $posts = Post::withAnyTags([$slug], 'post-tags')->get();
        $tags = Tag::getWithType('post-tags');

        return view('blog.index', compact('posts', 'tags'));
    }

    public function search(Request $request)
    {
        $currentLocale = l10n()->getLocale();
        $keyword = $request->input('q');
        $posts = Post::where(function ($query) use ($currentLocale,$keyword) {
            $query->where('title->'.$currentLocale, 'like', '%'.$keyword.'%')
           ->orWhere('summary->'.$currentLocale, 'like', '%'.$keyword.'%');
        })->get();
        $tags = Tag::getWithType('post-tags');

        return view('blog.index', compact('posts', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)
    {
        $currentLocale = l10n()->getLocale();
        $post = Post::where('slug->'.$currentLocale, $slug)->firstOrFail();
        $tags = Tag::getWithType('post-tags');

        return view('blog.post', compact('post', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
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
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
