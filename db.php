<?php

$movies = [
    new Movie('Dune: Part Two', 2024, '2h 46m', 93),
    new Movie('Madame Web', 2024, '1h 56m', 12),
    new Movie('Twilight', 2008, '2h 1m', 49),
    new Movie('Star Wars: The Last Jedi', 2017, '2h 32m', 91),
    new Movie('The Lord Of The Rings', 1978, '2h 11m', 49),
];

array_push($movies[0]->genres, 'adventure', 'drama', 'sci-fi');
array_push($movies[1]->genres, 'action', 'adventure');
array_push($movies[2]->genres, 'fantasy', 'romance');
array_push($movies[3]->genres, 'action', 'adventure', 'fantasy', 'sci-fi');

$directors = [
    new Director('Denis ', 'Villeneuve', 'Canadian'),
    new Director('S.J.', 'Clarkson', 'British'),
    new Director('Catherine', 'Hardwicke', 'American'),
    new Director('Rian ', 'Johnson', 'American'),
    new Director('Ralph', 'Bakshi', 'American'),
];

foreach($movies as $key=>$movie){
    $movie->director = $directors[$key];
}