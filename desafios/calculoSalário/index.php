<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET['salario'] ?? 0;
        $min = 1_509.00;
        $total = intdiv($salario, $min);
        $dif = $salario % $min;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de R$<strong><?=number_format($min, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            $total = intdiv($salario, $min);
            $dif = $salario % $min;

            echo "<p>Quem recebe um salário de R\$". number_format($salario, 2, ",", ".")." ganha <strong>$total salários minimos</strong> + R\$". number_format($dif, 2, ",", ".")."</p>"
        ?>
    </section>
    
</body>
</html>