<?php
session_start();
include "work.php";
include "connect.php";
$a=" ";
$res=register2($con);

if($res!="Success"){
	
 $a=$res;
}
else{
	$_SESSION['Email'] = $_POST['email'];

	url('info.php');
}



?>
<html>
<head>
<title> Givers--Donate here</title>
<link rel ="stylesheet" href="css/style.css">
</head>
<body>
<div id="block">

<a href="index.php"><img src = "images/Capturre.jpg"; height=120px; width=200px></a>
</div>
<hr>
<div id="come">
<div id="menuu">
				<a href="signup.php"><strong>Sign Up</strong></a>
				<a href="login.php"><strong>Login</strong></a>
			</div>
			

<div id="form">
<form method="POST" action="login.php">
<p><strong>LOGIN</strong></p>
<label>Email: </label><br/>
<input type="text" name="email" class="inputFields" required /><br><br/>
<label>Password: </label><br/>
<input type="password" name="password" class="inputFields" required/><br><br/>

<input type="submit" class="thebuttons" name="submit" /><br>
<?php
echo $a;
?>

</div>

</div>
</body>
</html>

