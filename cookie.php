<?php 
	session_start();
	
	/* Delete Cookie */
	setcookie('visited', "", time() - 3600);
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
			PHP Cookie
			<span style="float: right;">
				<?php 
					date_default_timezone_set('Asia/Dhaka');
					echo "Time ".date("h:i:s a");
				 ?>
			</span>
			<hr>

			<?php 
				/* Cookie Peramiter */
				// setcookie(name, value, expire, path, domain, secure, httponly);
				
				/* Set Cookie */
				/*if (!isset($_COOKIE['visited'])) {
					setcookie("visited", "1", time()+86400, "/" ) or die("Could not set cookio");
					echo "Ths your frist visit in this website";
				}else{
					echo "you are our old visitor.";
				}*/

				echo "Cookie deleted";

				
				

				
			 ?>

		</section>
		<!-- Footer Area -->
		<secrtion class="footer_area">
			<h2><?php echo "tmiprogramer.tk"; ?></h2>
			<p style="margin: 0;">&copy; <?php echo date("Y")?> Copyright Tmiprogramer</p>
		</secrtion>
	</div>
</body>
</html>