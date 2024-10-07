<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">

    <p> Insira o ID da tabela que você deseja excluir: </p> 
        <label for="id"> Id: </label>
        <input type="text" name="id" require/>
        <br>
        <br>
        <input type="submit" value="enviar"/>
 

<?php

$host  = "localhost:3306";
$user  = "root";
$pass  = "";
$base  = "carros";
$conexao  = mysqli_connect($host, $user, $pass, $base);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];    

    $resultadoQueryMySQL = mysqli_query($conexao, "DELETE FROM tb_carros WHERE id = '$id'");
    echo "<center><h1> Coluna excluida!!! </h1></center>";

    $resultadoConsulta = mysqli_query($conexao, "DELETE FROM tb_carros WHERE id = '$id'");



}

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