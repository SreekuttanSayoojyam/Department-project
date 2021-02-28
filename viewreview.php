<?php
session_start();
$em=$_SESSION['email'];
?><html>
    <head> 
    <style>
    
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
            
    .box{
      width: 900px;
      height: 600px;
      padding: 40px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      background: #fff9f9;
      text-align: center;
    }
    body{
        background-image: url(image.jpg);
  background-size: 1550px 1050px;
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }
        </style>    
    </head>
<body><form class="box">
<h1> SEE YOUR RATING </H1>
<?php
    $con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
    $query="select q1,q2,q3,q4,q5,comment from review where emailid='$em'";
    $data=mysqli_query($con,$query);    
    if(mysqli_num_rows($data)>0)
    {
    echo "<table border='1' cellpadding='10' cellspacing='10'>";
    echo "<tr><th>Dedication in teaching</th><th>Interaction with students</th><th>Punctuality</th><th>Communication skills</th><th>Adaptability</th></tr>";
    if(mysqli_num_rows($data)>0)
    {
    while($row = mysqli_fetch_assoc($data))
    {
        echo "<tr><td>".$row['q1']."</td><td>".$row['q2']."</td><td>".$row['q3']."</td><td>".$row['q4']."</td><td>".$row['q5']."</td>";  
    }
    echo "</table>";
         }
  
    }
 mysqli_close($con);   
?>
</form>
</body>
</html>