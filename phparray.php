<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Fundamentals Training With PHP Array</title>
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
			PHP Array 
			<hr>
			

			<?php 
				/* Index Array */
				$x = array(5, 10,15, 20, 25, 30);
				$length = count($x);

				for ($i = 0; $i<$length; $i++) {
					echo $x[$i];
					echo "<br>";
				}

				/*  Associative Array */
				$age = array("Naeem" => "20", "Pranta" => "21", "Rashed" => "19");

				$age["Naeem"] = "20";
				$age["Pranta"] = "21";
				$age["Rashed"] = "19";

				foreach ($age as $x => $value) {
					echo "Key = ".$x.", Value = ".$value."<br>";
				}

				/* Multidimensional Array */
				$cars = array(
					array("BMW", 15, "Nice Cars"),
					array("Volvo", 20, 5),
					array("Saab", 25, 30),
					array("Audi", 21, 40)
				);
				
				for ($row = 0; $row < 4 ; $row++) { 
					echo "<p>Row Number $row</p>";

					echo "<ul>";
						for ($col= 0 ; $col < 3 ; $col++) { 
							echo "<li>".$cars[$row][$col]."</li>";
						}
					echo "</ul>";
				}



			 ?>


		</section>
		<!-- Footer Area -->
		<secrtion class="footer_area">
			<h2><?php echo "tmiprogramer.tk"; ?></h2>
		</secrtion>
	</div>
</body>
</html>