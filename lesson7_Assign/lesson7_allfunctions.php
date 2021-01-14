<?php

    function message( $input)
    {
        echo " <pre>";
        die(var_dump($input));
        echo " </pre>";

    }

    function addNums($num1,$num2){
        # code...
        $result = $num1 + $num2;
        echo $result . "<br>" ;
    };

    function substractNums($num1,$num2){
        # code...
        $result = $num1 - $num2;
        echo $result;
    };
?>