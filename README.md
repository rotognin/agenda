# Agenda de eventos pessoais

<em>Projeto de estudo particular</em>

Esse projeto é uma agenda simples para marcação de eventos pessoais.
Possui um cadastro de categorias, onde cada evento pode possuir uma categoria específica 
para identificação facilitada do mesmo com uma cor.

Apenas os eventos mais atuais irão aparecer no dashboard do usuário após o login.

## Detalhes técnicos:

Sistema sendo desenvolvido em PHP 8.1, usando a arquitetura MVC (POO), CoffeeCode DataLayer como ORM, banco de dados MySQL, seguindo as melhores práticas de programação (separação de camadas, separação de responsabilidades, nomes de variáveis e métodos com coerência).

Necessário para o funcionamento do sistema: PHP 8.1, MySQL, Composer, GIT (para clonar o repositório, caso queira).

- Este projeto está rodando [neste link](https://rodrigotognin.com.br/agenda/).
- Existe a opção de criar um novo usuário para poder usar o sistema.

## Procedimentos para instalação local:

- Baixe o projeto em uma pasta
  - Com o GIT instalado, use o comando <code>git clone https://github.com/rotognin/agenda.git</code>
  - Será criada a pasta <code>portaria</code>
- Acesse a pasta via linha de comando
- Execute o comando: <code>composer update</code> para baixar as dependências do projeto
- No MySQL crie um banco com o nome <code>agenda_db</code>
- Rode o script <code>docs/tabelas.sql</code> no banco para criar as tabelas do sistema
- Ajuste as configurações de acesso ao banco de dados no arquivo <code>src/config.php</code>

### Considerações

O projeto está em constante atualização, sendo adicionadas funcionalidades e melhorias. Sugestões serão muito bem vindas.