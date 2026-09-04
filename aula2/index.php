<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 - Variáveis Superglobais Pré-definidas em PHP</title>
</head>
<body>

    <h3>Variáveis Superglobais Pré-definidas em PHP</h3>
    <p>São variáveis que podem ser acessadas de qualquer lugar em nosso código independentemente do escopo!</p>

    <?php 
    
        echo $_SERVER["DOCUMENT_ROOT"];
        echo "<br>";
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_GET["nome"];
        
    
    ?>

</body>
</html>