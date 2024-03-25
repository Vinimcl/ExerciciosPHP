<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivo ou negativo ?</title>
</head>
<body>

 <form method="get">

    <label for="gen">Gênero: (M = MACULINO F = FEMININO)</label><br>
    <input type="text" id="gen" name="gen">
    <button type="submit">enviar</button>

 </form>


<?php

    $gen = $_GET['gen'];

    if ($gen == "M"or "m"){
        echo "MASCULINO";
    }
    else if($gen == "F" or "f") {
        echo "FEMININO";
    }
    else{
        echo "INVÁLIDO!!!!!!!!!!!!!!!";
    }

?>
    
</body>
</html>