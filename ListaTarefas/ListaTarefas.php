<?php
session_start();

// Verifica se a lista de tarefas está definida na sessão e se é uma matriz
if (isset($_SESSION['lista_tarefas']) && is_array($_SESSION['lista_tarefas'])) {
    $lista_tarefas = $_SESSION['lista_tarefas']; // Atribui a lista de tarefas à variável
} else {
    $lista_tarefas = array(); // Se não estiver definida ou não for uma matriz, cria uma lista vazia
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gerenciador de Tarefas - Organize sua Rotina</title>
<link rel="stylesheet" href="tarefas.css" type="text/css" />
</head>
<body>
<div class="container">
    <h1>Gerenciador de Tarefas - Organize sua Rotina</h1>
    <form method="POST" action="processar_tarefas.php">
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label for="nome">Tarefa:</label>
            <input type="text" name="nome" id="nome" required>
            <label for="descricao">Descrição (Opcional):</label>
            <textarea name="descricao" id="descricao"></textarea>
            <label for="prazo">Prazo (Opcional):</label>
            <input type="text" name="prazo" id="prazo">
            <fieldset>
                <legend>Prioridade:</legend>
                <label><input type="radio" name="prioridade" value="baixa" checked> Baixa</label>
                <label><input type="radio" name="prioridade" value="media"> Média</label>
                <label><input type="radio" name="prioridade" value="alta"> Alta</label>
            </fieldset>
            <label><input type="checkbox" name="concluida" value="OK"> Tarefa concluída</label>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
    
    <table>
        <tr>
            <th>Tarefa</th>
            <th>Descricao</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluída</th>
        </tr>
        <?php foreach ($lista_tarefas as $tarefa) : ?>
            <tr>
                <td><?php echo isset($tarefa['nome']) ? $tarefa['nome'] : ''; ?> </td>
                <td><?php echo isset($tarefa['descricao']) ? $tarefa['descricao'] : ''; ?> </td>
                <td><?php echo isset($tarefa['prazo']) ? $tarefa['prazo'] : ''; ?> </td>
                <td><?php echo isset($tarefa['prioridade']) ? $tarefa['prioridade'] : ''; ?> </td>
                <td><?php echo isset($tarefa['concluida']) ? $tarefa['concluida'] : ''; ?> </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
