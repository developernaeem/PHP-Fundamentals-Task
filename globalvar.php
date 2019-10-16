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
			PHP Global Vriable
			<hr>
			
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
				<label for="name">Username</label>
				<input type="text" name="username">
				<label for="email">E-mail</label>
				<input type="email" name="email">
				<input type="submit" value="Submit">
			</form>
			<br>
			<br>
			<br>

			<a href="test.php?msg=Good&txt=Bye">Sent Data</a>

			<?php 
				
				/* PHP Super Global Vriable */
			  /*$GLOBALS();
				$_SERVER();
				$_REQUEST();
				$_POST();
				$_GET();
				$_FILE();
				$_ENV();
				$_COOKIE();
				$_SESSION();*/

				/* $GLOBALS Variable Use */
				/*$x = 10;
				$y = 15;

				function sum() {
					$GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
				}

				sum();
				echo $z."<br>";*/

				/* $_SERVER Variable Use */
				
				// echo $_SERVER['PHP_SELF']; 		// Exact Directory Show Code
				// echo $_SERVER['SERVER_NAME']; 	// Site Name Show Code
				// echo $_SERVER['SCRIPT_NAME'];    	// Exact Site Path Location
				// echo $_SERVER['HTTP_USER_AGENT'];	// Browser Name Show Code
				// echo $_SERVER['SERVER_ADDR'];		// Browser IP Address Show

				/* $_REQUEST Variable Use */

				/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$name = $_REQUEST['username'];

					if (empty($name)) {
						echo "<span style='color:red'>Name field must not be empty...!!</span>";
					}else {
						echo "<span style='color:green'>You have submitted ".$name."</span>";
					}
				}*/
				

				/* $_POST Variable Use */
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$name = $_POST['username'];
					$email = $_POST['email'];

					if (empty($name)) {
						echo "<span style='color:red'>Name field must not be empty...!!</span>";
					}else {
						echo "<span style='color:green'>You have submitted ".$name."</span>";
					};

					if (empty($email)) {
						echo "Email must be requred";
					}else{
						echo "email submited";
					}
				}

				/* $_GET Variable Use */



			 ?>
		</section>
		<!-- Footer Area -->
		<secrtion class="footer_area">
			<h2><?php echo "tmiprogramer.tk"; ?></h2>
		</secrtion>
	</div>
</body>
</html>