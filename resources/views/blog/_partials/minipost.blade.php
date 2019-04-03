<!-- Title -->
<h2><a href="{{ l10n()->route('posts.show', ['slug' => $post->slug]) }}">{{$post->title}}</a></h2>
<p>
    {{__('Posted by')}}
    <a href="#">{{ $post->user->name  }}</a>
    {{ __('on :date',['date' => $post->published_at->format( __('F d, Y \a\t h:i A'))]) }}


    @foreach ($post->tags as $tag)
        @if ($loop->first)
            <ul class="nav nav-pills nav-fill">
        @endif
            <li><a href="{{ l10n()->route('posts.bytag', ['slug' => $tag->slug]) }}" class="badge badge-light">{{ $tag->name }}</a></li>
        @if ($loop->last)
            </ul>
        @endif
    @endforeach

</p>
<p class="lead">
{!! $post->summary_as_html !!}
</p>
<hr>