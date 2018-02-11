<?php
session_start();
include('dbConnection.php');
$numberofrooms = $_POST['numberofrooms'];

if($numberofrooms == 0){
    header("Location: room.php?error");
} else {

    header ('location: customer-info.php');
}

?>