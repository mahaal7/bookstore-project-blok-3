<?php
// Databaseverbinding
require 'database.php';

// Alle boeken ophalen
$result = $pdo->query("SELECT * FROM boek");
$books = array();
while ($book = $result->fetch(PDO::FETCH_ASSOC)) {
    $books[] = $book;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bookstore</title>
    <link rel="stylesheet" href="styl.css">
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