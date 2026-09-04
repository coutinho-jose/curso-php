<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1 - variávei</title>
</head>
<body>
    <p>Este é um php parágrafo <?php echo "incrível";?>!</p>
    <?php echo "Esse também é um parágrafo"?>

    <hr>

    <code>
    <h3>Variáveis em PHP</h3>

        <h4>Declaração:</h4>
        <p>
            $nome = "Coutinho";
            $idade = 21;
            $altura = 1.72;
        </p>
        <h4>Imprimindo os valores:</h4>
        <p>
            echo $nome . " tem " . $idade . " anos com " . $altura . " CM " . " de altura";
            
        </p>
        
        <i>Saída: "Coutinho tem 21 anos de com 1.72 CM de altura"</i>
        <br>
        <i><u>NB:</u> Não precisa declarar o tipo de dado.</i>
    </code>

    <hr>

    <?php 
        // tipos escalares (contêm um único valor):
        // Não é obrigatório:
        $string = "Coutinho";
        $int = 12345;
        $float = 1.5;
        $bool = true;

        $nomeCompleto = "Coutinho José Minêz";
        echo $nomeCompleto;

        // Array (Contém vários valores):
        // $nomes = array("Coutinho", "José", "Minêz");
        // $nomes = ["Coutinho", "José", "Minêz"];
    ?>

    <h5>Usando tags html + php</h5>
    <?php 
        $nome = "Coutinho";
        $teste = $nome;
    ?>

    <p>Olá! meu nome é <?php echo $teste;?>, estou aprendendo PHP</p>
</body>
</html>