<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Regiter</title>
</head>
<body>
    
<form action="agenda.php" method="post">
<h2>Formulario alunos marta</h2>
<form>
  <div class="mb-3">
    <label for="nome" class="form-label">nome</label>
    <div class="col-sm-10">
    <input type="text"  name="n" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="mb-3">
    <label for="sobre" class="form-label">Sobrenome</label>
    <div class="col-sm-10">
    <input type="text"  name="s" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="idade"class="form-label">idade</label>
    <div class="col-sm-10">
    <input type="number"  name="T" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
  <button type="submit" class="btn btn-primary">Enviar</button>
  <div class="col-sm-10">
  </div>
</form>
<?php
$servername = "localhost";
$username = "id19693869_bancosql2";
$password = "Wendellnunu23@";
$dbname = "id19693869_bancosql";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$sql = "SELECT nome, sobrenome, telefone FROM agenda";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while ($linha = $resultado->fetch_assoc()) {
        echo $linha["nome"] . " " . $linha["sobrenome"] . " - " . $linha["telefone"] . "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}

$conn->close();
?>
<script src="script.js"></script>
</body>
</html>