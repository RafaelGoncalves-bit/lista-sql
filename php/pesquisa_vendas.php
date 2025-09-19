<?php include 'conexaopdo.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pesquisa de Vendas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
    <div class="container mt-4">
      <h2 class="mb-4 text-center">Pesquisa de Vendas</h2>
        <form method="GET" action="" class="row g-3">
        <div class="col-md-3">
          <input type="text" name="codigo" class="form-control" placeholder="Código da Venda">
</div>
<div class="col-md-3">
    <input type="date" name="data" class="form-control">
</div>
<div class="col-md-4">
    <input type="text" name="cliente" class="form-control" placeholder="Nome do Cliente">
</div>
<div class="col-md-2">
    <button type="submit" class="btn btn-primary w-100">Pesquisar</button>
</div>
</form>
<div class="mt-3">
    <a href="../index.html" class="btn btn-secondary">Voltar aos contrario</a>
</div>
<hr>
 
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $codigo = $_GET['codigo'] ?? '';
    $data = $_GET['data'] ?? '';
    $cliente = $_GET['cliente'] ?? '';
 
}
?>