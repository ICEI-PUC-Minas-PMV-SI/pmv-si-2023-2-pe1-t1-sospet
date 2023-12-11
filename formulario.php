<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="formulario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>formulário de contato</title>
</head>
<body>

<header class="cabecalho">
    <a href="home.php"><img class="cabecalho-imagem" src="img/logosemfundo.png" alt="Logo SOS PET"></a>
    <nav class="cabecalho-menu">
        <button><a href="login.php">login/cadastro</a> </button>
    </nav>
</header>

<div class="titulo">
    <h1>formulário de contato:</h1>
    <p>preencha as informações abaixo e nos envie sua dúvida, sugestão ou comentário! estamos à disposição :) </p>
</div>

<div class="formularioContato">
        
    <form action="#" method="post" enctype="multipart/form-data">

        <label>
            <span><i class="icon icon-user-1"></i> digite seu nome:</span>
            <input type="text" name="nome" required="">
        </label>
        
        <label>
            <span><i class="icon icon-email"></i> digite seu email:</span>
            <input type="text" name="email" class="fade_8S">
        </label>

        <label>
            <span><i class="icon icon-flag"></i> digite o título do assunto:</span>
            <input type="text" name="assunto" required="">
        </label>
        
        <label>
            <span><i class="icon icon-comment"></i> digite aqui sua mensagem:</span>
             <textarea name="mensagem" rows="3" required=""></textarea> 
        </label>
       
        <input type="hidden" name="acao" value="enviar" />
        <button class="btn-envia" title="Enviar"><b class="icon icon-paper-plane-o"> pronto! enviar</b></button>

    
    </form>

</div>

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