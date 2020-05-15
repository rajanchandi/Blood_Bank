<!DOCTYPE HTML>
<html>
<head>
<title>BLOOD MANAGEMENT SYSTEM</title>
<link rel="stylesheet" type="text/css" href='style.css'>
<link rel="stylesheet" type="text/css" href='../resource/font.css'> 
</head>

<style>
div.absolute {
   
position: absolute;
    top: 10px;
    right: 450px;
    width: 600px;
    height: 500px;

font-size: 40px; 
font-weight: bold;
  padding: 10px;


}

.mySlides {display:none;}
.aa{
width: 600px;
height: 260px;
background-color: rgba(0,0,0,0.5);
margin:0 auto;
margin-top: 100px;
padding-top:10px;
padding-left:50px;
border-radius:15px;
color:white;
font-weight: bolder;
box-shadow: inset -4px -4px rgba(0,0,0,0.5);
font-size:18px;
}
.aa input[type="text"]{
width:200px;
height:30px;
border:0;
border-radius:5px;
padding-left:5px;
}
.aa input[type="password"]{
width:200px;
height:30px;
border:0;
border-radius:5px;
padding-left:5px;
}
.aa input[type="submit"]{
width:100px;
height:35px;
border:0;
boder-radius:5px;
background-color:skyblue;
font-weight:bolder;
padding-left:5px;
}
</div>
</style>
<body>

<div>
<h6 class="logo">logo here</h6><br><br>
</div>

<div id="nav">
<br>
  
<div id="nav_wrapper"><br>
<ul>
       <li><a href="home.php">HOME</a></li>
       <li><a href="regis.php">REGISTRATION</a>

             <li><a href="send.php">SEND REQUEST</a></li>
       <li><a href="view.php">VIEW REQUEST</a>
</li>
       <li><a href="#">LOGIN</a>
      <ul>
       <li><a href="log.php">Admin</a></li>
       <li><a href="user.php">User</a></li>
</ul>
</li>     
       
       <li><a href="about.php">ABOUT</a></li>
</ul>
   </div>
</div>
<div class="aa">
<h2>Login</h2>
<form action = "user.php" method = "post">
 
 <input type="text" name="userid" placeholder="Please enter user name..."><br><br>
<input type="password" name="password" placeholder="Please enter Password..."><br><br>
  <input type="submit" name="submit" value="submit">
</form>
</div>

<div >
<h2><a href="account.php" style="margin-left:470px;padding:30px">Sign Up</a><h2>
</div>
<footer style="margin-top: 40px; width: 100%; margin-left: 300px; margin-right: 400px">
<h3>Copyright @ LIFE SAVER| Powered by: VARUN</h3>
<a href="https://www.google.com"> <img src="google.png"></a>
  <a href="https://www.twitter.com"><img src="twitter.png"></a>
  <a href="https://www.facebook.com"> <img src="facebook.png"></a>
  </footer> 
</div>
</body>

</html>
<?php

$severname = "localhost";
$username = "root";
$password = "";
$dbname = "varun";

$conn = mysqli_connect($severname, $username, $password, $dbname);

if ($conn->connect_error){
die("connectioin failed: " . $conn->connect_error);
}
if(isset($_POST['submit'])){
$userid = $_POST['userid'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE userid='$userid' AND password='$password'";
$result = $conn->query($sql);

 if (!$row = $result->fetch_assoc()){
	echo "<script>alert(' your username password incoorect')</script>";
}
else {
	echo "<script>window.open('reg.php', '_self')</script>";
}

}
	?>