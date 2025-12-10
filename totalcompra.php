<HTML>
<HEAD> 
    <TITLE> RESULTADO DE COMPRA </TITLE>
    <link rel="stylesheet" href="estilos.css">
         <style>
        body{
            font-family: Arial, sans-serif;
            background:#ffe5e5; 
            margin:0;
            padding:0;
        }

        .contenedor{
            width: 380px;
            margin: 50px auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 12px;
            border: 2px solid #ff9999;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.15);
        }

        h2{
            text-align:center;
            color:#b30000;
            margin-bottom:20px;
        }

        label{
            font-weight:bold;
            color:#660000;
        }

        input{
            width:100%;
            padding:12px;
            margin-top:5px;
            margin-bottom:18px;
            border-radius:6px;
            border:1px solid #cc7a7a;
            background:#fff5f5;
            font-size:15px;
        }

        input:focus{
            outline:none;
            border-color:#b30000;
            box-shadow:0 0 5px rgba(179,0,0,0.4);
        }

        .btn{
            background:#d9534f;
            color:white;
            padding:12px;
            width:100%;
            border:none;
            border-radius:6px;
            font-size:17px;
            cursor:pointer;
            transition:0.2s;
        }

        .btn:hover{
            background:#b52a27;
        }

    </style>
</HEAD>
<BODY>

<nav>
    
      <a href="PAG1.HTML">INICIO </a><BR>
      <a href="CATALOGOPAPE.html">CATALOGO </a> <BR>
        <a href="COMPRASS.html">COMPRAS</a> <BR>
    
  </nav>
  
    <CENTER>
        ESTE ES EL RESULTADO DE LA COMPRA DE PAPELERIA QUE ACABAS DE HACER<br>
    
<?php

$servername = "localhost";  
$username = "root";         
$password = "";             
$bd = "papeleriaventas"; 


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    $total = $cantidad * $precio;

echo"<BR>FUISTE ATENDIDO POR CARLOS FERNANDO<BR><br>";
echo"<BR>AGRADECEMOS TU COMPRA Y PREFERENCIA<BR><br>";
echo"<BR>EL NOMBRE DEL ARTICULO QUE COMPRASTE FUE :<BR><br>".$producto;
echo"<BR>ELPRECIO DEL PRODUCTO ADQUIRIDO FUE DE :<BR><br>".$precio;
echo"<BR>LA CANTIDAD DEL PRODUCTO ADQUIRIDO FUERON DE :<BR><br>".$cantidad;
echo"<BR>EL TOTAL DE LA CUNTA POR LOS PRODUCTOS COMPRADOS FUE DE :<BR><br>".$total;

}
?>
</CENTER>
</BODY>
</HTML>