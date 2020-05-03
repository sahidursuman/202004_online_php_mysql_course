<?php require 'header.php'; ?>
<?php require 'db_connect.php'; ?>

    <div class="container">

        <form id="form" class="form" action="#" method="POST">
            <h2>Update Profile!!!</h2>

            <div class="form-control">
                <label for="name">Name</label>
                <input type="name" name="name" value="<?php //echo $roll_number; ?>" placeholder="Enter Name" />
                <span><?php //echo $errors['roll_number'] ?></span>
            </div>

            <div class="form-control">
                <label for="username">Username</label>
                <input type="username" name="username" value="<?php //echo $roll_number; ?>" placeholder="Enter Username" />
                <span><?php //echo $errors['roll_number'] ?></span>
            </div>
            
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php //echo $roll_number; ?>" placeholder="Enter Email" />
                <span><?php //echo $errors['roll_number'] ?></span>
            </div>
            
            <button type="submit" name="submit">Update Profile</button>
        </form>
    </div>

<?php require 'footer.php'; ?>