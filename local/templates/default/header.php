<?php
header('Content-Type:text/html; charset=utf-8');
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/internal_settings.php';

?>
<!DOCTYPE html>
<html lang="en">

<body>
<head>
    <link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>Божество</title>
</head>

<div class="container">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Настройки</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Страна</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Город</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/company">Компании</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/human">Люди</a>
        </li>
    </ul>
</div>
