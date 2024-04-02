<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<?php

/**
 * this class defines a single movie
 */
class Movie {

    public $title;
    public $year;
    public $runtime;
    public $score;
    
    /**
     * __construct
     *
     * @param  string $_title
     * @param  int $_year
     * @param  string $_runtime
     * @param  int $_score
     */
    function __construct($_title, $_year, $_runtime, $_score)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->runtime = $_runtime;
        $this->score = $_score;
    }

    public function getFullData(){
        return $this->title . ' (' . $this->year . '), ' . $this->runtime . ', Score: ' . $this->score;
    }

}

$movies = [
    new Movie('Dune: Part Two', 2024, '2h 46m', 93),
    new Movie('Madame Web', 2024, '1h 56m', 12),
    new Movie('Twilight', 2008, '2h 1m', 49),
    new Movie('Star Wars: The Last Jedi', 2017, '2h 32m', 91),
    new Movie('The Lord Of The Rings', 1978, '2h 11m', 49),
];

// var_dump($movies);


?>



<body data-bs-theme="dark">

    <div class="container">
        <h1>Movies</h1>
        <ul>
            <?php 
                foreach($movies as $movie){
                    echo "<li>" . $movie->getFullData() . "</li>";
                }
            ?>
        </ul>
    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>