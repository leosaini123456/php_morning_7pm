<?php
    $marks = [
        "Vandana"=>[
            "English"=>80,
            "Maths"=>90
        ],
        "Rahul"=>[
            "English"=>70,
            "Maths"=>80
        ],
        "Kajal"=>[
            "English"=>60,
            "Maths"=>60
        ]
        ];
    echo "<pre>";
    // print_r($marks);
    echo $marks["Vandana"]["Maths"];
    echo "</pre>";
?>