<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>

    <?php

    $name = "Dark Matter";
    $read = true;


    if ($read) {
        $message = "You have read $name";
    } else {
        $message = "You have not read $name";
    }
    ?>

    <h1>
        <!-- Long hand way to display html -->
        <!-- <?php echo $message; ?> -->

        <!-- Short hand way to display html -->
        <?= $message ?>
    </h1>


    <!-- iterate over each post -->
    <?php foreach ($posts as $post) : ?>
        <article>
            <?= $post; ?>
        </article>
    <?php endforeach; ?>
</body>