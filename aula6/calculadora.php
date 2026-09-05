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

        <input type="number" step="any" name="num01" id="num01" placeholder="Primeiro Número" required>

        <select name="operador" required>
            <option value="">Oper</option>
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mult">*</option>
            <option value="div">/</option>
        </select>

        <input type="number" step="any" name="num02" id="num02" placeholder="Segundo Número" required>

        <button type="submit">Calcular</button>

        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                $operador = htmlspecialchars($_POST["operador"]);

                $_erro = false;

                if (empty($num01) && $num01 !== "0" || empty($num02) && $num02 !== "0" || empty($operador)) {
                    echo "<p>Preencha todos os campos e selecione uma operação válida.</p>";
                    $_erro = true;
                }

                if (!is_numeric($num01) || !is_numeric($num02)) {
                    echo "<p>Preencha todos os campos apenas com números.</p>";
                    $_erro = true;
                }

                if (!$_erro) {
                    $valor = 0;
                    $exibirResultado = true;

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
                            if ($num02 == 0) {
                                echo "<p>Erro: Divisão por zero não é permitida.</p>";
                                $exibirResultado = false;
                            } else {
                                $valor = $num01 / $num02;
                            }
                            break;

                        default:
                            echo "<p>Operação inválida.</p>";
                            $exibirResultado = false;
                    }

                    if ($exibirResultado) {
                        echo "<p>Resultado: " . $valor . "</p>";
                    }
                }
            }
        ?>
    </form>

</body>
</html>