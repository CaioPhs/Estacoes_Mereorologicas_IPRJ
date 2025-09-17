# Projeto: CRUD de Estações Meteorológicas com Laravel


Este projeto foi criado para demonstrar a implementação de um CRUD básico, permitindo o gerenciamento de estações meteorológicas com os seguintes dados: nome, latitude e longitude.

---

### Funcionalidades

-   **Adicionar Estação**: Crie uma nova estação com nome, latitude e longitude.
-   **Listar Estações**: Visualize todas as estações cadastradas em uma tabela.
-   **Editar Estação**: Atualize as informações de uma estação existente.
-   **Excluir Estação**: Remova uma estação do sistema.

---

### Requisitos do Sistema

-   PHP >= 8.1
-   Composer
-   Laravel
-   Banco de dados MySQL ou similar

---

### Instalação e Execução

Siga os passos abaixo para configurar e rodar o projeto em seu ambiente local.

1.  **Clone o repositório:**
    ```bash
    git clone https://github.com/CaioPhs/Estacoes_Mereorologicas_IPRJ.git
    cd laravel-estacoes-crud
    ```

2.  **Instale as dependências do Composer:**
    ```bash
    composer install
    ```

3.  **Configure o arquivo .env:**
    -   Copie o arquivo de exemplo:
        ```bash
        cp .env.example .env
        ```
    -   Abra o arquivo `.env` e configure as credenciais do seu banco de dados:
        ```ini
        DB_DATABASE=estacoes_db
        DB_USERNAME=root
        DB_PASSWORD=
        ```

4.  **Execute as migrações do banco de dados:**
    ```bash
    php artisan migrate
    ```

5.  **Inicie o servidor de desenvolvimento do Laravel:**
    ```bash
    php artisan serve
    ```

O sistema estará disponível em `http://127.0.0.1:8000/estacoes`.

---


