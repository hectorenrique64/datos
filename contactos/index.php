<?php
try{
    require_once('funciones/bd_conexion.php');
} catch (Exception $e){
    $error = $e->getMessage();
}
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Agenda PHP</title>
    <link rel="stylesheet" href="estilos.css" media="screen">
</head>
<body>
   
        <h1>Agenda de Contactos</h1>
        <div class ="contenido">
            <h2>Nuevo Contacto</h2>
            <div class="contenedor">
            <form action="crear.php" method="post">
                <div class="campo">
                   <label for="nombre">Nombre</label>
                     <input type="text" name ="nombre" id="nombre" placeholder="nombre">
                     
                   
                   </div>
                    <div class ="campo">
                        <label for ="numero">Numero</label>
                            <input type="text" name="numero" id="numero" placeholder="numero">
                            
                        
                    </div>
                <input type="submit" name="name" value="Agregar">
                
            </form>
            </div>
        </div>
        
  


</body>
</html>
