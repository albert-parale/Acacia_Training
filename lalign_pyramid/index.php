<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post">
		<input type="text" name="number" value="" placeholder="Enter number"/> 
		<input type="submit" name="submit" value="Submit"/> </td>
	</form>
	
	<?php
		if (isset($_POST['submit'])) {
			function pyramid($n)
			{
				for ($i = 0; $i < $n; $i++)
				{
			  		for ($a = 0; $a <= $i; $a++){
			  			echo "* ";
			  		}
			  		echo "</br>";
			 	}
			}
			 
			$n = $_POST['number'];
			pyramid($n);
		}
	?>
</body>
</html>