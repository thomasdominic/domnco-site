@extends('layouts.site')

@section('content')

    <div class="container">

        <div class="row">

            @yield('blog-content')

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                @include('blog._partials.search')

                @include('blog._partials.tags',['nb_column' => 2])

                @include('blog._partials.widget')


            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@stop