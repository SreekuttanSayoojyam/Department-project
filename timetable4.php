<?php
$year=$_POST["year"];
    $con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
    $query="delete from timetable where year='$year'";
    if(mysqli_query($con,$query))
    {
    echo "<script>alert('SUCCESSFULLY DELETED')</script>";
            echo "<script>location.href='timetable3.php'</script>";
    }
    else
    {
        echo "<script>alert('PLEASE TRY AGAIN')</script>";
            echo "<script>location.href='timetable3.php'</script>";
    }
    mysqli_close($con); 
?>
