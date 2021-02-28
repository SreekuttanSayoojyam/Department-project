<html>
<head>
    <style>
    body{
      background-image: url(image.jpg);
  background-size: 1550px 1050px;
  margin: 0;
  padding: 0;
  font-family: sans-serif;
}
.box{
  width: 700px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #fff9f9;
  text-align: center;
}
.box h1{
  color: black;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type = "text"],.box input[type = "password"]{
  border:0;
  background: none;
  display: block;
  margin: 10px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 500px;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
  width: 280px;
  border-color: #2ecc71;
}
.box input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: BLACK;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "submit"]:hover{  
  background: #2ecc71;
}.box input[type = "reset"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "reset"]:hover{  
  background: #2ecc71;
}
        button{
      border:0;
      background: white;
      display: block;
      margin: 0px 0px;
      text-align: center;
      border: 2px solid #2ecc71;
      padding: 14px 50px;
      outline: none;
      color: white;
      border-radius: 24px;
      transition: 0.25s;
      cursor: pointer;
    }
    
</style>
    </head>
    <form class="box" method="post" action="subject4.php">
     <h1> SUBJECTS </h1>

<?php
$con=new mysqli("localhost","root","","department") or die("couldnt connect to server");

if(isset($_POST["click"]))
{   
    $sub = $_POST["subject"];
    $query="insert into subject2 (subject2) values('$sub')";
    $data=mysqli_query($con,$query);
    
    echo "<script> alert('UPLOADED SUCCSSFULLY')</script>";
}


$q1="select * from subject2";
$data1=mysqli_query($con,$q1);
if(mysqli_num_rows($data1)>0)
{
    while($row = mysqli_fetch_assoc($data1))
    {

    $subject = $row['subject2'];
    ?>
     <input type="text" value="<?php echo $subject; ?>"> 
     <?php   
    }
}
else{
    echo "<script> alert('UNABLE TO FIND ANY SUBJECTS')</script>";
}mysqli_close($con);
?>
<br><br><h1> DELETE SUBJECTS </h1>
<input type="text" name="delete" placeholder="enter subject to delete">
<input type="submit" name="submit" value="DELETE">
</form>
</html>