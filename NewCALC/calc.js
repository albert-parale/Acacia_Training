var displayValue = '';
var firstNumber = '';
var secondNumber = '';
var operand = '';

$(".numbers").click(function(){
	displayValue = displayValue.concat($(this).text());
	$("#display").val(displayValue);
});

$("#cancel").click(function(){
	displayValue = '';
	operand = '';
	firstNumber = '';
	$("#dot").prop("disabled", false);
	$("#display").val(displayValue);
});

$("#operands").click(function(){
	firstNumber = displayValue;
	displayValue = '';
	operand = $(this).text();
	$("#dot").prop("disabled", false);
	$("#display").val(operand);
});
$("#dot").click(function(){
	displayValue = displayValue.concat($(this).text());
	$(this).prop("disabled", true);
	$("#display").val(displayValue);
});

$(#equals).click(function(){
	secondNumber = displayValue;
	displayValue = '';
	$("#dot").prop("disabled",false);
	$.post("process.php",
	{
		num1: firstNumber,
		num2: secondNumber,
		opera: operand
	},
	function(data){
		$("#display").val(data);
		displayValue = data;
		firstNumber = '';
		secondNumber = '';
	});
});