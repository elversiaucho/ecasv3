
<div id='campo' class="estilo_campos">
    <?php 
    		$attributes = array('class' => '', 'id' => 'form_novlt' , 'method' => 'POST');
       	echo form_open('index.php/c_crearlt/novedad_lt', $attributes);
    ?>
    	  
      <div class="row form-group">
        	<label class="col-lg-3">Número del lote:</label>
         	<select id = 'lote' name="lote">
    	     	<?php 
    	     		echo "<option value=''>Selecciona..</option>";
    	     		if(isset($lotes))
    	     		{
    	     		foreach ($lotes as $fila){
    	     			echo "<option value='".$fila->ID_LOTE."' ".set_select('lote', $fila->ID_LOTE).">".$fila->ID_LOTE."-".$fila->SEDE_NOMBRE."</option>";
    	     		  }
    	     		}
    	     	?>    		
    	
         	</select>
         	<p class="t_error"><?php echo strip_tags(form_error('lote')); ?></p>
      </div>
      <div class="row list-group-item">
          <label>Novedad Lote:</label>
         	<select id ='novedad_lt' name="novedad_lt" >
         		<option value=''>Selecciona..</option>
         		<option value='1' <?php echo  set_select('novedad_lt', '1');?>>Ocupado</option>
         		<option value='2' <?php echo  set_select('novedad_lt', '2');?>>Ausente Temporal</option>
         		<option value='3' <?php echo  set_select('novedad_lt', '3');?>>Rechazó</option>
         		<option value='4' <?php echo  set_select('novedad_lt', '4');?>>Activo</option>
         	</select>
         	<p class="t_error"><?php echo strip_tags(form_error('novedad_lt')); ?></p>
        </div>
        <div class="row list-group-item">
          <label class="col-sm-2" >Observaciones:</label>
            <div class="col-sm-10">
               <textarea cols="50" name="obs_lote" ><?php echo set_value('obs_lote'); ?></textarea> 
               <p class="t_error"><?php echo strip_tags(form_error('text_motivo')); ?></p>
            </div>
         </div>
         <div id='ms'>
            	
         </div>
         <?php 
        	  $data = array('type' => 'submit',
        	  'value' =>'Registrar Novedad',
        	  'class' => 'btn btn-success abtn');
        	  echo form_submit($data);
            echo form_close();
        ?>
  </div><!--Fin novedad-->   	

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
	
		});

//---------------------
</script>

