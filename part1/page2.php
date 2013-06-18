<?php 
session_start();

$_SESSION['first_name'] = $_POST['first_name'];
$_SESSION['last_name'] = $_POST['last_name'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['state'] = $_POST['state'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['email'] = $_POST['email'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>PHPTest</title>
    <style>
    	body {
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #f5f5f5;
		}
    	.form-signin {
			max-width: 300px;
			padding: 19px 10px 10px;
			margin: 0 auto 20px;
			background-color: #2090CF;
			border: 1px solid #e5e5e5;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
			-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
			box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
		}
		.form-signin input[type="text"],.form-signin input[type="password"] {
			font-size: 16px;
			height: auto;
			margin-bottom: 15px;
			padding: 5px 9px;
			display: block;
			width: 230px;
		}
    </style>		
  </head>
  <body>
  	<div style="margin: 50px auto 20px;">
		<form class="form-signin" method="post" action="page3.php">
			<div style="background: white;margin:15px 0px 0px 0px;padding:10px 20px 5px 20px;">
				<input id="card_type" name="card_type" type="text" placeholder="Card Type">
				<input id="card_number" name="card_number" type="text" placeholder="Card Number">
				<input id="expiration_date" name="expiration_date" type="text" placeholder="Expiration Date">
				<input id="verify_code" name="verify_code" type="text" placeholder="Verification Code">
				<input type="submit" name="submit" value="Next" style="height: 30px; width: 100px; font-size:16px">
			</div>			
		</form>
	</div>
  </body>
</html>

