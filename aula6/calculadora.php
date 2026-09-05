<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 6 - Calculadora em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name="num01" id="num01" placeholder="Primeiro Número" required>
        <select name="operador" required>
            <option value="">Oper</option>
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mult">*</option>
            <option value="div">/</option>
        </select>
        <input type="number" name="num02" id="num02" placeholder="Segundo Número" required>
        <button type="submit">Calcular</button>
    </form>

        <?php 
        // Pegando dados.
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
                $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
                $operador = htmlspecialchars($_POST["operador"]);

                // Tratando erros.
                $_erro = false;

                if (empty($num01) || empty($num02) || empty($operador)) {
                    echo "<p class='erro-calc'>Preencha todos os campos.</p>";
                    $_erro = true;
                }

                if (!is_numeric($num01) || !is_numeric($num02)) {
                    echo "<p class='erro-calc'>Preencha todos os campos apenas com números.</p>";
                    $_erro = true;
                }

                // Calcular os números se não tiver erros.
                if (!$_erro) {
                    $valor = 0;

                    switch ($operador) {
                        case "add":
                            $valor = $num01 + $num02;
                            break;

                        case "sub":
                            $valor = $num01 - $num02;
                            break;

                        case "mult":
                            $valor = $num01 * $num02;
                            break;

                        case "div":
                                $valor = $num01 / $num02;
                            break;

                        default:
                            echo "<p class='erro-calc'>Operação inválida.</p>";
                            break;
                    }
                    echo "<p class='result-calc'>Resultado = " . $valor .  "</p>";
                }
            }
        ?>

</body>
</html>