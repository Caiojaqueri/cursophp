<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas condicionais </title>
</head>
<body>
    <h1>Condicionais no php</h1>
    <h2>IF</h2>
    <?php 
        $var1 = 10;
        $var2 = 20;
        if($var1 > $var2){ // Se $var1 for maior que $var2
            echo "A $var1 é maior que a $var2"; //escreva
        }
    ?>

    <h2>ELSE</h2>
    <?php 
        $var1 = 10;
        $var2 = 20;
        if($var1 > $var2){ // Se $var1 for maior que $var2
            echo "A $var1 é maior que a $var2"; //escreva
        }
            else {//se não 
            echo "A $var1 é menor que a $var2"; //escreva
        }
    ?>

    <h2>ELSE IF</h2>
    <?php 
        $var1 = 10;
        $var2 = 10;
        if($var1 > $var2){ // Se $var1 for maior que $var2
            echo "A $var1 é maior que a $var2"; //escreva
        }
            else if($var1 < $var2){ // Se $var1 for menor que $var2 
                echo "A $var1 é menor que a $var2"; //escreva
            }
            else { //se não
                echo "A $var1 é igual a $var2"; //escreva
            }   
    ?>

    <h2>SWITCH</h2>
    <?php 
        $var1 = 10;
        switch($var1){ //verifica o valor de $var1

            case 10: //se caso for igual a 10
                echo "A variável é igual a 10"; //escreva
                break; //interrompe o switch

            case 20: //se caso for igual a 20
                echo "A variável é igual a 20"; //escreva
                break; //interrompe o switch
                
            default: //se não for nenhum dos casos anteriores
                echo "A variável não é nem 10 nem 20"; //escreva
        }
    ?>
</body>
</html>