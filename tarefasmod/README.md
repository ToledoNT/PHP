# Gerenciador de Tarefas - Organize sua Rotina

Este é um simples gerenciador de tarefas desenvolvido em PHP, dividido em várias partes.

## Funcionalidades

1. **ListaTarefas.php**: Este arquivo exibe uma lista de tarefas cadastradas e fornece um formulário para adicionar novas tarefas. As tarefas são armazenadas em uma sessão PHP.

2. **banco.php**: Arquivo contendo as configurações do banco de dados MySQL, como hostname, nome de usuário, senha e nome do banco de dados.

3. **processar_tarefas.php**: Este arquivo recebe os dados do formulário de adição de tarefas em ListaTarefas.php, cria uma nova entrada para a tarefa e redireciona de volta para ListaTarefas.php.

4. **tarefas.css**: Arquivo de estilo CSS para estilizar a aparência do gerenciador de tarefas.

## Como Utilizar

1. Configure um servidor web local ou remoto com suporte a PHP.
2. Abra o arquivo `ListaTarefas.php` em um navegador web.
3. Você verá uma lista de tarefas, bem como um formulário para adicionar novas tarefas.
4. Preencha o formulário com os detalhes da sua nova tarefa e clique em "Cadastrar".
5. Sua nova tarefa será adicionada à lista.

## Banco de Dados

O banco de dados MySQL utilizado pelo gerenciador de tarefas precisa ser configurado com as seguintes informações:

- Hostname: localhost
- Nome de usuário: user
- Senha: user
- Nome do banco de dados:

## Pré-Requisitos

- Servidor web configurado com suporte a PHP.
- Navegador web para visualizar e interagir com o gerenciador de tarefas.

