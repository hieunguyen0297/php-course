<?php
/**
 * Author: Hieu Nguyen
 * Date: 1/29/2022
 * File: search_movie.php
 * Description: this file will implement the search function of the app.
 */

require_once 'classes/movie_manager.class.php';
require_once 'classes/search_movie.class.php';


//first, get the search term
$searchTerm = $_GET['query-terms'];

//get the movie based on the search term
$movie_manager = MovieManager::getMovieManager();
$movies = $movie_manager->search_movie($searchTerm);

//handle errors if the last query failed
if (!$movies) {
    //handle errors
    $message = "There was a problem displaying movies.";
    header("Location: show_error.php?eMsg=$message");
    exit();
}

//view movies
$viewSearchMovie = new SearchMovie();
$viewSearchMovie->display($searchTerm, $movies);

