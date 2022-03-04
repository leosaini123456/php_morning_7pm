<?php include  "db.php";?>
<?php include "function.php";?>
<?php
if(isset($_POST["submit"]))
{

    updatetable();
}
?>

<?php include "include/header.php"; ?>
<div>
        <form action="update.php" method="POST">
            <label>
                Firstname : <br>
                <input type="text" name="fname">
            </label>
            <label>
                Lastname : <br>
                <input type="text" name="lname">
            </label>
            <label>
                Phone No. : <br>
                <input type="text" name="userphone">
            </label>
            <label>
                Select ID: <br>
                <select id="select" name="id">
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