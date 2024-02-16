<?php
class Movie
{
    public $title;
    public $genre;

    function __construct($_title ,  ...$_genre )
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
    public function toArray()
    {
        return array_merge([$this->title], $this->genre);
    }
}