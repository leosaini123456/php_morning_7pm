<?php include "db.php";?>
<?php include "function.php"; ?>
<?php
    if(isset($_POST["submit"]))
    {
        deletedata();
    }
?>

<?php include "include/header.php"; ?>
<div>
        <form action="delete.php" method="POST">
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
