<?php 
	if (isset($_POST['submit'])){
		if($_POST['username'] == "admin" && $_POST['password'] == "Admin#1234"){
			header("Location: admin.php");
			exit;
		} else {
			$valid = false;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>

	<h1>Login Admin</h1>

	<?php if(isset($valid)): ?>
		<h1 style="color:red;">Username/Password salah!</h1>
	<?php endif ?>

	<ul>
		<form action="" method="post">
			<li>
				<label for="username">Username: </label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password: </label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<button type="submit" name="submit">Login</button>
			</li>
		</form>
	</ul>
</body>
</html>