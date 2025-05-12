<?php 

// $arquivo = fopen("./update_arquivos", "r")
$arquivo = file("./update_arquivos/text.txt");
foreach($arquivo as $files){
    echo $files;
    echo "</br>";
}
?>