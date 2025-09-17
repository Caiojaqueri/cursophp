<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento </h1>
    </header>
    <main>
        <?php 
            $nome = $_GET ["nome"]; //puxei o nome lá do html
            $sobrenome = $_GET ["sobrenome"];//puxei o sobrenome lá do html
            echo "É um prazer te conhecer <strong>$nome $sobrenome</strong>! Este é o meu site!"; //adicionei o nome e sobrenome do formulário na próxima página do site 
        ?>
        <p><a href="javascript:history.go(-1)">Voltar a pagina anterior</a></p>
    </main>

    
</body>
</html>