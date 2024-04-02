<?php

// class and data array
require './models/Movie.php';
require './db.php';

// html head
require './partials/head.php';

?>

<!-- page content -->
<div class="container">
    <h1>Movies</h1>
    <ul>
        <?php
        foreach ($movies as $movie) {
            echo "<li>" . $movie->getFullData();
            foreach ($movie->genres as $genre) {
                echo ", " . $genre;
            };
            echo "</li>";
        }
        ?>
    </ul>
</div>

<!-- html foot -->
<?php require './partials/foot.php'; ?>