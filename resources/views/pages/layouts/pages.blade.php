@extends('layouts.site')

@section('content')
    <div class="container">

        <div class="row">
            <div class="my-4">
                @yield('h1','<h1>Default H1</h1>')
                @yield('page_content', 'Default Content')
            </div>
        </div>
    </div>


@stop