<?php
require_once "./models/Genre.php";

// Classe movie
class Movie {

    // Variabili di istanza
    public $film_name;
    public $director_name;
    public $personal_vote;
    public $genre;

    // Costruttore
    public function __construct(string $_film_name, string $_director_name, int $_personal_vote, Genre $_genre) {
        $this->film_name = $_film_name;
        $this->director_name = $_director_name;
        $this->personal_vote = $_personal_vote;
        $this->genre = $_genre;
    }

    // Metodi
    public function getFilm($nome_film) {

        // implode accetta un carattere o valore da intervallare tra un elemento e un altro di un array e poi l'array da convertire in stringa e restituisce una stringa
        $array_to_string = implode(", ", $this->genre->genre);

        echo $nome_film->film_name ."<br>";
        echo $nome_film->director_name ."<br>";
        echo $nome_film->personal_vote ."<br>";
        echo $array_to_string;
    }
}
