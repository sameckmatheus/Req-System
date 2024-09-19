<?php
include_once '../config/database.php';
include_once '../controllers/UserController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $userController = new UserController();
    $result = $userController->login($email, $senha);

    if ($result) {
        echo "Login bem-sucedido!";
    } else {
        echo "Erro ao fazer login.";
    }
}
?>
