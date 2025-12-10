<HTML> 
<HEAD> 
<TITLE>Insertar</TITLE> 
</HEAD> 
<BODY TEXT="black" bgcolor="#fffaed" MARGINHEIGHT=40 TOPMARGIN=40> 
<CENTER> 


<?php 
$server = "localhost"; 
$usuario = "root";
$contraseña = ""; 
$bd = "papeleriadui"; 

$conexion = mysqli_connect($server, $usuario, $contraseña, $bd) or die("Error de conexión"); 

$CLAVE_PROD = $_POST['CLAVE_PROD']; 
$NOMBRE = $_POST['NOMBRE']; 
$CANTIDAD = $_POST['CANTIDAD']; 
$PRECIO = $_POST['PRECIO']; 

$insertar = "INSERT into ventaspape VALUES
('$CLAVE_PROD', '$NOMBRE', '$CANTIDAD', '$PRECIO')"; 

$resultado = mysqli_query($conexion, $insertar)
or die("Error al insertar el registro"); 

mysqli_close($conexion); 
echo "______________________________________________________________<br><br>"; 
echo "Datos insertados correctamente <br><br>"; 
echo "________________________________________________________________<br><br>"; 
?> 

<FORM ACTION="index.php"> 
<INPUT TYPE="submit" VALUE="REGRESAR" STYLE="background-color:pink;color:black;"> 
</FORM> 

</CENTER> 
</BODY> 
</HTML>