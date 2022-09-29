<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            display:grid;
            place-items:center;
            /* height: 100vh; */
            margin:0;
            font-family: sans-serif;
        }
        img {
            width: 400px;
        }
    </style>
</head>
<body>

    <h3>
        Recommended Books
    </h3>

    <?php
        $books = [
            [
                "name" => "Do Androids Dream of Electric Sheep?",
                "author" => "Philip K. Dick",
                "releaseYear" => 1968,
                "purchaseUrl" => "https://www.google.com",
            ],
            [
                "name" => "Project Hail Mary",
                "author" => "Andy Weir",
                "releaseYear" => 2021,
                "purchaseUrl" => "https://www.google.com",
            ],
            [
                "name" => "Pet Sematary",
                "author" => "Stephen King",
                "releaseYear" => 1983,
                "purchaseUrl" => "https://www.google.com",
            ],
            [
                "name" => "The Truth About Keeping Secrets",
                "author" => "Savannah Brown",
                "releaseYear" => 2019,
                "purchaseUrl" => "https://www.google.com",
            ],
            [
                "name" => "To Kill a Mockingbird",
                "author" => "Harper Lee",
                "releaseYear" => 1960,
                "purchaseUrl" => "https://www.google.com",
            ],
        ];
    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
    <li>
        <a href=" <?= $book ['purchaseUrl']; ?>">
            <?= $book["name"]; ?> (<?= $book["releaseYear"]; ?>)
        </a>
    </li>

        <?php endforeach; ?>
    </ul>

    <?php
    echo "<center><img src='https://i.pinimg.com/736x/b2/39/17/b239173feb16bb689c990914d628fbde.jpg'></center>";
    ?>

<h2>Navigation</h2>

<?php
    $navigation = [
        [
            "name" => "Home",
            "navigationUrl" => "/"
        ],
        [
            "name" => "First PHP Tag",
            "navigationUrl" => "http://localhost:8888/firstPhpTag.php"
        ],
        [
            "name" => "Variables",
            "navigationUrl" => "http://localhost:8888/variables.php"
        ],
        [
            "name" => "Conditions and Booleans",
            "navigationUrl" => "http://localhost:8888/conditionsAndBooleans.php"
        ],
        [
            "name" => "Hello World",
            "navigationUrl" => "http://localhost:8888/helloWorld.php"
        ],
        [
            "name" => "Arrays",
            "navigationUrl" => "http://localhost:8888/arrays.php"
        ],
        [
            "name" => "Associate Arrays",
            "navigationUrl" => "http://localhost:8888/associateArrays.php"
        ]
    ];
    ?>
<ul>
    <?php foreach ($navigation as $navigation) : ?>
        <li>
            <a href=" <?= $navigation ['navigationUrl']; ?>">
            <?= $navigation["name"]; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
