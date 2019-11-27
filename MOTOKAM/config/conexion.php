



<?php
	
$connect=mysqli_connect("localhost:3307","root","","proyecto");
    
   

 $pro=$_POST['produc'];
 $cant=$_POST['canti'];
 $nom=$_POST['nomb'];
 $cost=$_POST['cost'];


   

$sql2="INSERT INTO repuestos VALUES($pro,$cant,'$nom',$cost)";
$consulta=mysqli_query($connect,$sql2);

if ($consulta) {

echo "<script>
                alert('datos agregados correctamente');
                window.location= 'configuracion.php'
    </script>";
}
else 
{
    echo "error " . $sql2."<br>" . mysqli_error($connect);

}
//return(intento);
mysqli_close($connect);
//}
//}

?>