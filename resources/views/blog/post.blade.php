@extends('blog.layouts.blog')

@push('seo_title')
{{$post->seo->title}}
@endpush

@push('seo_description')
{{$post->seo->description}}
@endpush

@section('blog-content')

    <!-- Post Content Column -->
    <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{ $post->title }}</h1>

        <!-- Author -->
        <p class="lead">
            {{__('by')}}
            <a href="#">{{ $post->user->name  }}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>{{ __('Posted on :date',['date' => $post->published_at->format( __('F d, Y \a\t h:i A'))]) }}</p>

        <hr>

        {!! $post->text_as_html !!}



    </div>
@stop
