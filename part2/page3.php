<?php
session_start(); 
require_once("initialize.php"); 
$_SESSION['card_type'] = $_POST['card_type'];
$_SESSION['card_number'] = $_POST['card_number'];
$_SESSION['expiration_date'] = $_POST['expiration_date'];
$_SESSION['verify_code'] = $_POST['verify_code'];
$payment = new Payment();
$customer = new Customer();
$customer->first_name = $_SESSION['first_name'];
$customer->last_name = $_SESSION['last_name'];
$customer->address = $_SESSION['address'];
$customer->city = $_SESSION['city'];
$customer->state = $_SESSION['state'];
$customer->phone = $_SESSION['phone'];
$customer->email = $_SESSION['email'];
$customer->save();
$payment->card_type = $_SESSION['card_type'];
$payment->card_number = $_SESSION['card_number'];
$payment->card_exp_date = $_SESSION['expiration_date'];
$payment->verification_code = $_SESSION['verify_code'];
$payment->save();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  	<head>
    	<title>Humitech</title>
    	<style type="text/css">
		<!--
		@import url("style.css");
		-->
		</style>
	</head>
  	<body>
  		<div style="margin: 50px auto 20px;">
  			<div style="margin: 0 auto; max-width: 500px;">
	  			<table id="hor-minimalist-a" summary="Employee Pay Sheet">
				    <thead>
				    </thead>
				    <tbody>
				    	<tr>
				        	<td>First Name</td>
				            <td><?php echo $_SESSION['first_name'] ?></td>
				        </tr>
				        <tr>
				        	<td>Last Name</td>
				            <td><?php echo $_SESSION['last_name'] ?></td>
				        </tr>
				        <tr>
				        	<td>Address</td>
				            <td><?php echo $_SESSION['address'] ?></td>
				        </tr>
				        <tr>
				        	<td>City</td>
				            <td><?php echo $_SESSION['city'] ?></td>
				        </tr>
				        <tr>
				        	<td>State</td>
				            <td><?php echo $_SESSION['state'] ?></td>
				        </tr>
				        <tr>
				        	<td>Phone</td>
				            <td><?php echo $_SESSION['phone'] ?></td>
				        </tr>
				        <tr>
				        	<td>Email Address</td>
				            <td><?php echo $_SESSION['email'] ?></td>
				        </tr>
				        <tr>
				        	<td>Card Type</td>
				            <td><?php echo $_SESSION['card_type'] ?></td>
				        </tr>
				        <tr>
				        	<td>Card Number</td>
				            <td><?php echo $_SESSION['card_number'] ?></td>
				        </tr>
				        <tr>
				        	<td>Expiration Date</td>
				            <td><?php echo $_SESSION['expiration_date'] ?></td>
				        </tr>
				        <tr>
				        	<td>Verification Code</td>
				            <td><?php echo $_SESSION['verify_code'] ?></td>
				        </tr>
				    </tbody>
				</table>
			</div>
		</div>
	</body>
</html>
	