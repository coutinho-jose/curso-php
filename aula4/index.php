<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4 - Operadores em PHP</title>
</head>
<body>
    
    <?php 

        echo "<h3>Operadores Em PHP</h3>";
    
        // Operadores de String
        $a = "Olá";
        $b = "Mundo";
        $c = $a . " " . $b;
        echo $c;

        echo "<hr>";

        // Operadores Aritméticos
        // + ; - ; * ; % ; /


        // Operadores de atribuição
        // = ; +=

    //     $a = 2;
    //     $a += 4;
    //     echo $a;
    // echo "<br>";

    //     $b = 5;
    //     $b *= 4;
    //     echo $b;
    // echo "<br>";

    //     $c = 10;
    //     $c -= 5;
    //     echo $c;

    // Operadores Lógicos
    $a = 2;
    $b = 5;

    $c = 2;
    $d = 6;

        if ($a != $b || $c == $d && $a == $c) {
            echo "Verdadeiro";
        }

    ?>

</body>
</html>