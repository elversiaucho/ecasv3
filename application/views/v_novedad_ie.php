
<div id='campo' class="estilo_campos">
<?php 
		$attributes = array('class' => '', 'id' => 'form_novie' , 'method' => 'POST');
       	echo form_open('index.php/c_crearlt/novedad_ie', $attributes);
       	?>
	  
       <div class="row list-group-item">
     	   <label class="col-sm-3" >¿En qué colegio estás? </label>
         <div class="col-sm-9 ui-widget">
            <input type="text" name="IE" id="IE" class="form-control" value = "<?php echo set_value('IE');?>" placeholder="Digita el Código o Nombre"/>
            <p class="t_error"><?php echo strip_tags(form_error('IE')); ?></p>
        </div>
     </div>
        <div class="row list-group-item">
        <label>Novedad IE:</label>
     	<select id ='novedad_ie' name="novedad_ie" >
     		<option value=''>Selecciona..</option>
     		<option value='1' <?php echo  set_select('novedad_ie', '1');?>>Razón Social Diferente</option>
     		<option value='2' <?php echo  set_select('novedad_ie', '2');?>>Demolición - Construcción</option>
     		<option value='3' <?php echo  set_select('novedad_ie', '3');?>>Lote</option>
     		<option value='5' <?php echo  set_select('novedad_ie', '5');?>>Otra novedad</option>
     	</select>
     	<p class="t_error"><?php echo strip_tags(form_error('novedad_ie')); ?></p>
    </div>
    <div class="row list-group-item">
     	<label>Otra Novedad:</label>
     	<input type="text" name="otra_nov" id="otra_nov" value = "<?php echo set_value('otra_nov');?>"/>
     	<p class="t_error"><?php echo strip_tags(form_error('otra_nov')); ?></p>
     </div>    
    <div class="row list-group-item">
      <label class="col-sm-2" >Observaciones:</label>
        <div class="col-sm-10">
           <textarea cols="50" name="obs_ie"><?php echo set_value('obs_ie').'';?></textarea> 
           <p class="t_error"><?php echo strip_tags(form_error('obs_ie')); ?></p>
        </div>
     </div>
     <div id='ms'>
        	
     </div>
      <?php 
	  $data = array('type' => 'submit',
	  'value' =>'Registrar Novedad',
	  'class' => 'btn btn-success abtn');
	  echo form_submit($data);?>

	<?php echo form_close();?>
  </div><!--Fin Crear Encuesta-->   	

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
    var colegios=[];
    var arrayJS=[];
//-----------------agregar colegios---
    /*arrayJS=<?php echo json_encode($colegios);?>;
    alert(arrayJS[0]['Cod_colegio_op']);*/
      <?php 
          $i=0;
          if(isset($colegios))
              {
              foreach ($colegios as $fila){?>
                  colegios[<?php echo $i++;?>]=<?php echo "'".$fila->Cod_colegio_op.'-'.$fila->SEDE_NOMBRE."';"; ?>
      <?php }
       }
      ?>      
      $("#IE").autocomplete({
          source: colegios
      });

      if($("#novedad_ie").val()==5){
        $("#otra_nov").prop("disabled",false);
      }
      else
        $("#otra_nov").prop("disabled",true);

     $("#novedad_ie").change(function(){
        if($(this).val() == '5')
           $("#otra_nov").prop("disabled",false);
        else{
          $("#otra_nov").val("");
          $("#otra_nov").prop("disabled",true);

        }
      });
	
		});

//---------------------
</script>