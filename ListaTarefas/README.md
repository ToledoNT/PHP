# Gerenciador de Tarefas - Organize sua Rotina

Este é um simples gerenciador de tarefas desenvolvido em PHP.

## Funcionalidades

- **ListaTarefas.php**: Exibe uma lista de tarefas cadastradas e um formulário para adicionar novas tarefas. Utiliza sessões para armazenar e recuperar as tarefas.
   
- **processar_tarefas.php**: Processa os dados enviados pelo formulário de adição de tarefas em ListaTarefas.php. Cria uma nova entrada para a tarefa e redireciona de volta para ListaTarefas.php.

- **tarefas.css**: Arquivo de estilo CSS para estilizar a aparência do gerenciador de tarefas.

## Como Utilizar o Gerenciador de Tarefas

1. Configure um servidor web local ou remoto com suporte a PHP.
2. Abra o arquivo `ListaTarefas.php` em um navegador web.
3. Você verá uma lista de tarefas, bem como um formulário para adicionar novas tarefas.
4. Preencha o formulário com os detalhes da sua nova tarefa e clique em "Cadastrar".
5. Sua nova tarefa será adicionada à lista.

### Lista de Tarefas

| Tarefa   | Descrição            | Prazo      | Prioridade | Concluída |
|----------|----------------------|------------|------------|------------|
| Tarefa 1 | Descrição da Tarefa 1| 10/04/2024 | Alta       | Sim        |
| Tarefa 2 | Descrição da Tarefa 2| 15/04/2024 | Média      | Não        |
| Tarefa 3 | Descrição da Tarefa 3| 20/04/2024 | Baixa      | Não        |

## Pré-Requisitos

- Servidor web configurado com suporte a PHP.
- Navegador web para visualizar e interagir com o gerenciador de tarefas.

