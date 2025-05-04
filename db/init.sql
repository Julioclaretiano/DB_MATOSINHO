CREATE DATABASE IF NOT EXISTS product_management;

USE product_management;

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO products (name, description, price) VALUES
('Produto Exemplo 1', 'Descrição do Produto Exemplo 1', 19.99),
('Produto Exemplo 2', 'Descrição do Produto Exemplo 2', 29.99),
('Produto Exemplo 3', 'Descrição do Produto Exemplo 3', 39.99);