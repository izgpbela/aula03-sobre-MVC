<?php

// Definição do TIMEZONE.

date_default_timezone_get('America/São Paulo');

// Conexão para DB.
$servername = "localhost";
$username = "root";
$password = "senac";
$dbname = "livraria";

// conexão...
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);

    echo "Conectado com sucesso";
}
?>






<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
</head>

<body>

</body>

</html>