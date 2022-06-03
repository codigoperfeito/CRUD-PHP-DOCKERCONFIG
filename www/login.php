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

<form method="POST" style="width:100vw;height:100vh;display:flex;align-items: center;flex-direction: column;justify-content: center;">
    Email: <br>
    <input type="text" name="email"><br><br>
    Senha: <br>
    <input type="password" name="senha"><br><br>
    <input type="submit" value="Entrar"><br><br>
</form>