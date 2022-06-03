<?php 
    session_start();
    $_SESSION['vip'] = '1';

    if(isset($_SESSION['vip']) && !empty($_SESSION['vip'])){

        if ($_SESSION['vip'] == '1') {
            echo 'você é vip';
        }else{
            echo 'você não é vip';
        }

    }


?>