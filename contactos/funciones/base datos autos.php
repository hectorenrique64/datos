<?php
$user = "root";
$password = "root";
$dtb = "autos";
$host = "localhost";
$conn = mysqli_connect($host,$user,$password) or die("No se ha podido conectar");
$db = mysqli_select_db($conn, $dtb) or die("no  seha podido conectar");
$sql ='Select * from inventario';
echo $sql;
$resultado = mysqli_query($conn, $sql);
var_dump($resultado);

echo "<table borde='2'>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>nombre</th>";
echo "<th>marca</th>";
echo "<th>modelo</th>";
echo "<th>Nprecio</th>";
echo "<th>km</th>";
echo "<th>dexcripcion</th>";
echo "</tr>";

while($columna = mysqli_fetch_array($resultado))
{
    echo "<tr>";
    echo "<td>". $columna['auto_id'] . "</td><td>" . $columna['nombre_auto'] . "</td><td>"
    . $columna['marca_auto'] . "</td><td>" . $columna['modelo'] . "</td><td>"
. $columna['precio'] . "</td><td>" . $columna['km_auto'] . "</td><td>". $columna['descripcion_auto'] ."</td>";
echo "<tr>";
}
echo "</table>";




?>