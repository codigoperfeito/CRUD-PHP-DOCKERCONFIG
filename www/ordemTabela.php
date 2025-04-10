<?php
require 'config.php';
$sql = "SELECT * FROM usuarios";
$sql = $pdo->query($sql);
if (isset($_POST['ordem']) && !empty($_POST['ordem'])) {
    $ordem = addslashes($_POST['ordem']);
    $sql = $pdo->query("SELECT * FROM usuarios ORDER BY usuarios.$ordem");
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

<? // aqui verifica se a variavel do post está vazia se estiver vazia ele seta um padrao para nao dar erro no select ?>
<?php empty($_POST['ordem']) ? $_POST['ordem'] = "nome" : ""; ?>

<body>
    <div class="container">
        <div class="row justify-content-center vh-100 d-flex align-items-center">
            <div class="col-md-6">
                <form method="POST">
                    <? // adicionado um this.form.submit para pode atualizar quando trocar os valores e ja manda para o post ?>
                    <select class="form-select" name="ordem" onchange="this.form.submit()">
                    <?   // muito necessario essa parte em php porque se nao tiver setado ele fica setado no primeiro
                        // entao é necessario que tenha a ajuda do php para poder setar os atributos de acordo com o post ?>
                        <option value="nome" <?php echo (($_POST['ordem']) == 'nome') ? 'selected' : ''; ?>>nome</option>
                        <option value="data_nascimento" <?php echo (($_POST['ordem']) == 'data_nascimento') ? 'selected' : ''; ?>>idade</option>
                    </select>
                </form>

                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NOME</th>
                            <th scope="col">DATA DE NASCIMENTO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($sql->fetchAll() as $dados => $valores) {
                            echo "<tr>";
                            echo "<th scope='row'>" . $valores['id'] . "</th>";
                            echo "<td>" . $valores['nome'] . "</td>";
                            echo "<td>" . $valores['data_nascimento'] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>