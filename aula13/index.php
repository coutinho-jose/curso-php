    <?php 
    
        session_start();
        $_SESSION['nome'] = "Coutinho";
        session_destroy();
        unset($_SESSION['nome']);
    ?>
    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 - Sessões em PHP</title>
</head>
<body>

    <p>Nome: <?php echo $_SESSION['nome']; ?></p>


</body>
</html>