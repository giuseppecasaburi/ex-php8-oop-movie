<?php

$shutter_island = new Movie("Shutter Island", "Martin Scorsese", 3, new Genre(["Thriller psicologico", "Poliziesco"]));
$inception = new Movie("Inception", "Christopher Nolan", 5, new Genre(["Thriller psicologico", "Drammatico"]));
$interstellar = new Movie("Interstellar", "Christopher Nolan", 5, new Genre(["Fantascienza", "Drammatico"]));
$the_prestige = new Movie("The Prestige", "Christopher Nolan", 4, new Genre(["Drammatico", "Thriller"]));
$django_unchained = new Movie("Django Unchained", "Quentin Tarantino", 5, new Genre(["Western", "Drammatico"]));
$pulp_fiction = new Movie("Pulp Fiction", "Quentin Tarantino", 5, new Genre(["Crime", "Drammatico"]));
$parasite = new Movie("Parasite", "Bong Joon-ho", 5, new Genre(["Drammatico", "Thriller"]));
$the_godfather = new Movie("The Godfather", "Francis Ford Coppola", 5, new Genre(["Crime", "Drammatico"]));
$forrest_gump = new Movie("Forrest Gump", "Robert Zemeckis", 5, new Genre(["Drammatico", "Commedia"]));
$the_dark_knight = new Movie("The Dark Knight", "Christopher Nolan", 5, new Genre(["Azione", "Thriller"]));
$the_wolf_of_wall_street = new Movie("The Wolf of wall street", "Martin Scorsese", 5, new Genre(["Commedia", "Thriller", "True Story"]));


$movies = [$shutter_island, $inception, $interstellar, $the_prestige, $django_unchained, $pulp_fiction, $parasite, $the_godfather, $forrest_gump, $the_dark_knight, $the_wolf_of_wall_street];

?>