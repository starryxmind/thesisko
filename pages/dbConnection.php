<?php
$connect = mysqli_connect("localhost","root","","grassgardenfinal");

if(!$connect){
    die("Connection Failed: ". mysqli_connect_error);
}
