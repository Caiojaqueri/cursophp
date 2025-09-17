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
            
            // Cotação vinda da API do banco central
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            //var_dump($dados);
            $cotação = $dados ["value"][0]["cotacaoCompra"];

            // Quando $$ você tem?
            $real = $_GET["reais"] ?? 0;

            // Equivalência em dólar 
            $dolar = $real /$cotação;

            //mostrar o resultado formatado
            echo "Seus R\$". number_format($real, 2, ",", ".") . " equivalem a U\$" . number_format($dolar, 2, ",", ".");

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>