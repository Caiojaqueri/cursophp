<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores em PHP</title>
</head>
<body>
    <?php 
    //array vazio
    $carros = array();

    //primeira forma de declarar um array
    $carros = Array("Fusca", "Civic", "Corolla", "Onix");

    //segunda forma de declarar um array
    $carros = ["Fusca", "Civic", "Corolla", "Onix"];

    //terceira forma declarando também a posição de seus elementos 
    $carros[0] = "Fusca";
    $carros[1] = "Civic";
    $carros[2] = "Corolla";
    $carros[3] = "Onix"; 
    
    print_r($carros);// Exibe o array completo

    ?>
</body>
</html>