
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP test</title>
</head>
<body>
<h2> teste </h2>


<?php 
$nome =$_POST["n"];
$sobrenome =$_POST["s"];
$turma =$_POST["t"];


$servername = "localhost";
$username = "id19693869_bancosql2";
$password = "Wendellnunu23@";
$db = "id19693869_bancosql";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Conexao falhou: " . $conn->connect_error);
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




</body>
</html>
    
