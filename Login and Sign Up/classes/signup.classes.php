<?php
	
	
	class SignUp extends DbConn
	{
		protected function checkUser($uname, $email){
			$stmt = $this->conn->mysqli('SELECT uname FROM user_info WHERE uname = ? OR email = ?;');

			if (!stmt->execute(array($uname, $email))) {
				$
			}
		}
	}
?>