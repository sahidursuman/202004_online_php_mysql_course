<?php
$year = 1995;

if ($year % 400 == 0) {
    echo ("<h3> $year is a Leap Year </h3>");
} 
else if ($year % 100 == 0) {
    echo ("<h3> $year is not a Leap Year </h3>");
} 
else if ($year % 4 == 0) {
    echo ("<h3> $year is a Leap Year </h3>");
}
else{
    echo "<h3> $year is not a Leap Year </h3>";
}
