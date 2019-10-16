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
			PHP Local Vriable
			<hr>

			<?php 
				
				/* PHP Local Vriable */
				function ltest1() {
					$a = 10;
					echo $a."<br>";
				}

				function ltest2() {
					$b = 20;
					echo $b."<br>";
				}

				ltest1();
				ltest2();

				/* PHP Global Variable */
				$x = 50;
				function gtest1() {
					global $x;
					$a = 10;
					echo $a."<br>";
					echo "Access From Function Test1 ".$x."<br>";
				}

				function gtest2() {
					global $x;
					$b = 20;
					echo $b."<br>";
					echo "Access From Function Test1 ".$x."<br>";
				}

				gtest1();
				gtest2();

			 ?>
		</section>
		<!-- Footer Area -->
		<secrtion class="footer_area">
			<h2><?php echo "tmiprogramer.tk"; ?></h2>
		</secrtion>
	</div>
</body>
</html>