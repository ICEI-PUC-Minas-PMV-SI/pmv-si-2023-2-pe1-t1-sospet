<?php
session_start();


    $servername = "localhost";
    $username = "livre145_sospet";
    $password = "]1^xUN91H}Uj";
    $database = "livre145_sospet";

    $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome_tutor = $_POST["nome_tutor"];
        $email_tutor = $_POST["email_tutor"];
        $telefone_tutor = $_POST["telefone_tutor"];
        $senha = $_POST["password"];
        $cidade = $_POST["cidade"];
    
        $sql = "INSERT INTO usuarios (nome_tutor, email_tutor, telefone_tutor, senha, cidade) VALUES ('$nome_tutor', '$email_tutor', '$telefone_tutor', '$senha', '$cidade')";

        if ($conn->query($sql) === TRUE) {
            $idDoUsuario = $conn -> insert_id;

            $_SESSION['usuario_id'] = $idDoUsuario;

            $pet_situation = isset($_POST["pet"]) ? $_POST["pet"] : "";

            switch ($pet_situation) {
                case 'perdi':
                    header("Location: cadastro-perdi.php");
                    break;
                case 'achei':
                    header("Location: cadastro-achei.php");
                    break;
                case 'adotar':
                    header("Location: feed.php");
                    break;
                default:
                    header("Location: home.php");
                    break;
            }
    
            exit();
        } else {
            echo "Erro ao cadastrar: " . $conn->error;
        }
    }
    
    $conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>cadastro :)</title>
</head>

<body>

    <div class="container">
        <img class= "cadastro-img" src="img/cadastro.jpg" alt="imagem cadastro">
        <div class="cadastro">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="cadastro-header"> 
                    <div class="titulo">
                        <h1>vamos fazer seu cadastro!</h1>
                        <p>para iniciarmos, responda algumas perguntas:</p>
                    </div>
                    <div class="login-botao">
                        <button><a href="login.php">já tenho conta!</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">digite seu nome:</label>
                        <input id="firstname" type="text" name="nome_tutor" placeholder="somente seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="email">digite seu email:</label>
                        <input id="email" type="email" name="email_tutor" placeholder="ex: exemplo@sospet.com " required>
                    </div>

                    <div class="input-box">
                        <label for="number">digite seu número de celular:</label>
                        <input id="number" type="tel" name="telefone_tutor" placeholder="ex: (ddd) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">crie uma senha:</label>
                        <input id="password" type="password" name="password" placeholder="digite uma senha" required>
                    </div>

                    <div class="input-box">
                        <label for="cidade">digite sua cidade:</label>
                        <input id="cidade" type="text" name="cidade" placeholder="digite o nome da sua cidade" required>
                    </div>

                </div>

                <div class="pet-input">
                    <div class="pet-title">
                        <h6>qual a sua situação?
                        </h6>
                    </div>

                    <div class="pet-group">
                    <div class="pet-input">
                        <input id="perdi" type="radio" name="pet" value="perdi">
                        <label for="perdi">meu pet desapareceu</label>
                    </div>

                    <div class="pet-input">
                        <input id="achei" type="radio" name="pet" value="achei">
                        <label for="achei">achei um pet perdido</label>
                    </div>

                    <div class="pet-input">
                        <input id="adotar" type="radio" name="pet" value="adotar">
                        <label for="adotar">quero adotar um pet</label>
                    </div>
                </div>
                </div>

                <div class="continue-button">
                <button type="submit">pronto? vamos continuar!</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
