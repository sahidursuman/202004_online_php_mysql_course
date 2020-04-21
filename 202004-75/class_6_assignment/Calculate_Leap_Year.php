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
        Year: <br> <input type="number" name="year" value= 2020> <br>
          <input type="submit" name="" value="Submit">
    </form>
    <br>
    <?php
     $year = $_POST["year"];
     if(($year % 400 == 0 || $year % 4 == 0) && $year % 100 != 0){
       echo "$year is Leap Year\n";
     }
     else {
       echo "$year is Not Leap Year\n";
     }


     ?>
  </body>
</html>
