CREATE DATABASE VendaLivrosDB;

USE VendaLivrosDB;

-- Criação da tabela livro
CREATE TABLE livro (
    tituloLivro VARCHAR(255) NOT NULL PRIMARY KEY,
    anoLivro INT NOT NULL,
    autor VARCHAR(255) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    idioma VARCHAR(50) NOT NULL,
    estoque INT NOT NULL
);

-- Criação da tabela compra
CREATE TABLE compra (
    numeroCartao VARCHAR(20) NOT NULL,
    nomeCartao VARCHAR(255) NOT NULL,
    validade VARCHAR(10) NOT NULL,
    codigo VARCHAR(5) NOT NULL,
    quantidade INT NOT NULL,
    PRIMARY KEY (numeroCartao, codigo)
);

-- Adicionar a coluna 'idCliente' na tabela 'compra' para relacionamento com 'cliente'
ALTER TABLE compra ADD idCliente INT NOT NULL;

-- Criar o relacionamento entre 'compra' e 'cliente'
ALTER TABLE compra
ADD CONSTRAINT compraCliente
FOREIGN KEY (idCliente) REFERENCES cliente(id);

-- Adicionar a coluna 'tituloLivro' na tabela 'compra' para relacionamento com 'livro'
ALTER TABLE compra ADD tituloLivro VARCHAR(255) NOT NULL;

-- Criar o relacionamento entre 'compra' e 'livro'
ALTER TABLE compra
ADD CONSTRAINT compraLivro
FOREIGN KEY (tituloLivro) REFERENCES livro(tituloLivro);

-- Exibir os dados da tabela 'compra' para verificar o relacionamento
SELECT * FROM compra;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Identificador único para cada usuário
    username VARCHAR(255) NOT NULL UNIQUE,  -- Nome de usuário, deve ser único
    password VARCHAR(255) NOT NULL  -- Senha do usuário, armazenada como hash
);

INSERT INTO usuarios (username, password) VALUES ('user1', SHA2('password1', 256));


-- Adicionar relacionamento entre 'compra' e 'usuarios'
ALTER TABLE compra ADD idUsuario INT NOT NULL;
ALTER TABLE compra ADD CONSTRAINT fk_compra_usuario
FOREIGN KEY (idUsuario) REFERENCES usuarios(id);

-- Criar a tabela 'reserva' para relacionar 'usuarios' e 'livro'
CREATE TABLE reserva (
    produto VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    quantidade INT NOT NULL,
    dataReserva DATE NOT NULL,
    PRIMARY KEY (produto, email, dataReserva)
);

DESCRIBE usuarios;
DESCRIBE compra;


INSERT INTO usuarios (username, password) VALUES ('SHA2', '256');


-- Verificar usuários
SELECT * FROM usuarios WHERE username = 'user1';

-- Caso você queira testar uma senha específica, você pode usar:
SELECT * FROM usuarios WHERE username = 'SHA2';  -- Isso não deve retornar nenhum resultado se 'SHA2' não é um usuário válido.



SELECT * FROM usuarios;
SELECT * FROM compra;


ALTER TABLE usuarios ADD COLUMN dataNasc DATE DEFAULT '1900-01-01';

UPDATE usuarios SET dataNasc = '1900-01-01' WHERE dataNasc = '0000-00-00';

ALTER TABLE usuarios MODIFY COLUMN dataNasc DATE NOT NULL;

ALTER TABLE usuarios
ADD COLUMN nome VARCHAR(100) NOT NULL,
ADD COLUMN endereco VARCHAR(255) NOT NULL,
ADD COLUMN telefone VARCHAR(20) NOT NULL,
ADD COLUMN reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;


SET SQL_SAFE_UPDATES = 0;

UPDATE usuarios SET dataNasc = '1900-01-01' WHERE dataNasc = '0000-00-00';

SET SQL_SAFE_UPDATES = 1;

ALTER TABLE usuarios
CHANGE COLUMN username login VARCHAR(255) NOT NULL;











