<?php
include("connect.php");
$result=" ";
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $email = mysqli_escape_string($con,$_GET['email']); // Set email variable
    $hash = mysqli_escape_string($con,$_GET['hash']); // Set hash variable
		$search = mysqli_query($con,"SELECT email, hash, active FROM users WHERE email='$email' AND hash='$hash' AND active='0'") or die(mysqli_error()); 
    $match  = mysqli_num_rows($search);
	if($match > 0){
        // We have a match, activate the account
		$result="success";
        mysqli_query($con,"UPDATE users SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysqli_error());
        
	
    }else{
        // No match -> invalid url or account has already been activated.
        $result="already";
	}
}
	else{
    // Invalid approach
    $result="error";
}
	
	

?>
<html>
<head>
<title> Givers--Donate here</title>
<link rel ="stylesheet" href="css/style.css">
</head>
<body style="background-color:white;background-image:none">
<div id="block">

<img src = "Capturre.jpg"; height=120px; width=200px>
</div>
<hr>
<?php
if($result=="already"){
	echo "<center><h2 style='font-family:sans-serif;color:orange;font-size:34px'>Account already Confirmed</center>";
	
	echo "<center><img src='correct.jpg'; height=150px; width=200px></center>";
	echo "<center><h2 style='font-family:sans-serif;color:gold;font-size:14px'> Your email address is already confirmed. Please Continue to<a href='login.php'> Sign In </a>using your email address and your account's password.</center>";
	
}
else if($result=="success"){
	echo "<center><h2 style='font-family:sans-serif;color:orange;font-size:34px'>Registered Email Confirmation</center>";
	echo "<center><img src='correct.jpg'; height=150px; width=200px></center>";
	echo "<center><h2 style='font-family:sans-serif;color:gold;font-size:14px'> Your email address is now confirmed.Now you can<a href='login.php'> Sign In </a>using your email address and your account's password for serving others.</center>";
	
}
else{
	echo "<center><h2 style='font-family:sans-serif;color:orange;font-size:34px'>Invalid approach, please use the link that has been send to your email.</center>";
	
}
?>



</body>
</html>
