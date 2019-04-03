<!-- Categories Widget -->
<div class="card my-4">
    <h5 class="card-header">Categories</h5>

    @foreach ($tags as $tag)
            @push('list'.($loop->iteration % ($nb_column ?? 2)))
                <li>
                    <strong><a href="{{ l10n()->route('posts.bytag', ['slug' => $tag->slug]) }}">{{$tag->name}}</a></strong>
                </li>
            @endpush

    @endforeach

    <div class="card-body">
        <div class="row">
            @for ($i = (($nb_column ?? 2)-1); $i >= 0; $i--)
                <div class="col-lg-{{12/($nb_column ?? 2)}}">
                    <ul class="list-unstyled mb-0">
                        @stack('list'.$i)
                    </ul>
                </div>
            @endfor
        </div>
    </div>
</div>