<?php 

	$errorname = $erroremail = $errorweb = $errorgrnder = "";  // Empty Vriable
	/* PHP Form Validation */
	$name = $email = $website = $comment = $gender = ""; // Empty Vriable


	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST['name'])) {
			$errorname = "<span style='color: red'>Name is required</span>";
		}else{
			$name = validate($_POST['name']);
			// check if name only contains letters and whitespace
		    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		      $errorname = "<span style='color: red'>Only letters and white space allowed</span>";
		    }
		}

		if (empty($_POST['email'])) {
			$erroremail = "<span style='color: red'>E-mail is required</span>";
		}else{
			$email = validate($_POST['email']);
			// check if e-mail address is well-formed
		    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		      $erroremail = "<span style='color: red'>Invalid E-mail formate</span>";
		    }
		}

		if (empty($_POST['website'])) {
			$errorweb = "<span style='color: red'>Website is required</span>";
		}else{
			$website = validate($_POST['website']);
			// check if URL address syntax is valid
		    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
		      $errorweb = "<span style='color: red'>Invalid Website formate</span>";
		    }
		}


		if (empty($_POST['gender'])) {
			$errorgrnder = "<span style='color: red'>Gender is required</span>";
		}else{
			$gender = validate($_POST['gender']);
		}
		
		$comment 	= validate($_POST['comment']);
		

		/* Dtat Display */
		/*echo "Name: ".$name."<br>";
		echo "E-mail: ".$email."<br>";
		echo "Website: ".$website."<br>";
		echo "Comment: ".$comment."<br>";
		echo "Gender: ".$gender;*/
	}

	function validate($data) {
		$spaceRemove 	= trim($data);
		$scriptRemove 	= stripcslashes($spaceRemove);
		$crosBrowser 	= htmlspecialchars($scriptRemove);
		return $data;
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Fundamentals Training</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<!-- Main Part -->
	<div class="php_coding">
		<!-- Header Area -->
		<section class="header_area">
			<h2><?php echo "PHP Fundamentals Training"; ?></h2>
		</section>
		<!-- Main Content Area -->
		<section class="main_content">
			<hr>
			PHP Form Validation
			<hr>

			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
				<table>
					<p style="color: red">* Required field</p>
					<tr>
						<td>Name </td>
						<td style="color: red"><input type="text" name="name">* <?php echo $errorname; ?></td>
					</tr>
					<tr>
						<td>E-mail </td>
						<td style="color: red"><input type="text" name="email">* <?php echo $erroremail; ?></td>
					</tr>
					<tr>
						<td>Website </td>
						<td style="color: red"><input type="text" name="website">* <?php echo $errorweb; ?></td>
					</tr>
					<tr>
						<td>Comment </td>
						<td><textarea name="comment" cols="40" rows="5"></textarea></td>
					</tr>
					<tr>
						<td>Gender </td>
						<td>
							<input type="radio" name="gender" value="female">Female
							<input type="radio" name="gender" value="male">Male
							<span style="color: red">* <?php echo $errorgrnder; ?></span>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Submit">
						</td>
					</tr>
				</table>
			</form>
		</section>
		<!-- Footer Area -->
		<secrtion class="footer_area">
			<h2><?php echo "tmiprogramer.tk"; ?></h2>
		</secrtion>
	</div>
</body>
</html>