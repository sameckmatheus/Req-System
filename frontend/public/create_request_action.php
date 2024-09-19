<?php

include_once '../database/config.php';
include_once '../controllers/RequestController.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $usuario_id = $_POST['usuario_id'];
  $descricao = $_POST['descricao'];
  $tipo = $_POST['tipo'];

  $requestController = new RequestController();
  $result = $requestController -> create($usuario_id, $descricao, $tipo);

    if ($result) {
      # code...
      echo "Requisição bem sucedida!";
    } else {
      # code...
      echo "Falha ao criar requisição...";
    }
  }
