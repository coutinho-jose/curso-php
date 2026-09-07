<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["password"];

        try{
            require_once "dbh.inc.php";

            /* $query = "INSERT INTO usuarios (nome, email, senha) Values (?, ?, ?)";
            $stmt->execute([
                $username,
                $email,
                $senha
            ]); */

            $query = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = 8";

            $stmt = $pdo->prepare($query);

            $stmt->bindparam(":nome", $username);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":senha", $senha);

            $stmt->execute();

            $pdo = null;
            $stmt = null;

            header("Location: ../sign_up.php");
            die();
        }catch(PDOException $e){
            die("Falha na conexão: " . $e->getMessage());
        }
        
    }else{
        header("Location: ../sign_up.php");
    }