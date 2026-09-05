<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - Escopos em PHP</title>
</head>
<body>
    
    <?php 
    
        echo "<h4>Escopo Em PHP</h4>";
        echo "<p>Escopo em PHP é o contexto ou o limite no qual uma variável é definida e pode ser acessada pelo código.</p>";

        // Escopo Global
        $teste = "Coutinho";
        echo $teste . "<br>";
// =======================================================================
        // Escopo Local
        function minhaFunction() {
            // Definindo dariável Local
            $localVar = "Olá, Mundo!";

            // Usando variável Local
            return $localVar;         //Saída: Olá, Mundo!
        }

        echo minhaFunction();
    
    ?>

</body>
</html>