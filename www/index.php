<?php 
    session_start();
    if (isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
        
    }else{
        header("location: login.php");
    }
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="container text-center d-flex justify-content-center align-content-center flex-wrap">
    <div class="list-group">
        <a href="./painel_CRUD.php" class="list-group-item list-group-item-primary">Painel de Controle</a>
        <a href="./fileUpload.php" class="list-group-item list-group-item-second">Files Upload</a>
        <a href="./fileMultUpload.php" class="list-group-item list-group-item-light">Files Mult Upload</a>
        <a href="./ordemTabela.php" class="list-group-item list-group-item-dart">Ordenar tabela</a>
        <a href="#" class="list-group-item list-group-item-light">Lorem ipsum dolor</a>
        <a href="#" class="list-group-item list-group-item-dart">Lorem ipsum dolor</a>
        <a href="#" class="list-group-item list-group-item-light">Lorem ipsum dolor</a>
    </div>
</div>