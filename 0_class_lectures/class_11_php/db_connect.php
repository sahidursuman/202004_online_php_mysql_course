<?php
// DB Connection Info

$hostname = 'localhost';
$db_username = 'root';
$db_password = 'suman';
$db_name = 'student_information';


// Connection syntaxt - 
$conn = mysqli_connect($hostname, $db_username, $db_password, $db_name);

if(!$conn) {
    die("Cannot conncet to DB". mysqli_connect_error());
}



?>