<?php 

    $dsn = "mysql:host=localhost;dbname=primeirobd";
    $dbuser = "root";
    $dbpass = "";

    try{
        $pdo = new PDO($dsn, $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo "Conexão bem sucedida!";
        
    }catch(PDOException $e){
        echo "Falha na conexão: " . $e->getMessage();
    }

