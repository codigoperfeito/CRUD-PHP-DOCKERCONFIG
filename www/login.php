<?php 
    require 'config.php';
    session_start();
    if (isset($_POST['email']) && empty($_POST['email']) == false) {
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));
        $sql = $pdo->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

        if ($sql->rowCount() > 0) {
            $dados = $sql->fetch();
            $_SESSION['id'] = $dados['id'];
            header("location: index.php");
        }
    }
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="text-center d-flex justify-content-center align-items-center h-100" >
    <form method="POST" class="form-signin">
      <img class="mb-4" src="https://cdn-icons.flaticon.com/png/512/3293/premium/3293466.png?token=exp=1654458509~hmac=2890bfa435efba84b42c3c2b59333c0a" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Pagina de Login</h1>
      <label name="email" for="inputEmail" class="sr-only">Email address</label>
      <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input name="senha" type=password id="inputPassword" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembre-me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022-2022</p>
    </form>
</div>