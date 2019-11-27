<!DOCTYPE html>
<html>
<head>
	<title>RESERVA</title>
</head>
<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/agendar.css">
	    <form action="procesos/insertar.php" method="POST">
                <img src="https://www.security-mates.com/imagenes/personal.png" width="100" height="100">
            <h1>CITAS</h1>
            
            
            
            <input type="text" name="id_c" placeholder="cliente" >
           
            <input type="text" name="id_e" placeholder="empleado">
            
            <input type="text" name="fe" placeholder="fecha">
           
            <input type="text" name="ho" placeholder="hora">
              
                <button type="submit" value="Add" href="conexion.php" name="submit">registrar</button>
            </form>


 </table>
</body>
</html>