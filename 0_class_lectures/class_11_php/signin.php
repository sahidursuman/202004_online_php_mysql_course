<?php require 'header.php'; ?>
<?php require 'db_connect.php'; ?>

    <div class="container">

        <form id="form" class="form" action="add.php" method="POST">
            <h2>Sign in!!!</h2>
            
            <div class="form-control">
                <label for="roll_number">Email</label>
                <input type="email" name="email" value="<?php //echo $roll_number; ?>" placeholder="Enter Email" />
                <span><?php //echo $errors['roll_number'] ?></span>
            </div>
            <div class="form-control">
                <label for="name">Password</label>
                <input type="password" name="password" value="<?php //echo $name; ?>" placeholder="Enter password" />
                <span><?php //echo $errors['name'] ?></span>
            </div>
            
            <button type="submit" name="submit">Sign in</button>
        </form>
    </div>

<?php require 'footer.php'; ?>