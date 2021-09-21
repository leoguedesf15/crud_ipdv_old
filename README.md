Pré-Requisitos

PostgreSQL - https://www.enterprisedb.com/downloads/postgres-postgresql-downloads
Criação do Banco - Script de criação em app/database/scripts
Servidor Apache - de preferência com módulo mod_rewrite habilitado e "AllowOverride All" pra raiz do apache(htdocs,public_html, www, etc.). 
PHP - v 7.4 (versão utilizada - projeto não foi testado em outras versões) com extensão pdo_pgsql habilitada;

Implantação
1. Na raiz do Apache execute o comando: git clone.....
2. Executar no PgAdmin os scripts de criação na seguinte ordem: (scripts em app/database/scripts)
    2.1 create_database.sql
    Conecte-se no banco recém criado e execute os demais scripts
    2.2 create_tables.sql
    2.3 create_objects.sql
3. Abrir o arquivo app/database/DatabaseConfig.php e personalizar as configurações de acesso ao banco (user, senha e porta).
4. Acessar o projeto em http://localhost/crud_ipdv ou https://localhost/crud_ipdv (caso o ambiente local possua SSL configurado)