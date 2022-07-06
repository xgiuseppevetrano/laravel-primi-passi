<?php
    $links = [
        [
            "href" => "/doc",
            "text" => "Doc"
        ],
        [
            "href" => "/new-version",
            "text" => "New Version"
        ],
        [
            "href" => "/blog",
            "text" => "Blog"
        ],
        [
            "href" => "/learning",
            "text" => "Learning"
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Laravel</h1>
        <nav class="nav">
            <ul class="lists">
                <?php foreach ($links as $link) { ?>
                    <li class="lists__item"><a class="lists__link" href="<?= $link["href"] ?>"><?= $link["text"] ?></a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</body>
</html>