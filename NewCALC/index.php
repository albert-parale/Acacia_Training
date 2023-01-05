<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Calculator</title>
	</head>
	<body>
		<table border="1">
			<thead>
				<tr>
					<td colspan="4">Calculator</td>
				</tr>
				<tr>
					<td colspan="4"><input type="text" id="display" disabled></td>
				</tr> 
			</thead>
			<tbody>
				<tr>
					<td><button class="operands">/</button></td>
					<td><button class="operands">X</button></td>
					<td><button class="operands">-</button></td>
					<td><button class="operands">+</button></td>
				</tr>
				<tr>
					<td><button class="numbers">7</button></td>
					<td><button class="numbers">8</button></td>
					<td><button class="numbers">9</button></td>
					<td rowspan="4"><button id="equals" class="operands">=</button></td>
				</tr>
				<tr>
					<td><button class="numbers">4</button></td>
					<td><button class="numbers">5</button></td>
					<td><button class="numbers">6</button></td>
				</tr>
				<tr>
					<td><button class="numbers">1</button></td>
					<td><button class="numbers">2</button></td>
					<td><button class="numbers">3</button></td>
				</tr>
				<tr>
					<td><button id="cancel">C</button></td>
					<td><button class="numbers">0</button></td>
					<td><button id="dot">.</button></td>
				</tr>
			</tbody>
		</table>
		<script src='jquery.js'></script>
		<script src='calc.js'></script>
	</body>
</html>