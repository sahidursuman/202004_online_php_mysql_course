<?php 

    /*
    Assignment 1
    Calculate the Leap Year.
    Calculation of a year if it is a leap year or not.

    Rules - 
    1. If a year is divided by 4 and not divided by 100, then it's a leap year.
    2. If a year is divided by 100 and also by 400, then it's a leap year.
    3. If a year is divided only by 400, then it's a leap year.
    4. And for all other cases, it will not be a leap year.

    Input = year.

    */

    // Enter the year as a value of the variable $year.
    $year = 2096;

    // Calculation logics

    if (($year % 4 == 0) && ($year % 100 != 0)) {           // for rule 1
        echo "The year $year is a leap year.";
    }
    else if (($year % 100 == 0) && ($year % 400 == 0)) {    // for rule 2
        echo "The year $year is a leap year.";
    }
    else if (($year % 400 == 0)) {                          // for rule 3
        echo "The year $year is a leap year.";
    }
    else {                                                  // for rule 4
        echo "The year $year is NOT a leap year.";
    }

?>
