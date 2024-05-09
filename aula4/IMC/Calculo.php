<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meça seu IMC!</title>
</head>
<body>
    <h1>Complete com seu!s dados</h1>
    <form action="" method="post">
        Digite o seu nome: <input type="text" name="nome"><br><br>
        Digite o seu peso: <input type="text" name="peso"><br><br>
        Digite a sua altura em cm: <input type="text" name="altura"><br><br>
        <input type="submit" value="Calcular"><br><br> <!--value serve para selecionar o nome que var dentro do "butao" -->

    </form>
</body>
</html>
<?php 
    $tall = $_POST["altura"];
    $peso = $_POST["peso"];
    $nome = $_POST["nome"];
    $imc = $peso / (($tall/100)**2); // O "x**2" "**" serve para elevar
    $imc = number_format($imc,2); //O "number_format" serve para limitar as casa decimais.
    //$Clasificacao = null; 
        echo "Seu IMC é : {$imc}<br>";
        echo "Sua classificação é : ";
    if($imc <16.9){
        echo "Muito abaixo do peso";}
    else if($imc >17 && $imc < 18.4){
        echo "Abaixo do peso";}
    else if($imc > 18.5 && $imc < 24.9){
        echo "Peso normal";}
    else if($imc > 25 && $imc < 29.9){
        echo "Acima do peso";}
    else if($imc > 30 && $imc < 34.9){
        echo "Obesidade grau 1";}
    else if($imc > 35 && $imc < 40){
        echo "Obesidade grau 2";}
    else if($imc > 40){
        echo "Obesidade grau 3";
    }

?>