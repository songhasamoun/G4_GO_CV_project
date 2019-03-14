<?php 
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbName = "go_cv";

    $connection = mysqli_connect($serverName, $username, $password, $dbName);

    if(!$connection) {
        die("Can't Connect to Database: " . mysqli_connect_error());
    }