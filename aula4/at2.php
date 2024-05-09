<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    Digite seu nome: <input type="text" name="nome"><br><br>
    Digite a sua idade: <input type="text" name="idade"><br>
    <input type="submit" value="Verificar">
    </form>
</body>
</html>
<?php 
    $age = $_GET['idade'];
    $guy = $_GET['nome'];

    if($age < 16){
        echo"Você não pode votar!";
    }
    if(($age >= 16 && $age <18) || $age > 70){
        echo"Seu voto é Facultativo!";    
    }
    if($age > 18 && $age < 70){
        echo "Seu voto é Obrigatório!";
        }
    else {
        
    }

?>