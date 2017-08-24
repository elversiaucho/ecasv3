<div id="campo">
  <div class="estilo_campos">
   	<?php 
    //var_dump($colegios);
		$attributes = array('class' => '', 'id' => 'form_asig' , 'method' => 'POST');
       	echo form_open('index.php/c_asignaciones', $attributes);
       	?>
	   
     	<h5>Ingrese la siguiente información:</h5> 
        <hr>
      <div class="row pregunta-lote">
          <div class="col-md-1 icono-lote"></div>
          <label class="col-md-4">Seleccione el usuario:</label>
          <select class="col-md-7" id = 'usuario' name="usuario" >
            <?php 
              echo "<option value=''>Seleccione..</option>";
              if(isset($usuarios))
              {
              foreach ($usuarios as $fila){
                echo '<option value='.$fila->USUARIO.' '.set_select('usuario', $fila->USUARIO).'>'.$fila->NOMBRE.'</option>';
                }
              }
              ?>        
          </select>
          
      </div>
      <p class="t_error" class="col-lg-12"><?php echo strip_tags(form_error('usuario')); ?></p>
        <div class="row pregunta-lote">
            <div class="col-md-1 icono-lote"></div>
            <label class="col-md-4" >Establecimiento Educativo: </label>
            <input class="col-md-7 ui-widget" type="text" name="IE" id="IE" class="form-control" value = "<?php echo set_value('IE');?>" placeholder="Digita el Código o Nombre"/>
           
        </div>
        <p class="t_error" id="err_IE"><?php echo strip_tags(form_error('IE')); ?></p>  
      
        <div class="row pregunta-lote">
            <div class="col-md-1 icono-lote"></div>
            <label class="col-md-4">Grado:</label>
         	<select class="col-md-7" id ='grado' name="grado">
                 <?php
                    if(isset($grados))
                    {
                    foreach ($grados as $fila){
                       if ($fila->GRADO6 != 0){?>
                                 <option value='6' <?php echo  set_select('grado', '6');?>>GRADO 6</option>
                         <?php }
                            if ($fila->GRADO7 != 0){
                          ?>
                                 <option value='7' <?php echo  set_select('grado', '7');?>>GRADO 7</option>
                        <?php }
                            if ($fila->GRADO8 != 0){
                        ?>
                                 <option value='8' <?php echo  set_select('grado', '8');?>>GRADO 8</option>
                        <?php }
                            if ($fila->GRADO9 != 0){
                        ?>
                                 <option value='9' <?php echo  set_select('grado', '9');?>>GRADO 9</option>
                        <?php }
                            if ($fila->GRADO10 != 0){
                            ?>
                                 <option value='10' <?php echo  set_select('grado', '10');?>>GRADO 10</option>
                        <?php }
                            if ($fila->GRADO11_OMAS != 0){
                        ?>
                                <option value='11' <?php echo  set_select('grado', '11');?>>GRADO 11</option>
                                <option value='12' <?php echo  set_select('grado', '12');?>>GRADO 12</option>
                                <option value='13' <?php echo  set_select('grado', '13');?>>GRADO 13</option>
                         <?php }
                        
                      }
                    }
                ?> 
         	</select>
         	
        </div>
        <p class="t_error"><?php echo strip_tags(form_error('grado')); ?></p>
        <div class="row pregunta-lote">
            <div class="col-md-1 icono-lote"></div>
         	<label class="col-md-4">Cantidad de cursos a asignar:</label>
         	<input class="col-md-7" type="text" name="tot_cursos" value = "<?php echo set_value('tot_cursos');?>" onkeypress="return solonumeros(event)" maxlength='2'/>
         	
        </div>
        <p class="t_error"><?php echo strip_tags(form_error('tot_cursos')); ?></p>
      

        <div id='ms'>
          <?php 
    	  $data = array('type' => 'submit',
    	  'value' =>'Asignar',
        'id' =>'asignar',
    	  'class' => 'btn btn-success abtn');
    	  echo form_submit($data);?>

    	<?php echo form_close();

        ?>
        </div>
    </div><!--Fin estilo campo-->  
	
</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
	 var colegios=[];
  // var info_colegios=[];
//-----------------buscar colegios----

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

    //---------------------Cargar grados con auto completado.   
    $("#IE").blur(function(){
        var colegio="";
        var numero="";
        var i=0;
        var grado = $("#grado");
        // Guardamos el select de IE
        var IE = $(this);
        //alert("IE"+ IE.val());
         if($(this).val() != '')
        {
            colegio=IE.val();
            while(i<colegio.length){
                if(colegio.charAt(i)=='-')
                    break;
                else 
                    numero+=colegio.charAt(i);
            i++;
            }
        
        if (!isNaN(numero)){
            $.ajax({
                data: {id_colegio : numero},
                url:   '<?php echo base_url('index.php/c_ecas/get_grados');?>',//+'index.php/c_ecas/get_grados',
                type:  'POST',
                dataType: 'json',
                beforeSend: function () 
                {
                    IE.prop('disabled', true);
                },
                success:  function (r) 
                {
                    IE.prop('disabled', false);
                    //$('#jornada').prop('disabled', false);
                    //$('#curso').prop('disabled', false);
                    // Limpiamos el select
                    grado.find('option').remove();
                    
                     //$('#ms').text(r);
                    $(r).each(function(clave, valor){ // indice, valor
                        if (valor.GRADO6 != 0)
                            grado.append("<option value='6'>GRADO 6</option>");
                        if (valor.GRADO7 != 0)
                            grado.append("<option value='7'>GRADO 7</option>");
                        if (valor.GRADO8 != 0)
                            grado.append("<option value='8'>GRADO 8</option>");
                        if (valor.GRADO9 != 0)
                            grado.append("<option value='9'>GRADO 9</option>");
                        if (valor.GRADO10 != 0)
                            grado.append("<option value='10'>GRADO 10</option>");
                        if (valor.GRADO11_OMAS != 0){
                            grado.append("<option value='11'>GRADO 11</option>");
                            grado.append("<option value='12'>GRADO 12</option>");
                            grado.append("<option value='13'>GRADO 13</option>");
                        }
                    
                      });

                    grado.prop('disabled', false);
                },
                error: function(errorThrown)
                {
                 alert("Ocurrio un error en AJAX!");
                 alert(errorThrown);
                 IE.prop('disabled', false);
                }
            });
        }else
        {
           
            grado.find('option').remove();
            grado.prop('disabled', true);
        }
    }else  $("#err_IE").text("Colegio invalido");
        
    });

$("#asignar").click(function(){
  //result = jQuery.inArray($("#IE").val(),colegios);
  //console.log(info_colegios);

  //return false;
});



});

</script>

