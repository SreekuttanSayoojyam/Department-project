
<html>
    <head> 
    <style>
body{
  margin: 0;
  padding: 0;
  background-image: url(image.jpg);
  background-size: 1550px 1050px;
}
.box{
  width: 500px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #ffffff;
  text-align: center;
}
.box h1{
  color: rgb(14, 0, 0);
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
  width: 300px;
  outline: none;
  color: #0b0b0b;
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
  color: rgb(45 96 50);
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "submit"]:hover{
  background: #2ecc71;
}
    button{
      border:0;
      background: white;
      display: block;
      margin: 5px 5px;
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
}

</style>
    <form class="box" method="POST" action="studprupdate2.php">
    <h1> UPDATE YOUR PROFILE</h1>
        <tr><td>NAME :</td><td> <input type="text" name="name" required></td></tr><br>
        <tr><td>ADDRESS :</td><td> <input type="text" name="address" required></td></tr> <br>
        <tr><td>PHONE : </td><td><input type="text" name="phone" required minlength=10></td></tr><br>
        <tr><td>PASSWORD : </td><td><input type="password" name="password" required minlength=8></td></tr><br>
        <tr><td><input type="submit" name="submit" value="update your profile"></td></tr>
    </form>    
</html>    
