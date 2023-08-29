<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
	<link rel="icon" type="image/x-icon" href="/style/icon.png">
	<link rel="stylesheet"  href="style.css">
</head>
<body>
	

	<section>
		<div class="content-area">
			<div class="header-area">
				<h1>Login Info</h1>
			</div>
		</div>
		<div class="form-area">
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
				
				<div class="form-group">
					<label>email</label>
					<input type="email" name="email" autocomplete="off">
				</div>

				<div class="form-group">
					<label>password</label>
					<input type="password" name="pass" autocomplete="off">
				</div>

				<input class="btn" type="submit" value ="login" name="login">
			</form>
			
			<div class="error">
				<h3>Email & Password Not Match!</h3>
			</div>
			
		</div>
		
	</section>								


</body>
</html>