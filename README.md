# MySQL PROJETO MATOSINHO

Este projeto é um sistema de gerenciamento de produtos desenvolvido em PHP e MySQL. Ele permite que os usuários façam login, cadastrem novos produtos, visualizem a lista de produtos cadastrados e excluam produtos do banco de dados.

## Estrutura do Projeto

```
MySQL_PROJETO_MATOSINHO
├── css
│   └── styles.css          # Estilos CSS para as páginas do projeto
├── db
│   ├── init.sql           # Comandos SQL para criar e inicializar o banco de dados
│   └── connection.php      # Estabelece a conexão com o banco de dados MySQL
├── public
│   ├── index.php           # Página inicial do sistema
│   ├── login.php           # Formulário de login e autenticação de usuários
│   ├── register_product.php # Formulário para cadastrar novos produtos
│   ├── view_products.php    # Exibe a lista de produtos cadastrados
│   └── delete_product.php   # Lógica para excluir produtos do banco de dados
├── includes
│   ├── header.php          # Cabeçalho comum a todas as páginas
│   └── footer.php          # Rodapé comum a todas as páginas
└── README.md               # Documentação do projeto
```

## Instruções de Instalação

1. **Clone o repositório**:
   ```
   git clone <URL_DO_REPOSITORIO>
   ```

2. **Configure o banco de dados**:
   - Acesse o MySQL através do XAMPP e crie um novo banco de dados.
   - Execute o arquivo `db/init.sql` para criar as tabelas necessárias.

3. **Configuração da Conexão**:
   - Edite o arquivo `db/connection.php` para adicionar suas credenciais do banco de dados.

4. **Acesse o projeto**:
   - Coloque a pasta `MySQL PROJETO MATOSINHO` na pasta `htdocs` do XAMPP.
   - Acesse `http://localhost/MySQL_PROJETO_MATOSINHO/public/index.php` no seu navegador.

## Funcionalidades

- **Login**: Permite que os usuários se autentiquem no sistema.
- **Cadastro de Produtos**: Usuários podem adicionar novos produtos ao banco de dados.
- **Visualização de Produtos**: Lista todos os produtos cadastrados com detalhes.
- **Exclusão de Produtos**: Permite que os usuários removam produtos do banco de dados.

## Contribuição

Sinta-se à vontade para contribuir com melhorias ou correções. Para isso, crie um fork do repositório e envie um pull request com suas alterações.