<!DOCTYPE HTML>
<html>
<head>
<title>BLOOD MANAGEMENT SYSTEM</title>
<link rel="stylesheet" type="text/css" href='style.css'>
<link rel="stylesheet" type="text/css" href='../resource/font.css'> 
</head>
<style>
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
</style>
<body
<div>
<h2><a href="home.php">BACK</a></h2>
</div>
<div class="aa">
<h2>Login</h2>
<form action = "log.php" method = "post">
 
 <input type="text" name="userid" placeholder="Please enter user name..."><br><br>
<input type="password" name="password" placeholder="Please enter Password..."><br><br>
  <input type="submit" name="submit" value="submit">
</form>
</div>
<body>
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

$sql = "SELECT * FROM admin WHERE userid='$userid' AND password='$password'";
$result = $conn->query($sql);

 if (!$row = $result->fetch_assoc()){
	echo "<script>alert(' your username password incoorect')</script>";
}
else {
		echo "<script>window.open('al.php', '_self')</script>";}

}
	?>