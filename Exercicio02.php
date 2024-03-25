<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivo ou negativo ?</title>
</head>
<body>

 <form method="get">

    <label for="numero">Digite um número:</label><br>
    <input type="text" id="numero" name="numero">
    <button type="submit">positivo ou negativo?</button>

 </form>


<?php

    $numero = $_GET['numero'];

    if ($numero > 0){
        echo "O número é positivo";
    }
    else {
        echo "O número é negativo";
    }

?>
    
</body>
</html>