<?php 
date_default_timezone_set('America/Bogota');
include 'conecta.php';
$tipoconsulta=$_POST['consultoria'];
$lafecha=$_POST['fecha'];
$sql="SELECT * from $tipoconsulta where estado = 0 and fecha = '$lafecha'";
$consulta=mysqli_query($conexion,$sql);
$resultado="<label>Citas Disponibles</label> 
			<select id='citas' name='citas'>";
while ($disponibles=mysqli_fetch_array($consulta)) {
		$resultado=$resultado.'<option value='.$disponibles['id'].'>'.$disponibles['fecha'].' -- '.$disponibles['hora'].'</option>';
	}
	echo  $resultado."</select><br><input type='button' onclick='proceso()' value='Agendar'>";
?>
