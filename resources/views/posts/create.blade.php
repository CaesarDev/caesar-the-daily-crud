<form method="POST">
    @csrf
    <div>
        <strong>Title:</strong><br>
        <input type="text" name="title">
    </div>
    <br><br>
    <div>
        <strong>Body:</strong><br>
        <textarea name="body" cols="62" rows="9"></textarea>
    </div>
    <br><br>
    <input type="submit" value="Save post">
</form>
