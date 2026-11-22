<?php
session_start();
?>

<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Cadastro.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <title>Tela Cadastro TC</title>
</head>
<body>

   
    <div class="logotc">
        <span>TOURIST CAMP</span>
    </div>
    
    <div id="login-wrapper">
        <div id="login" class="box container">
            <form action="processa.php" method="post"> <!--  processar o cadastro -->
                <h2>Fazer Cadastro</h2> 
                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
                <div class="row gtr-uniform">
                    <div class="col-12">
                        <input type="text" name="nome" id="username" value="" placeholder="Nome de Usuário" />
                    </div>
                    
                   

                    <div class="col-12">
                        <input type="text" name="email" id="email" value="" placeholder="E-mail" /> <!-- campo de E-mail -->
                    </div>
                    <div class="col-12">
                    <input type="password" name="senha" placeholder="Senha" value="<?php if(isset($dados['senha'])){ echo $dados['senha']; } ?>"><br><br>

                        <div class="col-12">
                            <ul class="actions">
							<li><button type="submit" class="button">Fazer Cadastro</button></li> 
                            <li><a href="loguin.php" class="button">fazer login</a></li>
                            </ul>
                        </div>
                    </div>
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