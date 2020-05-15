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
$addd=$_POST['addd'];
$mob=$_POST['mob'];

$gender=$_POST['gender'];
$blood=$_POST['blood'];
if($name==''){
echo"<script>alert('enter your name')</script>";
}
else if($addd==''){
echo"<script>alert('enter your userid')</script>";
}
else if($mob==''){
echo"<script>alert('enter your phone no')</script>";
}
else{
$sql = "INSERT INTO send values ('$name', '$addd', '$mob', '$gender','$blood')";

if ($conn->query($sql) === TRUE) {
   
echo "<script>alert('You Are Register Successfully!!!')</script>";
}
 else {
    echo "<script>alert('error')</script>";
}
}}

?>

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
<center><h2>Send Request</h2>
<form method="post" action="send.php">
<tr>
<td>
<b>NAME:</td><td><input type="text" name="name" style="font-size:10pt;height:30px; width:400px;margin-left:250px"><br><br>
</td>
</tr>
<tr>
<td><b>ADDRESS:</td><td><input type="text" name="addd" style="font-size:10pt;height:30px; width:400px;margin-left:250px"><br><br>
</td></tr>
<td>
<b>MOBILE NUMBER:</td><td><input type="number" name="mob" style="font-size:10pt;height:30px; width:400px;margin-left:250px" ><br><br>
</td></tr>
<tr>
<td><b>GENDER:</td>
<td>
<select scroll="yes" margin-right="500px"  name="gender" style="font-size:10pt;height:30px;width:400px;margin-left:250px"><br><br>
<option value="female">FEMALE</option>
<option value="male">MALE</option>
</select>
</td>
</tr>
<tr>
<td><br>BLOOD TYPE:</td><td><input type="text" name="blood" style="font-size:10px;height:30px; width:400px;margin-left:250px;margin-top:20px" ><br><br>
</td></tr>
<td><br><br><br><br> <center> <input type="submit" name="submit" value="REGISTER" style="width:300px;height:50px"></center>
</td></tr>
</table>
</form>
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
