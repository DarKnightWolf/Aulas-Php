<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body>
    <form action="" method="">
        Numero: <input type="text" name="numero"><br>
        <input type="submit" value="verificar">
    </form>
</body>
</html> 

<?php 
    $num = $_GET['numero'];
    //echo "{$numero}";

    if($num % 2 == 0) {
        echo "O numero {$num} é Par!";
    }
    if ($num % 2 == 1) {
        echo "O numero {$num} é Ímpar!";
    }    

?>