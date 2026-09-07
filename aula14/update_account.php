<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Aula 14 - Atualizar Conta e Armazenar os Dados na Base de Dados(MySQL) em PHP</title>
</head>
<body>

    <main class="card-container">
        <header class="card-header">
            <span class="logo">SCOTCH</span>
            <h1>Atualize sua conta</h1>
            <p>Atualize suas informações aqui!</p>
        </header>

        <form action="includes/atualzar.inc.php" method="post" class="form">

        <div class="input-group">
            <input type="text" name="nome" placeholder="Seu nome aqui" required>
        </div>

        <div class="input-group">
            <input type="email" name="email" placeholder="exemplo@email.com" required>
        </div>

        <div class="input-group">
            <input type="password" name="password" placeholder="Sua senha aqui" minlength="5" required>
        </div>

        <button type="submit" class="btn-submit">Atualizar Conta</button>

        </form>

    </main>

</body>
</html>