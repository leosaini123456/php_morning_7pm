<!-- isset check if a variable is set which mean variable has to be declare or not null then it return true. -->

<?php
    $a=10
    if(isset($_POST['submit']))
    {
        echo "Form Submitted";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="1.form.php" method="Post">
        <input  type="text">
        <br><br>
        <input type="text">
        <br><br>
        <input  type="submit" name="submit">
    </form>
</body>
</html>