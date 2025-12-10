<HTML> 
<HEAD> 
<TITLE>Actualizar</TITLE> 
</HEAD> 

<BODY TEXT="black" bgcolor="#fffaed" MARGINHEIGHT=40 TOPMARGIN=40> 
<CENTER> 
<H1>PAPLERIA</H1> 
<BR> 
<FONT COLOR="#1e6636" SIZE=5><H1>" D U I "</H1> 
<BR>

<?php

$server = "localhost"; 
$usuario = "root"; 
$contraseña = ""; 
$bd="papeleriadui"; 

$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
or die ("Error de conexión");

$CLAVE_PROD = $_POST['CLAVE_PROD']; 
$NOMBRE = $_POST['NOMBRE']; 
$CANTIDAD = $_POST['CANTIDAD']; 
$PRECIO = $_POST['PRECIO'];

mysqli_query ($conexion, "UPDATE ventaspape set NOMBRE='$NOMBRE',CANTIDAD='$CANTIDAD',PRECIO='$PRECIO' where CLAVE_PROD='$CLAVE_PROD'") or die ("Error al actualizar"); 
mysqli_close($conexion); 
echo"________________________________________________________<br><br>"; 
echo "Datos actualizados correctamente <br><br>"; 
echo "______________________________________________________<br><br>";

?> 
<FORM ACTION="index.php"> 
<INPUT TYPE="submit" VALUE="REGRESAR" STYLE="background-color: brown ;color: black." required> 
</FORM> 
</FONT></CENTER></BODY></HTML>