<?php
// Configurações do banco de dados
$hostname = 'localhost'; // Endereço do servidor MySQL
$username = 'user'; // Nome de usuário do MySQL
$password = 'user'; // Senha do MySQL
$database = 'toledodb'; // Nome do banco de dados

// Estabelecer conexão com o banco de dados
$conexao = mysqli_connect($hostname, $username, $password, $database);

// Verificar se a conexão foi bem-sucedida
if (!$conexao) {
    die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
}

// Definir o conjunto de caracteres para utf8 (opcional)
mysqli_set_charset($conexao, 'utf8');
?>

