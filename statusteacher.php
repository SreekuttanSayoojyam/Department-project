<html>
    <head> 
        <style>
            body
        {
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
        </style>
    </head> 
    <body> 
        
    <h1 align="center">TEACHER</h1>
    <?php
    $con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
    $query='select * from teacher';
    $data=mysqli_query($con,$query);
    echo "<table border='1'>";
    echo "<tr><th>Email</th><th>Name</th><th>Status</th><th>Remove</th><th>Status Update</th></tr>";
    if(mysqli_num_rows($data)>0)
    {
    while($row = mysqli_fetch_assoc($data))
    {
        echo "<tr><td>".$row['emailid']."</td><td>".$row['name']."</td><td>".$row['status']."</td>";
        ?>
        <td><a href="delteacher.php?a=<?php echo $row['emailid']; ?>">Remove</a></td>
        <td><a href="upt.php?a=<?php echo $row['emailid']; ?>">Update</a></tr>
        <?php
    }
    echo "</table>";
    }
 mysqli_close($con);   
?>



        
</body>   
</html>    