<?php
require_once '../config/database.php';

$database = new Database();
$db = $database->getConnection();

if ($db) {
    echo "Conexão ao banco de dados foi bem-sucedida!";
} else {
    echo "Erro na conexão com o banco de dados.";
}
?>
