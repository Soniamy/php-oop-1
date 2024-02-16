<div>
    <h1>MOVIE</h1>
</div>
<?php
include 'db.php';
include 'model.php';
$movies = [];
foreach ($moviesData as $movieData) {
    $movies[] = new Movie(...$movieData);
}
include 'movie_list.php';
?>
