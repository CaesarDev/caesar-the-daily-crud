<!doctype html>

<title>Single Post</title>
<link rel="stylesheet" href="/app.css">

<body>
    <article>
        <h1><?= $post->title; ?></h1>

        <div>
            <?= $post->body; ?>
        </div>
    </article>

    <a class="back-button" href="/">Go Back</a>
</body>
