<?php

    $subjectMark = 80 ;

    if( $subjectMark >= 79.50 && $subjectMark <= 100){
        echo "<h2> You have got an A+ </h2>";
    }
    else if( $subjectMark >= 69.50 && $subjectMark <= 79.49 ){
        echo "<h2> You have got an A </h2>";
    }
    else if( $subjectMark >= 59.50 && $subjectMark <= 69.49 ){
        echo "<h2> You have got an A- </h2>";
    }
    else if( $subjectMark >= 49.50 && $subjectMark <= 59.49 ){
        echo "<h2> You have got a B </h2>";
    }
    else if( $subjectMark >= 39.50 && $subjectMark <= 49.49 ){
        echo "<h2> You have got a C </h2>";
    }
    else if( $subjectMark >= 30 && $subjectMark <= 39.49 ){
        echo "<h2> You have got a D </h2>";
    }
    else if( $subjectMark < 30 ){
        echo "<h2> You have not passed the subject. </h2>";
    }
    else {
        echo "<h2> Your mark has not been published yet! </h2>";
    }
    