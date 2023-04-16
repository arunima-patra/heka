<?php

#include "config.php";

#$s = "";
#if ($_SERVER["REQUEST_METHOD"] == "GET") {
#	$s = $_GET['search'];
#}
#$q = "select * from Products where Name like '%$s%'";
?>

<!DOCTYPE html>
<html>

<?php
	$title="Heka RX";
	include 'head.php';
?>

<body>

<?php
	$activeNavTabs = array("Home");
	include 'template.php';
?>

<div class="ad-column">
	<?php
		$adType = "desktop";
		include 'ad.php';
	?>
</div>

<div class="content-column">
	<h2>Home</h2>
</div>

<div class="ad-column">
	<?php
		$adType = "desktop";
		include 'ad.php';
	?>
</div>

</body>

</html>