<?php

const LOCATION = "localhost";
const DATABASE = "php_learning_safuanov";
const LOGIN = "root";
const PASSWORD = "";

$link = mysqli_connect(LOCATION, LOGIN, PASSWORD, DATABASE);
$images = mysqli_query($link, "SELECT * FROM images");