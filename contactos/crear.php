<?php
if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
}
if(isset($_POST['numero'])){
    $numero = $_POST['numero'];
}

try{
    require_once('funciones/bd_conexion.php');
    $sql = "INSERT INTO `contactos` (`ìd`, `nombre`, `telefono`)";
    $sql .= "VALUES (NULL, '{$nombre}', '$numero');";
    $resultado =$conn->query($sql);
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
        <pre>
        <?php var_dump($_POST); ?>
        </pre>
          
        </div>
        
  


</body>
</html>
