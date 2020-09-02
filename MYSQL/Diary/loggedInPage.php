<?php

	session_start();
	
	if (array_key_exists("id", $_COOKIE)) {
		$_SESSION["id"] = $_COOKIE["id"];
	}
	if (array_key_exists("id", $_SESSION)) {
		include("connection.php");
		$query = "SELECT `diary` FROM `users` WHERE `id` = ".mysqli_real_escape_string($link, $_SESSION["id"])." LIMIT 1";
		$row = mysqli_fetch_array(mysqli_query($link, $query));
		$diaryContent = $row["diary"];
	} else {
		header("Location: index.php");
	}
	
?>
<html>
	<head>
		<?php include("header.php"); ?>
	</head>
	<body>
		<nav class="navbar navbar-light bg-light">
			<a class="navbar-brand"><strong>My Diary</strong></a>
			<a href='index.php?Logout=1'><button class="btn btn-dark my-2 my-sm-0">Log Out</button></a>
		</nav>
		<div class="container-fluid">
			<textarea class="form-control" id="diary"><?php echo $diaryContent; ?></textarea>
		</div>
		<?php	include("footer.php"); ?>
	</body>
</html>

	