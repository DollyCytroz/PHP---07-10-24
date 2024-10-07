<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="alterarDados.php" method="POST">

    <p> <h1> Insira o ID do carro que você quer mudar </h1> </p> 
        <label for="id"> Id: </label>
        <input type="text" name="id" require/>
        <br>

        <p> <h1> O que você quer mudar? </h1> </p> 
        <label for="modelo"> Modelo: </label>
        <input type="text" name="modelo" require/>
        <br>
        <br>
        <label for="fabricante"> Fabricante: </label>
        <input type="text" name="fabricante" require/>
        <br>
        <br>
        <input type="submit" value="enviar"/>


<?php

    $host  = "localhost:3306";
    $user  = "root";
    $pass  = "";
    $base  = "carros";
    $conexao  = mysqli_connect($host, $user, $pass, $base);
    $resu = mysqli_query($conexao, "select * from tb_carros");
    echo "</br> </br>";
    echo "<center> <h1>Tabela de Carros (teste)</h1> ";
    echo "<table border = 3px><tr><td>Código do carro</td><td>Modelo</td><td>Fabricante</td></tr>";
    while($escrever=mysqli_fetch_array($resu)) {
        echo "</td><td>" . $escrever['id'] . "</td><td>" . $escrever['modelo'] . "</td><td>" . $escrever['fabricante'] . "</td><tr>"; 
    }
    echo "</table>";
    echo "</br> </br>";
    echo '<center>';

    mysqli_close($conexao);
?>
 
</body>
</html>