<?php
$connection = mysqli_connect("localhost", "root", "", "userdata");
if(!$connection)
{
    die("Database connection failed");
}
$query = "select * from users";
$result = mysqli_query($connection, $query);
if(!$result)
{
    die("Query Failed".mysqli_error());
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
        <h2>Data Come from Database</h2>
        <?php
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<pre>";
                print_r($row);
                echo "</pre>";
            }
        ?>
</body>
</html>