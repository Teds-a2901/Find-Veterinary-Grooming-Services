<?php

$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "vetgroom_services_db";

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

if(!$conn){
    die("Connection Field:". mysqli_connect_error());

}