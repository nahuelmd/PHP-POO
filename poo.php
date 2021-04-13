<?php session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <div class="container">
        <?php include("header.php"); ?>
        <h2>Programación orientada a objetos con PHP</h2>
        <div class="detalle">
			<p>En este ejemplo se demuestra el concepto de Clases y Programación Orientada a Objetos con PHP. Se definen Clases y Métodos para imprimir la funcion $caract_usuarios <br> <a href="">Ver código fuente en GitHub</a></p>
		</div>
        

        <h2>POO</h2>
        <p>Herencia de Clases</p>
        <?php
        include("usuarios.php");
        include("caract_usuarios.php");
        $caract_usuarios = new Users('Juan', 'Perez', "1985-08-11", "");
        $caract_usuarios->caract_usuarios();
        ?>
    </div>


    

</body>

</html>