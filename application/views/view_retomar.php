
<div id='campo' class="estilo_campos">
    	<?php 
  		$attributes = array('class' => '', 'id' => 'fr_retomar' , 'method' => 'POST');
         	echo form_open('index.php/c_crearlt/retomar', $attributes);
         	?>
      	  <!--div>
            <label>Por favor ingrese el número del lote!:</label>
            <input type="number" name="nro_lote" value = "<?php echo set_value('nro_lote');?>"/>
            <p class="t_error"><?php echo strip_tags(form_error('nro_lote')); ?></p>
          </div-->
  <div class="row pregunta-lote">
        <?#php echo json_encode($lotes);?>
        <div class="col-md-1 icono-lote"></div>
        <label class="col-md-4">Número del lote:</label>
        <select class="col-md-7" id = 'lote' name="nro_lote">
        <?php 
          echo "<option value=''>Selecciona..</option>";
          if(isset($lotes))
          {
          foreach ($lotes as $fila){
            echo '<option value='.$fila->ID_LOTE.'>'.$fila->ID_LOTE.'-'.$fila->SEDE_NOMBRE.'</option>';//'set_select('jornada', '1');
            }
          }
          ?>        
  
        </select>
        <p class="t_error"><?php echo strip_tags(form_error('nro_lote')); ?></p>
    </div>

    <div class="row pregunta-lote">
        <div class="col-md-1 icono-lote"></div>
        <label class="col-md-4">Por favor ingrese el número de encuesta a retomar.:</label>
        <input class="col-md-7" type="number" name="nro_encuesta" value = "<?php echo set_value('nro_encuesta');?>"/>
        <p class="t_error"><?php echo strip_tags(form_error('nro_encuesta')); ?></p>
    </div>
               
    <div id='ms'>
        <?php 
  	   $data = array('type' => 'submit',
  	   'value' =>'Retomar Encuesta',
  	   'class' => 'btn btn-success abtn');
  	   echo form_submit($data);?>

  	   <?php echo form_close();?>
    </div>

</div><!--Fin Crear lote-->   	

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
	
		});

//---------------------
</script>

