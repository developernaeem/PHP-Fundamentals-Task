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
			PHP Sroting Array
			<hr>



			<?php 
				/* PHP Alphabet Array */
				$name = array("Naeem Islam", "Sumaiya Hiya", "Bristy Akter", "Pranta Ray", "Rashedul Islam", "Robiul Hasan", "AB Naeem");

				sort($name);
				for ($row= 0; $row < 7 ; $row++) { 
					echo $name[$row]."<br>";
				}

				/* PHP Numeric Array*/
				$number = array("50", "70", "200", "5", "10", "1", "20");
				// sort($number);   // Sort Array order
				rsort($number);	    // Revars Sort order
				for ($row= 0; $row < 7 ; $row++) { 
					echo $number[$row]."<br>";
				}
				
				/*  Associative Array */
				$name = array("Naeem" => "20", "Pranta" => "21", "Bristy" => "30");
				// asort($name);  // asort Numeric order
				ksort($name);     // ksort Alphabet order

				foreach ($name as $x => $value) {
					echo "Key = ".$x.", Value = ".$value."<br>";
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