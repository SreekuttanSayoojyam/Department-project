<?php
    $con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
    if(isset($_POST["submit"]))
    {
        $emailid=$_POST["teacher"];
        $subject=$_POST["subject"];
        $qu="select * from subject where emailid='$emailid' and subject='$subject'";
        $data=mysqli_query($con,$qu);
        if(mysqli_num_rows($data)>0)
            {
            echo "<script>alert('DATA ALREADY EXISTS')</script>";
            echo "<script>location.href='subject5.php'</script>";
            }
        else
        {
        $query="insert into subject (emailid,subject) values ('$emailid','$subject')";
        if(mysqli_query($con,$query))
            {
                echo "<script>alert('Successfully uploaded')</script>";
                echo "<script>location.href='subject5.php'</script>";

            }    
        else
            {
                echo "<script>alert('A ERROR OCCURED!!!')</script>";
                echo "<script>location.href='subject5.php'</script>";
            }
        }
    }    
    
 mysqli_close($con);   
?>