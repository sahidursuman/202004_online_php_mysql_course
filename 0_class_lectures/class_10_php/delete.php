<?php
require 'db_connect.php';
    
$id = $_GET['id'];

$sql = "DELETE from students WHERE id='$id'";



// Query Execution syntax - mysqli_query('connection', 'sql)
if(mysqli_query($conn, $sql)) {
    // Success Messae
    header("Location: index.php"); 
} else {
   // 'Error'
    echo "Can't create DB: Error: ". mysqli_error($conn);
}

// Close DB Connection
mysqli_close($conn);


?>