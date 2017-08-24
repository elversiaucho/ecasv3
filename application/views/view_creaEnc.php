


  <div id='campo' class="estilo_campos ">
  	<?php 
		$attributes = array('class' => '', 'id' => 'form_enc' , 'method' => 'POST');
       	echo form_open('index.php/c_ecas/crea_encuesta', $attributes);
       	?>
	  
      <!--div>
     	<label>Por favor ingrese el número del lote:</label>
     	<input type="number" name="nro_lote" value = "<?php echo set_value('nro_lote');?>"/>
     	<p class="t_error"><?php echo strip_tags(form_error('nro_lote')); ?></p>
     </div-->
     <div class="row form-group">
     <?#php echo json_encode($lotes);?>
      <label class="col-lg-3">Número del lote:</label>
      <select id = 'lote' name="id_lote">
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
      <p class="t_error"><?php echo strip_tags(form_error('id_lote')); ?></p>
    </div>
     <div style="display: none;">
     	<label>Digite número de la encuesta:</label>
     	<input type="number" name="nro_encuesta" id="nro_encuesta" value = "<?php echo set_value('nro_encuesta');?>"/>
     	<p class="t_error"><?php echo strip_tags(form_error('nro_encuesta')); ?></p>
     </div>
    
     <div id='inf' class='estilo_campos'>
        	
     </div>
      <?php 
	  $data = array('type' => 'submit',
	  'value' =>'Crear encuesta',
	  'class' => 'btn btn-success abtn ');
	  ?>
    <div class='estilo_campos'>
    	<?php echo form_submit($data); ?>
    </div>
  <?php echo form_close();?>

 </div><!--Fin Crear Encuesta-->   	

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
   /* $("#lote").change(function(){
     
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
                    $("#inf").html("<img src='<?php echo base_url('images/ajax-loader.gif');?>'>");
                    lote.prop('disabled', true);
                },
                success:  function (r) 
                {
                   var texto="Error al crear encuesta!";
                   var id_encuesta=0;
                   var encuestar=0;
                   var imagen=$("<img src='<?php echo base_url('images/recomienda2.png');?>' class='img-responsive'/>");
                   var boton="";
                   var recomendaciones="";


                   $(r).each(function(clave, valor){
                      //texto+=valor.id_encuesta;
                      texto=valor.mensaje;
                      encuestar=valor.encuestar;
                      id_encuesta=valor.id_encuesta;
                      //recomendaciones =valor.v_recomenda;
                   });
                   if (encuestar==1){

                    boton=$("<br><div class='pagination-centered'><a href=<?php echo base_url('index.php/c_ecas?id_e="+id_encuesta+"');?> class='btn btn-raised btn-danger' style='position:auto; 0px;' >Iniciar</a></div>");
                     $("#cont_ppal").text('');
                     /*$(".bs-component").html('');
                     $(".row").html('');  /
                    // alert(texto);
                     $("#cont_ppal").append("<div id='campos' class='estilo_campos'>"+texto+"</div>");
                     //$("#inf").text('');
                     imagen.appendTo('#campos');
                     boton.appendTo('#campos');
                 
                     /* $("#cont_ppal").load("<?php echo base_url('application/views/v_recomenda.php');?>",
                          {id_encuesta: id_encuesta,
                          url_base: "<?php echo base_url();?>",
                          mensaje: texto  
                           },
                           function(response, status, xhr) {
                              if (status == "error") {
                                 var msg = "Error!, algo ha sucedido: ";
                                 $("#inf").html(msg + xhr.status + " " + xhr.statusText);
                               }
                             });--/
              
                   }
                   else{
                     alert(texto);
                     $("#inf").text(texto);
                   }

                 },
                error: function(errorThrown)
                {
               alert("Ocurrio un error en AJAX!");
             alert(errorThrown[0]);
             lote.prop('disabled', false);
                }
            });
        }
        else
        {
          //
        }
    });*/
/* Se crea para mostrar a informacion de la encuesta antes de ser creada*/
    $("#lote").change(function(){
     
        var lote = $(this);
        //alert("lote: "+ lote.val());
         if($(this).val() != '')
        {
            $.ajax({
                data: {id_lote : lote.val() },
                url:   '<?php echo base_url('index.php/c_ecas/pre_encuesta');?>',//+'index.php/c_ecas/get_grados',
                type:  'POST',
                dataType: 'json',
                beforeSend: function () 
                {
                    $("#inf").html("<img src='<?php echo base_url('images/ajax-loader.gif');?>'>");
                    lote.prop('disabled', true);
                },
                success:  function (r) 
                {
                   var texto="No se encontraron datos..";
                   var id_encuesta=0;
                   var encuestar=0;
                   var imagen=$("<img src='<?php echo base_url('images/recomienda2.png');?>' class='img-responsive'/>");
                   var boton="";
                   var recomendaciones="";

                    //console.log("hola");
                   $(r).each(function(clave, valor){
                      //texto+=valor.id_encuesta;
                      texto=valor.mensaje;
                      encuestar=valor.encuestar;
                      nro_e=valor.nro_encuesta;
                      //recomendaciones =valor.v_recomenda;
                   });
                   if (encuestar==1){
                    $("#inf").html(texto);
                    $("#nro_encuesta").val(nro_e);
                    lote.prop('disabled', false);
                    //boton=$("<br><div class='pagination-centered'><a href=<?php echo base_url('index.php/c_ecas?id_e="+id_encuesta+"');?> class='btn btn-raised btn-danger' style='position:auto; 0px;' >Iniciar</a></div>");
                     //$("#cont_ppal").html('');
                     /*$(".bs-component").html('');
                     $(".row").html('');*/
                    // alert(texto);
                     //$("#cont_ppal").append("<div id='campos' class='estilo_campos'>"+texto+"</div>");
                     //$("#inf").text('');
                     //imagen.appendTo('#campos');
                     //boton.appendTo('#campos');
                 
                     /* $("#cont_ppal").load("<?php echo base_url('application/views/v_recomenda.php');?>",
                          {id_encuesta: id_encuesta,
                          url_base: "<?php echo base_url();?>",
                          mensaje: texto  
                           },
                           function(response, status, xhr) {
                              if (status == "error") {
                                 var msg = "Error!, algo ha sucedido: ";
                                 $("#inf").html(msg + xhr.status + " " + xhr.statusText);
                               }
                             });*/
              
                   }
                   else{
                     alert(texto);
                     $("#inf").html(texto);
                   }

                 },
                error: function(errorThrown)
                {
              alert("Ocurrio un error en AJAX!");
              alert(errorThrown[0]);
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

