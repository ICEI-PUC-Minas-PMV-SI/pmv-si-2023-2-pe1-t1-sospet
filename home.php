<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $_SESSION["usuario_autenticado"] = true;

        header("Location: home.php");
        exit();
    }

        $botao_visivel = !isset($_SESSION["usuario_autenticado"]) || $_SESSION["usuario_autenticado"] !== true;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Um espaço para o encontro e reencontro de pets perdidos!">
   
    <title>sos pet</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="home.css">
</head>

<body>

    <header class="cabecalho">
        <img class="cabecalho-imagem" src="img\logosemfundo.png" alt="Logo SOS PET">
        <nav class="cabecalho-menu">
            <a href="#home" class="cabecalho-menu-item1">sobre</a>
            <a href="#pet" class="cabecalho-menu-item2">pet</a>
            <a href="#relato" class="cabecalho-menu-item3">relatos</a>
            <div class="login-botao" <?php if (!$botao_visivel) echo 'style="display:none;"'; ?>>
                <a href="login.php" class="cabecalho-menu-item4">login/cadastro</a>
            </div>
        </nav>
    </header>
    
    <main class="home">
        <section id="home" class="home-inicio">
            <div class="home-apresentacao">
                <h1 class="home-escrito">um espaço dedicado a encontros e reencontros!</h1>
                <a href="feed.php" class="home-botao"> buscar pet</a>
            </div>    
                <img class="home-inicio-imagem" src="img\inicio.png" alt="Imagem Home Gato">
        </section>

        <section id="pet" class="pet">
            <h2 class="pet-titulo">quer fazer um anúncio? </h2>
        <div class="pet-botoes">  
            <a href="cadastro-perdi.php" class="botao-perdi">perdi meu pet</a>
            <a href="cadastro-achei.php" class="botao-achei">achei um pet</a>
        </div>  
        </section>

        <section id="relato" class="relato">
           <div class="relato-titulo">
            <h3>conheça alguns de nossos finais felizes!</h3>
           </div>
        </section>   

        <section class="relatos">
        <div class="container">
            <div class="relato1">
                <img src="img\relato1.jpg" alt="marina e filo">
                <p>MARINA E TOM</p>
                <span>Tom se perdeu da Marina no fim do ano e ela encontrou ele fazendo um post aqui no site! </span>
           </div>
           <div class="relato2">
                <img src="img\relato2.jpg" alt="Luan e Romeu">
                <p>CAROL E ROMEU</p>
                <span>Carol adotou o romeu depois de se apaixonar vendo um post sobre ele aqui!</span>
           </div>
           <div class="relato3">
                <img src="img\relato3.jpg" alt="Alana e Simba">
                <p>TIAGO E SIMBA</p>
                <span>Simba fugiu de casa e foi encontrado pelo Tiago após fazer um post aqui no site!</span>
           </div>
           <div class="relato4">
            <img src="img\relato4.jpg" alt="Luan e Romeu">
            <p>FILIPE E CHICO</p>
            <span>Filipe, teve amor a primeira vista e adotou seu melhor amigo no sos pet!</span>
            </div>
            <div class="relato5">
                <img src="img\relato5.jpg" alt="Luan e Romeu">
                <p>JOANA E SOPHIA</p>
                <span>Joana reencontrou a Sophia atráves de um post feito por alguém que viu a gatinha perdida!</span>
           </div>
        </div>   
        </section>

        <section class="adocao">
            <h4 class="adocao-titulo">você também pode adotar um pet!</h4>
            <a href="feed.html" class="adocao-botao">encontrar um pet para adoção</a>
        </section>

    </main>

        <section class="footer">
            <div class="footer-contatos">
                <img src="img\logosemfundo.png" alt="logo">
                <h5>conheça mais sobre nós!</h5>

            <div class="footer-redes">
                <a href="#" class="redes-link" id="instagram">
                <i class="fa-brands fa-square-instagram" style="color: #5f7161;"></i>
                </a>

                <a href="#" class="redes-link" id="facebook">
                    <i class="fa-brands fa-square-facebook" style="color: #5f7161;"></i>
                    </a>

                <a href="#" class="redes-link" id="tiktok">
                    <i class="fa-brands fa-tiktok" style="color: #5f7161;"></i>
                    </a>   

            </div>

            <ul class="footer-lista">
                <li>
                    <a href="sobresos.php" class="footer-link">sobre o SOS PET</a>
                </li>
                <li>
                    <a href="politicasepriv.php" class="footer-link">nossas políticas e termos</a>
                </li>
            </ul>
            
            <div id="footer-email">
                <p>fale com a gente :) </p>
                <a href="formulario.php" class="footer-botao">entrar em contato</a>
            </div>

        <div id="footer-copyright">
            &#169
            2023 all rights reserved
        </div>    
        </section>

</body>

</html>