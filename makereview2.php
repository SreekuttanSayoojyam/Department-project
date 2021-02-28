<?php
session_start();
$student=$_SESSION["email"];
$con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
$query="select semester from student where emailid='$student'";
$data=mysqli_query($con,$query);
    if(mysqli_num_rows($data)>0)
    {
     $row = mysqli_fetch_assoc($data);
    } 
    $sem=$row['semester'];
    echo $sem;
    echo $student;
$email=$_POST["email"];
$q1=$_POST["q1"];
$q2=$_POST["q2"];
$q3=$_POST["q3"];
$q4=$_POST["q4"];
$q5=$_POST["q5"];
$comment=$_POST["comment"];
$query1="select * from review where emailid='$email' and student='$student' and sem='$sem' ";
$data1=mysqli_query($con,$query1);
if(mysqli_num_rows($data1)>0)
{
    echo "<script> alert('YOU HAVE ALREADY REVIEWED THIS TEACHER')</script>";
    echo "<script>location.href='makereview.php'</script>";
}   
 else
 {   
    if(isset($comment))
    {
        $qu="insert into review (emailid,q1,q2,q3,q4,q5,comment,student,sem)values('$email',$q1,$q2,$q3,$q4,$q5,'$comment','$student',$sem)";
        if(mysqli_query($con,$qu))
        {
            echo "<script> alert('reviw submitted successfully')</script>";
            echo "<script>location.href='makereview.php'</script>";
        }
        else
        {
            echo "<script> alert('Unable to save data!!!')</script>";
            echo "<script>location.href='makereview.php'</script>";
        }
    }
    else
    {
        $qu="insert into review (emailid,q1,q2,q3,q4,q5,student,sem)values('$email',$q1,$q2,$q3,$q4,$q5,'$student',$sem)";    
    if(mysqli_query($con,$qu))
    {
        echo "<script> alert('reviw submitted successfully')</script>";
        echo "<script>location.href='makereview.php'</script>";
    }
    else
    {
        echo "<script> alert('Unable to save data!!!')</script>";
        echo "<script>location.href='makereview.php'</script>";
    }
    }

 }   
mysqli_close($con);
?> 