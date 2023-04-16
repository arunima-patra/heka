<?php
	session_start();
	include 'config.php'
?>

<?php

$error = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if ($conn->query("select UserName from Users where UserName = '$username' and Password = '$password'")->num_rows == 1) {
		$_SESSION['username'] = $username;
		header("location:profile.php");
	}
	else {
		$error = "Incorrect Credentials";
	}
}

?>

<!DOCTYPE html>
<html>

<?php
	$title="Login : Heka RX";
	include 'head.php';
?>

<body>

<?php
	$activeNavTabs = array("Profile");
	include 'template.php';
?>

<main>

<div class="ad-column">
	<?php
		$adType = "desktop";
		include 'ad.php';
	?>
</div>

<div class="content-column">
	<div class="form-container">
		<h2>Login</h2>
		<form
			method="post"
			action="<?php
						echo htmlspecialchars($_SERVER['PHP_SELF'])
					;?>"
		>
			<div>
				<label for="username">Username</label>
				<input type="text" name="username" id="username" required>
			</div>
			<div>
				<label for="password">Password</label>
				<input type="text" name="password" id="password" required>
			</div>
			<input type="submit" value="Login">
			<?php echo $error; ?>
		</form>
	</div>
	Do not have an account? <a href="./sign-up.php">Sign Up</a>
</div>

<div class="ad-column">
	<?php
		$adType = "desktop";
		include 'ad.php';
	?>
</div>

</main>

</body>

</html>