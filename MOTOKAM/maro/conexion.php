



<?php

$ip=$_GET['ip'];
$ubicacio=$_GET['ubicacio'];

$mensaje = " ";
if ($ip == "")
$mensaje .= '<script name="accion">alert("SUS DATOS HAN SIDO AGREGADOS CORRECTAMENTE") </script>';


//por último checamos si hubo algún error
if($mensaje != "")
echo $mensaje;
else
{
//lo q quieras
}

$connect=mysqli_connect("localhost:3307","root","","proyecto");
    
   

 $pro=$_POST["produc"];
 $cant=$_POST["canti"];
 $nom=$_POST["nomb"];
 $cost=$_POST["cost"];


   

$sql2="INSERT INTO repuestos VALUES($pro,$cant,'$nom',$cost)";
$consulta=mysqli_query($connect,$sql2);

if ($consulta) {

	echo "datos agragados"; 
}
else 
{
    echo "error" . $sql2."<br>" . mysqli_error($connect);

}
//return(intento);
mysqli_close($connect);
//}
//}

?>