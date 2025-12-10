<HTML lang="en"> 
<HEAD> 
	<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible"
content="IE=edge">
<meta name="viewport"
content="width=device-width, initial-scale=1.
0">
<TITLE>LOCAL 70 </TITLE> 
</HEAD> 
<BODY TEXT="black" bgcolor="#fffaed" MARGINHEIGHT=40 MARGINWIDTH=300>
	<form action="#" method="POST"></form>
<FONT COLOR="#1e6636" SIZE=5><div><marquee><H1>✏️​PAPELERIA "D U I "​✏️</H1></marquee></div></FONT><BR>   
<FORM ACTION="insertar.php" METHOD="post"><BR> 
<FONT SIZE=4><LABEL> CLAVE_PROD: </LABEL> 
<INPUT TYPE="text" NAME="CLAVE_PROD" SIZE=15 required><BR><BR> 
<FONT SIZE=4><LABEL> NOMBRE: </LABEL> 
<INPUT TYPE="text" NAME="NOMBRE" SIZE=8 required><BR><BR>
<FONT SIZE=4><LABEL>CANTIDAD: </LABEL> 
<INPUT TYPE="text" NAME="CANTIDAD" SIZE=3 required><BR><BR> 
 <FONT SIZE=4><LABEL>PRECIO</LABEL> 
<INPUT TYPE="text" NAME="PRECIO" SIZE=3 required><BR><BR>
<BR>

<INPUT TYPE="submit" VALUE="INSERTAR" NAME="btninsertar" STYLE="background-
color:#1e6636;color:black;"> 
<INPUT TYPE="reset" VALUE="LIMPIAR FORMULARIO" NAME="btnborrar" STYLE="background-
color:green;color:black;"> 
</FORM><BR><BR> 
<DIV> 
<FORM ACTION="eleminar.php" METHOD="post"> 
<INPUT TYPE="text" NAME="CLAVE_PROD" SIZE=6 required> 
<FONT SIZE=4><LABEL>INTRODUZCA EL CODIGO DEL PRODUCTO A ELIMINAR</LABEL> 
<INPUT TYPE="submit" VALUE="ELIMINAR" NAME="btneleminar" STYLE="background-
color:blue;color:black;"required> 
</FORM> 
</DIV><BR> 
<FORM ACTION="mostrar.php"> 
<INPUT TYPE="submit" VALUE="MOSTRAR REGISTROS" NAME="btnmostrar" STYLE="background-
color:brown;color:black;"> 
</FORM><BR> 
<FORM ACTION="actualizacion.php"> 
<INPUT TYPE="submit" VALUE="ACTUALIZAR REGISTROS" STYLE="background-
color:orange;color:black;"> 
</FORM> 
</FONT></BODY></HTML>