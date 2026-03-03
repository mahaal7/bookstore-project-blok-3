<?php
// Databaseverbinding laden
require 'database.php';

// ID van het boek ophalen uit de URL
$id = $_GET['id'] ?? 0;

// SQL query maken om één boek op te halen
$sql = "SELECT * FROM boek WHERE id = $id";
$stmt = $pdo->query($sql);
$book = $stmt->fetch(PDO::FETCH_ASSOC);

// Controleren of het boek bestaat
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
        /* Hele pagina centreren */
        body {
            font-family: Arial;
            margin: 0;
            background-color: #f5f5f5;
        }

        /* Container in het midden */
        .detail-container {
            max-width: 800px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        img {
            display: block;
            margin: 20px 0;
        }

        a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>

<body>

<div class="detail-container">

    <h1><?= $book['titel'] ?></h1>

    <img src="<?= $book['thumbnail_url'] ?>" width="200">

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
    <a href="index.php">⬅ Terug naar overzicht</a>

</div>

</body>
</html>