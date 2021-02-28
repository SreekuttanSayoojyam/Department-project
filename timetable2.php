
<?php
    $con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
    if(isset($_POST["submit"]))
    {
        $year=$_POST["year"];
        $day=$_POST["day"];
        $p1=$_POST["p1"];
        $p2=$_POST["p2"];
        $p3=$_POST["p3"];
        $p4=$_POST["p4"];
        $p5=$_POST["p5"];
        $t1=$_POST["t1"];
        $t2=$_POST["t2"];
        $t3=$_POST["t3"];
        $t4=$_POST["t4"];
        $t5=$_POST["t5"];
        $qu="select * from subject where timetable where year='$year and day='$day'";
        $data=mysqli_query($con,$qu);
        if(mysqli_num_rows($data)>0)
            {
            echo "<script>alert('DATA ALREADY EXISTS')</script>";
            echo "<script>location.href='timetable.php'</script>";
            }
        else
        {
        $query="insert into timetable (year,day,p1,t1,p2,t2,p3,t3,p4,t4,p5,t5) values ($year,$day,'$p1','$t1','$p2','$t2','$p3','$t3','$p4','$t4','$p5','$t5')";
        if(mysqli_query($con,$query))
            {
                echo "<script>alert('Successfully uploaded')</script>";
                echo "<script>location.href='timetable.php'</script>";

            }    
        else
            {
                  echo "<script>alert('COULDNT UPLOAD PLEASE TRY AGAIN')</script>";
                  echo "<script>location.href='timetable.php'</script>";
            }
        }
    }    
    
 mysqli_close($con);   
?>
