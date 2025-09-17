<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 

            //rand - 1951 é uma função antiga
            //random_int - mesma função mas com criptografia segura porém muito lenta
            $nAleatorio = mt_rand(0, 100);
            echo "Gerando números aleatórios de 0 a 100... " ;
            echo "<br>O valor gerado foi <strong>$nAleatorio</strong>";
        
        ?><!--fazer a página recarregar-->
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro valor</button> 
    </main> <
    
    
</body>
</html>