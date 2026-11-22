
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <title>Tela login TC</title>
</head>
<body>

<?php
include('conexao.php');

if(isset($_POST['nome']) || isset($_POST['senha'])) {

    if(strlen($_POST['nome']) == 0) {
        echo "Preencha seu nome";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $nome = $mysqli->real_escape_string($_POST['nome']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: PerfilUsu.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
    <div class="logotc">
        <span>TOURIST CAMP</span>
    </div>
    
    <div id="login-wrapper">
        <div id="login" class="box container">
            <form action="" method="post">
                <h2>Fazer Login</h2>
                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
                <div class="row gtr-uniform">
                    <div class="col-12">
                    <input type="text" name="nome" placeholder="Digite o usuário" value="<?php if(isset($dados['usuario'])){ echo $dados['usuario']; } ?>"><br><br>
                    </div>
                    <div class="col-12">
                    <input type="password" name="senha" placeholder="Digite a senha" value="<?php if(isset($dados['senha'])){ echo $dados['senha']; } ?>"><br><br>
                        <input type="submit" class="button" value="Acessar" name="SendLogin">
                        <li><a href="index.php" class="button">Cadastrar-se</a></li>
                    </div>
                
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="footer-wrapper">
        <footer id="footer" class="container">
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
</div>

</body>
</html>