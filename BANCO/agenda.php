
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
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO agenda (Nome, Sobrenome, Telefone)
VALUES ('$nome', '$sobrenome', '$turma' )";

if ($conn->query($sql) === TRUE) {
  echo "Novo cadastro feito com êxito";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



</body>
</html>
    
