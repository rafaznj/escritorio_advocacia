CREATE DATABASE escritorio_advocacia;

CREATE TABLE orcamento(
cpf varchar(11) NOT NULL,
nome_completo varchar(255) NOT NULL,
email varchar(255) NOT NULL, 
telefone varchar(15) NOT NULL, 
turno_contato varchar(60) NOT NULL,
vara_processual varchar(30) NOT NULL,
descricao_processo text NOT NULL
);

CREATE TABLE conta(
numero_oab varchar(8) NOT NULL,
nome_completo varchar(255) NOT NULL,
email varchar(255) NOT NULL, 
cpf varchar(11) NOT NULL
);
