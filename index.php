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
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" type="image/png" href="ICS-min.png" />
		<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	</head>
	<body>
        <div class="table">
			<div class="center-table">
				<div class="common-box">
					<div class="box-image">
						<img class="wmsu-image" src="ICS-min.png">
						<div class="title">DIGITAL EDUCATION</div>
					</div>
					<?php if($_GET["errorcode"] == 3) { ?>
						<div class="group-error">
							<span class="text-error">Invalid username and password. Try again.</span>
						</div>
					<?php } ?>
					<form action="https://lms.wmsuics.tech/login/index.php" method="post">
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
						<a href="https://lms.wmsuics.tech/login/forgot_password.php/" id="forgot-password">Forgot Password?</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
