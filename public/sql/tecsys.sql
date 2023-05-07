CREATE TABLE admin (
  id_adm INT(8) ZEROFILL NOT NULL AUTO_INCREMENT,
  login VARCHAR(100) NOT NULL,
  senha VARCHAR(100) NOT NULL,
  PRIMARY KEY(id_adm)
);

CREATE TABLE cliente (
  ID_CLI INT(8) NOT NULL AUTO_INCREMENT,
  cpf VARCHAR(100) NOT NULL,
  Cidade VARCHAR(100) NOT NULL,
  Endereco VARCHAR(100) NOT NULL,
  Nome VARCHAR(100) NOT NULL,
  Senha VARCHAR(100) NOT NULL,
  PRIMARY KEY(ID_CLI)
);

CREATE TABLE requisiito (
  id_req INT(8) NOT NULL AUTO_INCREMENT,
  servico VARCHAR(100) NOT NULL,
  cliente VARCHAR(100) NOT NULL,
  endereco VARCHAR(100) NOT NULL,
  PRIMARY KEY(id_req)
);

CREATE TABLE Serviços (
  id_ser INT(8) NOT NULL AUTO_INCREMENT,
  cliente_ID_CLI INT(8) NOT NULL,
  admin_id_adm INT(8) ZEROFILL NOT NULL,
  nome VARCHAR(100) NOT NULL,
  descricao VARCHAR(100) NOT NULL,
  valor_loja FLOAT NOT NULL,
  valor_domicilio FLOAT NOT NULL,
  PRIMARY KEY(id_ser, requisiito_id_req, cliente_ID_CLI),
  INDEX Serviços_FKIndex1(admin_id_adm),
  INDEX Serviços_FKIndex3(cliente_ID_CLI)
);


