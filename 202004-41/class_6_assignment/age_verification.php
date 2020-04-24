<?php

$gender = 'male';

$age = 12;

if($gender == 'male' && $age >= 21){
    echo "<h2> You are a $gender and your age is $age. Congratulations! You are eligible to get married. </h2>";
}
else if($gender == 'male' && $age < 21){
    echo "<h2> You are a $gender and your age is $age. Sorry! You are not eligible to get married. </h2>";
}
else if($gender == 'female' && $age >= 18){
    echo "<h2> You are a $gender and your age is $age. Congratulations! You are eligible to get married. </h2>";
}
else if($gender == 'female' && $age < 18){
    echo "<h2> You are a $gender and your age is $age. Sorry! You are not eligible to get married. </h2>";
}
else{
    echo "<h2> Please fill input your gender and age correctly. </h2>";
}