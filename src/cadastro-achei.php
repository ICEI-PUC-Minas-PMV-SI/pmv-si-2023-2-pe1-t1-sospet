<?php
header('Content-Type: text/html; charset=utf-8');

session_start();
ob_start();

    $servername = "localhost";
    $username = "livre145_sospet";
    $password = "]1^xUN91H}Uj";
    $database = "livre145_sospet";

            $conexao = mysqli_connect($servername, $username, $password, $database);

            if (!$conexao) {
                die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
            }

            mysqli_set_charset($conexao, "utf8");

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $especie = mysqli_real_escape_string($conexao, $_POST["especie"]);
                $genero = mysqli_real_escape_string($conexao, $_POST["genero"]);
                $nome = mysqli_real_escape_string($conexao, $_POST["nome"]);
                $descricao = mysqli_real_escape_string($conexao, $_POST["descricao"]);
                $cidade = mysqli_real_escape_string($conexao, $_POST["cidade"]);
                $id = $_SESSION['usuario_id'];

                if (isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] == 0) {
                    $diretorio_base = "sospet/img/";

                    if (!is_dir($diretorio_base)) {
                        mkdir($diretorio_base, 0755, true);
                    }

                    $imagem = $diretorio_base . $_FILES["imagem"]["name"];

                    if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem)) {
                
                    } else {
                        die("Erro no envio da imagem.");
                    }
                } else {
                    die("Nenhum arquivo de imagem enviado.");
                }
            
                $sql = "INSERT INTO pet (especie, genero, descricao, cidade, imagem, usuario_id) VALUES ('$especie', '$genero', '$descricao', '$cidade', '$imagem', '$id')";
            
                if (mysqli_query($conexao, $sql)) {
                    $idDoUsuario = mysqli_insert_id($conexao);
            
                    header("Location: pagina-pet.php?id=$id");
                    exit();
                } else {
                    echo "Erro ao publicar anúncio: " . mysqli_error($conexao);
                }
            }
            
            mysqli_close($conexao);
ob_end_flush();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro-achei.css">
    <title>cadastro pet encontrado!</title>

</head>

<body>

    <div class="container">
        <img class= "cadastro-img" src="img/cadastro-achei.jpg" alt="imagem cadastro achei pet">
        <div class="cadastro">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <div class="cadastro-header"> 
                    <div class="titulo">
                        <h1>você encontrou um pet? que ótimo!</h1>
                        <p>mas para o ajudarmos a voltar para casa, responda algumas perguntas:</p>
                    </div>
                </div>

            <div class="input-group">
                <div class="genero-especie">
                    <label for="especie">espécie do pet:</label>
                    <select id="especie" name="especie">
                        <option value="cachorro">cachorro</option>
                        <option value="gato">gato</option>
                    </select>

                    <label for="genero">gênero do pet:</label>
                    <select id="genero" name="genero">
                        <option value="femea">fêmea</option>
                        <option value="macho">macho</option>
                    </select>
                </div>

                    <div class="input-box">
                        <label for="text">fale um pouco sobre o pet:</label>
                        <input id="text" type="text" name="descricao" placeholder="descreva seu pet, por exemplo: cor, tamanho e outras características." required>
                    </div>

                    <div class="input-box">
                        <label for="text">em qual cidade você encontrou o pet:</label>
                        <input id="text" type="text" name="cidade" placeholder="digite aqui a cidade em que ele foi visto." required>
                    </div>

                    <div class="input-box">
                        <label for="imagem">envie uma imagem do pet:</label>
                        <input id="imagem" type="file" name="imagem" accept="image/*">
                    </div>
            </div>
                <div class="continue-button">
                    <button type="submit">pronto? publicar anúncio!</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
