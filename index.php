<?php

// class and data array
require './models/Movie.php';
require './db.php';

// html head
require './partials/head.php';

?>

<!-- page content -->
<div class="container pt-5">
    <h1>Movies</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
            foreach($movies as $movie){
                echo '
                <div class="col">
                    <div class="card h-100 position-relative">
                        <div class="card-body">
                            <h5 class="card-title">' . $movie->title . '</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">' . $movie->getSubTitle() . '</h6>';
                            
                            foreach($movie->genres as $genre){
                                echo '<span class="badge text-bg-light mx-1">' . $genre . '</span>';
                            }

                        echo '</div>';
                        
                        if($movie->score > 60){
                            echo '
                            <span class="badge text-bg-success position-absolute top-0 end-0 m-3">Recommended</span>';
                        }

                    echo '</div>
                </div>
                ';
            }
        ?>
    </div>
</div>

<!-- html foot -->
<?php require './partials/foot.php'; ?>