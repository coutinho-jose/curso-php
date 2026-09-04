<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5 - Switch e Case em PHP</title>
</head>
<body>
        <?php 

        echo "<h3>Switch e Case em PHP</h3>";
        $cor = "azul";

        /*switch ($cor) {
            case 'vermelho':
                echo "vermelho 100 pontos";
                break;
            
            case 'azul':
                echo "azul 75 pontos";
                break;
            
            case 'amarelo':
                echo "amarelo 25 pontos";
                break;

            default:
                echo "Cor não identificada";
                break;
        }*/

        echo "<h3>Match em PHP</h3>";
        $a = 5;
        $b = 10;

        $resultado = match ($a) {
            1, 2, 5 => "a = 1",
            3 => "a = 2"
        };

        echo $resultado;
    ?>
</body>
</html>