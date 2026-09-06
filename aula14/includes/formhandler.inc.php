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

            $query = "INSERT INTO usuarios (nome, email, senha) Values (:nome, :email, :senha)";
            $stmt = $pdo->prepare($query);

            $stmt->bindparam(":nome", $username);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":senha", $senha);

            $pdo = null;
            $stmt = null;

            header("Location: ../index.php");
            die();
        }catch(PDOException $e){
            die("Falha na conexão: " . $e->getMessage());
        }
        
    }else{
        header("Location: ../index.php");
    }