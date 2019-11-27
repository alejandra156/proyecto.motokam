<?php
  require_once"conexion.php";
  require_once"metodosCrud.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>CRUD</title>
</head>
<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="estilo.css">
      <form action="procesos/insertar.php" method="POST">
                <img src="https://www.security-mates.com/imagenes/personal.png" width="100" height="100">
            <h1>REGISTRO</h1>
            <p></p>
                <input type="text" name="Doc"  placeholder="Documento">
            <p></p>
                <input type="text" name="Nom"  placeholder="Nombre">
            <p></p>
                <input type="text" name="Ape"  placeholder="Apellido">
            <p></p>
                 <input type="password" name="Clav"  placeholder="Clave">
            <p></p>
               <input type="text" name="Cor"  placeholder="Correo">
                
                <button type="submit" value="Add" href="conexion.php" name="submit">registrar</button>
            </form>

<br><br>

 <table style="border-collapse: collapse;" border="1">
  <tr>

    <td>Documento</td>
    <td>Nombre</td>
    <td>Apellido</td>
    <td>Clave</td>
    <td>Correo</td>
        <td>Actualizar</td>
        <td>Eliminar</td>
       

        
  </tr>
<?php
  $obj = new metodos();
  $sql="SELECT id,documento,nombre,apellido,clave,correo from clientes";
  $datos=$obj->mostrarDatos($sql);

  foreach ($datos as $key) {
  
?>
  <tr>
    <td><?php echo $key['documento']; ?></td>
    <td><?php echo $key['nombre']; ?></td>
    <td><?php echo $key['apellido']; ?></td>
    <td><?php echo $key['clave']; ?></td>
    <td><?php echo $key['correo']; ?></td>
        <td><a href="editar.php?id=<?php echo $key['id']?>">Editar</a></td>
        <td><a href="procesos/eliminar.php?id=<?php echo $key['id']?>">Estado</a></td>
       
       

  </tr>
  <?php

  }
  ?>
 </table>
</body>
</html>
