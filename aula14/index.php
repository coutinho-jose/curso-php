<!DOCTYPE html>
<html lang="pt-nr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Aula 14 - Base de Dados(MySQL) em PHP</title>
</head>
<body>

    <main class="card-container">
        <header class="card-header">
            <span class="logo">SCOTCH</span>
            <h1>Crie sua conta</h1>
            <p>Junte-se à nossa comunidade!</p>
        </header>

        <form action="includes/formhandler.inc.php" method="post" class="form">

        <div class="input-group">
            <input type="text" name="nome" placeholder="Seu nome aqui" required>
        </div>

        <div class="input-group">
            <input type="email" name="email" placeholder="exemplo@email.com" required>
        </div>

        <div class="input-group">
            <input type="password" name="password" placeholder="Sua senha aqui" minlength="5" required>
        </div>

        <div class="checkbox-group">
            <input type="checkbox" id="terms" required>
            <label for="terms">
            Li e concordo com os <a href="#">Termos de Uso</a> e <a href="#">Política de Privacidade</a>.
        </label>
        </div>

        <button type="submit" class="btn-submit">CADASTRAR-SE</button>

        <footer class="card-footer">
            <p>Já tem uma conta? <a href="#">Entrar</a></p>
        </footer>

        </form>

    </main>

</body>
</html>