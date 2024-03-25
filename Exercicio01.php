<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maior?</title>
</head>

<body>

<form method="get">

    <label for="numero1">Digite o primeiro número:</label><br>
    <input type="text" id="numero1" name="numero1"><br><br>
    <label for="numero2">Digite o segundo número:</label><br>
    <input type="text" id="numero2" name="numero2"><br><br>
    <button type="submit">Encontrar o Maior Número</button>

</form>

<?php

    // Obtém os números digitados pelo usuário
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    // Verifica qual número é maior
    if ($numero1 > $numero2) {
        echo "O maior número é: $numero1";
    } elseif ($numero2 > $numero1) {
        echo "O maior número é: $numero2";
    } else {
        echo "Os números são iguais.";
    }

?>

</body>

</html>