<?php
require("config.php");
session_start();

if(isset($_POST['login'])){
    $query = "SELECT * FROM `login` where email = '$_POST[email]' ";
   
    $result = mysqli_query($con,$query);

    if($result){
        if(mysqli_num_rows($result)==1){
            $result_fetch = mysqli_fetch_assoc($result);
            $sql = "SELECT * FROM `login` where password = '$_POST[password]'";
            $result1 = mysqli_query($con,$sql);
            if($result1){
                //correct
                $_SESSION['login'] = true;
                $_SESSION['email']=$result_fetch['email'];
                echo "<script>alert('logged in');</script>";
                header("location:../main.php");
            }
            else{
                //incorrect
                echo "
                    <script>
                        alert('password is incorrect');
                        windows.location.href='../index.php';
                    </script>";
            }
        }
        else{
            echo "
            <script>
                alert('Email or Username Not found');
            </script>";

            header("location:../index.php");
        }

    }
    else{
        echo "
        <script>
            alert('Unable to run query of user check ');
            windows.location.href='../index.php';
        </script>";
    }

}


if(isset($_POST['logout'])){
 
    session_unset();
    session_destroy();
    header("location:../index.php");
   
}
?>

