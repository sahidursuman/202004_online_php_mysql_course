<?php
    
    /*
    Assignment 3
    Refactoring of the Marriage Age calculator code with and operator.
    
    Marrige Age Checker for BD.

    Input - age & gender

    
    Rules - 
    1. Male person age should be 21 or 21+
    2. Female person age should be 18 or 18+
    */
   
    //Enter the persons age.
    $person_age = 19;

    //Enter the persons gender.
    $person_gender = 'male2';

        
    // Calculation logics
    
    // For the male person and male persons age should be 21 or 21+
    if (($person_gender == 'male') && ($person_age >= 21)) { 
            echo "Congatulations!! You are eligible for marrige in Bangladesh.";
    }
        
    // For the female person and female persons age should be 18 or 18+
    else if (($person_gender == 'female') && ($person_age >= 18)) { 
            echo "Congatulations!! You are eligible for marrige in Bangladesh.";           
    } 

    // For displaying error message
    else if (($person_gender != 'male') && ($person_gender != 'female')) {
        echo "You did not pass the valid gender. You should pass person_gender as male or female, but you've provided us it as $person_gender"; 
    }

    // All other persons are not eligible for marrige
    else {
        echo "Sorry!! You are not eligible for marrige in Bangladesh. Your gender is $person_gender & your age is $person_age";
    }

?>