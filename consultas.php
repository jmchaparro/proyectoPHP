<?php 
date_default_timezone_set('America/Bogota');
include 'conecta.php';
$tipoconsulta=$_POST['consultoria'];
$lafecha=$_POST['fecha'];
$sql="SELECT * from $tipoconsulta where estado = 1 and fecha = '$lafecha'";
$consulta=mysqli_query($conexion,$sql);
$resultado=
"<table border = 1>
<tr>
<td colspan = 5>
Citas Agendadas
</td>
</tr>
<tr>
<td>
Nombre
</td>
<td>
Telefono
</td>
<td>
E-mail
</td>
<td>
Fecha
</td>
<td>
Hora
</td>
</tr>
";
while ($disponibles=mysqli_fetch_array($consulta)) {
	$resultado=$resultado.
	'<tr>
	<td>'.$disponibles['nombre'].'</td>
	<td>'.$disponibles['telefono'].'</td>
	<td>'.$disponibles['email'].'</td>
	<td>'.$disponibles['fecha'].'</td>
	<td>'.$disponibles['hora'].'</td>';
}
	echo  $resultado;
?>