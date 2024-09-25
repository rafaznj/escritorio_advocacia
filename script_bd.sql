CREATE DATABASE escritorio_advocacia;

CREATE TABLE orcamento(
cpf varchar(11),
nome_completo varchar(255),
email varchar(255), 
telefone varchar(15), 
turno_contato varchar(60),
vara_processual varchar(30),
descricao_processo text
);

CREATE TABLE conta(
numero_oab varchar(8),
nome_completo varchar(255),
email varchar(255), 
cpf varchar(11)
)