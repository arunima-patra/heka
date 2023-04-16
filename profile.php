<?php
	session_start();
	include 'config.php';
	if (!isset($_SESSION['username'])) {
		header("location:login.php");
	}
	$user = $conn->query("select * from Users where UserName = '{$_SESSION['username']}';")->fetch_assoc();
?>

<!DOCTYPE html>

<html>

<?php
	$title="Profile : Heka RX";
	include 'head.php';
?>

<body>

<?php
	$activeNavTabs = array("Profile");
	include 'template.php';
?>

<div class="ad-column">
	<?php
		$adType = "desktop";
		include 'ad.php';
	?>
</div>

<div class="content-column">
	<h2>Your Profile</h2>
	<div>
		<h3>Username</h3>
		<?php echo $user["UserName"]; ?>
	</div>
	<div>
		<h3>Name</h3>
		<?php echo $user["FullName"]; ?>
	</div>
	<div>
		<h3>Date of Birth</h3>
		<?php echo $user["DoB"]; ?>
	</div>
	<div>
		<h3>Sex</h3>
		<?php echo $user["Sex"]; ?>
	</div>
	<div>
		<h3>Phone Number</h3>
		<?php echo $user["Phone"]; ?>
	</div>
	<div>
		<h3>Email</h3>
		<?php echo $user["Email"]; ?>
	</div>
	<a href="logout.php">Log Out</a>
</div>

<div class="ad-column">
	<?php
		$adType = "desktop";
		include 'ad.php';
	?>
</div>

</body>

</html>