<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 9 - Funções Deinidas Pelo Utilizador em PHP</title>
</head>
<body>
    
    <?php 
        // Variávelis de esopo local
        /*function cumprimentar(string $nomeFuncao) {
            return "Olá " . $nomeFuncao . "!";
        }
        $teste = cumprimentar("Coutinho");
        echo $teste;*/
        echo "<br>";
        
// =======================================================================

        // Variávei de escopo global
        $global = "Coutino";
        function cumprimentar(string $nomeFuncao) {
            global $global;
            return "Olá " . $global . "!";
        }
        echo cumprimentar($global);
        echo "<br>";
        
// =======================================================================

        function somar(int $num1, int $num2) {
            $resultado = $num1 + $num2;
            return $resultado;
        }

        echo somar(10, 7);
    ?>

</body>
</html>