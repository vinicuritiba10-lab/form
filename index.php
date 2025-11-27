<?php

  include_once('config.php');

  // Pega os valores do formulário já escapando
  $nome = mysqli_real_escape_string($conexao, $_POST['username']);
  $email = mysqli_real_escape_string($conexao, $_POST['email']);
  $senha = mysqli_real_escape_string($conexao, $_POST['password']);
  $confirmaSenha = mysqli_real_escape_string($conexao, $_POST['password-confirmation']);

  // Verifica se as senhas são iguais
  if ($senha !== $confirmaSenha) {
      echo "As senhas não coincidem!";
      exit();
  }

  // Query de inserção
  $query = "INSERT INTO usuarios (nome, email, senha, `confirma senha`) 
            VALUES ('$nome', '$email', '$senha', '$confirmaSenha')";

  $result = mysqli_query($conexao, $query);

  if ($result) {
      echo "Usuário cadastrado com sucesso!";
  } else {
      echo "Erro ao cadastrar usuário!";
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./style.css"  />

  <title>Novo usuario - Sujeito Programador</title>
</head>
<body>

  <div class="container">
    <section class="header">
      <h2>Nova conta</h2>
    </section>

    <form id="form" class="form" action="index.php" method="POST">
      <div class="form-content">
        <label for="username">Nome do usuário</label>
        <input
          type="text"
          id="username"
          name="username"
          placeholder="Digite o nome do usuario..."
        />
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">
        <label for="email">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          placeholder="Digite o seu email..."
        />
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">
        <label for="password">Senha</label>
        <input
          type="password"
          id="password"
          name="password"
          placeholder="Digite sua senha..."
        />
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">
        <label for="password-confirmation">Confirmação de senha</label>
        <input
          type="password"
          id="password-confirmation"
          name="password-confirmation"
          placeholder="Digite sua senha novamente..."
        />
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <button type="submit" name="submit" id="submit">Cadastrar</button>

    </form>

  </div>
  

  <script src="./script.js"></script>
</body>
</html>