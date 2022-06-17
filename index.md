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
### Pagina de redirecionamento
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

For more details see [Basic writing and formatting syntax](https://docs.github.com/en/github/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax).

### Jekyll Themes

Your Pages site will use the layout and styles from the Jekyll theme you have selected in your [repository settings](https://github.com/SystemRhino/Session_Login/settings/pages). The name of this theme is saved in the Jekyll `_config.yml` configuration file.

### Support or Contact

Having trouble with Pages? Check out our [documentation](https://docs.github.com/categories/github-pages-basics/) or [contact support](https://support.github.com/contact) and we’ll help you sort it out.
