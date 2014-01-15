<?php
	function getUsers($id = null)
	{
		$users = array();
		
		$users[0]['username'] = "admin";
		$users[0]['password'] = sha2("admin");
		$users[1]['username'] = "johndekroon@gmail.com";
		$users[1]['password'] = sha2("admin");
		
		if($id === null)
			return $users;
		return $users[$id];
	}
	

?>