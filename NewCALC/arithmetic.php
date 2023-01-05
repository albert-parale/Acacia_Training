<?php
	class arithmetic{
		public $num1;
		public $num2;
		public $operator;

		function __construct($num1, $num2, $operator){
			$this->num1 = $num1;
			$this->num2 = $num2;
			$this->operator = $operator;  
		}

		function calculate(){
			if($this->operator == "+"){
				return $this->sum = $this->num1 + $this->num2;
			}
			else if($this->operator == "-"){
				return $this->difference = $this->num1 - $this->num2;
			}
			else if($this->operator == "X"){
				return $this->product = $this->num1 * $this->num2;
			}
			else if($this->operator == "/"){
				return $this->quotient = $this->num1 / $this->num2;
			}

		}
	}
?>