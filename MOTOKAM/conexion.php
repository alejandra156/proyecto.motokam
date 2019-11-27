<?php
$Doc=$_POST["Doc"];
$Nom=$_POST["Nom"];
$Ape=$_POST["Ape"];
$tel=$_POST["tel"];

$Clav=$_POST["Clav"];
$Cor=$_POST["Cor"];







    $servidor="localhost";
	$usuario="root";
	$bd="proyecto";
	$password="";


        $conn=mysqli_connect($servidor,$usuario,$password,$bd);

if($conn)
{
  
    echo"";
}else
{
    echo"mal";
}


$sql ="INSERT INTO clientes(documento,nombre,apellido,telefono,clave,correo)VALUES ($Doc,'$Nom','$Ape','$tel','$Clav','$Cor')";
if (mysqli_query($conn,$sql)) 
{
      echo "<script>
                alert('hola bienvenidos ');
                window.location= 'maro/index.html'
    </script>";
} else 
{
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);







?>
