<pre>
    <?php 
        if (isset($_FILES['arquivo'])) {
            $arquivos = $_FILES['arquivo'];
            if (count($arquivos['tmp_name']) > 0) {
                $arquivos2 = $_FILES['arquivo']['name'];
                $arquivosTipo = $_FILES['arquivo']['type'];
                foreach ($arquivos2 as $key => $value) {
                    $nameFile = md5($value.time().rand(0,99));
                    move_uploaded_file($arquivos['tmp_name'][$key],'update_arquivos/'.$value);
                    echo '<ul>';
                    echo "<li>arquivo array: ".$arquivos['tmp_name'][$key]." foi enviado </li>";
                    echo '</ul>'; 
                }
            }
        }
    ?>
</pre>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<form method="POST" enctype="multipart/form-data" class="d-flex justify-content-center align-items-center h-100">
<div class="d-flex justify-content-center">
  <div class="custom-file">
    <input type="file" multiple name="arquivo[]" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
    <label class="custom-file-label" for="inputGroupFile03">Escolha os arquivos</label>
  </div>
  <div class="input-group-append">
    <input class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04" value="enviar">
  </div>
</div>
</form>