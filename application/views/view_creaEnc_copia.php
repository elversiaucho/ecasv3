<div id='campo' class="estilo_campos">
  	<?php 
		$attributes = array('class' => '', 'id' => 'form_enc' , 'method' => 'POST');
       	echo form_open('index.php/c_crearlt/crea_encuesta', $attributes);
       	?>
	  
      <!--div>
     	<label>Por favor ingrese el número del lote:</label>
     	<input type="number" name="nro_lote" value = "<?php echo set_value('nro_lote');?>"/>
     	<p class="t_error"><?php echo strip_tags(form_error('nro_lote')); ?></p>
     </div-->
    <div class="row pregunta-lote">
      <?#php echo json_encode($lotes);?>
      <div class="col-md-1 icono-lote"></div>
      <label class="col-md-4">Número del lote:</label>
      <select class="col-md-7" id = 'lote' name="nro_lote">
        <?php 
          echo "<option value=''>Seleccione..</option>";
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
     <!--div>
     	<label>Digite número de la encuesta:</label>
     	<input type="number" name="nro_encuesta" value = "<?php echo set_value('nro_encuesta');?>"/>
     	<p class="t_error"><?php echo strip_tags(form_error('nro_encuesta')); ?></p>
     </div-->
    
    <div id='ms'>
        	
     
      <?php 
	  $data = array('type' => 'submit',
	  'value' =>'Crear encuesta',
	  'class' => 'btn btn-success abtn');
	  //echo form_submit($data);?>

	   <?php echo form_close();?>
    </div>
</div><!--Fin Crear Encuesta-->   	

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
    $("#lote").change(function(){
      // Guardamos el select de grado
          //var grado = $("#grado");
        // Guardamos el select de lote
        var lote = $(this);
        //alert("lote: "+ lote.val());
         if($(this).val() != '')
        {
            $.ajax({
                data: {id_lote : lote.val() },
                url:   '<?php echo base_url('index.php/c_ecas/crea_encuesta');?>',//+'index.php/c_ecas/get_grados',
                type:  'POST',
                dataType: 'json',
                beforeSend: function () 
                {
                    $("#ms").html("<img src='<?php echo base_url('images/ajax-loader.gif');?>'>");
                    lote.prop('disabled', true);
                },
                success:  function (r) 
                {
                   var texto="Error al crear encuesta!";
                   var id_encuesta=0;
                   var encuestar=0;
                   var imagen=$("<img src='<?php echo base_url('images/recomienda.png');?>' class='img-responsive'/>");
                   var boton="";

                   $(r).each(function(clave, valor){
                      //texto+=valor.id_encuesta;
                      texto=valor.mensaje;
                      encuestar=valor.encuestar;
                      id_encuesta=valor.id_encuesta;
                   });
                   if (encuestar==1){
                     boton=$("<br><a href=<?php echo base_url('index.php/c_ecas?id_e="+id_encuesta+"');?> class='btn btn-raised btn-danger' style='position:auto; 0px;' >Iniciar</a>");
                     $("#cont_ppal").text('');
                     /*$(".bs-component").html('');
                     $(".row").html('');*/
                    // alert(texto);
                     $("#cont_ppal").append("<div id='campos' class='estilo_campos'>"+texto+"</div>");
                     //$("#ms").text('');
                     imagen.appendTo('#campos');
                     boton.appendTo('#campos');
                   }
                   else{
                     alert(texto);
                     $("#ms").text(texto);
                   }

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

//---------------------
</script>

