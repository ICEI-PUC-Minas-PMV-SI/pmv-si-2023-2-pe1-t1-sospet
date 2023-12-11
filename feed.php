<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="feed.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>busca-pet</title>
        <script>
            function filtrar() {

                var situacao = document.getElementById("situacao").value;
                var especie = document.getElementById("especie").value;
                var genero = document.getElementById("genero").value;
                var cidade = document.getElementById("cidade").value.toLowerCase();

                var elementos = document.getElementsByClassName("box-container")[0].children;
    

                for (var i = 0; i < elementos.length; i++) {
                    var elemento = elementos[i];
                    var textoCidade = elemento.textContent.toLowerCase();
    
                    var atendeFiltro = true;
    
                    if (situacao !== "todos" && !textoCidade.includes(situacao)) {
                        atendeFiltro = false;
                    }
    
                    if (especie !== "todos" && !textoCidade.includes(especie)) {
                        atendeFiltro = false;
                    }
    
                    if (genero !== "todos" && !textoCidade.includes(genero)) {
                        atendeFiltro = false;
                    }
    
                    if (cidade !== "" && !textoCidade.includes(cidade)) {
                        atendeFiltro = false;
                    }

                    if (atendeFiltro) {
                        elemento.style.display = "block";
                    } else {
                        elemento.style.display = "none";
                    }
                }
            }
        </script>
    </head>
<body>
    <header class="cabecalho">
        <a href="home.php"><img class="cabecalho-imagem" src="img/logosemfundo.png" alt="Logo SOS PET"></a>
        <nav class="cabecalho-menu">
            <button><a href="login.php">login/cadastro</a> </button>
            </nav>
    </header>

    <div class="titulo">
        <h1>anúncios:</h1>
        <p>aqui alguns anúncios criados no SOS PET!</p>
    </div>

    <div class="botao-anunciar">
        <p>não achou seu pet?</p>
        <a href="cadastro.php" class="botao-link">criar um anúncio!</a>
    </div>

    <div class="filtro">
        <label for="situacao">situação do pet:</label>
        <select id="situacao" name="situacao">
            <option value="procurando">procurando dono</option>
            <option value="procurado">sendo procurado</option>
        </select>

        <label for="especie">espécie do pet:</label>
        <select id="especie" name="especie">
            <option value="cachorro">cachorro</option>
            <option value="gato">gato</option>
        </select>    
            
        <label for="genero">genero do pet:</label>
        <select id="genero" name="genero">
            <option value="femea">fêmea</option>
            <option value="macho">macho</option>
            <option value="outro">outro/não sei</option>
        </select>      
        
        <label for="cidade">cidade:</label>
            <input id="cidade" type="text" name="cidade" required>

        <button onclick="filtrar()">filtrar</button>

    </div>

    <div class="box-container">
        <?php
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "zC;BU`T96F1$";
        $database = "sospet";

        $conexao = mysqli_connect($servername, $username, $password, $database);

        if (!$conexao) {
            die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM pet";
        $resultado = mysqli_query($conexao, $sql);

        if ($resultado) {
            while ($anuncio = mysqli_fetch_assoc($resultado)) {
                echo '<div class="box' . $anuncio['id'] . '">';
                echo '<a href="pagina-pet.php?id=' . $anuncio['id'] . '"><img src="' . $anuncio['imagem'] . '" alt="' . $anuncio['nome'] . '"></a>';
                echo '<p>' . $anuncio['nome'] . ' em ' . $anuncio['cidade'] . '</p>';
                echo '</div>';
            }

            mysqli_free_result($resultado);
        } else {
            echo "Erro na consulta: " . mysqli_error($conexao);
        }

        mysqli_close($conexao);
        ?>
    </div>

    <div class="footer">
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
    </div>

</body>
</html>