<?php

class SignUp extends Dbh {
//query
	protected function  setUser($uid, $pwd, $email, $ewallet, $dp, $cardno, $postalcode)
	{
		$stmt = $this->connect()->prepare('INSERT INTO users(userUid,userPwd,userEmail,userEwallet,userDp,userCardno,userPostalcode) VALUES(?,?,?,?,?,?,?);');

		$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

		if (!$stmt->execute(array($uid,$hashedPwd,$email))) {
			$stmt = null;
			header("location: ../login.php?error=stmtfailed");
			exit();
		}
		$stmt = null;
	}
	protected function  checkUser($uid, $email)
	{
		$stmt = $this->connect()->prepare('SELECT usersuid FROM users WHERE usersuid = ? OR usersemail = ?;');
		if (!$stmt->execute(array($uid,$email))) {
			$stmt = null;
			header("location: ../login.php?error=stmtfailed");
			exit();
		}
		$resultCheck;
		if ($stmt->rowCount()>0) {
			$resultCheck = false;
		}else{
			$resultCheck = true;
		}
		return $resultCheck;
	}


}