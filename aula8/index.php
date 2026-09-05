<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 8 - Funções em PHP</title>
</head>
<body>
    
    <?php 
    
        echo "<h4>Functions</h4>";
        $string = "Olá, Mundo";
        echo strlen($string);
        echo strpos($string, "M");
        echo str_replace("Mundo", "Coutinho", $string);
        echo strtolower($string);
        echo strtoupper($string);
        // echo substr($string, 2, -2);
        // print_r(explode(" ", $string));
        echo "<br>";
// =======================================================================
        $num = 5.5;
        echo abs($num);
        echo round($num);
        echo sqrt(50);
        echo rand(1, 100);
        echo "<br>";
// =======================================================================
        $array = ["Banana", "Laranja", "Abacate"];
        $array2 = ["Uva"];
        echo count($array);
        echo is_array($array);
        echo array_push($array, "Manga");
        print_r($array);
        echo array_pop($array);
        print_r(array_reverse($array));
        print_r(array_merge($array, $array2));
// =======================================================================
        echo "<hr>";
        echo "<h4>Data e Hora em PHP</h4>";
        echo date("Y-m-d H:i:s");
        $data = "05-09-2026 21:00:00";
        // echo strtotime($data);
        // echo time();
    ?>

</body>
</html>