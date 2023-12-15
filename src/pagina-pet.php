<?php
header('Content-Type: text/html; charset=utf-8');

session_start();

$servername = "localhost";
$username = "livre145_sospet";
$password = "]1^xUN91H}Uj";
$database = "livre145_sospet";

$conexao = mysqli_connect($servername, $username, $password, $database);

if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

mysqli_set_charset($conexao, "utf8");

$usuario_id = isset($_GET['id']) ? (int)$_GET['id'] : null;
if ($usuario_id === null || $usuario_id <= 0) {
    die("Anúncio não encontrado.");
}

$sql = "SELECT pet.*, usuarios.nome_tutor, usuarios.email_tutor, usuarios.telefone_tutor
        FROM pet
        INNER JOIN usuarios ON usuarios.id = pet.usuario_id
        WHERE pet.usuario_id = ?";

$stmt = mysqli_prepare($conexao, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "i", $usuario_id);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    if (!$resultado) {
    die("Erro ao buscar informações do anúncio: " . mysqli_error($conexao));
    }

    if (mysqli_num_rows($resultado) > 0) {
        $anuncio = mysqli_fetch_assoc($resultado);

        $idPet = $anuncio['id'];
        $nomePet = $anuncio['nome'];
        $especiePet = $anuncio['especie'];
        $generoPet = $anuncio['genero'];
        $descricaoPet = $anuncio['descricao'];
        $cidadePet = $anuncio['cidade'];
        $imagemPet = $anuncio['imagem'];
        $dataCriacao = date('d/m/Y H:i:s', strtotime($anuncio['data_criacao']));

        $usuarioId = isset($anuncio['usuario_id']) ? $anuncio['usuario_id'] : null;
        $nomeTutor = $anuncio['nome_tutor'];
        $emailTutor = $anuncio['email_tutor'];
        $telefoneTutor = $anuncio['telefone_tutor'];

    } else {
        echo "DEBUG: Nenhum anúncio encontrado.";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Erro ao preparar a consulta: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="pagina-pet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>anúncio pet</title>
    
</head>
<body>

    <header class="cabecalho">
        <a href="home.php"><img class="cabecalho-imagem" src="img/logosemfundo.png" alt="Logo SOS PET"></a>
        <nav class="cabecalho-menu">
            <button><a href="login.php">login/cadastro</a> </button>
        </nav>
    </header>

        <div class="box-container">
            <div class="imagem">
                <img class= "img-pet" src="<?php echo $imagemPet; ?>" alt="imagem pet">   
            </div>

            <div class="informacoes">
                <div class="pet">
                    <h1>Informações do Pet:</h1>
                    <p>Nome: <?php echo $nomePet; ?></p>
                    <p>Espécie: <?php echo $especiePet; ?></p>
                    <p>Gênero: <?php echo $generoPet; ?></p>
                    <p>Descrição: <?php echo $descricaoPet; ?></p>
                    <p>Localização: <?php echo $cidadePet; ?></p>
                </div>

                <div class="dono">
                    <h2>Informações do Tutor:</h2>
                    <p>Nome do Tutor: <?php echo $nomeTutor; ?></p>
                    <p>Email do Tutor: <?php echo $emailTutor; ?></p>
                    <p>Contato do Tutor: <?php echo $telefoneTutor; ?></p>
                    <p>Anúncio feito em: <?php echo $dataCriacao; ?></p>
                </div>
            </div>
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
                        <a href="sobresos.php" class="footer-link">o que é o SOS PET?</a>
                    </li>
                    <li>
                        <a href="politicasepriv.php" class="footer-link">políticas e termos de uso</a>
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
