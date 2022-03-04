<?php include "db.php";?>
<?php include "function.php";?>
<?php
    if(isset($_POST["submit"]))
    {
        createdata();
    }
?>

<?php include "include/header.php"; ?>
    <div>
        <form action="create.php" method="POST">
            <label>
                ID : <br>
                <input type="text" name="id" required>
            </label>
            <label>
                Firstname : <br>
                <input type="text" name="fname" required>
            </label>
            <label>
                Lastname : <br>
                <input type="text" name="lname" required>
            </label>
            <label>
                Email : <br>
                <input type="text" name="useremail" required>
            </label>
            <label>
                Phone No. : <br>
                <input type="text" name="userphone" required>
            </label>
            <br>
            <input id="submit" type="submit" value="submit" name="submit">
        </form>
    </div>
</body>
</html>