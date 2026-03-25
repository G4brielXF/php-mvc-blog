# Blog PHP MVC
 
Um sistema de blog completo construído em PHP puro seguindo o padrão **MVC** (Model-View-Controller) implementado do zero, sem framework full-stack. Possui duas interfaces distintas: um site público para leitores e um painel administrativo protegido por autenticação.
 
## 🚀 Funcionalidades
 
- Site público com listagem de posts, leitura, busca e filtro por categoria
- Painel administrativo com CRUD completo de posts, categorias e usuários
- Autenticação segura com controle de sessão
- Upload de imagem de capa para posts
- Renderização de views com Twig (herança de templates, escaping automático)
- Roteamento HTTP com suporte a grupos e prefixos via `pecee/simple-router`
- Flash messages para feedback de ações
- Página 404 personalizada
 
## 🧠 Conceitos Aplicados
 
- Arquitetura MVC com separação clara entre Model, View e Controller
- Front controller pattern (`index.php` como ponto de entrada único)
- Classes base reutilizáveis para Controller e Model
- Singleton de conexão PDO
- Sistema de roteamento com grupos e middleware de autenticação
- Herança de templates Twig para site público e painel admin
- Autoload PSR-4 via Composer
 
## 🛠️ Tecnologias
 
- PHP 8+
- MySQL / MariaDB
- Twig 3.x
- pecee/simple-router
- PDO
- Composer
- Apache + mod_rewrite
 
## 📂 Estrutura do Projeto
 
```
/
├── index.php               # Front controller
├── rotas.php               # Definição de todas as rotas
├── sistema/
│   ├── configuracao.php    # Constantes globais (DB, paths, URL)
│   ├── Nucleo/             # Classes base: Controlador, Modelo, Sessao, Helpers...
│   ├── Controlador/        # Controllers do site público e admin
│   └── Modelo/             # Models: Post, Categoria, Usuario
├── templates/
│   ├── site/               # Views Twig do site público
│   └── admin/              # Views Twig do painel administrativo
└── vendor/                 # Dependências Composer
```
 
## ⚙️ Configuração
 
1. Clone o repositório
2. Instale as dependências:
   ```bash
   composer install
   ```
3. Importe o banco de dados e configure suas credenciais em `sistema/configuracao.php`:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_NOME', 'nome_do_banco');
   define('DB_USUARIO', 'seu_usuario');
   define('DB_SENHA', 'sua_senha');
   define('BASE_URL', 'http://localhost/blog');
   ```
4. Configure o Apache com `mod_rewrite` habilitado (ou use XAMPP/Laragon)
5. Acesse o painel admin em `/admin`
 
## 📌 Autor
 
Gabriel Xavier
