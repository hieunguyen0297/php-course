<?php
/**
 * Author: Hieu Nguyen
 * Date: 4/15/2022
 * File: MovieModel.php
 * Description:
 */

namespace App\Models;
use CodeIgniter\Model;
class MovieModel extends Model {
    private $tblMovie;
    private $tblMovieRating;

    public function __construct() {
        $this->tblMovie = "movies";
        $this->tblMovieRating = "movie_ratings";
        $this->db = db_connect();

        //Escapes special characters in a string for use in an SQL statement. This stops SQL inject in POST vars.
        //The escape function also automatically adds single quotes around the data.
        foreach ($_POST as $key => $value) {
            $_POST[$key] = $this->db->escape($value);
        }

        //Escapes special characters in a string for use in an SQL statement. This stops SQL Injection in GET vars
        foreach ($_GET as $key => $value) {
            $_GET[$key] = $this->db->escape($value);
        }
    }

    public function list_movie() {
        /* construct the sql SELECT statement in this format
         * SELECT ...
         * FROM ...
         * WHERE ...
         * ORDER BY ...
         * LIMIT ...
         */

        $sql = "SELECT * FROM " . $this->tblMovie . "," . $this->tblMovieRating .
            " WHERE " . $this->tblMovie . ".rating=" . $this->tblMovieRating . ".rating_id";

        $query = $this->db->query($sql);

        // if the query failed, return false.
        if (!$query)
            return false;

        //if the query succeeded, but no movie was found, return 0
        if ($query->getNumRows() == 0) {
            return 0;
        }

        //return an array of objects of the query results
        return $query->getResult();
    }

    public function view_movie($id) {
        //the select ssql statement
        $sql = "SELECT * FROM " . $this->tblMovie . "," . $this->tblMovieRating .
            " WHERE " . $this->tblMovie . ".rating=" . $this->tblMovieRating . ".rating_id" .
            " AND " . $this->tblMovie . ".id='$id'";

        //execute the query
        $query = $this->db->query($sql);

        // if the query failed, return false.
        if (!$query)
            return false;

        //if the query succeeded, but no movie was found, return 0
        if ($query->getNumRows() == 0) {
            return 0;
        }

        //return an array of objects of the query results
        return $query->getRow();
    }
}