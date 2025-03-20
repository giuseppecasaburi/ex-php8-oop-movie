<?php
require_once "./models/Movie.php";

$shutter_island = new Movie("Shutter Island", "Martin Scorsese", 3, new Genre(["Thriller psicologico", "Poliziesco"]));
$inception = new Movie("Inception", "Christopher Nolan", 5, new Genre(["Thriller psicologico", "Drammatico"]));
var_dump($shutter_island->genre);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films x Films</title>
</head>

<body>
    <h1>Films x Films</h1>
    <h2>Benvenuto nel tuo spazio cinema</h2>

    <div class="card">
        <h4><?php $inception->getFilm($inception); ?></h4>
    </div>
    <div class="card">
        <h4><?php $shutter_island->getFilm($shutter_island); ?></h4>
    </div>
</body>

</html>