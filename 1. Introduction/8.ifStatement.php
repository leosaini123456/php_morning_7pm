<?php
    // $marks = 60;
    // if($marks >=80 && $marks <= 100)
    // {
    //     echo "A Grade";
    // }else if ($marks >=60 && $marks<=79)
    // {
    //     echo "B Grade";
    // }
    // else
    // {
    //     echo "Fail";
    // }

    $marks = "*";
    $a  =  10;
    $b = 20;

    switch($marks)
    {
        case "+": echo $a+$b;
                    break;
        case "-" : echo $a - $b;
                    break;
        default : echo "Invalid Input";
    }


?>