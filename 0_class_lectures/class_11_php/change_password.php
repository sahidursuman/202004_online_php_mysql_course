<?php require 'header.php'; ?>
<?php require 'db_connect.php'; ?>

    <div class="container">

        <form id="form" class="form" action="#" method="POST">
            <h2>Change Password!!!</h2>
            
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" name="password" value="<?php //echo $name; ?>" placeholder="Enter password" />
                <span><?php //echo $errors['name'] ?></span>
            </div>

            <div class="form-control">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" value="<?php //echo $name; ?>" placeholder="Enter confirm password" />
                <span><?php //echo $errors['name'] ?></span>
            </div>
            
            <button type="submit" name="submit">Change Password</button>
        </form>
    </div>

<?php require 'footer.php'; ?>