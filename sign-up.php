<?php
	session_start();
	include 'config.php'
?>

<?php

$error="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$sex = $_POST['sex'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	if ($conn->query("select UserName from Users where UserName = '".$username."';")->num_rows !== 0) {
		$error = "Username taken. Enter different username.";
	}
	elseif ($conn->query("select Phone from Users where Phone = ".$phone.";")->num_rows !== 0) {
		$error = "Account exists with given Phone number.";
	}
	elseif ($conn->query("select Email from Users where Email = '".$email."';")->num_rows !== 0) {
		$error = "Account exists with given Email Address.";
	}
	elseif ($password !== $_POST['confirmpassword']) {
		$error = "Password does not match.";
	}
	else {
		$conn->query("insert into Users (FullName, DoB, Sex, Phone, Email, UserName, Password)
		values ('$name', '$dob', '$sex', '$phone', '$email', '$username', '$password');");
		$_SESSION['username'] == $username;
		header("location:profile.php");
	}
}

?>

<!DOCTYPE html>
<html>

<?php
	$title="Sign Up : Heka RX";
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
		<h2>Sign Up</h2>
		<form
			method="post"
			action="<?php
						echo htmlspecialchars($_SERVER['PHP_SELF'])
					;?>"
		>
			<div>
				<label for="name">Name</label>
				<input
					type="text"
					name="name"
					id="name"
					required
				>
			</div>
			<div>
				<label for="dob">Date of Birth</label>
				<input
					type="date"
					name="dob"
					id="dob"
				>
			</div>
			<div>
				<label for="sex">Sex</label>
				<select name="sex" id="sex">
					<option value="" hidden></option>
					<option value="F">Female</option>
					<option value="M">Male</option>
				</select>
			</div>
			<div>
				<label for="phone">Phone No.</label>
				<input
					type="tel"
					name="phone"
					id="phone"
					required
				>
			</div>
			<div>
				<label for="email">Email</label>
				<input
					type="email"
					name="email"
					id="email"
					required
				>
			</div>
			<div>
				<label for="username">User Name</label>
				<input
					type="text"
					name="username"
					id="username"
					required
				>
			</div>
			<div>
				<label for="password">Password</label>
				<input
					type="password"
					name="password"
					id="password"
					required
				>
			</div>
			<div>
				<label for="confirmpassword">
					Confirm Password
				</label>
				<input
					type="password"
					name="confirmpassword"
					id="confirmpassword"
					required
				>
			</div>
			<div>
				<input type="submit" value="Sign Up">
				<?php echo $error ?>
			</div>
		</form>
	</div>
	Already have an account? <a href="./login.php">Login</a>
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