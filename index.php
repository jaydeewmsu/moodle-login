<!DOCTYPE html>
<!--
/* 
 * Copyright (C) 2022 ICS WMSU - All Rights Reserved
 * WMSU Digital Education
 * Developed By: Jaydee C. Ballaho and Jason A. Catadman
 */
 -->
<html>
	<head>
		<title>Digital Education | Login</title>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
		<link rel="icon" type="image/png" href="WMSU-LOGO-min.ico" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
        <div class="table">
			<div class="center-table">
				<div class="common-box">
					<div class="box-image">
						<img class="wmsu-image" src="wmsu-logo.png">
						<div class="title">DIGITAL EDUCATION</div>
					</div>
					<?php if($_GET["errorcode"] == 3) { ?>
						<div class="group-error">
							<span class="text-error">Invalid username and password. Try again.</span>
						</div>
					<?php } ?>
					<form action="https://lms.wmsuccs.com/login/index.php" method="post">
						<div class="group">
							<label>Email Address</label>
							<input type="text" name="username" class="textinput" required placeholder="">
						</div>
						<div class="group">
							<label>Password</label>
							<input type="password" name="password" class="textinput" required placeholder="">
						</div>
						<div class="dash-footer">
							<button href="" id="login-btn">Continue</button>
						</div>
					</form>
					<div class="group forgot">
						<a href="https://lms.wmsuccs.com/login/forgot_password.php/" id="forgot-password">Forgot Password?</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
