<?php

    // Function Examples
    /*
    function syntax
    function functionName(functionArguments){
        // Function ccodes
        //
    }

    */

    // Simple Funcction
    // function greeting() {
    //     // Function code here
    //     echo "Hi there! Good Evening!";
    // }


    // greeting();

    // // Function Example with arguments
    // function greeting($greetMsg) {
    //     // Function code here
    //     echo "Hi there! $greetMsg!<br />";
    // }


    // greeting('Good Evening');

    // greeting('Good Morning');

    // greeting('Good Afternoon');



    // Function Example with default arguments
    // function greeting($greetMsg = 'Good morning') {
    //     // Function code here
    //     echo "Hi there! $greetMsg!<br />";
    // }


    // greeting();
    // greeting('Good afternoon');

    // Function example with return value
    
    // function add($number1 = 5, $number2 = 7) {
    //     return $number1 + $number2;
    // }

    // $result = add(10);

    // echo $result;

    function average($numberArr) {
        $sum = 0;

        for($i = 0; $i < count($numberArr); $i++) {
            $sum += $numberArr[$i];
        }
        return $sum / count($numberArr);

    }

    echo average(array(90, 50, 40));



   
   




?>