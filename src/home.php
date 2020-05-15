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
<div id="main1">


<div class="w3-content w3-section" style="max-width:1000px">
  <img class="mySlides" src="1.jpg" style="width:100%">
  <img class="mySlides" src="2.jpg" style="width:100%">
    <img class="mySlides" src="3.jpg" style="width:100%">
   <img class="mySlides" src="4.jpg" style="width:100%">

</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<br><br></div>
<div id="transbox">
<div id="next" style="text-align:center";>
<a><h2 style="margin-top:5px" >News Feeds:</h2></a>
<br>
<marquee direction="up" scrollamount="4" style="max-width:900px;height:300px; margin-top: 4px;margin-left: 5px">
<h2><li>now you can take appointment online.</li><br>
<li>you also check the status online.</li><br>
<li>Now we can accept the online payment transaction to make the digital   india</li><br>
<li>please follows the rules and policy</li><br>
<li>keep your area clean and green.</li><br>
<li>please clean your hands before eat</li><br>
</marquee>
</div>


</div>


<div  style="max-width:200px; margin-top: 20px;margin-left: 20px">
  
<marquee direction="up" scrollamount="10"><a href="https://www.samsung.com"><img src="s.jpg"></a> <a href="http://www.venushomeappliances.com/"><img src="v.jpg"></a></marquee>
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