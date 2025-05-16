<?php
require_once __DIR__ . '/../controller/loginController.php';
require_once __DIR__ . '/../controller/gerenciamentoController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';
    LoginController::autenticar($usuario, $senha);
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="../css/bs-stepper.min.css">
    <link href="../css/style.css" rel="stylesheet">
    <title>Gerenciamento - Hotel Winner</title>
    <script src="../js/gerenciamentoScript.js" defer></script>
    <script src="../js/jquery-3.7.1.min.js"></script>
</head>

<body>
    <?php include('navbar.php'); ?>

    <div class="fundo-claro">
    <br><br>
    <h1 style="margin:auto; text-align:center; text-shadow: 1px 1px 7px white;"> Gerenciamento </h1>
    <div class="card" style="display: block; margin: auto; margin-top: 3em; width: 55em;">
      <div class="card-body" style="margin:auto; text-align: center">
        <a href="#" class="btn btn-light btn-lg" role="button">Cliente</a>
        <a href="#" class="btn btn-light btn-lg" role="button">Agendamento</a>
        <a href="#" class="btn btn-light btn-lg" role="button">Quarto</a>
        <a href="#" class="btn btn-light btn-lg" role="button">Funcionário</a>
        <a href="atendimento.php" class="btn btn-light btn-lg" role="button">Pedido</a>
        <a href="gerenciamento.php" class="btn btn-light btn-lg" role="button">Produto</a>
      </div>
    </div>
    <br><br>
  </div>
    

</body>