<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $apelido = htmlspecialchars($_POST["apelido"]);
        $curso = htmlspecialchars($_POST["curso"]);

        if (empty($nome)) {
            exit();
        }

        echo "Esses são os dados submetidos pelo usuário:";
        echo "<br>";

        echo "<strong>Nome:</strong> " . $nome;
        echo "<br>";

        echo "<strong>Apelido:</strong> " . $apelido;
        echo "<br>";

        echo "<strong>Curso:</strong> " . $curso;

    header("Location: ./index.php");
    }else{
        header("Location: /index.php");
    }