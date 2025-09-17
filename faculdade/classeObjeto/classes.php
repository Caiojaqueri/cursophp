<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação Orientada a Objetos </title>
</head>
<body>
    <h1>exemplo de classes e objetos</h1>
    <?php //classe frutas 
        class Frutas 
        { 
            //atributos dessa classe 
            var $nome;
            var $tipo;

            //métodos ou funções dessa classe
            public function __construct() {}
            public function setNome($nome)
            {
                $this->nome = $nome; //atribui o valor do parâmetro $nome ao atributo $nome da classe
            }
            public function getNome()
            {
                return $this->nome; //retorna o valor do atributo $nome da classe
            }


            public function setTipo($tipo)
            {
                $this->tipo = $tipo; //atribui o valor do parâmetro $tipo ao atributo $tipo da classe
            }
            public function getTipo()
            {
                return $this->tipo; //retorna o valor do atributo $tipo da classe
            }
        }
        $fruta1 = new Frutas(); //cria um objeto da classe Frutas

        $fruta1->setNome("Banana"); //chama o método setNome, da o nome de "Banana"
        $fruta1->setTipo("Amarela"); //chama o método setTipo "Amarela"

        echo "A fruta é: " . $fruta1->getNome() . "<br>"; //chama o método getNome e escreve seu nome

        echo "O tipo da fruta é: " . $fruta1->getTipo() . "<br>"; //chama o método getTipo e escreve seu tipo
    ?>
</body>
</html>