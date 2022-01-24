<?php
/**
 * Author: Hieu Nguyen
 * Date: 1/21/2022
 * File: list_movie.php
 * Description: This script file displays all movies by calling the list_movie() method of a MovieManager object and
then the display() method of an ListMovie object.
 */
require_once 'classes/list_movie.class.php';
require_once 'classes/movie_manager.class.php';

$movie_manager = MovieManager::getMovieManager();

$movies = $movie_manager->list_movie();

//handle errors if the last query failed
if (!$movies) {
    $message = "There was a problem displaying movies.";
    header("Location: show_error.php?eMsg=$message");
    exit();
}

//display all movies
$view = new ListMovie();
$view->display($movies);