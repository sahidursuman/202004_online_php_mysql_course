<?php require 'header.php'; ?>
<?php require 'db_connect.php'; ?>

    <div class="container">

        <form id="form" class="form" action="#" method="POST">
            <h2>Reset Password Form</h2>
            
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php //echo $roll_number; ?>" placeholder="Enter Email" />
                <span><?php //echo $errors['roll_number'] ?></span>
            </div>
            
            
            <button type="submit" name="submit">Reset Password!!</button>
        </form>
    </div>

<?php require 'footer.php'; ?>