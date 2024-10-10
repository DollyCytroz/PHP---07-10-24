<?php

$host  = "localhost:3306";
$user  = "root";
$pass  = "";
$base  = "eventos";
$conexao  = mysqli_connect($host, $user, $pass, $base);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST["id"];
        $nome = $_POST["nome"]; 
        $data = $_POST["data"];
        $horai = $_POST["horai"];
        $horaf = $_POST["horaf"]; 
        $desc = $_POST["desc"];
        $loc = $_POST["loc"];
        $resp = $_POST["resp"];

    $resultadoQueryMySQL = mysqli_query($conexao, "update dados_eventos set nome_evento = '$nome', data_evento = '$data', hora_inicio = '$horai', hora_fim = '$horaf', descricao_evento = '$desc', local_evento = '$loc', responsavel_evento = '$resp' where id = '$id'");
    echo "<center><h1>Alterações feitas</h1></center>
    <br>
    <center><table border=3px>
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

    $resultadoConsulta = mysqli_query($conexao, "SELECT * FROM dados_eventos WHERE id = '$id'");



  while ($escrever = mysqli_fetch_array($resultadoConsulta)) {
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