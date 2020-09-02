<?php
	
	session_start();
	$error = "";
	
	if (array_key_exists("Logout", $_GET)) {
		unset($_SESSION);
		setcookie("id", "", time() - 60*60);
		$_COOKIE["id"] = "";
	}else if ((array_key_exists("id", $_SESSION) AND $_SESSION["id"]) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE["id"])) {
		header("Location: loggedInPage.php");
	}
	if (array_key_exists("submit", $_POST)) {
		include("connection.php");
		
		if (!$_POST["email"]) {
			$error .= "An email address is required.<br />";
		}
		if (!$_POST["password"]) {
			$error .= "A password is required.<br />";
		}
		if ($error != "") {
			$error = "<p><strong>There are error(s) in your form:</strong></p>".$error;
		} else {
				if ($_POST["signUp"] == "1") {
					$query = "SELECT `id` FROM `users` WHERE `email` = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
					$result = mysqli_query($link, $query);
					if (mysqli_num_rows($result) > 0) {
						$error = "That email address is taken.";					
					} else {
							$query = "INSERT INTO `users` (`email`, `password`) VALUES('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";
							if (!mysqli_query($link, $query)) {
								$error = "<p>Could not sign you up - please try again later.</p>";							
							} else {
									$query = "UPDATE `users` SET `password` = '".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id = ".mysqli_insert_id($link)." LIMIT 1";
									mysqli_query($link, $query);
									$_SESSION["id"] = mysqli_insert_id($link);
									if ($_POST["stayLoggedIn"] == "1") {
										setcookie("id", mysqli_insert_id($link), time() + 60*60*24*365);
									}
									header("Location: loggedInPage.php");
							}
					}
				} else {
					$query = "SELECT * FROM `users` WHERE `email` = '".mysqli_real_escape_string($link, $_POST["email"])."'";
					$result = mysqli_query($link, $query);
					$row = mysqli_fetch_array($result);
					if (isset($row)) {
						$hashedPassword = md5(md5($row["id"]).$_POST["password"]);
						if ($hashedPassword == $row["password"]) {
							$_SESSION["id"] = $row["id"];
							if ($_POST["stayLoggedIn"] == "1") {
								setcookie("id", $row["id"], time() + 60*60*24*365);
							}
							header("Location: loggedInPage.php");
						} else {
							$error = "That email/password combination could not be found.";
						}
					} else {
							$error = "That email/password combination could not be found.";
						}	
				}	
			}
	}


?>


<?php include("header.php"); ?>
<html>
  <body>
		<div class="container" id="hpContainer">
			<h1>Secret Diary</h1>
			<p><strong>Where you can store your deepest thoughts.</strong></p>
			<div id="error"><?php echo $error; ?></div>
			<form method="post" id="SignUpForm">
				<fieldset class="form-group">
					<label for="email">E-mail</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter your e-mail" aria-describedby="emailHelp">
				</fieldset>
				<fieldset class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
				</fieldset>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="remember" name="stayLoggedIn" value=1>
					<label class="form-check-label" for="remember"> Remember me</label>
				</div>
				<fieldset>
					<input type="hidden" name="signUp" value="1">
					<input type="submit" class="btn btn-success" name="submit" value="Sign Up">
				</fieldset>	
				<p><a class="toggleForms">Log in?</a></p>			
			</form>		
			
			<form method="post" id="LogInForm">
				<fieldset class="form-group">
					<label for="email">E-mail</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter your e-mail" aria-describedby="emailHelp">
				</fieldset>
				<fieldset class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
				</fieldset>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="remember" name="stayLoggedIn" value=1>
					<label class="form-check-label" for="remember"> Remember me</label>
				</div>	
				<fieldset class="form-group">
					<input type="hidden" name="signUp" value="0">
					<input type="submit" class="btn btn-success" name="submit" value="Log in">
				</fieldset>	
				<p><a class="toggleForms">Sign up?</a></p>			
			</form>
		</div>
	</body>
</html>
<?php include("footer.php"); ?>
