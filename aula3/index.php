<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Aula 4 - Validação de dados em formulário</title>
</head>
<body>

    <section>
        <form action="formulario.php" method="post">
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome">

            <input type="text" id="apelido" name="apelido" placeholder="Digite seu apelido">

            <label for="curso">Curso</label>
            <select name="curso" id="curso">
                <option value="opcoes">Opções</option>
                <option value="TI">TI</option>
                <option value="Gestao">Gestão</option>
                <option value="Contabilidade">Contabilidade</option>
                <option value="Mecanica">Mecânica</option>
            </select>

            <button type="submit">Enviar</button>
            
        </form>
    </section>
</body>
</html>