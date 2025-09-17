<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array multidimencional em php</title>
</head>
<body>
    <?php 
        $alunos = array ( // Array multidimensional onde cada elemento pode ser um array também
            array( "João", 8.7, 9.4),
            array( "Maria", 7.5, 8.9),
            array( "Pedro", 6.8, 7.2),
            array( "Ana", 9.0, 9.5)
        );
        // indice da linha indice da coluna 
        echo $alunos[0][0]. ": P1: " . $alunos[0][1] . " P2: " . $alunos[0][2] . "<br>"; 

        echo $alunos [1][0]. ": P1: " . $alunos[1][1] . " P2: " . $alunos[1][2] . "<br>";

        echo $alunos [2][0]. ": P1: " . $alunos[2][1] . " P2: " . $alunos[2][2] . "<br>";

        echo $alunos [3][0]. ": P1: " . $alunos[3][1] . " P2: " . $alunos[3][2] . "<br>";
    ?>
</body>
</html>