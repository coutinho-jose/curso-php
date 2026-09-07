<!DOCTYPE html>
<html lang="pt-nr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Aula 14 - Excluir Conta em PHP</title>
</head>
<body>

    <main class="card-container">
        <header class="card-header">
            <span class="logo">SCOTCH</span>
            <h1>Excluir sua conta</h1>
            <p>Tem certeza que deseja excluir sua conta?</p>
        </header>

        <form action="includes/excluir.php" method="post" class="form">

        <div class="input-group">
            <input type="text" name="nome" placeholder="Seu nome aqui" required>
        </div>

        <div class="input-group">
            <input type="password" name="password" placeholder="Sua senha aqui" minlength="5" required>
        </div>

        <button type="submit" class="btn-submit">Excluir Conta</button>

        </form>

    </main>

</body>
</html>