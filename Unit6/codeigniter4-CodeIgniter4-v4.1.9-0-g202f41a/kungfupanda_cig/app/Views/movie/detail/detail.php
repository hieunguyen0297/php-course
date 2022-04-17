<?php
/**
 * Author: Hieu Nguyen
 * Date: 4/15/2022
 * File: detail.php
 * Description:
 */

$id = $movie->id;
$title = $movie->title;
$rating = $movie->rating;
$release_date = new DateTime($movie->release_date);
$director = $movie->director;
$image = $movie->image;
$description = $movie->description;
if (strpos($image, "http://") === false and strpos($image, "https://") === false) {
    $image = BASE_URL . '/' . MOVIE_IMG . $image;
}
?>

<div id="main-header">Movie Details</div>
<hr>
<!-- display movie details in a table -->
<table id="detail">
    <tr>
        <td style="width: 150px;">
            <img src="<?= $image ?>" alt="<?= $title ?>"/>
        </td>
        <td style="width: 130px;">
            <p><strong>Title:</strong></p>
            <p><strong>Rating:</strong></p>
            <p><strong>Release Date:</strong></p>
            <p><strong>Director:</strong></p>
            <p><strong>Description:</strong></p>
        </td>
        <td>
            <p><?= $title ?></p>
            <p><?= $rating ?></p>
            <p><?= $release_date->format('m-d-Y') ?></p>
            <p><?= $director ?></p>
            <p class="media-description"><?= $description ?></p>
            <div id="confirm-message"><?= $confirm ?></div>
        </td>
    </tr>
</table>
<a href="<?= BASE_URL ?>/movie/index">Go to movie list</a>