<?php
    $name = array("Vandana", "Ajay", "Rohit");
    if(isset($_POST['submit']))
    {
        $User = $_POST['user'];
        $Pass = $_POST['pass'];

        if(in_array($User , $name))
        {
            echo "Welcome $User";
        }
        else
        {
            echo "<p style='color:red'>You are not allowed to submit this form</p>";
        }
    }
?>