<?php

include ('inc/config.php');

function getAll($table){
    global $con;
    $query ="SELECT * FROM $table";
    return $query_run = mysqli_query($con, $query);
}

function getbyId($table,$id){
    global $con;
    $query ="SELECT * FROM $table WHERE id='$id'";
    return $query_run = mysqli_query($con, $query);
}


?>