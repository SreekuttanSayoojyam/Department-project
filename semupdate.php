<?php
    $con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
    $query1="update student set semester=0 where semester=6";
    $query2="update student set semester=6 where semester=5";
    $query3="update student set semester=5 where semester=4";
    $query4="update student set semester=4 where semester=3";
    $query5="update student set semester=3 where semester=2";
    $query6="update student set semester=2 where semester=1";
    $s1 = mysqli_query($con,$query1);
    $s2 = mysqli_query($con,$query2);
    $s3 = mysqli_query($con,$query3);
    $s4 = mysqli_query($con,$query4);
    $s5 = mysqli_query($con,$query5);
    $s6 = mysqli_query($con,$query6);
    echo '<script>alert("UPDATED SUCCESSFULLLY")</script>';
    header("Location:statusstudent.php");
?>