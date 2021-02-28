<?php
    $con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
    $teacher=$_POST["teacher"];
    $subject=$_POST["subject"];
    $q1="delete from subject where emailid='$teacher' and subject='$subject'";
    if(mysqli_query($con,$q1))
    {
        header("Location:subject7.php");
    }    
    else
    {
        echo "<script> alert('AN ERROR OCCURED!!!')</script>";
        header("Location:subject7.php");
    }
  
     mysqli_close($con);
?>