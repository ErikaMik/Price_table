<!-- 

$title = "Puslapis";
$body = "Tekstas";

require('template_1.php'); -->


<?php
include('functions.php');

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>PHP 9 paskaita</title>
</head>
<body>
	<div class="container">
	<!-- <?php
		//echo "Šiandien lauke yra " . getFeel(15) . "<br />";
		// echo sprintf($template_1, getFeel(10));
		?> 
	-->
		<table class="table table-sm">
			<tr><th>Cost price</th><th>Shipping</th><th>Margin</th><th>VAT</th><th>Retail</th></tr>
			<?php
			for ($cp=10; $cp <= 150; $cp += 5) { 
				echo "<tr><td>" . $cp . "</td><td>" . getSH($cp) . "</td><td>" . getMG($cp) . "</td><td>" . getVAT($cp) . "</td><td>" . getRetail($cp) . "</td></tr>";
			} ?>

			<!-- <?php 
			foreach ($temperatures as $t) {
				echo "<tr class='". $t['style'] . "'><td>" . $t['value'] .  "</td><td>". $t['feel'] . "</td></tr>";
			}
			?> -->
		</table>
	</body>
	</html>