<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>

    <?php
    $books = [
        "LOTR",
        "The Hobbit",
        "The Similarion"
    ];
    ?>

    <h1>
        <!-- short hand foreach loop -->
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </h1>


    <!-- iterate over each post -->
    <?php foreach ($posts as $post) : ?>
        <article>
            <?= $post; ?>
        </article>
    <?php endforeach; ?>
</body>