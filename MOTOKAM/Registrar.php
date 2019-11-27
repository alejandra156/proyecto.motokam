

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
                <input type="text" name="tel"  placeholder="Telefono">
            
            <p></p>
                 <input type="password" name="Clav"  placeholder="Clave">
            <p></p>
               <input type="text" name="Cor"  placeholder="Correo">
                
                <button type="submit" value="Add" href="maro/index.php" name="submit">registrar</button>
            </form>


</body>
</html>
