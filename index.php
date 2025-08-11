<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Fale Conosco</h1>

<form action="post" action="">

<label for="nome">Nome:</label><br>
<input type="text" name="name" id="nome" required><br><br>

<label for="email">Email:</label><br>
<input type="email" name="email" id="email" required><br><br>

<label for="mensagem">Mensagem:</label><br>
<input type="mensagem" name="mensagem" id="nome" required><br><br>

<input type="sbimit" value="Enviar">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
//coleta os dados do formulário
$nome = htmlspecialchars($_POST["nome"]);
$email = htmlspecialchars($_POST["email"]);
$mensagem = htmlspecialchars($_POST["mensagem"]);

//Exibe os dados (em uma aplicação real, você poderia salvar ou enviar por email)
echo"<h2>Dados Recebidos:</h2>";
echo"<p>Nome:</strong>$nome</p>";
echo"<p>Email:</strong>$email</p>";
echo"<p>Mensagem:</strong>$mensagem</p>";
}

?>

</body>
</html>