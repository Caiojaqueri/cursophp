<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias das notas</title>
</head>
<body>
    <?php 
        $notas = [6.6, 8.4, 9.2, 7.8, 5.1, 4.9, 8.0, 7.5, 6.3, 9.0];

        foreach ($notas as $i) {// para cada nota armazenada na variável i  
           $soma += $i; // soma todas as notas 
        }
        $media = $soma / 10; // calculo da média

        if($media < 6.0){ // se a média for menor que 6
            echo "Média da turma = ". $media. ". Estude mais!"; 
        }
        elseif($media == 6.0){ // se a média for igual a 6
            echo "Média da turma = ". $media. ". Na média!";
        }
        else{ // se nenuma das opções anteriores for verdadeira
            echo "Média da turma = ". $media. ". Parabéns, você foi aprovado!";
        }
    ?>
</body>
</html>