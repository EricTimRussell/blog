<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>

    <?php
    $books = [
        [
            'name' => 'LOTR',
            'author' => 'Tolkein',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'The Hobbit',
            'author' => 'Tolkein',
            'purchaseUrl' => 'http://example.com'
        ]
    ];
    ?>

    <h1>
        <!-- short hand foreach loop -->
        <?php foreach ($books as $book) : ?>
            <!-- loop over using key value pairs -->
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </h1>


    <!-- iterate over each post -->
    <?php foreach ($posts as $post) : ?>
        <article>
            <?= $post; ?>
        </article>
    <?php endforeach; ?>
</body>