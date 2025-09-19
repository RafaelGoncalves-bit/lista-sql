<?php
// conexao.php
$host = "127.0.0.1";
$dbname = "empresa";
$username = "root"; // altere conforme seu ambiente
$password = ""; // altere conforme seu ambiente
 
try {
    // cria uma conexão PDO com tratamento de emergencia
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Define o modo de erro do PDO para exceção
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Define o modo de retorno para array associativa
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
 
    // Teste de conexao opcional
    // echo "Conexão realizada com sucesso";
} catch (PDOException $e) {
    die ("Erro na conexão com o banco de dados: " . $e->getMessage());
}
?>