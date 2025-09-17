<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectando o php ao Postgree</title>
</head>
<body>
    <?php //definindo parâmentros de conexão
        define('HOST', '127.0.0.1');//local onde esta o banco de dados 
        define('PORT', '5432');//posta de acesso ao banco 
        define('DBNAME', 'test');//nome do banco 
        define('USER', 'user');//login de acesso ao banco 
        define('PASSWORD', 'psswd');//senha de acesso ao banco


        //try e catch para tratamento de exceções erros
        try {
            //criando a conexão com o banco de dados
            $dsn = new PDO("pgsql:host=".HOST.";port=".PORT.";dbname=".DBNAME, USER, PASSWORD);
        }
        catch (PDOException $e) {
            //se der erro na conexão, exibe a mensagem
            echo "Erro na conexão: ".$e->getMessage();
        }
        $dsn = null; //encerrando a conexão
    ?>
</html>