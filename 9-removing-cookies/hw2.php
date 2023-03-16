<?php
	if (!empty($_COOKIE['test3'])) {
		setcookie('test3', '', time());
		unset($_COOKIE['test3']);
	}
	
	var_dump($_COOKIE['test3']); 
?>