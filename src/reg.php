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
$pin=$_POST['pin'];
$state=$_POST['state'];
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
$sql = "INSERT INTO register values ('$name', '$addd', '$mob', '$gender','$pin', '$state', '$blood')";

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
<div class="enquiry1">
</div>
<div class="enquiry">
<form method="post" action="reg.php">
<br><br><br><br><br><br><table >
<tr>
<td>
<b>NAME:</td><td><input type="text" name="name" style="font-size:10pt;height:30px; width:400px;margin-left:250px"><br><br>
</td>
</tr>
<tr>
<td><b>ADDRESS:</td><td><input type="text" name="addd" style="font-size:10pt;height:30px; width:400px;margin-left:250px"><br><br>
</td></tr>
<td>
<b>MOBILE NUMBER:</td><td><input type="text" name="mob" style="font-size:10pt;height:30px; width:400px;margin-left:250px" ><br><br>
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
<td><b>PINCODE:</td><td><input type="text" name="pin" style="font-size:10px;height:30px; width:400px;margin-left:250px;margin-top:20px" ><br><br>
</td></tr>

<td><b>STATE:</td><td><select scroll="yes" name="state" margin-right="500px" style="font-size:10pt;height:30px;width:400px;margin-left:250px;margin-top:20px"><br><br>
<option value="pujab">PUNJAB</option>
<option value="haryana">HARYAYA</option>
<option value="delhi">DELHI</option>
<option value="maharashtra">MAHARASHTRA</option>
<option value="mumbai">MUMBAI</option>
<option value="kerala">KERALA</option>
<option value="chandigarh">CHANDIGARH</option>
<option value="gujrat">GUJRAT</option>
<option value="jharkhand">JHARKHAND</option>
<option value="agra">AGRA</option>
<option value="himachal pradesh">HIMACHAL PRADESH</option>
<option value="tamilnadu">TAMILNADU</option>
</select>
</td></tr><br><br>
<tr>
<td><b>BLOOD TYPE</td><td><select scroll="yes" name="blood" margin-right="500px"  style="font-size:10pt;height:30px;width:400px;margin-left:250px;margin-top:20px"><br><br>
<option value="+a">-----</option>
<option value="+a">+a</option>
<option value="+b">+b</option>
<option value="+ab">+ab</option>
<option value="-ab">-ab</option>
<option value="+o">+o</option>
<option value="-a">-a</option>
<option value="-b">-b</option>
<option value="-ab">-ab</option>
<option value="-o"> -o</option>
</select>
</td></tr>
<td><br><br><br><br> <center> <input type="submit" name="submit" value="REGISTER" style="width:300px;height:50px"></center>
</td></tr>
</table>
</form>

</div>


<div class="footer1">
<footer style="margin-top: 40px; width: 100%; margin-left: 300px; margin-right: 400px">
<h3>Copyright @ LIFE SAVER| Powered by: VARUN</h3>
<a href="https://www.google.com"> <img src="google.png"></a>
  <a href="https://www.twitter.com"><img src="twitter.png"></a>
  <a href="https://www.facebook.com"> <img src="facebook.png"></a>
  </footer> 
</div>
</body>

</html>
