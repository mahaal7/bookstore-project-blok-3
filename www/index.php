<?php

$host = "mariadb";
$dbname = "bookstore";
$username = "root";
$password = "password";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h1>Boeken Overzicht</h1>";
    echo "
<form method='GET' style='margin-bottom:20px;'>
<select name='genre' onchange='this.form.submit()'>
<option value=''>Alle genres</option>
<option value='Fantasy'>Fantasy</option>
<option value='Fictie'>Fictie</option>
<option value='Thriller'>Thriller</option>
<option value='Non-Fictie'>Non-Fictie</option>
</select>
</form>
";
    $genre = $_GET['genre'] ?? '';
    $sql = "SELECT * FROM boek";

if ($genre != '') {
    $sql .= " WHERE genre = '$genre'";
}

$stmt = $pdo->query($sql);
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<style>
body { font-family: Arial; }
.container { display: flex; flex-wrap: wrap; gap: 20px; }
.card {
    width: 220px;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 8px;
}
.card img { width: 100%; height: 250px; object-fit: cover; }
.price { font-weight: bold; color: green; }
</style>";

echo "<div class='container'>";

foreach ($books as $book) {
    echo "<div class='card'>";
    echo "<h3>" . $book['titel'] . "</h3>";
    echo "<p>" . $book['auteur'] . "</p>";
    echo "<p class='price'>€" . $book['prijs'] . "</p>";
    echo "<img src='" . $book['thumbnail_url'] . "'>";
    echo "</div>";
}

echo "</div>"; {
        echo "<div style='margin-bottom:20px; border:1px solid #ccc; padding:10px;'>";
        echo "<h3>" . $book['titel'] . "</h3>";
        echo "<p><strong>Auteur:</strong> " . $book['auteur'] . "</p>";
        echo "<p><strong>Prijs:</strong> €" . $book['prijs'] . "</p>";
        echo "<img src='" . $book['thumbnail_url'] . "' width='100'>";
        echo "</div>";
    }

} catch (PDOException $e) {
    echo "Database fout: " . $e->getMessage();
}