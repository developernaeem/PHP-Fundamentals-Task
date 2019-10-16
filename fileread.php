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
			PHP File Handling : Open/Read/Close
				<?php 
					date_default_timezone_set('Asia/Dhaka');
					echo "Time ".date("h:i:s a");
				 ?>
			</span>
			<hr>

			<?php 
				/* File Read Function */
				
				/* PHP Function use Create File Exmpale */
				$createfile = fopen("new.txt", "w") or die("file not found !!");
				$one = "AB Naeem\n";
				fwrite($createfile, $one);
				fclose($createfile);



				// echo readfile("text.txt");

				// File Open Read Close Function
				/*$ourfile = fopen("text.txt", "r") or die("file not found !!");
				echo fread($ourfile, filesize("text.txt"));
				fclose($ourfile);*/



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