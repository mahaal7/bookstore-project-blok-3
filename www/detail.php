<?php
require 'database.php';

$id = $_GET['id'] ?? 0;
$result = $pdo->query("SELECT * FROM boek WHERE id = $id");

$found = false;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detailpagina</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<?php foreach ($result as $book): 
    $found = true;
?>
    <div class="detail">
        <h1><?= $book['titel'] ?></h1>
        <img src="<?= $book['thumbnail_url'] ?>">
        <p><strong>Auteur:</strong> <?= $book['auteur'] ?></p>
        <p><strong>Genre:</strong> <?= $book['genre'] ?></p>
        <p><strong>Prijs:</strong> €<?= $book['prijs'] ?></p>
        <p><strong>Uitgever:</strong> <?= $book['uitgever'] ?></p>
        <p><strong>Publicatiejaar:</strong> <?= $book['publicatiejaar'] ?></p>
        <p><strong>ISBN:</strong> <?= $book['isbn'] ?></p>
        <p><strong>Pagina's:</strong> <?= $book['paginas'] ?></p>
        <p><strong>Voorraad:</strong> <?= $book['voorraad'] ?></p>
        <p><?= $book['beschrijving'] ?></p>
        <br>
        <a href="index.php">← Terug naar overzicht</a>
    </div>
<?php endforeach; ?>

<?php
if (!$found) {
    echo "Boek niet gevonden.";
}
?>

</body>
</html>