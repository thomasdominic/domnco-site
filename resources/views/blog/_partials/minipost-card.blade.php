<div class="card my-1" style="">
    <div class="card-body">
        <h2 class="card-title">{{$post->title}}</h2>
        <h6 class="card-subtitle mb-2 text-muted">
            {{ __('Posted by') }}
            <a href="#">{{ $post->user->name  }}</a>
            {{ __('on :date',['date' => $post->published_at->format( __('F d, Y \a\t h:i A'))]) }}</h6>
        <p class="card-text">{!! $post->summary_as_html !!}</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>
</div>