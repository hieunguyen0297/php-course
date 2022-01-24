<?php
/**
 * Author: Hieu Nguyen
 * Date: 1/21/2022
 * File: movie.class.php
 * Description: Create movie class.It defines details of a movie including the title,
rating, release date, director, description, and the image file name.
 */

class Movie{
    private $id, $title, $rating, $release_date, $director, $image, $description;

    //create movie class constructor
    public function __construct($title, $rating, $release_date, $director, $image, $description)
    {
        $this->title = $title;
        $this->rating = $rating;
        $this->release_date = $release_date;
        $this->director = $director;
        $this->image = $image;
        $this->description = $description;
    }

    //get methods to return movie details
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function getReleaseDate()
    {
        return $this->release_date;
    }

    public function getDirector()
    {
        return $this->director;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getDescription()
    {
        return $this->description;
    }

    //setter for id
    public function setId($id)
    {
        $this->id = $id;
    }



}
