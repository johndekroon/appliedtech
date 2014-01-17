<?php
	function getUsers($id = null)
	{
		$users = array();
		
		$users[0]['id'] = 0;
		$users[0]['username'] = "admin";
		$users[0]['password'] = sha1("admin");
		$users[1]['id'] = 1;
		$users[1]['username'] = "johndekroon@gmail.com";
		$users[1]['password'] = sha1("admin");
		
		if($id === null)
			return $users;
		return $users[$id];
	}
	

?>