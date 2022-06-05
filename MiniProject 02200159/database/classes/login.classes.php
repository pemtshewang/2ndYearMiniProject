<?php

class Login extends Dbh {
//query
	protected function  getUser($uid,$pwd)
	{
		$stmt = $this->connect()->prepare('SELECT userspwd FROM users WHERE usersuid = ?');
		if (!$stmt->execute(array($uid))) {
			$stmt = null;
			header("location: ../login.php?error=stmtfailed");
			exit();
		}
		if ($stmt->rowCount() == 0) {
			$stmt = null;
			header("location: ../login.php?error=nousersfound");
			exit();
		}
		$pwdHashed=$stmt->fetchAll(PDO::FETCH_ASSOC);
		$checkPwd=password_verify($pwd,$pwdHashed[0]["userspwd"]);

		if($checkPwd == false)
		{
			$stmt = null;
			header("location:: ../login.php?error=wrongpassword");
			exit();

		}else if($checkPwd == true){
			$stmt = $this->connect()->prepare('SELECT * FROM users WHERE usersuid = ? OR userspwd = ?;');

			if (!$stmt->execute(array($uid,$pwd))) {
				$stmt = null;
				header("location: ../login.php?error=stmtfailed");
				exit();
			}
			if ($stmt->rowCount() == 0) {
				$stmt = null;
			    header("location: ../login.php?error=nousersfound");
				exit();
		}

	        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
	        session_start();
	        $_SESSION["usersid"] = $user[0]["usersid"];
	        $_SESSION["usersuid"] = $user[0]["usersuid"];
	        $stmt = null;

		}
	}
}