<?php
$host_name = "localhost";
$user = "root";
$password = "";
$db_name = "university_management_system";

$con = mysqli_connect($host_name, $user, $password, $db_name);
if(!$con){
  die("can't connect to database". mysqli_connect_error());
}
echo "Successfully connected\n";
$sql = "
      CREATE TABLE IF NOT EXISTS students(
          id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          first_name  VARCHAR(50),
          last_name VARCHAR(50),
          email VARCHAR(100) UNIQUE KEY,
          date_of_birth DATE,
          roll_number INT UNSIGNED NOT NULL UNIQUE KEY
      )
      ";

if(mysqli_query($con, $sql)){
  echo "Table created\n";
}
else {
  echo "Error to create table\n". mysqli_error($con);
}

$sql = "
        INSERT INTO students (first_name, last_name, email, date_of_birth, roll_number)
        VALUES ('Ashraful', 'Islam', 'asraf@gmail.com', '1990-04-20', '5'
        )";

if(mysqli_query($con, $sql)){
    echo "Inserted\n";
}
else {
    echo "Error to insert\n". mysqli_error($con);
}


$sql = "
        INSERT INTO students (first_name, last_name, email, date_of_birth, roll_number)
        VALUES ('Ashraful Al', 'Munim', 'munim@gmail.com', '1990-04-20', '4'
        )";

if(mysqli_query($con, $sql)){
    echo "Inserted\n";
}
else {
    echo "Error to insert\n". mysqli_error($con);
}

    
$sql = "
        INSERT INTO students (first_name, last_name, email, date_of_birth, roll_number)
        VALUES ('Ashraful', 'Rahman', 'asraf@gmail.com', '1998-11-15', '5'
          )";

if(mysqli_query($con, $sql)){
    echo "Inserted\n";
}
else {
    echo "Error to insert\n". mysqli_error($con);
}


$sql = "
        INSERT INTO students (first_name, last_name, email, date_of_birth, roll_number)
        VALUES ('Tanveer', 'Elahi', 'tanveer@gmail.com', '1995-11-15', '3'
        )";
if(mysqli_query($con, $sql)){
    echo "Inserted\n";
}
else {
    echo "Error to insert\n". mysqli_error($con);
}

 ?>
