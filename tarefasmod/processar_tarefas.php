<?php
session_start();
include "banco.php"; // Incluindo o arquivo de configuração do banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tarefa = array();
    $tarefa['nome'] = $_POST['nome'];
    $tarefa['descricao'] = isset($_POST['descricao']) ? $_POST['descricao'] : '';
    $tarefa['prazo'] = isset($_POST['prazo']) ? $_POST['prazo'] : '';
    $tarefa['prioridade'] = $_POST['prioridade'];
    $tarefa['concluida'] = isset($_POST['concluida']) ? $_POST['concluida'] : '';

    $_SESSION['lista_tarefas'][] = $tarefa;
}

header("Location: ListaTarefas.php");
?>
