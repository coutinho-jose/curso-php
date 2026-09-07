<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = $_POST["nome"];
        $senha = $_POST["password"];

        try{
            require_once "dbh.inc.php";

            /* $query = "INSERT INTO usuarios (nome, email, senha) Values (?, ?, ?)";
            $stmt->execute([
                $username,
                $email,
                $senha
            ]); */

            $query = "DELETE FROM usuarios WHERE nome = :nome AND senha = :senha;";
            $stmt = $pdo->prepare($query);

            $stmt->bindparam(":nome", $username);
            $stmt->bindparam(":senha", $senha);

            $stmt->execute();

            $pdo = null;
            $stmt = null;

            header("Location: ../delete.php");
            die();
        }catch(PDOException $e){
            die("Falha na conexão: " . $e->getMessage());
        }
        
    }else{
        header("Location: ../delete.php");
    }