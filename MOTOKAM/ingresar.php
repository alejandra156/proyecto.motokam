<?php 
$usu=$_POST["Usuario"];
$pas=$_POST["Clave"];
 

$servidor="localhost";
$usuario="root";
$bd="proyecto";
$password="";


    $conn=mysqli_connect($servidor,$usuario,$password,$bd);



$consultar="SELECT * from clientes where clave ='$pas' and nombre ='$usu'";

      $ingreso = mysqli_query($conn,$consultar);
      $res=mysqli_fetch_array($ingreso);
    

if($res){

   echo "<script>
                alert('datos agregados correctamente');
                window.location= 'maro/index.html'
    </script>";

} else {
   echo "<script>alert('usuario o clave incorrecta');</script>";

}



?>    