<?php
/**
 * Author: Hieu Nguyen
 * Date: 1/22/2022
 * File: view_movie.php
 * Description: This script file displays movie details by calling the view_movie() method of a MovieManager object
and then the display() method of a ViewMovie object.
 */

require_once 'classes/view_movie.class.php';
require_once 'classes/movie_manager.class.php';

//get movie id from a query string variable
if (!isset($_GET['id']) || !is_int(intval($_GET['id']))) {
    //handle errors
    $message = "Movie id is invalid.";
    header("Location: show_error.php?eMsg=$message");
    exit();
}
$id = intval($_GET['id']);

//get movie object
$movie_manager = MovieManager::getMovieManager();
$movie = $movie_manager->view_movie($id);

//handle errors if the last query failed
if (!$movie) {
    $message = "There was a problem displaying the movie.";
    header("Location: show_error.php?eMsg=$message");
    exit();
}

//display movie details
$view = new ViewMovie();
$view->display($movie);