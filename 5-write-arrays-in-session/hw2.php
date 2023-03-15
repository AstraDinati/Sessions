<?php 
session_start();

if (!empty($_SESSION['questions'])){
    echo '<ul>';
    foreach($_SESSION['questions'] as $elem){
        echo "<li>$elem</li><br>";
    }
    echo '</ul>'; 
}