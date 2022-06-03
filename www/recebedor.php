<?php 
    $arquivo = $_FILES['arquivo'];
    if (isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])) {     
        print_r($arquivo);   
        // move_uploaded_file($arquivo['tmp_name'],'images/'.$arquivo['name']);
        // echo 'arquivo enviado com sucesso';
    }else{
        echo 'envio falhou';
    }
?>