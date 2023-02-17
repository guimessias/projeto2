<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Conexão falhou: " . mysqli_connect_error());
}

// Recebe dados do formulário
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

// Insere dados no banco de dados
$sql = "INSERT INTO usuarios (name, email, password) VALUES ('$name', '$email', '$password')";
if (mysqli_query($conn, $sql)) {
	echo "Usuário cadastrado com sucesso!";
} else {
	echo "Erro ao cadastrar usuário: " . mysqli_error($conn);
}

// Fecha conexão com o banco de dados
mysqli_close($conn);
?>
