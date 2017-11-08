<?php 
include("connect.php");




function register($con,$mail){
$error="";
	$success="";
if(isset($_POST['submit']))
{
	
	$Name=test_input($_POST['name']);//prevent from mysqlinjection
	$email=$_POST['email'];
	$pass=pass_checker($_POST['password']);
	$password=$_POST['password'];
$passwordconfirm=pass_checker($_POST['passwordconfirm']);
$occupation=test_input($_POST['occupation']);
$gender=$_POST['g'];
$birthday=birth_check($_POST['birthday']);
	$date=date("F,d Y");
   
	if(strlen($Name)<2) {   
		$error="#First Name is too short.";
		return $error;
		
}
else if($Name!=($_POST['name'])){
	$error="#Invalid name.";
	return $error;
	
	
}

else if(strlen($occupation)<2 or $occupation!=($_POST['occupation'])){
	$error="#Invalid oocupation";
	return $error;
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	$error="#Please enter a valid email";
	return $error;
}
else if($pass!="success"){
	
	return $pass;
}
else if($pass!==$passwordconfirm){
	$error="#Password does not match";
	return $error;
}
else if($birthday=="error"){
	$error="Invalid Birthdate";
	return $error;
	
	
}
else{
	$pd=md5($password);
	$hash=md5(rand(0,1000));
	$insertQuery="INSERT INTO USERS(Name,Email,Password,Occupation,Gender,Birthday,Reg_date,hash) VALUES('$Name','$email','$pd','$occupation','$gender','$birthday','$date','$hash')";
	if(mysqli_query($con,$insertQuery)){
		$success=index($Name,$password,$email,$hash);
		if($success=="yes") {
			$success= "<p style='color:purple;font-size:15px;font-family:Impact'>Your account has been made,Please verify it by clicking the activation<br/>
  			           link that has been send to your email.";
			return $success;
			}
else if($success=="no") {
	$error= "sorry!you can't register";
	
		return $error;
		
	}
	}
	else{
		
		$error="problem";
	}
	
}
}
}
function test_input($data){
	 $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data= preg_replace("/[^a-zA-Z\s]/", "", $data);
  return $data;
	
	
}
function pass_checker($data){
	if(strlen($data)<6){
		$data="password must be greater than 6 characters.";
		return $data;
	
}
else if(!preg_match("/[0-9]/",$data)){
	$data="password must contain at least one digit";
	return $data;
}
else if(!preg_match("/[A-Za-z]/",$data)){
	$data="password must contain at least one letter";
	return $data;
}
else{
	$data="success";
	return $data;
}

}
function birth_check($data){
	$new_data=explode('/',$data);
	if(checkdate($new_data[0],$new_data[1],$new_data[2])){
	return $data;	
	}
	else{
	$data="error";
	return $data;
		
	}
	
	
}
function adhar($data){
	if(strlen($data)<12){
		$data="Aadhar Number must be of 12 digits";
		return $data;
	
}
else if(!ctype_digit($data)){
	
	$data="Aadhar Number must only contain digits.";
	return $data;
}
else{
	
	
	return $data;
}

	
	
	
	
}
function mob($data){
	if(strlen($data)<10){
		$data="Mobile Number must be of 10 digits";
		return $data;
	
}
else if(!ctype_digit($data)){
	
	$data="Mobile Number must only contain digits.";
	return $data;
}
else{
	
	
	return $data;
}

	
	
	
	
}
function donation($data){
	
if(!ctype_digit($data)){
	
	$data="Invalid Amount";
	return $data;
}
else{
	
	
	return $data;
}

	
	
	
	
}

function register2($con){
	if(isset($_POST['submit']))
	{
	
	    $email = mysqli_real_escape_string($con, $_POST['email']);
	    $password = mysqli_real_escape_string($con, $_POST['password']);
		
		if(email_exists($email,$con))
		{
			$result=(mysqli_query($con,"SELECT Password FROM users WHERE email='$email' And active='1'"));
			
			$retrievepassword = mysqli_fetch_assoc($result);
			if(md5($password)!==$retrievepassword['Password']){
				$error="Login Failed! Please make sure that you enter the correct details and that you have activated your account.";
				return $error;
			}
			else{
				$error="Success";
				return $error;
			
			
			}
			
		
}

		
	}		
	
	
	
}

function email_exists($email,$con){
	$result=mysqli_query($con,"SELECT id FROM users WHERE Email='$email' AND active='1'");
	if(mysqli_num_rows($result) == 1){
		return true;
	}
	else{
		return false;
	}
	
}
function url($url)
	{
		header("location:".$url);
	}

function infom($con,$email){
		
if(isset($_POST['submit']))
{
	$mobile=mob($_POST['number']);
	$aadhar=adhar($_POST['aadhar']);
	
	$ngo=$_POST['ngo'];
	$amount=donation($_POST['amount']);
	$date=date("F,d Y");
		if($mobile!=($_POST['number'])){
			return $mobile;
			
		}
		else if($aadhar!=($_POST['aadhar'])){
			return $aadhar;
		}
		else if($amount!=($_POST['amount'])){
			return $amount;
			
		}
		else{
			
			$insertQuery="INSERT INTO info(Name,NGO,Mobile,Aadhar,Amount,Date) VALUES('$email','$ngo','$mobile','$aadhar','$amount','$date')";
			if(mysqli_query($con,$insertQuery)){
				
				url('pay.php');
				
			}
			else{
				return "Error in inserting your information";
				
			}
			
		}
		
	}
	
	}
	

	
?>
