create schema Produtos;
use Produtos;

CREATE TABLE Produtos (
    codigo INT PRIMARY KEY,
    descricao VARCHAR(250) NOT NULL,
    valor FLOAT (5 , 2 ) NOT NULL,
    quantestoque INT NOT NULL,
    dataregistro DATE NOT NULL
);
    
    insert into Produtos values (1, "Box Harry Potter", 150.00, 10, "2019/08/21");
SELECT 
    *
FROM
    Produtos;