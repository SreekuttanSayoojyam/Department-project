
<html>
    <head>
    <style>
            body{
          margin: 0;
          padding: 0;
          font-family: sans-serif;
          background: #34495e;
        }
        .box{
          width: 300px;
          height: 400px;
          padding: 40px;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
          background: #fff9f9;
          text-align: center;
        }
        .box button{
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
        </style> 
    </head>
<?php
$con=new mysqli("localhost","root","","department") or die("couldnt connect to server");
$file = $_FILES["file"];
$sem = $_POST["sem"];
move_uploaded_file($file["tmp_name"],"uploads/".$file["name"]);


$file1 = "uploads/".$file["name"];
echo $file1;

    $query="insert into question_paper (qp,sem) values('$file1',$sem)";
    $data=mysqli_query($con,$query);
    mysqli_close($con);
    echo "<script> alert('UPLOADED SUCCSSFULLY')</script>";
    
?>
<form class="box">
    <h1> VIEW YOUR QUETION PAPER </h1>
    <button><a href="questionpaper3.php">CLICK FOR QUESTION PAPER</a></button>
</form>
</html>    
