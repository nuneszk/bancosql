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




    
