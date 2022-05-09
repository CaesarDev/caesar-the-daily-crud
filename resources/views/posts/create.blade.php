<form method="POST">
    <link rel="stylesheet" href="/app.css">
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
    <input class="type" type="submit" value="Save post">
    <a class="back-button" href="/">Go Back</a>
</form>

