<?php
include "work.php";
include "connect.php";
include("mail.php");
$res=register($con,$mail);


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
<form method="POST" action="signup.php" enctype="multipart/form-data">
<p><strong>SIGNUP</strong></p>
<label> Name *: </label><br/>
<input type="text" name="name" class="inputFields" required /><br><br/>

<label>Email *: </label><br/>
<input type="text" name="email" class="inputFields" required /><br><br/>
<label>Password *: </label><br/>
<input type="password" name="password" class="inputFields" required /><br><br/>
<label>Re-enter Password *: </label><br/>
<input type="password" name="passwordconfirm" class="inputFields" required/><br><br/>
<label>Occupation *: </label><br/>
<input type="text" name="occupation" class="inputFields" required /><br><br/>
<label>Gender *:</label>
<select name="g">
<option value="M">Male</option>
<option value="F">Female</option>
</select><br><br/>
<label>Birthday *:</label>
<pre style="font-size:10px"><input type="text" name="birthday" class="inputFields" required/> Example:06/12/1996</pre>
<input type="checkbox" name="terms" required/>I agree with terms and conditions.<br><br/>
<input type="submit"  name="submit" class="thebuttons"/><br><br/>
<?php
echo $res;


?>
</div>
</div>
</body>
</html> 