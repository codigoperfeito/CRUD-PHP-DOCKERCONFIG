<?php
require 'config.php';
if (isset($_POST["nome"]) && empty($_POST["nome"]) == false) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    try{
      // recebe os dados
      $sql = "INSERT INTO usuarios(nome,email,senha) VALUES (:nome,:email,:senha)";
      //prepara o query
      $sql = $pdo->prepare($sql);
      // joga os dados pra um array obs: coloque de forma tradicional para fins de estudo.
      $dados = array(
        'nome' => $nome,
        'email' => $email,
        'senha' => $senha
      );
      // joga os dados dentro da query com o execute e sobe pro SQL
      $sql->execute($dados);
    }catch(PDOException $e){
      echo "Erro de:".$e->getMessage();
    }

    header('Location: index.php');
};
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina de Criacao de conta</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center justify-content-center vh-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <form autocomplete="off" method="post" class="p-4 border rounded bg-light shadow">
          <h2 class="text-center mb-4">Cadastro</h2>
          <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>