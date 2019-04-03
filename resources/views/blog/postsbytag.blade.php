@extends('blog.layouts.blog')

@section('blog-content')

    <!-- Post Content Column -->
    <div class="col-lg-8 mt-5">

        <h1 class="mt-4">{{__('Posts tagged :tag',['tag' => $tag->name])}}</h1>

        @foreach ($posts as $post)
            @include('blog._partials.minipost', ['post' => $post])

        @endforeach



        <!-- Author -->




    </div>
@stop
