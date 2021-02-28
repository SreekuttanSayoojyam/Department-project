<?php
$con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
?>
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
.box button:hover{  
          background: #2ecc71;
        }
        .box a{
            text-decoration: none;
            color: black;
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
    button:hover{  
      background: #2ecc71;
    }
    a{
        text-decoration: none;
    }
    .box select{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: BLACK;
  border-radius: 10px;
  transition: 0.25s;
  cursor: pointer;
  width : 300px;
  height: 50px;
}

</style>
    </head>
    <form class="box" method="post"action="questionpaper3.php">
    <h1> VIEW YOUR QUETION PAPER </h1>    
    <select name="sem">
            <option value="1">1</opton>
            <option value="2">2</opton>
            <option value="3">3</opton>
            <option value="4">4</opton>
            <option value="5">5</opton>
            <option value="6">6</opton>
        </select>
        <input type="submit" name="submit" value="select semester and click here ">

<?php

if(isset($_POST["sem"]))
{   $sem=$_POST["sem"];
    $a=1;
    $q1="select * from question_paper where sem='$sem'";
    $data1=mysqli_query($con,$q1);
    if(mysqli_num_rows($data1)>0)
    {
        while($row = mysqli_fetch_assoc($data1))
        {
    
        $file2 = $row['qp'];
        ?>
        <button><a href="<?php echo $file2; ?>"> QUESTION PAPER  <?php echo $a ?></a></button>
        <?php 
        $a++;
        }
    }
    else{
        echo "<script> alert('UNABLE TO FIND QUESTION PAPER')</script>";
        echo "<script>location.href='questionpaper3.php'</script>";
    }
}    
    mysqli_close($con);
?>
    
    
</form>
</html>    