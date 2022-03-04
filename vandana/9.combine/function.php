<?php include "db.php";
                 
         
        function createdata()
                    {
                        global $connection;
                            // echo "form submitted";
                    $id = $_POST["id"];
                    $fname = $_POST["fname"];
                    $lname = $_POST["lname"];
                    $useremail = $_POST["useremail"];
                    $userphone = $_POST["userphone"];

                    // echo $fname;
                    // echo $lname;
                    // echo $useremail;
                    // echo $userphone;

                    $connection = mysqli_connect("localhost","root","","userdata");
                    
                    if($connection)
                    {
                        echo "Connected";
                    }
                    else
                    {
                        die("Not Connected");
                    }

                    $query = "insert into student (id , FirstName, LastName, UserEmail, UserPhone) values ($id, '$fname', '$lname', '$useremail' , '$userphone')";

                    $result = mysqli_query($connection, $query);
                    if($result)
                    {
                        header('Location: create.php');
                    }
                    else
                    {
                        die("Query Failed".mysqli_err());
                    }
                }


        function readdata()
        {global $connection;
            $query = "select * from student";

            $result = mysqli_query($connection, $query);

            if(!$result)
            {
                die('Query Failed'.mysqli_error());
            }
        }

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


        function deletedata()
        {    global $connection;
            $id = $_POST["id"];

            $query = "delete from student where id = '$id'";
            $result = mysqli_query($connection, $query);
            if(!$result)
            {
                die("Query Fail");
            }
    
        }
?> 