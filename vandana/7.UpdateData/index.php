<?php include "db.php";?>
<?php include "function.php"; ?>
<?php
    if(isset($_POST["submit"]))
    {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $phone = $_POST["userphone"];
        $id = $_POST["id"];

        $query = "UPDATE student set FirstName = '$fname' , LastName = '$lname' , UserPhone = '$phone' where id = '$id'";
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
                Firstname : <br>
                <input type="text" name="fname" required>
            </label>
            <label>
                Lastname : <br>
                <input type="text" name="lname" required>
            </label>
            <label>
                Phone No. : <br>
                <input type="text" name="userphone" required>
            </label>
            <label>
                Select Id :
                <select name="id">
                    <!-- <option value="">1</option> -->
                   <?php
                     showAllData();
                   ?>
                </select>
            </label>
            
            <br>
            <input id="submit" type="submit" value="UPDATE" name="submit">
        </form>
    </div>
</body>
</html>
