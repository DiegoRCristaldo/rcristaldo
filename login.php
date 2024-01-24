<?php

session_start();

$usuarios = [
    'DiegoRCristaldo' => [
        'senha' => '24540325'
    ],
    'diegorcristaldo' => [
      'senha' => '132204'
    ],

];
$acesso_liberado = "http://localhost/RCristaldoDev/index.php";
$acesso_negado = "http://localhost/RCristaldoDev/login.php";

if(array_key_exists('usuario', $_POST) &&                       // usuário foi enviado
    array_key_exists('senha', $_POST) &&                        // senha foi enviada
    array_key_exists($_POST['usuario'], $usuarios) &&           // o usuário existe
    $usuarios[$_POST['usuario']]['senha'] === $_POST['senha']   // a senha está correta
){
    $_SESSION['usuario'] = $_POST['usuario'];
}

if(array_key_exists('usuario', $_SESSION)){
    $dados_usuario = $usuarios[$_SESSION['usuario']];
    ?>
    <a href=<?= $acesso_liberado?>></a>
<?php 
} else {
?>
    <a href=<?= $acesso_negado?>></a>
<?php
} // fim do if
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <title>R Cristaldo - Login</title>
  
</head>
<body>
      <section class="animate__animated animate__fadeInDown container-fluid" id="secao-login">
      <form action="" method="post">
        <div class="painel">
          <h1 class="animate__animated animate__fadeInDownBig">Bem vindo!</h1>
            <label for="login"></label>
            <br>
            <input class="animate__animated animate__fadeInDownBig" id="login" type="text" placeholder="Nome de usuário" required>
            <br>
            <label for="senha"></label>
            <br>
            <input class="animate__animated animate__fadeInDownBig" id="senha" type="password" placeholder="Senha" required>
            <br>
            <button class="animate__animated animate__bounceInDown" type="submit">Enviar</button>
          </form>
        </div>
      </section>
</body>
</html>