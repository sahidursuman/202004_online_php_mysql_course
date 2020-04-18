<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Tutorial</title>
</head>
<body>

    <h1><?php echo 'PHP Tutorial'; ?></h1>
    <?php echo '<h2>Header 2</h2>'; ?>

    <?php
        // Single line comment syntax


        # Another Single line ccomment syntax


        /*
        This is multiple line commnet syntax
        Todays Class topic

        1. Output 
        2. Comment
        3. Variable
        */
        echo '<p>Above all comments will not display in webpage!! </p>';

        /*
        Topic - Output Display
        1. echo "Value";
        2. print "Value";
        */

        echo "<p>Hello World!!</p>";
        print "<p>Hello world again</p>";


        /*
        Topic - Variable
        Variable declare rules - 
        1. PHP variable start with $ sign, Example - $name 
        2. PHP varialbe start with after $ sign _ or any alphabetic characcter example- $_name, $fruit, not $1_fruit
        3. PHP variable name are case sensitive, $firstname & $firstName are different.
        4. PHP variable are not allowed space inside the name
        5. PHP varialble allowed only Alphabetic Character a-z, A-Z and _ 
        */

        $name = 'Sahidur Rahman Suman'; # This is string type variable
        //$1name = 'Sahidur' # This is not valid variable
        $firstName = 'Sahidur';
        $lastName = 'Suman';
        $age = 32; # This is integer type variable
        $height = 6.5; # This is float type variable


        //echo $name;

        echo 'My name $name <br />';
        echo "My name is $name <br />";
        echo $firstName. ' ' .$lastName. '<br/>';
        echo "$firstName $lastName <br/>";
        echo "My name is '$name', and my age is $age !!<br/>";

        // Escape character example
        echo "<h1>My name is \"$name\", and my age is $age !!</h1>";











    ?>
    
</body>
</html>