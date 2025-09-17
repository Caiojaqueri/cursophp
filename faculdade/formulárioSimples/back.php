<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Simples </title>
</head>
<body>
    Bem vindo! <?php echo $_POST["nome"]?><br>
    <!--escreva o conteúdo do campo "nome"-->
    Seu e-mail é: <?php echo $_POST["email"]?>
    <!--escreva o conteúdo do campo "email"-->
    
</body>
</html>