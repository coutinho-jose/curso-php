<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - Laços em PHP</title>
</head>
<body>
    
    <?php 
    
        // Loop For
        for ($i = 0; $i <= 10; $i++) {
            echo "Número $i <br>";
        }
    echo "<br>";
// =======================================================================

        // Loop While
        $teste  = 5;
        while ($teste < 10) {
            echo $teste;
            $teste++;
        }
    echo "<br>";
// =======================================================================

        // Loop Do-while
        do{
            echo $teste;
        }while($teste < 10);
    echo "<br>";
// =======================================================================

        // Loop Foreach
        $futas = ["Banana", "Uva", "Laranja", "Maçã", "Abacate"];
        foreach($futas as $indice => $futa){
            echo $indice . " - ". $futa . "<br>";
        }
    
    ?>

</body>
</html> 