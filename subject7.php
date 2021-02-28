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
  width: 600px;
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
        .box select{
      border:0;
      background: white;
      display: block;
      margin: 0px 0px;
      text-align: center;
      border: 2px solid #2ecc71;
      padding: 14px 50px;
      outline: none;
      color: black;
      border-radius: 10px;
      transition: 0.25s;
      cursor: pointer;
      width: 700px;
    }
    a{
        text-decoration:none;
    }
    button{
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
button:hover{  
  background: #2ecc71;
}
    table{
                background-color: white;
                border-collapse : collapse;
                width: 100%;
                color: #21cc21;
                font-size: 25px;
                text-align: left;
            }
            th{
                background-color: green;
                color: white;
            }
    
</style>
    </head>



    <form class="box" method="post" action="subject8.php">
    <h1> TEACHER ALLOTMENT </h1>
    
    SELECT TEACHER <select name="teacher" required>
    <option selected>-select a name-</option>
            <?php
    $con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
    $query='select * from teacher';
    $data=mysqli_query($con,$query);    
    if(mysqli_num_rows($data)>0)
    {
       while($row = mysqli_fetch_assoc($data))
         {
          ?> <option value="<?php echo $row['emailid']; ?>"> <?php echo $row['name']; ?> </option>
          <?php
         }
  
    }
 mysqli_close($con);   
?>
        </select><br><br><br><br>
        SELECT SUBJECT <select name="subject">
        <option selected>-select a subject-</option>
  
       <?php
    $con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
    $q1='select * from subject2';
    $data1=mysqli_query($con,$q1);    
    if(mysqli_num_rows($data1)>0)
    {
       while($row1 = mysqli_fetch_assoc($data1))
         {
          ?> <option value="<?php echo $row1['subject2']; ?>"> <?php echo $row1['subject2']; ?> </option>
          <?php
         }
  
    } mysqli_close($con);
    
?>
<input type="submit" name="submit" value="Delete">

</form>
</html>