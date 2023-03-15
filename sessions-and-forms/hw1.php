<?php 
session_start();

if(isset($_GET)){
$_SESSION['name'] = $_GET["name"];
$_SESSION['surname'] = $_GET["surname"];
$_SESSION['age'] = $_GET["age"];
}
?>
<form method="GET">
    <p>Введите имя: <input name="name"></p>
    <p>Введите Фамилию: <input name="surname"></p>
    <p>Введите возраст: <input name="age"></p>
    <input type="submit">
</form>