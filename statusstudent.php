<html>
    <head> 
        <style>
            body{
                background-image: url(image.jpg);
  background-size: 1550px 1050px;
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
        </style>
    </head> 
    <body> 
    <h1 align="center">STUDENT</h1>      
    <?php
    $con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
    $query='select * from student';
    $data=mysqli_query($con,$query);
    echo "<table border='1'>";
    echo "<tr><th>Email</th><th>Name</th><th>Status</th><th>Sem</th><th>Remove</th><th>Suspend</th><th>Update</th></tr>";
    if(mysqli_num_rows($data)>0)
    {
    while($row = mysqli_fetch_assoc($data))
    {
        echo "<tr><td>".$row['emailid']."</td><td>".$row['name']."</td><td>".$row['status']."</td><td>".$row['semester']."</td>";
        ?>
        <td><a href="delstud.php?a=<?php echo $row['emailid']; ?>">Remove</a></td>
        <td><a href="suspend.php?a=<?php echo $row['emailid']; ?>">Suspend</a>
        <td><a href="ups.php?a=<?php echo $row['emailid']; ?>">Update</a></tr>
        <?php
    }echo "<button><a href='semupdate.php'>SEMESTER UPDATION</a></button><br>";
    echo "</table>";
    }
 mysqli_close($con);   
?>



</body>       
    
</html>    