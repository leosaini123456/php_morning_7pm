<?php include "db.php";?>
<?php include "function.php";?>
<?php   
     $query = "select * from student";

     $result = mysqli_query($connection, $query);

     if(!$result)
     {
         die('Query Failed'.mysqli_error());
     }
?>

<?php include "include/header.php"; ?>
        <div>
            <h2>Data Come From Database</div>
            <?php
                while($row = mysqli_fetch_row($result))
                {
            ?>
            <pre>
                <?php
                    print_r($row);
                ?>
            </pre>
            <?php
                }
            ?>
    </body>
</html>