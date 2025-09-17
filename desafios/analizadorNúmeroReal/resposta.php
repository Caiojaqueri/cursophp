<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Analizador de número Real</h1>
    </header>
    <main>
        <?php 
        
            $numero = $_POST ["numero"] ?? 0;
                                        //função de formatação de número
            echo "<p>Analizando o número <strong>". number_format($numero,3, ",", ".")."</strong> informado pelo usuário:";

            $parteInt = (int) $numero;
            $parteFra = $numero - $parteInt;
            //parte fracionaria é o número origina menos a parte inteira 

            echo "<ul><li> A parte do número é <strong>".number_format($parteInt, 0, ",", ".")."</strong></li>";
            echo "<li> A parte fracionaria do núemro é <strong>".number_format($parteFra, 3, ",", ".")."</strong></li></ul>" ;
        
        ?>
        <button onclick="javascript:history.go(-1)">Voltar </button>
    </main>    

    
    
</body>
</html>