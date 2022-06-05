<?php

class SignupContr extends SignUp{

	private $uid;
	private $pwd;
	private $pwdrepeat;
	private $email;
	private $ewallet;
	private $dp;
	private $cardno;
	private $postalcode;

	public function __construct($uid, $pwd, $pwdrepeat, $email, $ewallet, $dp, $cardno, $postalcode){
		$this -> uid = $uid;
		$this -> pwd = $pwd;
		$this -> pwdrepeat = $pwdrepeat;
		$this -> email = $email;
		$this -> ewallet = $ewallet;
		$this -> dp = $dp;
		$this -> cardno = $cardno;
		$this -> postalcode = $postalcode;
	}

	public function signupUser()
	{
		if($this->invalidUid()==false)
		{
			header("location: ../login.php?error=username");
		}
		if($this->uidTakenCheck()==false)
		{
			header("location: ../login.php?error=useroremailtaken");
		}
		if($this->pwdMatch()==false)
		{
			header("location: ../login.php?error=passwordmatch");
		}
		//put into database if it doesnot fail
		$this->setUser($this->uid,$this->pwd,$this->email);
	}

	private function invalidUid(){
		
		$result;
		if (preg_match("/^[a-zA-Z0-9]*$/",$this->uid))
		{
			$result = true;
		}else{
			$result = false;
		}
		return $result;
	}

	private function pwdMatch()
	{
		$result;
		if ($this->pwd !== $this->pwdrepeat)
		{
			$result=false;
		}else{
			$result=true;
		}
		return $result;
	}

	private function uidTakenCheck()
	{
		$result;
		if (!$this->checkUser($this->uid,$this->email))
		{
			$result=false;
		}else{
			$result=true;
		}
		return $result;
	}

}