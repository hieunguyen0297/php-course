<?php
/**
 * Author: Hieu Nguyen
 * Date: 1/29/2022
 * File: search_movie.class.php
 * Description: create search movie class
 *
 */
require_once 'application/app_view.class.php';

class SearchMovie {
    public function display($searchTerm, $movies) {
        AppView::displayHeader($searchTerm);
        ?>

        <div id="main-header"> Movies in the Library</div>
        <div class="grid-container">
            <?php
            if ($movies === 0) {
                echo "No movie was found.<br><br><br><br><br>";
            } else {
                //display movies in a grid; six movies per row
                foreach ($movies as $i => $movie) {
                    $id = $movie->getId();
                    $title = $movie->getTitle();
                    $rating = $movie->getRating();
                    $release_date = $release_date = new DateTime($movie->getReleaseDate());
                    $image = $movie->getImage();
                    if (strpos($image, "http://") === false AND strpos($image, "https://") === false) {
                        $image = MOVIE_IMG . $image;
                    }
                    if ($i%6 == 0) {
                        echo "<div class='row'>";
                    }
                    echo "<div class='col'><p><a href='view_movie.php?id=" . $id . "'><img src='" . $image .
                        "'></a><span>$title<br>Rated $rating<br>" . $release_date->format('m-d-Y') . "</span></p></div>";
                    ?>
                    <?php
                    if ($i%6 == 5 || $i == count($movies) - 1) {
                        echo "</div>";
                    }
                }
            }
            ?>

        </div>
        <br>
        <a href='list_movie.php'>Go to movie list</a>
        <?php
        AppView::displayFooter();
    }
}