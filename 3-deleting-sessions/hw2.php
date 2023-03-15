<?php
session_start();
 
if (empty($_SESSION['time'])) {
    $_SESSION['time'] = time();
} 
echo time() - $_SESSION['time'];
?>
<p><a href="logout.php">Завершить сессию</a></p>