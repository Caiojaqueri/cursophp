<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas</h1>
    </header>
    <main>
        <?php 
            
            // Cotação copiada do Google
            $cotacao = 5.53;

            // Quando $$ você tem?
            $real = $_GET["reais"] ?? 0;

            // Equivalência em dólar 
            $dolar = $real /$cotacao;

            //mostrar o resultado formatado
            echo "Seus R\$". number_format($real, 2, ",", ".") . " equivalem a U\$" . number_format($dolar, 2, ",", ".");

            //Formatação de moedas com internacionalização!
            //$padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            //echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . "equivalem a " . numfmt_format_currency($padrao, $real, "USD");

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>