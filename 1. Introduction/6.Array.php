<?php 
    // $number = array();

    // $number = [];

    // $number = array(10,20,30,40,50);


    // $number = [10,20,30,40,50];
    // echo "<pre>";
    // print_r($number);
    // echo "</pre>";


    $number = [10,20,30,40 ,"Latx" , "<h1>Hello Class</h1>"];
    // echo "<pre>";
    // print_r ($number);
    // echo "</pre>";

    echo "<ul>";
    for($i = 0; $i<=4 ; $i++)
    {
        echo "<li>" . $number[$i]."</li>";
    }
    echo "</ul>";
?>