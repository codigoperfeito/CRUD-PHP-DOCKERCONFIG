<pre>
    <?php    
    require 'config.php';
    $sql = "SELECT usuarios.id,usuarios.nome,usuarios.email, faixa.titulo as faixa_valores FROM usuarios INNER JOIN faixa ON faixa.id = usuarios.id;";
    $sql = $pdo->query($sql);
    $dados = $sql->fetchAll();
    var_export($dados);
    ?>
</pre>