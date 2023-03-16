<?php
	if (empty($_COOKIE['time'])) { // первый заход на страницу
		setcookie('time', time());
		$_COOKIE['time'] = time();
    }
	echo time() - $_COOKIE['time'];
?>