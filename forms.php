<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
<form  method="GET" action="">
name:<font color="red">*</font><input type="text" name="name"/><br/>
email:<font color="red">*</font><input class="" type="email" name="email"/><br/>
password:<font color="red">*</font><input type="password" name="password"/><br/>
<input type="submit" name="submit">
</form>
<?php 
if(isset($_GET['submit'])){
	if(empty($_GET['name'])){
		echo "<p>enter name</p><br>";
	}
	else{
		$name=htmlspecialchars($_REQUEST['name']);
		echo "$name<br>";
	}
	if(empty($_GET['email'])){
		echo "enter mail id<br>";
	}
	else{
		$email=htmlspecialchars($_REQUEST['email']);
		echo "$email<br>";
	}
	if(empty($_GET['password'])){
		echo "enter password<br>";
	}
	else{
		$password=htmlspecialchars($_REQUEST['password']);
		echo "$password<br>";
	}
}
?>
</body>
</html>