@forelse($posts as $post)
    <div class="card mb-4">
        <img class="card-img-top" src="{{ asset('/images/'.$post->image) }}" alt="{{ $post->title }}">
        <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>
            <p class="card-text">{{ $post->body }}</p>
            <a href="{{ route('post_details',$post->slug) }}" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
            Posted on {{ date('M j, Y', strtotime($post->created_at)) }}
            <a class="float-right" href="{{ route('post.edit', $post->id) }}">Edit</a>
            <form id="delete-form-{{ $post->id }}" action="{{ route('post.destroy',$post->id) }}" method="POST" >
                @csrf
                @method('DELETE')
                <button class="float-right" type="submit" >Delete</button>
            </form>
        </div>
    </div>

@empty
    <div class="col-lg-12 col-md-12">
        <div class="card h-100">
            <div class="single-post post-style-1 p-2">
                <strong>No Post Found :(</strong>
            </div><!-- single-post -->
        </div><!-- card -->
    </div><!-- col-lg-4 col-md-6 -->
@endforelse
