## Sistema de armazenamento de Login com $_SESSSION

O sistema contém uma pagina com verificação de login, assim se o login for compatível com o do admin ele exibirá a área restrita, do contrário exibirá uma pagina padrão de usuário.

Em todas as página tem um bloco de código onde verifica se o existe uma sessão no momento, ou seja, se o usuário está logado.

### Pagina de redirecionamento


```markdown
~~~php
if (isset($_POST['#login']) && isset($_POST['senha'])) {
session_start();
$_SESSION['login'] = $_POST['login'];
$_SESSION['senha'] = $_POST['senha'];
header("location:menu.php");
}else{
    header("location:index.html");
}
~~~
```
### Script de verificação de Admin
```markdown
~~~php
session_start();
if (!isset($_SESSION['login']) || !isset($_SESSION['senha']))
{
	header("location:index.html");

}elseif ($_SESSION['login'] != "admin" && $_SESSION['senha'] != "admin") {
// Pagina do usuario
}else{
// Pagina do admin
}
~~~
```

Para mais informações sobre $_SESSION [$_SESSION syntax]([https://docs.github.com/en/github/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax](https://www.php.net/manual/pt_BR/reserved.variables.session.php)).

## Observação

Quando executado em uma guia normal o cookie é salvado no navegador, assim quando se acessa as páginas restritas não pede login até que finalize a sessão ou exclua o cookie "PHPSESSID".
