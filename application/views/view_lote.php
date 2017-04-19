<div id="campo">
  <div class="estilo_campos">
   	<?php 
		$attributes = array('class' => '', 'id' => 'form_lote' , 'method' => 'POST');
       	echo form_open('index.php/c_crearlt', $attributes);
       	?>
	 
     	<h5>Por favor identificar y diligenciar las siguientes preguntas:</h5> 
        <br>
        <div class="row pregunta-lote">
            <div class="col-md-1 icono-lote"></div>
            <label class="col-md-4" >¿En qué colegio estás? </label>
            <input class="col-md-7 ui-widget" type="text" name="IE" id="IE" class="form-control" value = "<?php echo set_value('IE');?>" placeholder="Digita el Código o Nombre"/>
            <p class="t_error"><?php echo strip_tags(form_error('IE')); ?></p>
            
        </div>
     	<!--label class="col-lg-4">En que colegio estas?</label>
     	<select class="col-lg-3" id = 'colegio' name="colegio" >
	     	<?php 
	     		/*echo "<option value=''>Seleccione..</option>";
	     		if(isset($colegios))
	     		{
	     		foreach ($colegios as $fila){
	     			echo '<option value='.$fila->Cod_colegio_op.'>'.$fila->Cod_colegio_op.'-'.$fila->SEDE_NOMBRE.'</option>';
	     		  }
	     		}
	     		*/?>    		
	    </select>
        <p class="t_error" class="col-lg-5"><?php #echo strip_tags(form_error('colegio')); ?></p>
     </div-->
        <div class="row pregunta-lote">
            <div class="col-md-1 icono-lote"></div>
            <label class="col-md-4">Jornada:</label>
         	<select  class="col-md-7" id ='jornada' name="jornada">
         		<option value=''>Selecciona..</option>
         		<option value='1' <?php echo  set_select('jornada', '1');?>>Mañana</option>
         		<option value='2' <?php echo  set_select('jornada', '2');?>>Tarde</option>
         		<option value='3' <?php echo  set_select('jornada', '3');?>>Única</option>
         	</select>
         	<p class="t_error"><?php echo strip_tags(form_error('jornada')); ?></p>
        </div>
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
         	<p class="t_error"><?php echo strip_tags(form_error('grado')); ?></p>
        </div>
        <div class="row pregunta-lote">
            <div class="col-md-1 icono-lote"></div>
            <label class="col-lg-4">Curso:</label>
            <select class="col-md-7" id ='curso' name="curso">
         		<option value=''>Selecciona..</option>
         		<option value='1' <?php echo  set_select('curso', '1');?> >1</option>
         		<option value='2' <?php echo  set_select('curso', '2');?> >2</option>
         		<option value='3' <?php echo  set_select('curso', '3');?> >3</option>
         		<option value='4' <?php echo  set_select('curso', '4');?> >4</option>
         		<option value='5' <?php echo  set_select('curso', '5');?> >5</option>
         		<option value='6' <?php echo  set_select('curso', '6');?> >6</option>
         		<option value='7' <?php echo  set_select('curso', '7');?> >7</option>
                <option value='8' <?php echo  set_select('curso', '8');?> >8</option>
                <option value='9' <?php echo  set_select('curso', '9');?> >9</option>
                <option value='10' <?php echo  set_select('curso', '10');?> >10</option>
                <option value='11' <?php echo  set_select('curso', '11');?> >11</option>
                <option value='12' <?php echo  set_select('curso', '12');?> >12</option>
                <option value='13' <?php echo  set_select('curso', '13');?> >13</option>
                <option value='14' <?php echo  set_select('curso', '14');?> >14</option>
                <option value='15' <?php echo  set_select('curso', '15');?> >15</option>
                <option value='16' <?php echo  set_select('curso', '16');?> >16</option>
                <option value='17' <?php echo  set_select('curso', '17');?> >17</option>
                <option value='18' <?php echo  set_select('curso', '18');?> >18</option>
                <option value='19' <?php echo  set_select('curso', '19');?> >19</option>
                <option value='20' <?php echo  set_select('curso', '20');?> >20</option>

         	</select>
                 <p class="t_error"><?php echo strip_tags(form_error('curso')); ?></p>
        </div>
        <div class="row pregunta-lote">
            <div class="col-md-1 icono-lote"></div>
         	<label class="col-md-4">Número de estudiantes matriculados en el curso:</label>
         	<input class="col-md-7" type="text" name="nro_ecurso" value = "<?php echo set_value('nro_ecurso');?>"/>
         	<p class="t_error"><?php echo strip_tags(form_error('nro_ecurso')); ?></p>
        </div>
        <div class="row pregunta-lote">
            <div class="col-md-1 icono-lote"></div>
         	<label class="col-md-4">Número de estudiantes que asisten regularmente:</label>
         	<input class="col-md-7" type="text" name="nro_eregulares" value = "<?php echo set_value('nro_eregulares');?>"/>
         	<p class="t_error"><?php echo strip_tags(form_error('nro_eregulares')); ?></p>
        </div>
        <div class="row pregunta-lote">
            <div class="col-md-1 icono-lote"></div>
            <label class="col-md-4">Número de estudiantes a encuestar:</label>
            <input class="col-md-7" type="text" name="nro_presentes" value = "<?php echo set_value('nro_presentes');?>"/>
            <p class="t_error"><?php echo strip_tags(form_error('nro_presentes')); ?></p>
        </div>
        <div class="row pregunta-lote">
            <div class="col-md-1 icono-lote"></div>
            <label class="col-md-4">Sistema de recolección:</label>
            <div class="col-md-7 row">
                    <div class="col-md-6">
                        <div class="radio radio-primary">
                            <label>
                                <input type="radio" name="sis_recolecta" value="1" <?php echo set_radio("sis_recolecta","1");?> checked/>
                                Aplicativo web
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio radio-primary">
                            <label>
                                <input type="radio" name="sis_recolecta" value="2" <?php echo set_radio("sis_recolecta","2");?> disabled/>
                                Formulario en papel
                            </label>
                        </div>
                    </div>  
                </div>
        </div>
                

        <div id='ms'>
          <?php 
    	  $data = array('type' => 'submit',
    	  'value' =>'Crear',
    	  'class' => 'btn btn-success abtn');
    	  echo form_submit($data);?>

    	<?php echo form_close();

        ?>
        </div>
    </div><!--Fin Crear lote-->   	
</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
	 var colegios=[];
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
                    $('#jornada').prop('disabled', false);
                    $('#curso').prop('disabled', false);
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
    }else  alert("Colegio invalido");
        
    });
//---------------------Cargar grados opcion antigua con el select coelgio.	
		$("#colegio").change(function(){
    	// Guardamos el select de grado
          var grado = $("#grado");
        // Guardamos el select de colegio
         var colegio = $(this);
        //alert("colegio"+ colegio.val());
         if($(this).val() != '')
        {
            $.ajax({
                data: {id_colegio : colegio.val() },
                url:   '<?php echo base_url('index.php/c_ecas/get_grados');?>',//+'index.php/c_ecas/get_grados',
                type:  'POST',
                dataType: 'json',
                beforeSend: function () 
                {
                    colegio.prop('disabled', true);
                },
                success:  function (r) 
                {
                    colegio.prop('disabled', false);
                    $('#jornada').prop('disabled', false);
                    $('#curso').prop('disabled', false);
                    // Limpiamos el select
                    grado.find('option').remove();
                    
                     //$('#ms').text(r);
                    $(r).each(function(clave, valor){ // indice, valor
                    	if (valor.GRADO6 != 0)
                            grado.append('<option value="6">GRADO 6</option>');
                        if (valor.GRADO7 != 0)
                            grado.append('<option value="7">GRADO 7</option>');
                        if (valor.GRADO8 != 0)
                            grado.append('<option value="8">GRADO 8</option>');
                        if (valor.GRADO9 != 0)
                            grado.append('<option value="9">GRADO 9</option>');
                        if (valor.GRADO10 != 0)
                            grado.append('<option value="10">GRADO 10</option>');
                        if (valor.GRADO11_OMAS != 0){
                            grado.append('<option value="11">GRADO 11</option>');
                            grado.append('<option value="11">GRADO 12</option>');
                            grado.append('<option value="11">GRADO 13</option>');
                        }
                      });

                    grado.prop('disabled', false);
                },
                error: function(errorThrown)
                {
	             alert("Ocurrio un error en AJAX!");
	        	 alert(errorThrown);
	        	 colegio.prop('disabled', false);
                }
            });
        }
        else
        {
            grado.find('option').remove();
            grado.prop('disabled', true);
        }
    });
});

</script>

