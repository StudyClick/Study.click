create database studyclick;
use studyclick;

CREATE TABLE tbusuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    data_nascimento DATE,
    email VARCHAR(150) UNIQUE NOT NULL,
    senha VARCHAR(50) NOT NULL
);

-- Tabela de acessos
CREATE TABLE acessos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    ip VARCHAR(45),
    data_acesso TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO tbusuarios (id, nome, data_nascimento, email, senha) 
VALUES (10, 'ryan', '2023-10-25', 'ryanhenrique@gmail.com', '123456');

select * from tbusuarios;