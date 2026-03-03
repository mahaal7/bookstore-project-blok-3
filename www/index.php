<?php
// Databaseverbinding
require 'database.php';

// Alle boeken ophalen
$books = $pdo->query("SELECT * FROM boek")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bookstore</title>

    <style>
        body {
            font-family: Arial;
            background-color: #0e223c;
            text-align: center;
            margin: 0;
            padding: 40px 20px;
        }

        h1 {
            margin-bottom: 40px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .book {
            background: white;
            padding: 15px;
            width: 200px;
            border-radius: 6px;
        }

        .book img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            margin-top: 10px;
        }

        a {
            text-decoration: none;
            color: #2c3e50;
        }

        a:hover {
            color: #007BFF;
        }
    </style>
</head>

<body>

<h1>Boeken Overzicht</h1>

<div class="container">
    <?php foreach ($books as $book): ?>
        <div class="book">

            <!-- Titel met link -->
            <h3>
                <a href="detail.php?id=<?= $book['id'] ?>">
                    <?= $book['titel'] ?>
                </a>
            </h3>

            <!-- Auteur -->
            <p><?= $book['auteur'] ?></p>

            <!-- Thumbnail -->
            <img src="<?= $book['thumbnail_url'] ?>">

        </div>
    <?php endforeach; ?>
</div>

</body>
</html>