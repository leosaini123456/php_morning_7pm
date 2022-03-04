<?php include  "db.php";?>
<?php include "function.php";?>
<?php
if(isset($_POST["submit"]))
{

    deletetable();

}
?>

<?php include "includes/header.php";?>
<div>
        <form action="index.php" method="POST">
            <label>
                Select ID : <br>
                <select id="select" name="id">
                    <!-- <option value="">1</option> -->
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