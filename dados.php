
<?php
$servername="localhost";
$username= "root";
$password= "";
$database= "registro";

$conn= $mysqli_connection=new MySQLi($servername,$username,$password, $database);

$nome= $_POST ['nome'];
$sexo= $_POST ['sexo'];
$idade= $_POST ['idade'];
$local= $_POST ['local'];
$setor= $_POST ['setor'];
$data= $_POST ['data'];
$afastamento= $_POST ['afastamento'];

$sql="INSERT INTO registros (nome,sexo,idade,local,setor,data,afastamento) values ('$nome','$sexo','$idade','$local','$setor','$data','$afastamento')";

if (mysqli_query($conn, $sql)) {
    header('location:index.html');
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>
