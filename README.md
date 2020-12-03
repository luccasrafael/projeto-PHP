# projeto-PHP

## Database schema
### Tabela clientes
````
CREATE TABLE clientes (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  data_nascimento DATE NOT NULL,
  cpf VARCHAR(11) NOT NULL,
  rg VARCHAR(11) NOT NULL,
  telefone VARCHAR(15) NOT NULL
) ENGINE = InnoDB;
````
### Tabela enderecos
````
CREATE TABLE enderecos (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  cliente_id INT UNSIGNED NOT NULL,
  logradouro VARCHAR(100) NOT NULL,
  numero INT NOT NULL,
  bairro VARCHAR(50) NOT NULL,
  cep VARCHAR(8) NOT NULL,
  cidade VARCHAR(50) NOT NULL,
  estado VARCHAR(50) NOT NULL,
  CONSTRAINT `fk_cliente_endereco`
    FOREIGN KEY (cliente_id) REFERENCES clientes (id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
) ENGINE = InnoDB;
````

### Tabela usuarios
````
CREATE TABLE usuarios (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	usuario VARCHAR(100) NOT NULL UNIQUE ,
	senha VARCHAR(100) NOT NULL
) ENGINE = InnoDB;
````