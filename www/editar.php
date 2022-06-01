<?php 
require'config.php';
    if (isset($_GET['id']) && empty($_GET['id']) == false) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM usuarios WHERE id='$id';";
        $sql = $pdo->query($sql);
        if ($sql->rowCount() > 0) {
            $dados = $sql->fetch();
            if (isset($_POST["nome"]) && empty($_POST["nome"]) == false ) {    
                    $nome = addslashes($_POST['nome']);
                    $email = addslashes($_POST['email']);
                    $senha = md5(addslashes($_POST['senha']));
    
                    $sql = "UPDATE usuarios SET nome = '$nome',email = '$email',senha = '$senha' WHERE id='$id'";
                    $sql = $pdo->query($sql);
                   header('Location: index.php'); 
            }
        }else{
            header('Location: index.php');
        }        
    }else{
        header('location: index.php');
    }   
    
?>
<form method="post">
    Nome: <br>
    <input type="text" name="nome" value="<?php echo $dados['nome']?>" ><br><br>
    Email: <br>
    <input type="email" name="email" value="<?php echo $dados['email']?>" ><br><br>
    Senha: <br>
    <input type="password" name="senha" ><br><br>
    <input type="submit" value="Atualizar">
</form>