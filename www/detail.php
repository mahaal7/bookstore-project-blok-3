<?php
require 'database.php';

$id = $_GET['id'] ?? 0;

$book = $pdo->query("SELECT * FROM boek WHERE id = $id")->fetch(PDO::FETCH_ASSOC);

if (!$book) {
    echo "Boek niet gevonden.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detailpagina</title>

    <style>
        body {
            font-family: Arial;
            background:     #0e223c; 
            text-align: center;
            margin: 0;
            padding: 40px 20px;
        }

        .detail {
            background: white;
            max-width: 600px;
            margin: 0 auto;
            padding: 25px;
            border-radius: 6px;
        }

        img {
            width: 200px;
            margin: 20px 0;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }
    </style>
</head>

<body>

<div class="detail">

    <h1><?= $book['titel'] ?></h1>

    <img src="<?= $book['thumbnail_url'] ?>">

    <p><strong>Auteur:</strong> <?= $book['auteur'] ?></p>
    <p><strong>Genre:</strong> <?= $book['genre'] ?></p>
    <p><strong>Prijs:</strong> €<?= $book['prijs'] ?></p>
    <p><strong>Uitgever:</strong> <?= $book['uitgever'] ?></p>
    <p><strong>Publicatiejaar:</strong> <?= $book['publicatiejaar'] ?></p>
    <p><strong>ISBN:</strong> <?= $book['isbn'] ?></p>
    <p><strong>Pagina’s:</strong> <?= $book['paginas'] ?></p>
    <p><strong>Voorraad:</strong> <?= $book['voorraad'] ?></p>

    <p><?= $book['beschrijving'] ?></p>

    <br>
    <a href="index.php">← Terug naar overzicht</a>

</div>

</body>
</html>