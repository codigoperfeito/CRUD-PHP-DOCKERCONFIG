<?php
    require "config.php";
?>
<a href="Adicionar.php">Adicionar um novo usuário</a>
<table border="0" width="100%">
    <tr>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php 
    $sql = "SELECT * FROM usuarios";
    $sql = $pdo->query($sql);
    if ($sql->rowCount() > 0) {
        foreach($sql->fetchAll() as $usuarios){
            echo "<tr>";
            echo '<th>'.$usuarios["nome"].'</th>';
            echo '<th>'.$usuarios["email"].'</th>';
            echo '<th>
            <a href="editar.php?id='.$usuarios["id"].'">Editar</a> - 
            <a href="deletar.php?id='.$usuarios["id"].'">Deletar</a> </th>';
            echo "</tr>";
        };
    }
    ?>
</table>