<?php
include_once '../config/database.php';
include_once '../controllers/RequestController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_id = $_POST['usuario_id'];
    $descricao = $_POST['descricao'];
    $tipo = $_POST['tipo'];

    $requestController = new RequestController();
    $result = $requestController->create($usuario_id, $descricao, $tipo);

    if ($result) {
        echo "Requerimento criado com sucesso!";
    } else {
        echo "Erro ao criar requerimento.";
    }
}
?>
