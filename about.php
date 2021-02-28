


<!DOCTYPE html>
<!-- Created By CodingNepal -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Responsive Navbar</title> -->
    <style>
    {
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
body{    background-image: url(image.jpg);
  background-size: 1550px 1050px;
  font-family: montserrat;
}
nav{
  background: #4caf50;
  height: 80px;
  width: 100%;
}
label.logo{
  color: white;
  font-size: 35px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}
 a:hover{
  background: #bb4f4f;
  transition: .5s;
}
.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
@media (max-width: 952px){
  label.logo{
    font-size: 30px;
    padding-left: 50px;
  }
  nav ul li a{
    font-size: 16px;
  }
}
@media (max-width: 858px){
  .checkbtn{
    display: block;
  }
  ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 20px;
    text-decoration:none;
  }
  a:hover,a.active{
    background: none;
    color: #bb4f4f;
  }
  #check:checked ~ ul{
    left: 0;
  }
}
section{
  background: url(bg1.jpg) no-repeat;
  background-size: cover;
  height: calc(100vh - 80px);
}
font
{
    color:black;
}
 </style>
 
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">CS Department - About</label>
      <ul>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
    <font size="5">
<b>C S Department</b>
<p>
    <i>The department was started in 2001 with B.Sc. Computer Science programme under unaided stream with <br>
    the strength of 24 students. In 2010 the course was converted into regular stream. Currently the <br>
    department provides 4 additional programs with an aim in career development of entire college.<br></i>
</p>
<b>Mission</b>

<p>
   <i> The  Department of Computer Science has a mission  to  enable students acquire good academic skills<br>
     and devotion to knowledge, to indoctrinate the values of determination, sincerity and honesty, and <br>
     to  make powerful them to become responsible citizens of this country .The department always plays <br>
     its role in keeping the students to cope up with the industry standards.</i>
</p></font>
    <section></section>
  </body>
</html>