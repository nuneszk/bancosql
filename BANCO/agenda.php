
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


<div id="nex">
<?php



$nome =$_POST["n"];
$sobrenome =$_POST["s"];
$Numero =$_POST["i"];




$servername = "localhost";
$username = "id19693869_nunes";
$password = "Wendellnunu23@";
$dbname = "id19693869_agenda";



$conn = new mysqli($servername,$username, $password,$dbname);







$sql = "INSERT INTO agenda (Nome,sobrenome,Numero)
VALUES ('$nome', '$sobrenome','$Numero')";

if ($conn->query($sql) === TRUE) {
  echo "Registro criado com exito";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT Nome,sobrenome,Numero FROM Registros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "  nome:    " . $row["Nome"]. 
    "  sobrenome:    " . $row["sobrenome"].
     "  Numero:    " . $row["Numero"]. "<br>";
  }
} else {
  echo "0 resultados tabela vazia";
}

$conn->close();

?>
   

 


</body>
</html>