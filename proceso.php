<?php
$idcita=$_POST['citas'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$tabla=$_POST['consultoria'];
$conexion=mysqli_connect('localhost','root','agendador.5','asesorias');
$sql="UPDATE $tabla SET nombre = '$nombre', telefono = '$telefono', email = '$correo', estado = 1 WHERE id = $idcita";
$consulta=mysqli_query($conexion,$sql);
echo $idcita.$tabla."  Cita agendada correctamente, recibirá instrucciones en su correo"; 
?>