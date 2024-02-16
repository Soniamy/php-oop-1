<?php
class Movie
{
    public $title;
    public $genre;

    function __construct($_title , $_genre )
    {
        $this->title = $_title;
        $this->genre = $_genre; 
    }
    function get_title()
    {
        return $this->title;
    }

    function get_genre()
    {

        return $this->genre;
    }
}
$movie = new Movie("Fantastic Beasts and Where to Find Them", "Fantasy");
$movie->genre = "Fantasy"; 
 echo $movie->get_title().':';  
 echo $movie->get_genre().'<br>'; 
 $movie = new Movie("The Mask", "Commedy");
$movie->genre = "Commedy"; 
 echo $movie->get_title() . ':'; 
 echo $movie->get_genre().'<br>';
  $movie = new Movie("Matrix","Fantasy");
$movie->genre = "Fantasy"; 
 echo $movie->get_title().':';  
 echo $movie->get_genre().'<br>'; 
   $movie = new Movie("The Theory of Everything","Romantic");
$movie->genre = "Romantic"; 
 echo $movie->get_title().':';  
 echo $movie->get_genre().'<br>'; 



 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Movie</title>
</head>
<body>
    <h1>
        Ciao
    </h1> 
</body>
</html>