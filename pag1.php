<?php
session_start();
if (!isset($_SESSION['login']) && !isset($_SESSION['senha']))
{
	header("location:index.html");

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
        <form method="POST" action="index.php">
        <font face="arial" size="6" color="darkslateblue"><b>Login User</b></font><br>
        <font face="arial" size="3"><b>Login:</b></font>
        <input type="text" id="login" name="login" placeholder="Seu login aqui" required><br>
        <font face="arial" size="3"><b>Senha:</b></font>
        <input type="password" id="pass" name="senha" placeholder="Sua senha aqui" required><br><br>
        <div class="wrap">
        <button class="button"><a href='menu.php' style="text-decoration:none">Voltar</a></button>
        <button class="button">Enviar</button>
        </div>
        
                </div>
                </center> 
        </section>
        <footer id="footer"></footer>
</form>
</body>
</html>
<?php
}
?>