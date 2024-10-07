<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p> <h1> Insira os dados de cadastro </h1> </p> 

    <form action="valida_cadastro.php" method="POST">
        <label for="id">Código do evento (ID):</label>
        <input type="text" name="id" require/>
        <br>
        <br>
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
    </form>

</body>
</html>