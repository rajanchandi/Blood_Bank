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
height: 460px;
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
<h2>Create Account</h2>
<form method="post" action="account.php">
 <input type="text" name="name" placeholder="Enter full name..."><br><br>
 <input type="text" name="userid" placeholder="Enter user id..."><br><br>
<input type="number" name="ph" placeholder="Enter ph number..."><br><br>
<input type="password" name="password" placeholder="Enter Password..."><br><br>
  <input type="password" name="password2" placeholder="Re-enter Password..."><br><br>
<input type="submit" name="submit" value="Submit">
</form>
</div>

<div >
<h3><a href="user.php" style="margin-left:470px;padding:30px">Back to Login Page</a><h3>
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
$name=$_POST['name'];
$userid=$_POST['userid'];
$ph=$_POST['ph'];
$password=$_POST['password'];
$password2=$_POST['password2'];
if($name==''){
echo"<script>alert('Enter your name')</script>";
}
else if($userid==''){
echo"<script>alert('Enter your userid')</script>";
}
else if($ph==''){
echo"<script>alert('Enter your phone no')</script>";
}
else if($password==''){
echo"<script>alert('Enter your password')</script>";
}
else if($password!=$password2){
echo"<script>alert('The two password are not match')</script>";
}
else{
$sql = "INSERT INTO user(name,userid,ph,password,password2) values ('$name', '$userid', '$ph', '$password','$password2')";

if ($conn->query($sql) === TRUE) {
   
echo "<script>window.open('after.php', '_self')</script>";
}
 else {
    echo "<script>alert('error')</script>";
}
}}

$conn->close();
?>
