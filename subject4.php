<?php
    $con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
    $delete = $_POST["delete"];
    $s = mysqli_query($con,"delete from subject2 where subject2='$delete'");
    header("Location:subject3.php");
?>