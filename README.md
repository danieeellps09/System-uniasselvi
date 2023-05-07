# System-uniasselvi
Configuração 
Se estiver usando Docker, utilize o seguinte comando para obter o IP do container:
Certifique-se de substituir "ip_do_container" pelo nome ou ID do seu container.
Em seguida, abra o arquivo `config.php` e atualize as informações de conexão com o banco de dados:

php
$server = 'ip_do_container:porta';
$base = 'tecsystems';
$usuario = 'root';
$senha = 'root';
$con = mysqli_connect($server, $usuario, $senha);

if (!$con) {
    die('Erro ao conectar-se: ' . mysqli_connect_error());
}
## 2° Passo
Crie as tabelas no banco necessárias para o projeto
CREATE TABLE cliente (
  ID_CLI INT(8) NOT NULL AUTO_INCREMENT,
  cpf VARCHAR(100) NOT NULL,
  Cidade VARCHAR(100) NOT NULL,
  Endereco VARCHAR(100) NOT NULL,
  Nome VARCHAR(100) NOT NULL,
  Senha VARCHAR(100) NOT NULL,
  PRIMARY KEY(ID_CLI)
);

CREATE TABLE admin (
  id_adm INT(8) ZEROFILL NOT NULL AUTO_INCREMENT,
  login VARCHAR(100) NOT NULL,
  senha VARCHAR(100) NOT NULL,
  PRIMARY KEY(id_adm)
);

CREATE TABLE Servicos (
  id_ser INT(8) NOT NULL AUTO_INCREMENT,
  cliente_ID_CLI INT(8) NULL,
  admin_id_adm INT(8) ZEROFILL NOT NULL,
  nome VARCHAR(100) NOT NULL,
  descricao VARCHAR(100) NOT NULL,
  valor_loja DECIMAL(10, 2) NOT NULL,
  valor_domicilio FLOAT NOT NULL,
  PRIMARY KEY(id_ser),
  INDEX Servicos_FKIndex1(admin_id_adm),
  INDEX Servicos_FKIndex3(cliente_ID_CLI)
);

CREATE TABLE requisiito (
  id_req INT(8) NOT NULL AUTO_INCREMENT,
  servico VARCHAR(100) NOT NULL,
  cliente VARCHAR(100) NOT NULL,
  endereco VARCHAR(100) NOT NULL,
  PRIMARY KEY(id_req)
);

## 3° crie um usuario administrador para o banco
INSERT INTO admin (login, senha) VALUES ('admin','admin');



