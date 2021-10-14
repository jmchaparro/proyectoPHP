<?php
$idcita=$_POST['citas'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$tabla=$_POST['consultoria'];
include 'conecta.php';
$sql="UPDATE $tabla SET nombre = '$nombre', telefono = '$telefono', email = '$correo', estado = 1 WHERE id = $idcita";
$consulta=mysqli_query($conexion,$sql);
echo "  Cita agendada correctamente, recibirá instrucciones en su correo"; 
?>
