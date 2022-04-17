<?php
/**
 * Author: Hieu Nguyen
 * Date: 4/15/2022
 * File: header.php
 * Description:
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title> <?php echo $page_title ?> </title>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <link rel='shortcut icon' href='<?= BASE_URL ?>/img/favicon.ico' type='image/x-icon' />
    <link type='text/css' rel='stylesheet' href='<?= BASE_URL ?>/css/app_style.css' />
</head>
<body>
<div id="top"></div>
<div id='wrapper'>
    <div id="banner">
        <a href="<?= BASE_URL ?>/index.php" style="text-decoration: none" title="Kung Fu Panda Media Library">
            <div id="left">
                <img src='<?= BASE_URL ?>/img/logo.png' style="width: 180px; border: none" />
                <span style='color: #000; font-size: 36pt; font-weight: bold; vertical-align: top'>
                            Media Library!
                        </span>
                <div style='color: #000; font-size: 14pt; font-weight: bold'>An interactive application created with CodeIgniter</div>
            </div>
        </a>
        <div id="right">
            <img src="<?= BASE_URL ?>/img/kungfupanda.png" style="width: 400px; border: none" />
        </div>
    </div>