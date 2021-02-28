<html>
<head>
    <style>
    body{
      background-image: url(nature.jpg);
  background-size: 1550px 1050px;
  margin: 0;
  padding: 0;
  font-family: sans-serif;

}
.box{
  width: 1300px;
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
    <form method="post" acion="timetable6.php" class="box">
        <select name="year">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>    
        <input type="submit" name="submit" value="SELECT YEAR AND CLICK HERE">
            
<?php
$con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
if(isset($_POST["submit"]))
{
           $a=$_POST["year"]; 
    
    $query="select * from timetable where year='$a'";
    $data=mysqli_query($con,$query);
    echo "<h1> TIME TABLE OF YEAR $a </h1>";
    echo "<table border='1'>";
    echo "<tr><th>DAY</th><th>PERIOD 1</th><th>TEACHER</th><th>PERIOD 2</th><th>TEACHER</th><TH>PERIOD 3</TH><TH>TEACHER</TH><TH>PERIOD 4</TH><TH>TEACHER</TH><TH>PERIOD 5</TH><TH>TEACHER</TH></tr>";
    if(mysqli_num_rows($data)>0)
    {
    while($row = mysqli_fetch_assoc($data))
    {
        echo "<tr><td>".$row['day']."</td><td>".$row['p1']."</td><td>".$row['t1']."</td><td>".$row['p2']."</td><td>".$row['t2']."</td><td>".$row['p3']."</td><td>".$row['t3']."</td><td>".$row['p4']."</td><td>".$row['t4']."</td><td>".$row['p5']."</td><td>".$row['t5']."</td>";
    
    }
    echo "</table>";
    }
}
mysqli_close($con);   
?>
</form>
</html>
   