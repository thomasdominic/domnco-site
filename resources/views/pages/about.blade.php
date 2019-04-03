@extends('layouts.site')

@section('content')

    <div class="my-4">Test</div>
    {{dd($page->seo->description)}}

@stop