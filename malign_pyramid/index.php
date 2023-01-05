<!DOCTYPE html>
<html>
<head>
	<title>malign_pyramid</title>
</head>
<body>
	<form method="post">
		<input type="text" name="number" value="" placeholder="Enter number"/> 
		<input type="submit" name="submit" value="Submit"/> </td>
	</form>
	
	<?php
		if (isset($_POST['submit'])) {
			function ralignpyramid($num)
			{
				$num = $_POST['number'];

				for($a = 0; $a < $num; $a++) {

			        // print spaces
			        for($b = 0; $b < $num - $a - 1; $b++) {
			            echo "&nbsp;&nbsp;";
			        }
			        // print stars
			        for($c = 0; $c < 2 * $a + 1; $c++) {
			            echo "*";
			        }
			        echo "<br>";
			    }
			}
			ralignpyramid($num);
		}
	?>
</body>
</html>