<form action="{{ route('search') }}" method="POST">
    <link rel="stylesheet" href="/app.css">
    @csrf
    <input type="text" name="search" required/>
    <button type="submit">Search</button>
</form>
<a class="back-button" href="/">Go Back</a>
