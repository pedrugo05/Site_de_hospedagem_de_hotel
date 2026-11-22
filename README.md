# 🏨 Sistema de Hospedagem de Hoteis (Portfólio)

Um sistema web completo desenvolvido em 2024 para gerenciamento e reserva de hospedagens em hotéis cápsulas que foi durante a COP30, integrando páginas estáticas modernas com um sistema dinâmico de autenticação de usuários, cadastros e conexão com banco de dados relacional.

## 🚀 Sobre o Projeto
Este projeto foi desenvolvido como parte de um portfólio de programação para demonstrar habilidades em desenvolvimento web full-stack. O sistema conta com uma interface visual responsiva (baseada no design *HTML5 Up*) e um back-end estruturado em PHP para controle de sessões, logins e interações com o banco de dados.

## Autores
Desenvolvido por Pedro Hugo (Estudante da UNAMA - ALCINDO CACELA) e Juliana Corrêa (Aluna da EETEPA CACAU - ICOARACI).

## 🛠️ Tecnologias e Ferramentas Utilizadas

O projeto foi construído utilizando as seguintes tecnologias:

* **Front-end:**
  * **HTML5** e **CSS3** (com folhas de estilo personalizadas para login, cadastro e perfis)
  * **JavaScript** (para interatividade e manipulação de elementos via scripts como `main.js`, `util.js`)
  * **FontAwesome** (para ícones modernos na interface)

* **Back-end & Banco de Dados:**
  * **PHP** (para controle de rotas, sessões de usuário, conexões e processamento de formulários)[cite: 1]
  * **MySQL / SQL** (para armazenamento de dados de usuários e tabelas relacionais, estruturado através de scripts como `celke.sql`)[cite: 1]

## 📂 Estrutura de Diretórios do Projeto

```text
site-novo/
│
├── assets/                  # Arquivos estáticos (CSS, JS, SASS, fontes e imagens base).
├── banco de dados/          # Arquivos de exportação SQL para criação das tabelas.
├── images/                  # Imagens institucionais, fotos dos hotéis e logotipos.
├── conexao.php / conexao2.php # Arquivos de configuração de conexão com o banco de dados.
├── index.html / index.php   # Páginas principais de entrada do sistema.
├── login.css / loguin.php   # Tela e lógica de autenticação de usuários.
├── cadastro.css / processa.php # Estrutura de cadastro e processamento de dados.
├── perfilusu.php            # Painel do usuário logado.
└── README.md                # Documentação do projeto.
