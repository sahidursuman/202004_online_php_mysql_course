<?php 

    /*
    Assignment 2
    Calculate the Grade for any subject based on subject mark.

    Rules -
    1. The mark has to be between 0 and 100.
    2. The grading system of Leading University will be followed here. 
    
    Input = Any subject mark
    */

    // Enter the mark as a value of the variable "$mark".
    $mark = 78;

    // Calculation Logics

    if (($mark >= 80) && ($mark <= 100)) {          //If the mark is between 80 and 100.
        echo "For the mark $mark .<br/>.
              Letter Grade = A+ .<br/>.
              Grade Point = 4.00";
    }
    else if (($mark >= 75) && ($mark <= 79)) {      //If the mark is between 75 and 79.
        echo "For the mark $mark .<br/>.
              Letter Grade = A .<br/>.
              Grade Point = 3.75";
    }
    else if (($mark >= 70) && ($mark <= 74)) {      //If the mark is between 70 and 74.
        echo "For the mark $mark .<br/>.
              Letter Grade = A- .<br/>.
              Grade Point = 3.50";
    }
    else if (($mark >= 65) && ($mark <= 69)) {      //If the mark is between 65 and 69.
        echo "For the mark $mark .<br/>.
              Letter Grade = B+ .<br/>.
              Grade Point = 3.25";
    }
    else if (($mark >= 60) && ($mark <= 64)) {      //If the mark is between 60 and 64.
        echo "For the mark $mark .<br/>.
              Letter Grade = B .<br/>.
              Grade Point = 3.00";
    }
    else if (($mark >= 55) && ($mark <= 59)) {      //If the mark is between 55 and 59.
        echo "For the mark $mark .<br/>.
              Letter Grade = B- .<br/>.
              Grade Point = 2.75";
    }
    else if (($mark >= 50) && ($mark <= 54)) {      //If the mark is between 50 and 54.
        echo "For the mark $mark .<br/>.
              Letter Grade = C+ .<br/>.
              Grade Point = 2.50";
    }
    else if (($mark >= 45) && ($mark <= 49)) {      //If the mark is between 45 and 49.
        echo "For the mark $mark .<br/>.
              Letter Grade = C .<br/>.
              Grade Point = 2.25";
    }
    else if (($mark >= 40) && ($mark <= 44)) {      //If the mark is between 40 and 44.
        echo "For the mark $mark .<br/>.
              Letter Grade = D .<br/>.
              Grade Point = 2.00";
    }
    else if (($mark >= 0) && ($mark <= 39)) {       //If the mark is between 0 and 39.
        echo "For the mark $mark .<br/>.
              Letter Grade = F .<br/>.
              Grade Point = 0.00";
    }
    else {
        echo "Please provide a valid mark";
    }

?>
