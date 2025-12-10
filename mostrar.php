<html>
<head>
<title>mostrar</title>
</head>
<body text="black" bgcolor="#fffaed" marginheight=40 topmargin=40>
<center>

<br>

<?php
$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "papeleriadui";

$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
or die ("Error de conexión");

$consulta = mysqli_query($conexion, "select * from ventaspape")
or die ("error al mostrar los datos");

echo "<table border=2>";
echo "<tr>";
echo "<th name='CLAVE_PROD'>CLAVE_PROD</th>";
echo "<th name='NOMBRE'> NOMBRE </th>";
echo "<th name='CANTIDAD'> CANTIDAD </th>";
echo "<th name='PRECIO'> PRECIO </th>";
echo "</tr>";

while ($extraido = mysqli_fetch_array($consulta))
{
    echo "<tr align='center'>";
    echo "<td>".$extraido['CLAVE_PROD']."</td>";
    echo "<td>".$extraido['NOMBRE']."</td>";
    echo "<td>".$extraido['CANTIDAD']."</td>";
    echo "<td>".$extraido['PRECIO']."</td>";
    echo "</tr>";
}

mysqli_close($conexion);
echo "</table>";
?>

<br><br>
<form action="index.php">
<input type="submit" value="regresar" style="background-color:brown;color:black;">
</form>

</font>
</center>
</body>
</html>