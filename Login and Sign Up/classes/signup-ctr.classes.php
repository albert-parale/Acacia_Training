<?php
	
	
	class SignupCtr
	{
		private $uname;
		private $fname;
		private $lname;
		private $email;
		private $pwd;
		private $cpwd;

		public function __construct($uname, $fname, $lname, $email, $pwd, $cpwd)
		{	
			$this->uname = $uname;
			$this->fname = $fname;	
			$this->lname = $lname;	
			$this->email = $email;	
			$this->pwd = $pwd;	
			$this->cpwd = $cpwd;	
		}

		private function emptyInput(){
			$result;
			if(empty($this->uname) || $this->fname) || empty($this->lname) || empty($this->email) || empty($this->pwd) || empty($this->cpwd)) {
			     $result = false;
			 }
			 else {
			     $result = true;
			 }
			 return $result;

		}

		private function invalidUname(){
			$result;
			if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uname)) {
			     $result = false;
			 }
			 else {
			     $result = true;
			 }
			 return $result;

		}

		private function invalidEmail(){
			$result;
			if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
			     $result = false;
			 }
			 else {
			     $result = true;
			 }
			 return $result;

		}

		private function pwdMatch(){
			$result;
			if($this->pwd !== $this->cpwd) {
			     $result = false;
			 }
			 else {
			     $result = true;
			 }
			 return $result;

		}

	}
?>