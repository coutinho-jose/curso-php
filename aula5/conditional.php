<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5 - Condicionai em PHP</title>
</head>
<body>
    

    <?php 

        echo "<h3>if, elseif e else em PHP</h3>";

        $bool = true;
        $a = 1;
        $b = 1;

        if ($a < $b && !$bool) {
            echo "Verdadeiro";

        }elseif ($a < $b && $bool) {
            echo "Verdadeiro";
        }else{
            echo "Nenhuma condição é verdadeira";
        }
    
    ?>

</body>
</html>