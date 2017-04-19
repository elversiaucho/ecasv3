<div class="container-fluid">
<table border="1">
		<tr><th>Monitor</th>
		<th>NUMERO DE LOTE</th>
		<th>ESTUDIANTES PRESENTES</th>
		<th>ENCUESTAS REGISTRADAS</th>
		<th>ENCUESTAS COMPLETAS</th>
		<th>ENCUESTAS IN_COMPLETAS</th>
		</tr>


<?php
echo "hoy es ".date('d:M:Y');
$cont=0;
if(isset($reporte) and is_array($reporte)){
	foreach ($reporte as $fila) { $cont++;?>
		
	<tr><th><?php echo $fila->LLAVE_TEM_P; ?></th>
		<th><?php echo $fila->LLAVE_NUEVO_H; ?></th>
		<th><?php echo $fila->NOMBRE; ?></th>
		<th><?php echo $fila->EDAD; ?></th>
		<th><?php echo $fila->TEXTO_TIPO_PERSONA; ?></th>
		<th><?php echo (substr($fila->FECHA,0,10)); ?></th>
		<th><?php echo $fila->NEW_SEXO; ?></th>
		<th><?php echo $fila->NEW_F_NACIMIENTO; ?></th>
		<th><?php echo $fila->NEW_TEL_F1.'<br/>'; ?>
			<?php echo $fila->NEW_TEL_F2.'<br/>'; ?> 
			<?php echo $fila->NEW_CEL1.'<br/>'; ?>
			<?php echo $fila->NEW_CEL2; ?></th>
				
		<th><?php echo $fila->NEW_DPTO; ?></th>
		<th><?php echo $fila->NEW_MPIO; ?></th>
		<th><?php echo $fila->NEW_DIRECCION; ?></th>
		<th><?php echo $fila->USUARIO; ?></th>
		<th><?php echo $fila->ESTADO_ACTUALIZACION;?></th></tr>
		
<?php if ($cont>50) break;}}?>

</table>
<!--a href="../hogares_elps2016.xls"> Descargar</a--> 
<a href="<?php echo base_url('assets/hogares_elps2016.xls'); ?>"> Descargar</a>
