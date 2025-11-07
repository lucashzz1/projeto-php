# projeto-php

O tema escolhido para o CRUD foi “Fale Conosco”, um sistema que permite que usuários enviem mensagens através de um formulário público, e que o administrador possa gerenciar essas mensagens (visualizar, editar e excluir) através de um painel administrativo.

Para executar o projeto, é necessário criar uma tabela no banco de dados projeto1. Após isso, basta preencher e enviar o formulário Fale Conosco disponível na página principal do sistema. As mensagens enviadas poderão ser visualizadas, alteradas e excluídas na área administrativa, acessível por meio da pasta admin_mensagens.

// tabela banco de dados

CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    mensagem TEXT
);
