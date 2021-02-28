<html>
<head>
<title>teacher registration</title>
<style>
    body{
      background-image: url(image.jpg);
  background-size: 1550px 1050px;
  margin: 0;
  padding: 0;
  font-family: sans-serif;
}
.box{
  width: 500px;
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
  width: 100px;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
  width: 200px;
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
.box input[type = "submit"]:hover{  
  background: #2ecc71;
}.box button{
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
a {
    text-decoration:none;
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
  color: black;
  border-radius: 10px;
  transition: 0.25s;
  cursor: pointer;
  width: 200px;
}
</style>
</head>
<form method="post" action="questionpaper2.php" enctype="multipart/form-data" class="box">
    <h1> UPDATE QUESTION PAPER </h1>
    <table>
    <tr><td>Enter sem:</td><td><select name="sem" required>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>    
    </select></td></tr>
    <tr><td><input type="file" name="file" required></td></tr>
    <tr><td><input type="submit" name="submit"></td></tr>
    <tr><button><a href="questionpaper3.php"> VIEW QUESTION PAPER FROM HERE</a></button></tr>
</table>
</form>
</html>