<?php
// DB Name - student_information

// Process
/*
1. Conncet DB
2. Write Create DB SQL
3. Execute

*/

$hostname = 'localhost';
$db_username = 'root';
$db_password = 'suman';


// Connection
$conn = mysqli_connect($hostname, $db_username, $db_password);

if(!$conn) {
    die("Cannot conncet to DB". mysqli_connect_error());
}

// Write sql for create a DB
$sql = "CREATE DATABASE student_information";


// Query Execution syntax - mysqli_query('connection', 'sql)
if(mysqli_query($conn, $sql)) {
    // Success Messae
    echo 'Successfully Created DB';
} else {
   // 'Error'
    echo "Can't create DB: Error: ". mysqli_error($conn);
}

// Close DB Connection
mysqli_close($conn);


?>