<form action="{{ route('search') }}" method="POST">
    @csrf
    <input type="text" name="search" required/>
    <button type="submit">Search</button>
</form> 