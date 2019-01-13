<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<div class="container">
    <h2>Create a New Account</h2>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
		<div class="input-group">
			<label>FIRST NAME</label>
			<input type="text" name="first_name" placeholder="arafah" required="">
		</div>
		<div class="input-group">
			<label>LAST NAME</label>
			<input type="text" name="last_name" placeholder="tekaje" required="">
		</div>
		<div class="input-group">
			<label>USERNAME</label>
			<input type="text" name="username_name" placeholder="Dark17" required="">
		</div>
        <div class="input-group">
			<label>Email</label>
			<input type="text" name="email" placeholder="arafahsep002@gmail.com" required="">
		</div>
		<div class="input-group">
			<label>PHONE NUMBER</label>
			<input type="text" name="phone" placeholder="081234567890" required="">
		</div>
		<div class="input-group">
			<label>PASSWORD</label>
			<input type="text" name="password"  required="">
		</div>
		<div class="input-group">
			<label>CONFIRM PASSWORD</label>
			<input type="text" name="confirm_password"  required="">
		</div>
		<div class="send-button">
		<input type="submit" name="signupSubmit" value="CREATE ACCOUNT" >
        </div>
		</form>
		<p>you have an account? <a href="index.php">login</a> here</p>
    </div>
</div>