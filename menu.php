<?php
session_start();
if (!isset($_SESSION['login']) || !isset($_SESSION['senha']))
{
	header("location:index.html");

}elseif ($_SESSION['login'] != "admin" && $_SESSION['senha'] != "admin") {
	?>
	<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="index.css">
<head>
        <title>Login no Sistema</title>
</head>
<body vlink="white" link="white">
       <nav id="nav"></nav>
        <section>
                <center>
                <div id="div1">
        <font face="arial" size="6" color="darkslateblue"><b>Paginas</b></font><br>
        <div class="wrap">
        <button class="button"><a href='pag1.php'>User</a></button><br>
        <button class="button"><a href='pag2.php'>User</a></button><br>
        <button class="button"><a href='logout.php'>Sair</a></button><br>
        </div>                     
                </div>
                </center> 
        </section>
        <footer id="footer"></footer>
</body>
</html>
<?php
}else{
	?>
	<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="index.css">
<head>
        <title>Login no Sistema</title>
</head>
<body vlink="white" link="white">
       <nav id="nav"></nav>
        <section>
                <center>
                <div id="div1">
        <font face="arial" size="6" color="darkslateblue"><b>Paginas</b></font><br>
        <div class="wrap">
        <button class="button"><a href='pag1.php' style="text-decoration:none">User</a></button>
        <button class="button"><a href='pag2.php' style="text-decoration:none">User</a></button><br>
        <button class="button"><a href='adm1.php' style="text-decoration:none">Admin</a></button>
        <button class="button"><a href='adm2.php' style="text-decoration:none">Admin</a></button><br>
        <button class="button"><a href='logout.php' style="text-decoration:none">Sair</a></button><br>
        </div>                     
                </div>
                </center> 
        </section>
        <footer id="footer"></footer>
</body>
</html>
<?php
}
?>