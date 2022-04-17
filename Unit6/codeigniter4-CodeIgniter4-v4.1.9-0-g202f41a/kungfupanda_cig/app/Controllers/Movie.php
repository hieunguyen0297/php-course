<?php
/**
 * Author: Hieu Nguyen
 * Date: 4/15/2022
 * File: Movie.php
 * Description:
 */

namespace App\Controllers;
use App\Models\MovieModel;
class Movie extends BaseController {
    private $movie_model;  //an instance of the MovieModel class
    public function __construct() {
        $this->movie_model = new MovieModel();
    }

    // The index method handles the request for listing all movies.
    public function index() {
        //pass the request to the movie model to get all movies from the database
        $movies = $this->movie_model->list_movie();

        //handle errors
        if ($movies === false) {
            $message = "There was a problem displaying movies.";
            $this->error($message);
            return;
        } else if ($movies === 0) {
            $message = "There was no movie found.";
            $this->error($message);
            return;
        }

        //add dynamic data to the view
        $data['movies'] = $movies;
        $data['page_title'] = "List All Movies";

        //load three views in sequence: header, movie index, and footer
        echo view('header', $data);
        echo view('movie/index/index', $data);
        echo view('footer');
    }



    //display details of a specific movie
    public function detail($id) {
        //retrieve the specific movie
        $movie = $this->movie_model->view_movie($id);

        //handle errors
        if ($movie === false) {
            $message = "There was a problem displaying movie details.";
            $this->error($message);
            return;
        } else if ($movie === 0) {
            $message = "There was no movie found.";
            $this->error($message);
            return;
        }

        //add dynamic data to the view
        $data['movie'] = $movie;
        $data['page_title'] = "View Movie Details";
        $data['confirm'] = "";

        //load three views
        echo view('header', $data);
        echo view('movie/detail/detail', $data);
        echo view('footer');
    }



    //The error method displays an error message
    public function error($message) {

        //add dynamic data to the view
        $data['page_title'] = "Error";
        $data['message'] = $message;

        //load views
        echo view('header', $data);
        echo view('movie/error/error', $data);
        echo view('footer');
    }




}