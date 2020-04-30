<?php
// Table - students

// Process
/*
1. Conncet DB
2. Write Create Table SQL
3. Execute

*/

$hostname = 'localhost';
$db_username = 'root';
$db_password = 'suman';
$db_name = 'student_information';


// Connection syntaxt - 
$conn = mysqli_connect($hostname, $db_username, $db_password, $db_name);

if(!$conn) {
    die("Cannot conncet to DB". mysqli_connect_error());
}

$sql = "
    CREATE TABLE students (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        roll_number VARCHAR(15),
        name VARCHAR(200) NOT NULL,
        university VARCHAR(150),
        semester VARCHAR(30),
        skype_id VARCHAR(30),
        github_id VARCHAR(30)
    )
";

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