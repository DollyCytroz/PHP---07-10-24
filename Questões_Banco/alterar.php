<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="alterarDados.php" method="POST">

    <p> <h1> Insira o ID do evento que você quer mudar </h1> </p> 
        <label for="id">Código do evento (ID):</label>
        <input type="text" name="id" require/>
        <br>

        <p> <h1> O que você quer mudar? </h1> </p> 
        <label for="nome">Nome do evento:</label>
        <input type="text" name="nome" require/>
        <br>
        <br>
        <label for="data">Data do evento:</label>
        <input type="date" name="data" require/>
        <br>
        <br>
        <label for="horai">Hora de inicio do evento:</label>
        <input type="time" name="horai" require/>
        <br>
        <br>
        <label for="horaf">Hora de fim do evento:</label>
        <input type="time" name="horaf" require/>
        <br>
        <br>
        <label for="desc">Descrição do evento:</label>
        <input type="text" name="desc" require/>
        <br>
        <br>
        <label for="loc">Local do evento:</label>
        <input type="text" name="loc" require/>
        <br>
        <br>
        <label for="resp">Responsável evento:</label>
        <input type="text" name="resp" require/>
        <br>
        <br>
        <br>
        <input type="submit" value="enviar"/>


<?php

    $host  = "localhost:3306";
    $user  = "root";
    $pass  = "";
    $base  = "eventos";
    $conexao  = mysqli_connect($host, $user, $pass, $base);
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