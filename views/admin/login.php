<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Color Compass Admin Login</title>
		<link href="/css/foundation.min.css" rel="stylesheet" type="text/css">
		<link href="/css/admin.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div id="content" class="row">
			<div id="login_div" class="small-4 small-centered">
				<h3>Color Compass Admin Login</h3>
				<hr>
				<form action="/cccadmin/login" method="post" class="cmxform">
					<?=$errMsg;?>
					<label for="email">Email: </label>
					<input name="email" type="text" id="email" value="<?=$email;?>" size="40" />
					<label for="passwrd">Password: </label>
					<input type="password" name="passwrd" id="passwrd" />
					<br class="clear">
					<input type="submit" name="login" value="Login" class="button" />
				</form>
				<p><a href="/">Home Page</a></p>
			</div>
		</div>
	</body>
</html>
