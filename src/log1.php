<?php

$severname = "localhost";
$username = "root";
$password = "";
$dbname = "varun";

$conn = mysqli_connect($severname, $username, $password, $dbname);

if ($conn->connect_error){
die("connectioin failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM register";
$records = $conn->query($sql);
 
 ?>

<!DOCTYPE HTML>
<html>
<head>
<title>BLOOD MANAGEMENT SYSTEM</title>
<link rel="stylesheet" type="text/css" href='style.css'>
<link rel="stylesheet" type="text/css" href='../resource/font.css'> 
</head>
<body>
<h3><a href="log.php">LOGOUT</a></h3>
<br><br><br><br><br><br>
<center><h1>Registered Form</h1></center

<div style="margin-left:200px">
<table width="600" border="1" cellpadding="1" cellspacing="1" >
<tr>
<th>Name</th>
<th>Address</th>
<th>Phn no</th>
<th>Gender</th>
<th>Pin Code</th>
<th>State</th>
<th>Blood</th>
<tr>
<?php
while($row = $records->fetch_assoc()){
	echo "<tr>";
	echo "<td>" . $row['name']."</td>";
		echo "<td>" . $row['addd']."</td>";
			echo "<td>" . $row['mob']."</td>";
	echo "<td>" . $row['gender']."</td>";
		echo "<td>" . $row['pin']."</td>";
			echo "<td>" . $row['state']."</td>";
			echo "<td>" . $row['blood']."</td>";
		
	echo "</tr>";
}
?>

</table>
</div>

</body>
</html>