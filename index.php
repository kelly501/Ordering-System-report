<head>
<meta charset="utf-8">
</head>
<?php
if (isset($_COOKIE["user"])){
	$user=$_COOKIE["user"];
	echo "Welcome, $user!";
} else {
echo <<<LOGIN_FORM
<form method="POST" action="login.php">
User<input type="text" name="user">
Password<input type="password" name="pswd">
<input type="submit" value="Login">
</form>
<a href="regist.html">Regist</a>
LOGIN_FORM;
}
?>
