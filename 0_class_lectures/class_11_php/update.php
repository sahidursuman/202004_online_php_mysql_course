<?php
// echo $_POST['reza'];
// echo '-------------';
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

require 'db_connect.php';

// echo $_GET['id'];
// die('<br/>');

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id='$id'";
$results = mysqli_query($conn, $sql);

// Query Execution syntax - mysqli_query('connection', 'sql)
if(mysqli_query($conn, $sql)) {
    // Success Messae
    

    while($row = mysqli_fetch_assoc($results)) {
        $name = $row['name'];
        $roll_number = $row['roll_number'];
        $university = $row['university'];
        $semester =  $row['semester'];
        $skype_id =  $row['skype_id'];
        $github_id =  $row['github_id'];
        
    }
} else {
// 'Error'
    echo "Can't create DB: Error: ". mysqli_error($conn);
}


if(isset($_POST['submit'])) {
    $errors = array('roll_number' => '', 'name' => '', 'university' => '');

    $name = '';
    $roll_number = '';
    $university = '';
    $semester =  isset($_POST['semester']) ? $_POST['semester'] : '';
    $skype_id =  isset($_POST['skype_id']) ? $_POST['skype_id'] : '';
    $github_id =  isset($_POST['github_id']) ? $_POST['github_id'] : '';

    // Add Validation for Roll number
    if(empty($_POST['roll_number'])) {
        $errors['roll_number'] = 'Roll Number is Required';
    } else {
        $roll_number = $_POST['roll_number'];
    }

    // Add Validation for Name
    if(empty($_POST['name'])) {
        $errors['name'] = 'Name is Required';
    } else {
        $name = $_POST['name'];
    }

    // Add Validation for Name
    if(empty($_POST['university'])) {
        $errors['university'] = 'Name is Required';
    } else {
        $university = $_POST['university'];
    }

    // Form Processing
    if(empty($errors['roll_number']) && empty($errors['name']) && empty($errors['university'])) {
        $sql = "UPDATE students SET roll_number='$roll_number', name='$name', university='$university', semester='$semester', skype_id='$skype_id', github_id='$github_id'  WHERE id='$id'";
        
        // Query Execution syntax - mysqli_query('connection', 'sql)
        if(mysqli_query($conn, $sql)) {
            // Success Messae
            header("Location: index.php"); 
  
            exit; 
        } else {
        // 'Error'
            echo "Can't create DB: Error: ". mysqli_error($conn);
        }

        // Close DB Connection
        mysqli_close($conn);
    }

    
}


?>

<?php require 'header.php'; ?>
<?php require 'db_connect.php'; ?>



    <div class="container">

        <form id="form" class="form" action="update.php?id=<?php echo $id ?>" method="POST">
            <h2>Student Registration Form</h2>
            
            <div class="form-control">
                <label for="roll_number">Roll Number</label>
                <input type="text" name="roll_number" value="<?php echo $roll_number; ?>" placeholder="Enter Roll Number" />
                <span><?php echo $errors['roll_number'] ?></span>
            </div>
            <div class="form-control">
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter name" />
                <span><?php echo $errors['name'] ?></span>
            </div>
            <div class="form-control">
                <label for="name">University</label>
                <input type="text" name="university" value="<?php echo $university; ?>" placeholder="Enter university" />
                <span><?php echo $errors['university'] ?></span>
            </div>

            <div class="form-control">
                <label for="name">Semester</label>
                <input type="text" name="semester" value="<?php echo $semester; ?>" placeholder="Enter Semester" />
                <small></small>
            </div>

            <div class="form-control">
                <label for="name">Skype ID</label>
                <input type="text" name="skype_id" value="<?php echo $skype_id; ?>" placeholder="Enter SKype ID" />
                <small></small>
            </div>

            <div class="form-control">
                <label for="name">Github ID</label>
                <input type="text" name="github_id" value="<?php echo $github_id; ?>" placeholder="Enter Github ID" />
                <small></small>
            </div>
            
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

<?php require 'footer.php'; ?>