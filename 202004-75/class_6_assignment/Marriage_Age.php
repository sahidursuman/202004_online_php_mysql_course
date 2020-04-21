<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculate the Leap Year</title>
    <style media="screen">
      input{margin: 3px}
    </style>
  </head>
  <body>
    <form class="" action="<?php $_PHP_SELF ?>" method="post">
        Input the gender:<input type="person_gender" name="gender"> <br>
        Input age: <input type="age" name="ages"> <br>
        <input type="submit" name="" value="Submit">
    </form>
    <br>
    <?php

     $person_gender = mb_strtolower($_POST['gender']);
     $person_age = $_POST["ages"];
      if($person_gender == 'female' && $person_age >= 18)
           echo "Congatulations!! You are eligible for marrige in Bangladesh." ;
       else if ($person_gender == 'female' && $person_age < 18) {
           echo "Sorry!! You are not eligible for marrige in Bangladesh. Your gender is $person_gender & your age is $person_age";
       }
       if($person_gender == 'male' && $person_age >= 21)
            echo "Congatulations!! You are eligible for marrige in Bangladesh." ;
        else if ($person_gender == 'male' && $person_age < 21) {
            echo "Sorry!! You are not eligible for marrige in Bangladesh. Your gender is $person_gender & your age is $person_age";
        }


     ?>
  </body>
</html>
