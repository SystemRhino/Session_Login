<?php
if (isset($_POST['login']) && isset($_POST['senha'])) {
session_start();
$_SESSION['login'] = $_POST['login'];
$_SESSION['senha'] = $_POST['senha'];
header("location:menu.php");
}else{
    header("location:index.html");
}
?>