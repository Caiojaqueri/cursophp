<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo da média utilizando Funções</title>
</head>
<body>
    <?php // Função para calcular a média de dois números
        function calculoMedia ($n1, $n2) {
            return ($n1 + $n2) / 2;
        }
        // Array simples
        $aluno = array ("João", 8.7, 9.4);

        // Chamando a função e armazenando o resultado na variável $media
        $media = calculoMedia($aluno[1], $aluno[2]); 

        // Exibindo o resultado formatado com 1 casa decimal
        echo $aluno[0] . " sua média é: " . number_format($media, 1);
    ?>
</body>
</html>