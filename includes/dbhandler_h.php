<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "notes-website";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection to database failed! Error = " . mysqli_connect_error());
}
