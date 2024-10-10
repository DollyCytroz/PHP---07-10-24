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
        <label for="id">Código do evento (ID):</label>
        <input type="text" name="id" require/>
        <br>
        <br>
        <input type="submit" value="enviar"/>
 

<?php

$host  = "localhost:3306";
$user  = "root";
$pass  = "";
$base  = "eventos";
$conexao  = mysqli_connect($host, $user, $pass, $base);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];    

    $resultadoQueryMySQL = mysqli_query($conexao, "DELETE FROM dados_eventos WHERE id = '$id'");
    echo "<center><h1> Coluna excluida!!! </h1></center>";

    $resultadoConsulta = mysqli_query($conexao, "DELETE FROM dados_eventos WHERE id = '$id'");



}

  $resu = mysqli_query($conexao, "select * from dados_eventos");
  echo "</br> </br>";
  echo "<center> <h1>Tabela de Eventos (teste)</h1>";
  echo
        "<center><table border=3px>
          <tr>
          <th>id</th>
          <th>nome_evento</th>
          <th>data_evento</th>
          <th>hora_inicio</th>
          <th>hora_fim</th>
          <th>descricao_evento</th>
          <th>local_evento</th>
          <th>responsavel_evento</th>
          </tr>";

        while($escrever=mysqli_fetch_array($resu)) {
            echo
              "</td><td>" . $escrever["id"] .
              "</td><td>" . $escrever["nome_evento"] .
              "</td><td>" . $escrever["data_evento"] .
              "</td><td>" . $escrever["hora_inicio"] .
              "</td><td>" . $escrever["hora_fim"] .
              "</td><td>" . $escrever["descricao_evento"] .
              "</td><td>" . $escrever["local_evento"] .
              "</td><td>" . $escrever["responsavel_evento"] . "</td></tr>";
            }
            echo "</table></center>";
            echo "</br></br>";  
    mysqli_close($conexao);



?>
</body>
</html>