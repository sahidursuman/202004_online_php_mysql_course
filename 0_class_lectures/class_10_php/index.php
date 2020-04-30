<?php require 'header.php'; ?>
<?php
require 'db_connect.php';
    
//var_dump($conn);

// $sql = "SELECT * FROM students";
//$sql = "SELECT id, roll_number, name, university FROM students";
//$sql = "SELECT id, roll_number, name, university FROM students ORDER BY university ASC";
//$sql = "SELECT id, roll_number, name, university FROM students ORDER BY university DESC";
$sql = "SELECT * FROM students ORDER BY roll_number ASC";

$results = mysqli_query($conn, $sql);

//var_dump($results);

//echo mysqli_num_rows($results);
?>



<div class="main-container">

    <h1>List of Students</h1>
    <a href="add.php">Add New Student</a>
    <table id="customers">
        <tr>
            <td>ID</td>
            <td>Roll Number</td>
            <td>Name</td>
            <td>University</td>
            <td>Semester</td>
            <td>Skype ID</td>
            <td>Github ID</td>
            <td>Actions</td>
        </tr>

        <?php

        if(mysqli_num_rows($results) > 0) {
            // Output data of each row
            while($row = mysqli_fetch_assoc($results)) {
                echo '<tr>';
                echo "<td>". $row['id']. "</td>";
                echo "<td>". $row['roll_number']. "</td>";
                echo "<td>". $row['name']. "</td>";
                echo "<td>". $row['university']. "</td>";
                echo "<td>". $row['semester']. "</td>";
                echo "<td>". $row['skype_id']. "</td>";
                echo "<td>". $row['github_id']. "</td>";
                echo "<td><a href='update.php?id=". $row['id']. "'>Update</a> | <a href='delete.php?id=". $row['id']. "' onclick=\"return confirm('Are you sure to delete?')\">Delete</a></td>";
                
                echo '</tr>';
            }

        } else {
            echo "No Data Found";
        }




       ?>
    </table>
</div>

<?php require 'footer.php'; ?>