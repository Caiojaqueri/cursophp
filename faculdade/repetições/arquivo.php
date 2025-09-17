<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Repetiçoes com php</title>
</head>
<body>
    <h1>Estruturas de repetições </h1>
    <h2>WHILE</h2>
    <?php 
        $n = 2;
        while($n <= 10){ //enquanto $n for menor ou igual a 10
            echo $n;
            $n += 2; //incrementa $n em 2
            echo "\n"; //quebra de linha
        }
        //podendo também finalizar esse bloco com endwhile tirando as chaves e colocando dois pontos no final da condição   
    ?>

    <h2>DO WHILE</h2>
    <?php 
        $n=2;
        do{//faça 
            echo $n;
            $n += 2;// incrementa $n em 2
            echo "\n";
        }
        while($n <= 20); //enquanto n for menor ou igual a 20
        //a condição é verificada no final do bloco, garantindo que o bloco seja executado pelo menos uma vez
    ?>

    <h2>FOR</h2>
    <?php 
        for($n=2; $n <= 20; $n ++){ //inicializa $n com 2, enquanto $n for menor ou igual a 20, incrementa $n em 1
            echo $n;
            echo "\n";
        }
        //o laço for é útil quando sabemos o número de iterações que precisamos fazer
    ?>

    <h2>FOREACH</h2>
    <?php 
        $carros = array("Fusca", "Monza", "Passat");
        foreach($carros as $carro){ //para cada carro no array $carros
            echo $carro;
            echo "\n";
        }
        //o foreach é usado para iterar sobre arrays, facilitando o acesso a cada elemento sem precisar de um contador
    ?>
</body>
</html>