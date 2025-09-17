<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final </h1>
    </header>
    <main>
        <?php 
            $numero = $_GET ["numero"] ?? 0;
            $antecessor = $numero - 1; 
            $sucessor = $numero + 1;
            echo "O número escolhino foi <strong>$numero </strong>";
            echo "<br>O seu <em>antecessor</em> é <strong>$antecessor </strong>";
            echo "<br>O seu <em>sucessor</em> é <strong>$sucessor </strong>"; 
        
        ?>
        <button onclick="javascript:history.go(-1)"> &#x2B05; Voltar</button>



    </main>
</body>
</html>