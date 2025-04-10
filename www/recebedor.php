<?php 
    $arquivo = $_FILES['arquivo'];
    if (isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])) {     
        move_uploaded_file($arquivo['tmp_name'],'update_arquivos/'.$arquivo['name']);
        print_r($arquivo);
        // echo 'arquivo enviado com sucesso';
    }else{
        echo 'envio falhou';
    }
?>