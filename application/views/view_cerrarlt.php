

<div class="estilo_campos" id="campo">
  <div id='new_lote'>
  	<?php 
		$attributes = array('class' => '', 'id' => 'fr_cerrarlt' , 'method' => 'POST');
       	echo form_open('index.php/c_crearlt/cerrar_lt', $attributes);
       	?>
	  
      <!--div class="row">
       	<label class="col-sm-3" >Por favor ingrese el número del lote a cerrar.:</label>
       	 <div class="col-sm-9">
            <input type="number" name="nro_lote" value = "<?php echo set_value('nro_lote');?>"/>
            <p class="t_error"><?php echo strip_tags(form_error('nro_lote')); ?></p>
        </div>
      </div-->
    <div class="row form-group">
     <?#php echo json_encode($lotes);?>
      <label class="col-lg-3">Número del lote:</label>
      <select id = 'lote' name="nro_lote">
        <?php 
            echo "<option value=''>Selecciona..</option>";
            if(isset($lotes))
            {
            foreach ($lotes as $fila){
              echo "<option value='".$fila->ID_LOTE."' ".set_select('nro_lote', $fila->ID_LOTE).">".$fila->ID_LOTE."-".$fila->SEDE_NOMBRE."</option>";
              }
            }
        ?>      
  
      </select>
      <p class="t_error"><?php echo strip_tags(form_error('nro_lote')); ?></p>
    </div>
    <div id="ms">
      <?php 
        if(isset($mensaje)){
          echo $mensaje;
        }
      ?>
       
    </div>
    <div style="display:none;"><input type="number" name="faltaron" id="faltaron" value ="<?php echo set_value('faltaron');?>"></div>
    <section id='info_lt' style="display:none;">

      <p>Total de encuestas: <span id="tot_encuestas"></span></p>
      <p>Total de encuestas completas:<span id="tot_completas"></span></p>
      <p>Estudiantes matriculados:<span id="matriculados"></span></p>
      <p>Estudiantes regulares:<span id="regulares"></span></p>
      <p>Estudiantes presentes:<span id="presentes"></span></p>
      <p class="t_error">Estudiantes Faltantes:<span id="info_faltaron"></span></p>
      

    </section>

      <div class="row">
          <label class="col-lg-12">INGRESA NÚMERO DE ESTUDIANTES:</label>
          <p class="t_error"><?php echo strip_tags(form_error('ocupados')); ?></p>
      </div>

     <div class="row list-group-item">
       <label class="col-sm-2">Ocupados:</label>
       <div class="col-sm-9">
           <input type="number" name="ocupados" value ="<?php echo set_value('ocupados');?>"/>
        </div>
      </div>
    <div class="row list-group-item">
     <label class="col-sm-2">Ausentes:</label>
       <div class="col-sm-9">
         <input type="number" name="ausentes" value ="<?php echo set_value('ausentes');?>"/>
         <p class="t_error"><?php echo strip_tags(form_error('ausentes')); ?></p>
       </div>
    </div>
    <div class="row list-group-item">
       <label class="col-sm-2">Rechazaron:</label>
       <div class="col-sm-9">
         <input type="number" name="rechazaron" value ="<?php echo set_value('rechazaron');?>"/>
         <p class="t_error"><?php echo strip_tags(form_error('rechazaron')); ?></p>
       </div>
     </div>
     <div class="row list-group-item">
       <label class="col-sm-2">Otro motivo:</label>
       <div class="col-sm-4">
         <input type="number" name="otro_motivo" id="val_motivo" value ="<?php echo set_value('otro_motivo');?>"/>
         <p class="t_error"><?php echo strip_tags(form_error('otro_motivo')); ?></p>
       </div>
       <label class="col-sm-1">Motivo: </label>
       <div class="col-sm-5">
           <input type="text" name="text_motivo" id="text_moti" value ="<?php echo set_value('text_motivo');?>"/>
           <p class="t_error" id="err_motivo"><?php echo strip_tags(form_error('text_motivo')); ?></p>
       </div>
     </div>
     
     <div class="row list-group-item">
      <label class="col-sm-2" >Observaciones:</label>
        <div class="col-sm-10">
           <textarea cols="50" name="obs_lote"><?php echo set_value('obs_lote');?></textarea> 
           <p class="t_error"><?php echo strip_tags(form_error('obs_lote')); ?></p>
        </div>
     </div>
     <div id='ms'></div>
      <?php 
	  $data = array('type' => 'submit',
	  'value' =>'Cerrar Lote',
    'id' => 'btn_submit',
	  'class' => 'btn btn-success abtn');
	  echo form_submit($data);?>

	<?php echo form_close();?>
  </div><!--Fin Crear lote-->   	
</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
    var enviar=true;
    $("#btn_submit").click(function(){
            
        if($("#val_motivo").val()>'0' && $("#text_moti").val()=='')
        {
            $("#err_motivo").text('Ingresa el Motivo');
            $("#text_moti").addClass("focus");
            return false;
        }
        else return true;

    });



    ///////MOstrar la cantidad de encuestas completas incompletas y totales...
    $("#lote").change(function(){
      // Guardamos el select de grado
          //var grado = $("#grado");
        // Guardamos el select de lote
        var lote = $(this);
        var faltaron = null;
        //alert("lote: "+ lote.val());
         if($(this).val() != '')
        {
            $.ajax({
                data: {id_lote : lote.val() },
                url:   '<?php echo base_url('index.php/c_ecas/infolt');?>',
                type:  'POST',
                dataType: 'json',
                beforeSend: function () 
                {
                    $("#ms").html("<img src='<?php echo base_url('images/ajax-loader.gif');?>'>");
                    lote.prop('disabled', true);
                },
                success:  function (r) 
                {
                    $("#ms").text('');
                    lote.prop('disabled', false);
                    
                    $(r).each(function(clave,valor){
                        objeto=valor.total_e;
                        faltaron =objeto[0].total_e;
                        $("#tot_encuestas").text(" "+objeto[0].total_e);
                        objeto=valor.e_completas;
                        $("#tot_completas").text(" "+objeto[0].completas);
                        objeto=valor.estudiantes;
                        $("#matriculados").text(" "+objeto[0].MATRICULADOS);
                        $("#regulares").text(" "+objeto[0].REGULARES);
                        $("#presentes").text(" "+objeto[0].PRESENTES);
                        faltaron = objeto[0].REGULARES - faltaron;
                        $("#info_faltaron").text(" "+faltaron);
                        $("#faltaron").val(faltaron);
                    });
                    $('#info_lt').slideDown();
                },
                error: function(errorThrown)
                {
               alert("Ocurrio un error en AJAX!");
             alert(errorThrown);
             lote.prop('disabled', false);
                }
            });
        }
        else
        {
          //
        }
    });

		});
</script>
<style type="text/css">
  .focus{
    border: 1px solid red;
    }
</style>

