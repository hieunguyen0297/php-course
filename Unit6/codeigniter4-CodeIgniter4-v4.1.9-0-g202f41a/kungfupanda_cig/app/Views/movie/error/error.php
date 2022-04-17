<?php
/**
 * Author: Hieu Nguyen
 * Date: 4/15/2022
 * File: error.php
 * Description:
 */
?>
<div id="main-header">Error</div>
<hr>
<table style="width: 100%; border: none">
    <tr>
        <td style="vertical-align: middle; text-align: center; width:100px">
            <img src='<?= BASE_URL ?>/img/error.jpg' style="width: 80px; border: none"/>
        </td>
        <td style="text-align: left; vertical-align: top;">
            <h3> Sorry, but an error has occurred.</h3>
            <div style="color: red">
                <?= urldecode($message) ?>
            </div>
            <br>
        </td>
    </tr>
</table>
<br><br><br><br><br><hr>
<a href="<?= BASE_URL ?>/movie/index">Back to movie list</a>