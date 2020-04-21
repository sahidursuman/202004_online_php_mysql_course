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
        Input the course name:<input type="text" name="course"> <br>
        Input your marks: <input type="number" name="marks"> <br>
        <input type="submit" name="" value="Submit">
    </form>
    <br>
    <?php

     $course = $_POST['course'];
     $marks = $_POST["marks"];
      if($marks >= 80 && $marks <= 100)
           echo "Grade for $course : A+";
       else if ($marks >= 75 && $marks < 80) {
           echo "Grade for $course : A";
       }
       else if ($marks >= 70 && $marks < 75) {
           echo "Grade for $course : A-";
       }
       else if ($marks >= 65 && $marks < 70) {
           echo "Grade for $course : B+";
       }
       else if ($marks >= 60 && $marks < 65) {
           echo "Grade for $course : B";
       }
       else if ($marks >= 55 && $marks < 60) {
           echo "Grade for $course : B-";
       }
       else if ($marks >= 50 && $marks < 55) {
           echo "Grade for $course : C";
       }
       else if ($marks >= 40 && $marks < 50) {
           echo "Grade for $course : D";
       }
       else if ($marks >= 0 && $marks < 40) {
           echo "Grade for $course : F";
       }
       else {
         echo "You submitted wrong inputs..!!! Try again. ";
       }


     ?>
  </body>
</html>
