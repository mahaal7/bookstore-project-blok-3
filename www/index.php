<?php
// Databaseverbinding laden
require 'database.php';

// SQL query maken om alle boeken op te halen
$sql = "SELECT * FROM boek";

// Query uitvoeren
$stmt = $pdo->query($sql);

// Resultaten opslaan in een array
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bookstore</title>

    <style>
        /* Pagina in het midden zetten */
        body {
            font-family: Arial;
            max-width: 1200px;   /* maximale breedte */
            margin: 0 auto;      /* centreren */
            padding: 20px;
        }

        /* Container van alle boeken */
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        /* Boek kaart */
        .card {
            width: 230px;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 8px;
        }

        /* Afbeelding */
        .card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        /* Prijs */
        .price {
            font-weight: bold;
            color: green;
        }

        /* Link styling */
        a {
            text-decoration: none;
            color: blue;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

<h1>Boeken Overzicht</h1>

<div class="container">
    <?php foreach ($books as $book): ?>
        <div class="card">

            <h3>
                <a href="detail.php?id=<?= $book['id'] ?>">
                    <?= $book['titel'] ?>
                </a>
            </h3>

            <p><?= $book['auteur'] ?></p>

            <p class="price">€<?= $book['prijs'] ?></p>

            <img src="<?= $book['thumbnail_url'] ?>">

        </div>
    <?php endforeach; ?>
</div>

</body>
</html>