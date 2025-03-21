<?php
require_once "./models/Movie.php";
require_once "./db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films x Films</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mb-3">Films x Films</h1>
    <h2 class="text-center mb-4">Benvenuto nel tuo spazio cinema</h2>


    <div class="container">
        <div class="row d-flex flex-wrap">
            <?php foreach ($movies as $movie) { ?>
                <div class="col text-center">
                    <div class="card my-2 py-2" style="width: 18rem;">
                        <h4 class="card-title"><?php echo $movie->film_name; ?></h4>
                        <p class="card-text"><?php echo $movie->director_name; ?> </p>
                        <p class="card-text"><?php foreach ($movie->genre->genre as $single_genre) {
                                                    echo "<span>" . $single_genre . " </span>";
                                                } ?></p>
                        <p><?php echo "Voto: " . $movie->personal_vote . "/5" ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    </div>
</body>

</html>