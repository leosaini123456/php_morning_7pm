<?php include "db.php";
                 
                 
        function showAllData(){
                global $connection;
                   $query = "select * from student";

                   $result = mysqli_query($connection, $query);
                   
                   if(!$result)
                   {
                       die('Query Failed'.mysqli_error());
                   }
                   
                   while($row = mysqli_fetch_assoc($result))
                    {
                        $id = $row["id"];
                        echo "<option value='$id'>$id</option>";
                    }
                }



        function updatetable()
        {
            global $connection;
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $phone = $_POST['userphone'];
            $id = $_POST['id'];
        
            $query = "UPDATE student set FirstName = '$fname', LastName = '$lname', UserPhone = '$phone' where id = '$id'";
        
            $result = mysqli_query($connection, $query);
            if(!$result)
            {
                die("not Connected");
            }
        }


        function deletetable()
        {
            global $connection;
            // $fname = $_POST['fname'];
            // $lname = $_POST['lname'];
            // $phone = $_POST['userphone'];
            $id = $_POST['id'];
        
            $query = "delete from student where id = $id";
        
            $result = mysqli_query($connection, $query);
            if(!$result)
            {
                die("not Connected");
            }
        }
?> 