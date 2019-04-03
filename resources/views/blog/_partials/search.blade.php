<!-- Search Widget -->
<div class="card my-4">
    <h5 class="card-header">Search</h5>
    <div class="card-body">
        <form method="get" action="{{ l10n()->route('posts.search', ['q' => request('q')]) }}">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." name="q">
                <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit">Go!</button>
              </span>
            </div>
        </form>
    </div>
</div>
