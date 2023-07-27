<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
    <!-- iterate over each post -->
    <?php foreach ($posts as $post) : ?>
        <article>
            <?= $post; ?>
        </article>
    <?php endforeach; ?>
</body>