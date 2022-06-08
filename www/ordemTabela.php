<?php
require 'config.php';
$sql = "SELECT * FROM usuarios";
$sql = $pdo->query($sql);   
if (isset($_GET['ordem']) && !empty($_GET['ordem'])) {
    $ordem = addslashes($_GET['ordem']);
    $sql = $pdo->query("SELECT * FROM usuarios ORDER BY usuarios.$ordem");
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<form method="GET">
    <select name="ordem" onchange="this.form.submit()">
        <option value=""></option>
        <option value="nome" <?php echo (($_GET['ordem']) == 'nome') ? 'selected' : '' ; ?>>nome</option>
        <option value="data_nascimento" <?php echo (($_GET['ordem']) == 'data_nascimento')? 'selected' : '' ; ?>>idade</option>
    </select>
</form>

<table class="table">
    <thead class="thead-dark">
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