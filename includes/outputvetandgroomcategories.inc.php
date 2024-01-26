<?php

require_once 'dbh.inc.php';

function getAllActive($table){
    global $conn;
    $query = "SELECT * FROM $table ";
    return $query_run = mysqli_query($conn, $query);
}

function getCategoryActive($table, $name){
    global $conn;
    $query = "SELECT * FROM $table WHERE cat_name='$name' LIMIT 1";
    return $query_run = mysqli_query($conn, $query);
}

function getProdByCategory($category_id){
    global $conn;
    $query = "SELECT * FROM vet_and_groom_services WHERE cat_ID='$category_id'";
    return $query_run = mysqli_query($conn, $query);
}

function getIDActive($table, $id){
    global $conn;
    $query = "SELECT * FROM $table WHERE cat_ID='$id'";
    return $query_run = mysqli_query($conn, $query);
}

function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: '.$url);
    exit(0);
}
?>