<!DOCTYPE html>
<html>
<head>

</head>
<body>


<div class="estilo_campos" id="campo">
  <div id='new_lote'>

  	<?php
  
    //echo $inf_lote[0]->total_e;
    //if (is_array(var))
    //var_dump($inf_lote);
    
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
     <div class="col-md-1 icono-lote"></div>
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

 <!-- Sistema de recoleccion del lote -->
 <div class="row form-group" id="op_recoleccion" style="display: none;">
     
    <div class="col-lg-12 col-md-12">
      <p>Grado: <span id="grado">
            <?php 
            //print_r($inf_lote['estudiantes'][0]);
            if (isset($inf_lote["estudiantes"])){
              echo $inf_lote["estudiantes"][0]->GRADO;
              }?>
          </span></p>
        <p>Curso: <span id="curso">
            <?php if (isset($inf_lote["estudiantes"])){
              echo $inf_lote["estudiantes"][0]->CURSO;
              }?>
          </span>
        </p>
    </div>
     <div class="col-md-1 icono-lote"></div>
      <label class="col-lg-3">Sistema de recolección:</label>
      <select id = 'sistema_r' name="sistema_r" class="col-lg-3">
        <option value=''>Seleccione..</option>";
          <option value='1' <?php echo set_select('sistema_r','1')?>>Web</option>
          <option value='2' <?php echo set_select('sistema_r','2')?>>Mixto (Aplicativo web+ Offline)</option>
          <option value='3' <?php echo set_select('sistema_r','3')?>>Offline</option>
  
      </select>
      <p class="t_error" id="err_sistema_r"><?php echo strip_tags(form_error('sistema_r')); ?></p>
  </div>
 <!-- fin sistema recoleccion -->
  
  <!-- Total de encuestas offline:  -->
  <div class="row form-group" id="enc_offline" style="display:none;">
          <div class="col-md-1 icono-lote"></div>
          <label class="col-lg-3">Total de encuestas offline:</label>
          <input type="text" name="off_line" id="off_line" value = "<?php echo set_value('off_line');?>" onkeypress="return solonumeros(event)" maxlength='2' min ="1" max ="70" />
          <p class="t_error" id="err_off_line"><?php echo strip_tags(form_error('off_line')); ?></p>
    </div>

    <div id="ms">
      <?php 
        if(isset($mensaje)){
          echo $mensaje;
        }
      ?>
       
    </div>
  <div>
   
   <div style="display:none;"><input type="number" name="total_e" id="total_e" value ="<?php echo set_value('total_e');?>"></div> 
   <div style="display:none;"><input type="number" name="faltaron" id="faltaron" value ="<?php echo set_value('faltaron');?>"></div><!--  -->

    <section id='info_lt' style="display:none;"> 
  
      <p>Total de encuestas web: <span id="tot_encuestas">
      <?php if (isset($inf_lote["total_e"])){
        echo $inf_lote["total_e"][0]->total_e;
        }?>
    </span></p>
      <p>Total de encuestas <b>completas</b> web:<span id="tot_completas">
        <?php if (isset($inf_lote["e_completas"])){
        echo $inf_lote["e_completas"][0]->completas;
           }?>

      </span></p>
      <p>Total de encuestas <b>incompletas</b> web:<span id="incompletas">
        <?php if (isset($inf_lote["incompletas"])){
        echo $inf_lote["incompletas"][0]->incompletas;
           }?>
      </span></p>

       <p id="tot_web_offline" style="display:none;">Total de encuestas <b>offline + web </b>:<span id="web_offline">
        <?php if (isset($inf_lote["total_e"])){
        echo $inf_lote["total_e"][0]->total_e;
        }?>
      </span></p>
      <hr>
      <h4>Verifique la información diligenciada inicialmente</h4>

        <div class="row pregunta-lote">
            <div class="col-md-1 icono-lote"></div>
          <label class="col-md-4">Número de estudiantes matriculados en el curso:</label>
          <input class="col-md-2" type="text" name="matriculados" id="matriculados" value = "<?php echo set_value('matriculados');?>" onkeypress="return solonumeros(event)" maxlength='2' min ="12" max ="70" required/>
          <p class="t_error" id="err_matriculados"><?php echo strip_tags(form_error('matriculados')); ?></p>
        </div>
        <div class="row pregunta-lote">
            <div class="col-md-1 icono-lote"></div>
          <label class="col-md-4">Número de estudiantes que asisten regularmente:</label>
          <input class="col-md-2" type="text" name="regulares" id="regulares" value = "<?php echo set_value('regulares');?>" onkeypress="return solonumeros(event)" maxlength='2' required/>
          <p class="t_error" id = "err_regulares"><?php echo strip_tags(form_error('regulares')); ?></p>
        </div>
      
        <div class="row pregunta-lote">
            <div class="col-md-1 icono-lote"></div>
            <label class="col-md-4">Número de estudiantes encuestados:</label>
                    <span id="encuestados">
              <?php if (isset($inf_lote["total_e"])){
                echo $inf_lote["total_e"][0]->total_e;
                }?>
            </span>
            <!-- <input class="col-md-2" type="text" name="encuestados" id = "encuestados" value = "<?php echo set_value('encuestados');?>" onkeypress="return solonumeros(event)" disabled/>
            <p class="t_error" id="err_encuestados"><?php echo strip_tags(form_error('encuestados')); ?> --></p>
        </div>

      <p >Estudiantes Faltantes:<span class="t_error" id="info_faltaron"></span></p>
      

   
      <div class="row">
          <label class="col-lg-12">INGRESE EL NUMERO DE ESTUDIANTES QUE NO CONTESTARON LA ENCUESTA DE ACUERDO A LOS SIGUIENTES MOTIVOS:</label>
          <p class="t_error" id="err_ocupados"><?php echo strip_tags(form_error('ocupados')); ?></p>
      </div>

     <div class="row list-group-item">
       <label class="col-sm-2">Ocupados:</label>
       <div class="col-sm-9">
           <input type="text" name="ocupados" value ="<?php echo set_value('ocupados');?>" onkeypress="return solonumeros(event)" maxlength='2'/>
        </div>
      </div>
    <div class="row list-group-item">
     <label class="col-sm-2">No asistieron:</label>
       <div class="col-sm-9">
         <input type="text" onkeypress="return solonumeros(event)" maxlength='2' name="ausentes" value ="<?php echo set_value('ausentes');?>"/>
         <p class="t_error"><?php echo strip_tags(form_error('ausentes')); ?></p>
       </div>
    </div>
    <div class="row list-group-item">
       <label class="col-sm-2">Rechazaron:</label>
       <div class="col-sm-9">
         <input type="text" onkeypress="return solonumeros(event)" maxlength='2' name="rechazaron" value ="<?php echo set_value('rechazaron');?>"/>
         <span class="t_error"><?php echo strip_tags(form_error('rechazaron')); ?></span>
       </div>
     </div>
      <div class="row list-group-item">
       <label class="col-sm-2">Menores de 12 años:</label>
       <div class="col-sm-9">
         <input type="text" onkeypress="return solonumeros(event)" maxlength='2' name="menores" value ="<?php echo set_value('menores');?>"/>
         <p class="t_error"><?php echo strip_tags(form_error('menores')); ?></p>
       </div>
     </div>
     <div class="row list-group-item">
       <label class="col-sm-2">Otro motivo:</label>
       <div class="col-sm-4">
         <input type="text" onkeypress="return solonumeros(event)" maxlength='2' name="otro_motivo" id="val_motivo" value ="<?php echo set_value('otro_motivo');?>"/>
         <p class="t_error"><?php echo strip_tags(form_error('otro_motivo')); ?></p>
       </div>
       <label class="col-sm-1">Motivo: </label>
       <div class="col-sm-5">
           <input type="text" onkeypress="return soloLetras(event)" name="text_motivo" id="text_moti" value ="<?php echo set_value('text_motivo');?>"/>
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
 </section>
	<?php echo form_close();?>
  </div><!--Fin Crear lote-->   	
</div>
</body>
<script type="text/javascript" src="<?php echo base_url();?>js/lote.js" ></script>
</html>
<script type="text/javascript">
	$(document).ready(function(){
  tot_e= parseInt($("#total_e").val());

    ///////MOstrar la cantidad de encuestas completas incompletas y totales...
    $("#lote").change(function(){
      // Guardamos el select de grado
          //var grado = $("#grado");
        // Guardamos el select de lote
        var lote = $(this);
        var faltaron = 0;
        
        //alert("lote: "+ lote.val());
         if($(this).val() != '')
        {   off_line=0;
            $("#op_recoleccion").slideDown();
            $('#sistema_r').prop('selectedIndex',0);
            $('#off_line').val("");
            $('#enc_offline').slideUp();
            $("#tot_web_offline").slideUp(); 
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
                        tot_e =objeto[0].total_e;

                        $("#tot_encuestas").text(" "+tot_e);
                        $("#encuestados").text(" "+tot_e);                
                        objeto=valor.e_completas;
                        $("#tot_completas").text(" "+objeto[0].completas);
                         objeto=valor.incompletas;
                        $("#incompletas").text(" "+objeto[0].incompletas);
                        objeto=valor.estudiantes;
                        $("#matriculados").val(objeto[0].MATRICULADOS);
                        $("#regulares").val(objeto[0].REGULARES);
                        $("#grado").text(objeto[0].GRADO);
                        $("#curso").text(objeto[0].CURSO);
                         
                         faltaron = parseInt($("#regulares").val()) - parseInt(tot_e);
                         //alert("Total encuestas" + typeof(faltaron)+" "+$("#regulares").val());
                        
                        $("#total_e").val(tot_e);
                        $("#web_offline").text(""+tot_e);                        
                        $("#info_faltaron").text(faltaron);
                        $("#faltaron").val(faltaron);
                        $("#err_ocupados").text("");
                        $("#err_matriculados").text("");
                    });
                   if (parseInt($("#total_e").val())>0) 
                   {
                      $("#sistema_r").find("option[value='3']").remove();
                   }else if ($("#sistema_r option").length<4){
                     $("#sistema_r").append('<option value = "3">Offline</option>');
                   }

                    
                },
                error: function(errorThrown)
                {
             alert("Ocurrio un error al consultar la información del lote.");
             //alert(errorThrown);
             lote.prop('disabled', false);
                }
            });
        }
        else
        {
          $("#op_recoleccion").slideUp();
          $("#enc_offline").slideUp();
        }
    });

		});
</script>
<style type="text/css">
  .focus{
    border: 1px solid red;
    }
</style>

