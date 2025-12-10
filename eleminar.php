<HTML> 
<HEAD> 
<TITLE>Eliminar</TITLE> 
</HEAD> 
<BODY TEXT="black" bgcolor="#fffaed" MARGINHEIGHT=40 TOPMARGIN=40> 
<CENTER> 
<H1>PAPELERIA</H1><BR> 
<FONT COLOR="#483D8B" SIZE=5><H1>" D U I "</H1><BR> 
<?php 
$server = "localhost"; 
$usuario = "root"; 
$contraseña = ""; 
$bd="papeleriadui"; 
$conexion = mysqli_connect($server, $usuario, $contraseña, $bd) 
or die ("Error de conexión"); 

$CLAVE_PROD = $_POST['CLAVE_PROD'];

mysqli_query ($conexion, "DELETE from ventaspape where CLAVE_PROD='$CLAVE_PROD'") or die ("Error al eliminar los datos"); 
mysqli_close($conexion); 
echo " __________________________________________________________<br><br>"; 
echo "Datos eliminados correctamente <br><br>"; 
echo "___________________________________________________________<br><br>"; 
?> 

<FORM ACTION="index.php"> 
<INPUT TYPE="submit" VALUE="REGRESAR" STYLE="background-color:blue;color:black;" required> 
</FORM> 
</FONT></CENTER></BODY></HTML>