<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em php</title>
</head>
<body>
    <h1>Teste tipos primitivos </h1>
    <?php 
        //0x = hexadecimal  0b = binário  0 = octal
        //$numero = 0x1A;
        //echo "O valor da variavel é $numero";  
        
        //$v = "gustavo";
        //var_dump($v);    //mostra o valor e o tipo 
        
        //$num =  (integer) 3e2; //3 x 10 elevado a 2 
        //echo "O valor é $num"; 
        //var_dump($num);

        //$num = (float) "950";
        //var_dump($num);   //950 aqui é o tipo string porém fazendo a coerção da pra declarar ele qualquer tipo 

        //$casado = false;
        //var_dump($casado);
        //echo "O valor para casado é $casado";
        //para uma variável bolean, se eu for escrever na tela com print ou echo o valor true é 1 e o valor false é vazio 

        //$vet = [6, 2.5,"Maria",false, 9, 3, 5];
        //var_dump($vet);

        class Pessoa {
            private string $nome;

        }
        $p = new Pessoa;
        var_dump($p);

    ?>
</body>
</html>