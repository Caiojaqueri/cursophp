<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $saque = $_GET['sac'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico </h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
            <label for="sac">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="sac" id="sac" step="5" value="<?=$saque?>">
            <p>Só estão disponíveis as notas de R$100, R$50, R$10, e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $saque = 385;
        $resto = $saque;
        
        $tot100 = (int)($resto / 100);
        $resto = $resto % 100;
        
        $tot50 = (int)($resto / 50);
        $resto = $resto % 50;

        $tot10 = (int)($resto / 10);
        $resto = $resto % 10;

        $tot5 = (int)($resto / 5);
        $resto = $resto % 5;

    ?>
    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li>100: <?=$tot100?></li>
            <li>50: <?=$tot50?></li>
            <li>10: <?=$tot10?></li>
            <li>5: <?=$tot5?></li>
        </ul>
    </section>
    
</body>
</html>