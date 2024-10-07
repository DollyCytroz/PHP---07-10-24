<?php

$host  = "localhost:3306";
$user  = "root";
$pass  = "";
$base  = "carros";
$conexao  = mysqli_connect($host, $user, $pass, $base);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];    
    $modelo = $_POST["modelo"]; 
    $fabricante = $_POST["fabricante"];

    $resultadoQueryMySQL = mysqli_query($conexao, "update tb_carros set modelo = '$modelo', fabricante = '$fabricante' where id = '$id'");
    echo "<center><h1>Alterações feitas</h1></center>
    <br>
    <center><table border=3px>
      <tr>
        <td>id</td>
        <td>Montadora</td>
        <td>Modelo</td>
      </tr>";

    $resultadoConsulta = mysqli_query($conexao, "SELECT * FROM tb_carros WHERE id = '$id'");



  while ($escrever = mysqli_fetch_array($resultadoConsulta)) {
    echo 
    "</td><td>" . $escrever["id"] .
    "</td><td>" . $escrever["fabricante"] .
    "</td><td>" . $escrever["modelo"] . "</td></tr>";
  }
  echo "</table></center>";
  echo "</br></br>";  
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