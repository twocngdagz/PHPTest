
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>PHPTest</title>
    <style>
    	body {
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #f5f5f5;
			font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
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
		.form-signin input[type="text"],.form-signin input[type="password"]{
			font-size: 12px;
			height: auto;
			margin-bottom: 15px;
			padding: 5px 9px;
			display: block;
			width: 230px;
			color: #669;
		}
    </style>		
  </head>
  <body>
  	<div style="margin: 50px auto 20px;">
		<form class="form-signin" method="post" action="page2.php">
			<div style="background: white;margin:15px 0px 0px 0px;padding:10px 20px 5px 20px;">
				<input id="first_name" name="first_name" type="text" placeholder="First Name">
				<input id="last_name" name="last_name" type="text" placeholder="Last Name">
				<input id="state" name="state" type="text" placeholder="State">
				<input type="submit" name="submit" value="Next" style="height: 30px; width: 50px; font-size:12px" >
			</div>			
		</form>
	</div>
  </body>
</html>


