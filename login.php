<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "zC;BU`T96F1$";
$database = "sospet";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["password"];

    $stmt = $conn->prepare("SELECT id, nome, senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $nome, $senha_hash);
        $stmt->fetch();

        if (password_verify($senha, $senha_hash)) {
            $_SESSION["id"] = $id;
            $_SESSION["nome"] = $nome;

            header("Location: feed.php");
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>pré cadastro</title>
</head>

<body>
    <div class="container">
        <div class="pre-login">
            <h1>faça login!</h1>
            <div class="input-group">
                <div class="input-box">
                    <label for="email">digite seu email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="input-box">
                    <label for="password">digite sua senha:</label>
                    <input type="password" id="password" name="password">
                </div>
                <button><a href="home.php">fazer login</a></button>   
            </div>
            <div class="cadastrar">
            <h2>não tem conta? crie agora!</h2>
            <button><a href="cadastro.php">cadastrar-se</a></button>
            </div>
            <div class="termos">
                <h3>ao realizar login ou criar uma conta, você concorda com nossos Termos de Uso e Declaração de Privacidade</h3>
                <a href="politicasepriv.php" class="footer-link">clique aqui para saber melhor.</a>
            </div>
            </form>
        </div>
    </div>
</body>
</html>