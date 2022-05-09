<link rel="stylesheet" href="/app.css"">
<link rel="stylesheet" href="/app.js"">
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>


@if($unpublished)
    <a href="{{ route('posts.index') }}" class="voteButton" role="button">published</a>
@else
    <a href="{{ route('posts.all') }}" class="voteButton" role="button">unpublished</a>
@endif


@forelse($posts as $post)
<h2>
    <a href="/posts/<?= $post->id; ?>"><?= $post->title; ?></a>
</h2>
    <p>{{ $post->body }}</p>
<a href="{{ route('votes.store', $post) }}" class="voteButton" role="button">Vote</a>
@empty
    <p>No posts found</p>
@endforelse

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


<script>
    //Get the button:
    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 20; // For Chrome, Firefox, IE and Opera
    }
</script>
