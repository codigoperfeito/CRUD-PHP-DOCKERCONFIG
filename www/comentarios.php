<?php
require 'config.php';
$sql = 'SELECT * FROM mensagem ORDER BY date_msg DESC';
$sql = $pdo->query($sql);
if (isset($_GET['nome']) && !empty($_GET['nome'])) {
    $nome = addslashes($_GET['nome']);
    $comentario = addslashes($_GET['comentario']);
    $date = date("Y-m-d h:i:s");
    // pode usar variavel now() do banco de dados
    $mensagemadd = "INSERT INTO mensagem(date_msg,nome,msg) VALUES ('$date','$nome','$comentario');";
    $pdo->query($mensagemadd);
    $sql = 'SELECT * FROM mensagem ORDER BY date_msg DESC';
    $sql = $pdo->query($sql);

    // ->>>  outra forma de fazer a mesma coisa

    // $mensagemadd = $pdo->prepare('INSERT INTO mensagem SET nome=:nome, msg=:msg, date_msg = NOW();');
    // $mensagemadd->bindValue(":nome", $nome);
    // $mensagemadd->bindValue(":msg", $comentario);
    // $mensagemadd->execute();
    echo 'Comentário enviado';
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container d-flex justify-content-center ">
    <div class="card " style="width: 30rem; margin-top: 4em;">
        <form method="GET">
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome</label>
                    <input autocomplete="off" type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="nome">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Comentário</label>
                    <textarea class="form-control" name="comentario" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3" style="margin-top: 1em ;">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
        <?php
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();
            foreach ($sql as $chave) {
                echo '<hr style="margin-left:5%;margin-right:5%; background-color: #f7f7f7;" />';
                echo '<div class="mb-4">';
                echo '<div class="card-body">';
                echo     '<p>' . $chave["msg"] . '</p>';
                echo     '<p class="small mb-1 ms-3">' . $chave["nome"] . '</p>';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
    </div>
</div>