<?php
	session_start();	
	if (empty($_SESSION['test'])) {
		$_SESSION['test'] = 1;
	} else {
		$_SESSION['test']++;
	}
	if ($_SESSION['test'] === 10){
        unset($_SESSION['test']);
    }
	echo $_SESSION['test'];
?>