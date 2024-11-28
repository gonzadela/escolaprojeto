<?php
$usuario = 'root';
$senha = '';
$database = 'usuarios';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

if(isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['senha'])) {

    $nome = $mysqli->real_escape_string($_POST['nome']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "INSERT INTO users (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    if($sql_query) {
        header("Location: index.php");;
    }
}
?>