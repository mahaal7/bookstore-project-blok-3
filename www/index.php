<?php
require 'database.php';

$result = $pdo->query("SELECT * FROM boek");
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
        <?php foreach ($result as $book): ?>
            <div class="book">
                <h3>
                    <a href="detail.php?id=<?= $book['id'] ?>">
                        <?= $book['titel'] ?>
                    </a>
                </h3>
                <p><?= $book['auteur'] ?></p>
                <img src="<?= $book['thumbnail_url'] ?>">
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>