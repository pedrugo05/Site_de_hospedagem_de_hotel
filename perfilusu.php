<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Usuario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Perfil de Usuário</title>
</head>

<body>
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header-wrapper">
            <header id="header" class="container">
                <!-- Seu cabeçalho aqui, como o logotipo e o menu de navegação -->
            </header>
        </div>

        <!-- Conteúdo do perfil do usuário -->
        <div id="main-wrapper">
            <div class="container">
                <div id="content">
                    <h2>Perfil de Usuário</h2>
                    <?php
session_start();
ob_start();
include_once 'conexao.php';

if((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))){
    $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário realizar o login para acessar a página!</p>";
    header("Location: index.php");
}
?>
                    <p>Bem-vindo, <?php echo $_SESSION['nome']; ?>! Aqui estão algumas informações do seu perfil:</p>
                    <!-- Adicione mais informações do perfil aqui -->

                    <!-- Botão para voltar -->
                    <a href="index.html" class="button">Voltar para Início</a>
                    <a href="sair.php" class="button">Sair da conta</a>
                </div>
            </div>
        </div>
    </div>

    <div id="footer-wrapper">
        <footer id="footer" class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Contato -->
                    <section class="widget contact last">
                        <h3>Contato</h3>
                        <a href="https://www.instagram.com/seu-usuario/" class="social-icon">
                            <i class="fab fa-instagram-square fa-3x" style="color: rgba(0, 0, 0, 0.5);"></i>
                        </a>

                        <a href="https://api.whatsapp.com/send?phone=seu-numero" class="social-icon">
                            <i class="fab fa-whatsapp-square fa-3x" style="color: rgba(0, 0, 0, 0.5);"></i>
                        </a>

                        <a href="mailto:seu-email@gmail.com" class="social-icon">
                            <i class="fa-solid fa-envelope fa-3x" style="color: rgba(0, 0, 0, 0.5);"></i>
                        </a>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="copyright">
                        <ul class="menu">
                            <li>&copy; Criado pela Tourist camp</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script>
        // Suponhamos que você tenha uma variável no seu backend indicando se o usuário está autenticado
        // Aqui, estou usando uma variável fictícia isLoggedIn. Substitua isso pelo seu mecanismo real.
    
        const isLoggedIn = true;  // Mude para false se o usuário não estiver logado
    
        // Função para mostrar ou ocultar o link do perfil com base no estado de login
        function atualizarLinkPerfil() {
            const linkPerfil = document.getElementById('perfil-link');
    
            if (isLoggedIn) {
                linkPerfil.style.display = 'inline-block';  // Mostra o link do perfil
            } else {
                linkPerfil.style.display = 'none';  // Oculta o link do perfil
            }
        }
    
        // Chame a função na carga da página para garantir que o link do perfil seja configurado corretamente
        window.onload = atualizarLinkPerfil;
    </script>
</body>

</html>
