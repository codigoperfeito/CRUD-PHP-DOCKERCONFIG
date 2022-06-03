<?php 
    session_start();
    if (isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
        
    }else{
        header("location: login.php");
    }
?>
<form method="post" enctype="multipart/form-data" action="recebedor.php">
    <input type="file" name="arquivo"> <br><br>
    <input type="submit" value="enviar">
</form>