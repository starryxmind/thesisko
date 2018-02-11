<?php

    include 'dbConnection.php';

    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $guest = $_POST['guest'];

    //date difference
    $date1 = date_create($checkin);
    $date2 = date_create($checkout);
    $diff = date_diff($date1, $date2);

    //out of calculation
    $dateLength = $diff -> format("%a");
    session_start();
    $_SESSION['dateLength'] = $dateLength;
    $_SESSION['checkin'] = $checkin;
    $_SESSION['checkout'] = $checkout;
    $_SESSION['guest'] = $guest;

    //next page
    header('location: room.php');