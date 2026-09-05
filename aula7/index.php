<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 7 - Arrays em PHP</title>
</head>
<body>
    <?php 
        echo "<h4>Array indexado</h4>";
        $frutas = [
            "Laranja",      // Índice -> 0;
            "Maçã",         // Índice -> 1;
            "Uva",          // Índice -> 2;
            "Banana"        // Índice -> 3;
        ];

        //Removendo um valor de array.
        // unset($frutas [1]);

        //echo $frutas[1]; - Dará erro no navegador pois foi anteriormente removido.

        // array_splice($frutas, 0, 1);

        //Acedendo ao array pelo índice e modificando o seu valor.
        // echo $frutas[0] = "Manga";

        $frutasAdicionais = ["Abacate", "Abacaxi", "Ananás"];
        array_splice($frutas, 2, 0, $frutasAdicionais);
        print_r($frutas);

        echo "<br>";
        echo "<br>";

        $barcelona = [
            array("Lamine Yamal", "Rapinha"),
            "Gordon",
            "Pedri",
            "Rodri"
        ];

        echo $barcelona[0][1];

        echo "<br>";
        echo "<br>";
//========================================================================
            $cursos = [
            "Mecanica",
            "Programação Web"
        ];

        array_push($cursos, "IA"); //Array push adiciona um elemento no final de um array
        print_r($cursos);

        echo "<hr>";
//========================================================================

        echo "<h4>Array Associativo</h4>";
        $tarefas = [
            "Direcção"     =>    "Coutinho",
            "Gestão"       =>    "Beto",
            "Design"       =>    "Junior",
            "Marketing"    =>    "Lena"
        ];

        // echo $tarefas["Direcção"];
        print_r($tarefas);
        echo "<br>";
        echo "O Array Possui" . " " . count($tarefas) . " Dados";

        echo "<br>";
        echo "<br>";

        sort($tarefas); //organiza os elementos de um array em ordem crescente (do menor para o maior, ou em ordem alfabética.
        print_r($tarefas);
    
    ?>
</body>
</html>