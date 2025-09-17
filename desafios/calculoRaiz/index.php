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
        $numero = $_GET['n1'] ??1;
    
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $SERVER ['PHP_SELF']?>" method="get">
            <label for="numero">Número: </label>
            <input type="number" name= "n1" id= "n1" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">

        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            $raizQuadrada= sqrt($numero);
            $raizCubica= $numero ** (1/3); 

            echo "Analisando o <strong>número $numero</strong>, temos: ";
            echo "<ul><li>A sua raiz quadrada é <strong>". number_format($raizQuadrada, 3, ",", "."). "</strong>";
            echo "<li>A sua raiz cubica é <strong>". number_format($raizCubica, 3, ",", "."). "</strong></ul>";

        
        ?>
    </section>
    
</body>
</html>