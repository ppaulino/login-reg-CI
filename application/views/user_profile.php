<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>User Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Assignment: Login and Registration</h1>
		<h2>Welcome, <?= $user_session["first_name"]?>!</h2>
		<h3>User Information:</h3>
		<p>First Name: <?= $user_session["first_name"]?></p>
		<p>Last Name: <?= $user_session["last_name"]?></p>
		<p>Email: <?= $user_session["email"]?></p>
		<p><a href="/login/logout">Logout</a></p>
	</div>
</body>
</html>