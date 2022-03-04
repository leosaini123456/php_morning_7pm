<?php include "db.php";?>
<?php include "function.php"; ?>
<?php
    if(isset($_POST["submit"]))
    {
        $id = $_POST["id"];

        $query = "delete from student where id = '$id'";
        $result = mysqli_query($connection, $query);
        if(!$result)
        {
            die("Query Fail");
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="login.css" rel="stylesheet">
</head>
<body>
<div>
        <form action="index.php" method="POST">
            <label>
                Select Id :
                <select name="id">
                   <?php
                     showAllData();
                   ?>
                </select>
            </label>
            
            <br>
            <input id="submit" type="submit" value="Delete" name="submit">
        </form>
    </div>
</body>
</html>
