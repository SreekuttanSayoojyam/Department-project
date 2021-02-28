<?php
session_start();
$con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
$email=$_POST['email'];
$check=$_POST['check'];
$password=$_POST['password'];
$_SESSION['email']=$email;
if($check=="student")
{
    $query="select emailid,name,password,status,semester from student where emailid='$email' and password='$password'";
    $data=mysqli_query($con,$query);
    if(mysqli_num_rows($data)==1)
    {

        $row = mysqli_fetch_assoc($data);
        if($row['semester'] == 0)
        {
            echo "<script> alert('YOU ARE NO LONGER A STUDENT OF DEPARTMENT')</script>";
            echo "<script>location.href='homepage.php'</script>";     
        }
        else if($row['status'] != NULL)
      {
        header("Location:studenthome.php");
      }
      else{
        echo "<script> alert('YOU ARE NOT VERIFIED PLEASE CONTACT DEPARTMENT HEAD FOR MORE DETAILS')</script>";
        echo "<script>location.href='homepage.php'</script>";     
      }  
    }
    else
    {
       echo "<script> alert('INVALID USERNAME OR PASSWORD')</script>";
       echo "<script>location.href='login.html'</script>";
    }
}
if($check=="teacher")
{
    $data=mysqli_query($con,"select emailid,password,status from teacher where emailid='$email' and password='$password'");
    if(mysqli_num_rows($data)==1)
    {
        $row = mysqli_fetch_assoc($data);
        if($row['status'] != NULL)
        {
          header("Location:teacherhome.php");
        }
        else{
            echo "you're not verified";
        }
    
    }
    else
    {
        echo "<script> alert('INVALID USERNAME OR PASSWORD')</script>";
        echo "<script>location.href='login.html'</script>";
    }
}
if($check==NULL)
{
    if(($email=='admin')&&($password=='admin'))
    {
        header("Location:adminhome.html");    
    }
    else
    {
    echo "<script> alert('INVALID USERNAME OR PASSWORD')</script>";
    echo "<script>location.href='login.html'</script>";
    }
}

mysqli_close($con);

?>