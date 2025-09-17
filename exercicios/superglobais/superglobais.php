<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA", time() +3600);

                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";

                //get pega dados pela url query string
                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);
            
                //post pega pelo cabeçalho 
                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);

                //request pega dos dois e gera um vetor com todos os dados
                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>Superglobal COOKIE </h1>";
                var_dump($_COOKIE);

                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>Seupergloval ENV</h1>";
                var_dump($_ENV);
                //foreach (getenv() as $c => $v){
                //    echo "<br> $c -> $v";
                //}

                echo "<h1>SUperglobal SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);

            
            ?>
        </pre>
    </main>
</body>
</html>