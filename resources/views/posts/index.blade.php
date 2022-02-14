@forelse($posts as $post)
<div style="margin-bottom:60px;max-width: 600px;">
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
</div>
@empty
    <p>No posts found</p>
@endforelse
