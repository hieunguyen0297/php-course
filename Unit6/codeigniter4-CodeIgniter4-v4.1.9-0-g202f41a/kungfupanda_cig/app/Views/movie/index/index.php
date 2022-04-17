<?php
/**
 * Author: Hieu Nguyen
 * Date: 4/15/2022
 * File: index.php
 * Description:
 */
?>

<div id="main-header"> Movies in the Library</div>

<div class="grid-container">
    <?php
    if (sizeof($movies) === 0) {
        echo "No movie was found.<br><br><br><br><br>";
    } else {
        echo "<div class='grid-container'>";
        //display movies in a grid; six movies per row
        foreach ($movies as $movie) {
            $id = $movie->id;
            $title = $movie->title;
            $rating = $movie->rating;
            $release_date = new DateTime($movie->release_date);
            $image = $movie->image;
            if (strpos($image, "http://") === false AND strpos($image, "https://") === false) {
                $image = BASE_URL . "/" . MOVIE_IMG . $image;
            }

            echo "<div class='item'><p><a href='", BASE_URL, "/movie/detail/$id'><img src='" . $image .
                "'></a><span>$title<br>Rated $rating<br>" . $release_date->format('m-d-Y') . "</span></p></div>";

        }
        echo "</div>";
    }
    ?>
</div>