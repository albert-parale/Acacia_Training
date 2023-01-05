<?php
	require_once('arithmetic.php');

	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operand = $_POST['opera'];

	$resul = new arithmetic($num1, $num2, $operand);

	echo $result->calculate();
?>