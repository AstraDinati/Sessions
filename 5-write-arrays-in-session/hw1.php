<?php 
session_start();

if(isset($_GET)){
$_SESSION['questions'] = $_GET;
}
?>
<form method="GET">
    <p>Введите имя: <input name="name"></p>
    <p>Введите Фамилию: <input name="surname"></p>
    <p>Введите возраст: <input name="age"></p>
    <p>Введите смысл жизни: <input name="sense-of-life"></p>
    <input type="submit">
</form>