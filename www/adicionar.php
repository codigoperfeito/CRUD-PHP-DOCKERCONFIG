<?php 
require'config.php';
    if (isset($_POST["nome"]) && empty($_POST["nome"]) == false ) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));

        $sql = "INSERT INTO usuarios(nome,email,senha) VALUES ('$nome','$email','$senha')";
        $sql = $pdo->query($sql);
       header('Location: index.php'); 
    };
?>
<form method="post" style="width:100vw;height:100vh;display:flex;align-items:center;flex-direction: column;justify-content: center;">
    Nome: <br>
    <input type="text" name="nome" ><br><br>
    Email: <br>
    <input type="email" name="email" ><br><br>
    Senha: <br>
    <input type="password" name="senha" ><br><br>
    <input type="submit" value="Cadastrar">
</form>