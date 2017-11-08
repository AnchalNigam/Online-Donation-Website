<?php

session_start();
include("connect.php");
include("work.php");

if(isset($_SESSION['Email'])) {
$email=$_SESSION['Email'];
$name=mysqli_query($con,"SELECT Name FROM users WHERE Email='$email'");
$res=mysqli_fetch_assoc($name);
$n=$res["Name"];



}

$r=infom($con,$email);

?>


<html>
<head>
<title> Givers--Donate here</title>
<link rel ="stylesheet" href="css/style.css">
</head>
<body style="background-color:white;background-image:none">
<div id="block">

<img src = "images/Capturre.jpg"; height=120px; width=200px>
</div>
<hr>
<center><img src='quote.png'>
<p style="color:gold;font-size:50px;font-family:vivaldi">Donation Details</p></center>
<div id="come">
<div id="form">
<form method="POST" action="info.php">
<?php
echo "<p style='color:orange;font-size:25px'><b>Hello $n,</strong></p></b>";
echo "<p style='color:gold;font-family:impact;font-size:15px'>Please fill out the below details to carry out your Good Work</p>";
?>

<label>Select your NGO: </label><br/>
<select name="ngo">
<option>Sarthak Foundation</option><option>Humsafar</option><option>Pratham</option>

<option>Dada-Dadi </option>
<option>NHFDC</option>
</select>

<br/><br/>
<label>Mobile Number: </label><br/>
<input type="text" name="number" class="inputFields" required /><br><br/>
<label>Aadhar Number: </label><br/>
<input type="text" name="aadhar" class="inputFields" required /><br><br/>
<label>Donation Amount: </label><br/>
<input type="text" name="amount" class="inputFields" required/><p style='font-size:15px'>Example:10000,50000,100000</p>
<input type="checkbox" name="condition" required/>I have read through the website's Privacy Policy &<br/>
 Donor's Policy and Terms and Conditions to make a donation.<br><br/>
<input type="submit" class="thebuttons" name="submit" value="Make Payment" /><br>
<?php

echo "<p style='color:red'>$r</p>";

?>
</div>
</div>

</body>
</html>
