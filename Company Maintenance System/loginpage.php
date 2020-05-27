<?php

  session_start();

  $con = mysqli_connect("localhost", "root", "", "company maintenance system");
    
    if (isset($_POST["submit"])) {
        $username= $_POST["username"];
        $password = $_POST["password"];
    
        if(empty($_POST["username"]) && empty($_POST["password"])){

          echo '<script>alert("Both Fields are required")</script>';  
    
        }  
    
        else{

            $username = mysqli_real_escape_string($con, $_POST["username"]);   
            $password = mysqli_real_escape_string($con, $_POST["password"]);    
            $query = "SELECT * FROM login WHERE User_Name = '$username' AND Password = '$password'";  
            $result = mysqli_query($con,$query);

            if (mysqli_num_rows($result) == 1) {

                $userType = mysqli_fetch_assoc($result);

                if ($userType['User_Type'] == 'Admin') {

                    header('location:administrator.php');
      
                }
      
                elseif($userType['User_Type'] == 'Client'){

                    $_SESSION['username']=$_POST['username'];
                    header("location:client.php");
      
                }
      
                elseif($userType['User_Type'] == 'Employee'){

                    header("location:employee.php"); 
      
                }
    
            }
            
            else{

                header("location:login.php");
                echo '<script>alert("Wrong User Details")</script>';  
      
            }  
    
        }

      }
    ?>