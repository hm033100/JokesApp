<html>
	<head>
		<title>PHP Jokes App</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<div style="width: 100%; text-align: center" >
			<h1>Jokes Application</h1>
		</div>
		
		<?php
			include("db_connection.php");
		?>
		
		<form class="form-horizontal" action="process_login_user.php" method="POST">
		<fieldset>

		<!-- Form Name -->
		<legend>Login User</legend>

		<!-- Text input-->
		<div class="form-group">
		<label class="col-md-4 control-label" for="username">Username</label>  
		<div class="col-md-5">
		<input id="username" name="username" type="text" placeholder="e.g. jsmith" class="form-control input-md">
		<span class="help-block">Enter a username</span>  
		</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		<label class="col-md-4 control-label" for="password">Password</label>  
		<div class="col-md-5">
		<input id="password" name="password" type="password" placeholder="e.g. password" class="form-control input-md">
		<span class="help-block">Enter your passord</span>  
		</div>
		</div>

		<!-- Button -->
		<div class="form-group">
		<label class="col-md-4 control-label" for="user_submit"></label>
		<div class="col-md-4">
			<button id="user_submit" name="user_submit" class="btn btn-primary">Login</button>
			<a href="https://accounts.google.com/o/oauth2/v2/auth?client_id=139281538940-arh29cscgqk2vic01ackiphugqe6m2lr.apps.googleusercontent.com&amp;response_type=code&amp;scope=openid%20email&amp;redirect_uri=http%3A%2F%2F256stuff.com%2Fgray%2Fdocs%2Foauth2.0%2FcomeBack.cgi&amp;state=this-should-be-some-generated-secret-token" target="_blank" style="height: 25px; background: #4E9CAF; text-decoration : none; padding: 10px; text-align: center; border-radius: 5px; color: white; font-weight: bold;">Third Party Google OAuth Sample</a>
		</div>
		</div>

		</fieldset>
		</form>
		
		<?php 
		  $mysqli->close();
		?>
	</body>
</html>
