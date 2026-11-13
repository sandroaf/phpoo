<?php
    require_once("veiculo.php"); 
    use Veiculos\bicicleta;
    use Veiculos\carro;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo POO - Veiculo</title>
</head>
<body>
    <h1>Exemplo POO em PHP Classe veiculo</h1>
    <?php
        $carro = new carro(2019,"Ford","Ranger","combustão","2020",2);
        $carro->apresenta();
        echo "<br><br>";
        $bicicleta = new bicicleta("1970","Caloi","Barra Circular","mecanica",1);
        $bicicleta->apresenta();
    ?>

</body>
</html>