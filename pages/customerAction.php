<?php

session_start();
include ('dbConnection.php');

if (isset($_SESSION['reservation_id'])) {
    $info = $connect->query("SELECT * FROM reservation where reseration_id='".$_SESSION['reservation_id']."'")->fetch_array();
    $_SESSION['firstname'] = $info['fisrtname'];
    $_SESSION['lastname'] = $info['lastname'];
    $_SESSION['emailaddress'] = $info['emailaddress'];
    $_SESSION['contactnumber'] = $info['contactnumber'];
    $_SESSION['address'] = $info['address'];

    //go to
    header('Location: summary.php');
} else {
    $firstname = ucwords($_POST['firstname']);
    $lastname = ucfirst($_POST['lastname']);
    $emailaddress = $_POST['emailaddress'];
    $contactnumber = $_POST['contactnumber'];
    $address = ucwords($_POST['address']);
    $roomrequest = $_POST['roomrequest'];

    if (!isset($_POST['firstname']) || !isset($_POST['lastname']) || !isset($_POST['emailaddress']) || !isset($_POST['contactnumber']) || !isset($_POST['roomrequest'])) {
        header('location: customer_info.php?errorRequiredFields');
    }
    else {
        session_start();
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['emailaddress'] = $emailaddress;
        $_SESSION['contactnumber'] = $contactnumber;
        $_SESSION['address'] = $address;
        $_SESSION['roomrequest'] = $roomrequest;

        //go to
        header('location: summary.php');
    }
}
