<!DOCTYPE html>
<html>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/menu-seg.css">
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>


<style type="text/css">
</style>
<body>
<div id="cont_ppal">
     <?php
  if(!isset($encuestar)){  	?>
     <div class="bs-component" style="width: 90%;margin: 0px  auto;">
		<div class="btn-group-justified menu1"><!--btn-group btn-group-sm btn-group-justified btn-group-raised-->
			<?php 
			if(!isset($encuestar)){
				if ($rol==2 /*|| $rol == 3*/){// el rol 3 es para dane central puede ver lso dos
			?>
		    <a  class="btn btn-menu1" id="crear_lte">Crear Lote</a>
			<a  class="btn btn-menu1" id="crear_enc">Crear <br>Encuesta</a>
			<a  class="btn btn-menu1" id="reanudar_e">Retomar <br> Encuesta</a>
			<?php 
				if ($rol == 2)
					{echo "<a  class='btn btn-menu1' id='cerrar_lt'>Cerrar Lote</a>";}
				}
				if ($rol==1 /*|| $rol == 3*/){
			?>
			<a href="<?php echo base_url('index.php/C_asignaciones');?>" class="btn btn-menu1"  id="asignar_colX">Asignar <br>Colegios</a>
			<a  class="btn btn-menu1" id="cerrar_lt">Cerrar Lote</a>
			<a  class="btn btn-menu1" id="nov_lt">Novedad <br>Lote</a>
			<a  class="btn btn-menu1" id="nov_ie">IE Novedad</a>
			<a  class="btn btn-menu1" id="reportar">Reportes </a>	
			<a href="<?php echo base_url('index.php/C_alertas');?>" class="btn btn-menu1"  id="">Alertas</a>	
			<?php
				}
			}
			?>
			
			<!--a  class="btn" id="salir">Salir</a-->
		</div>
	</div>
	<div class="container">
	<?php if ($rol == 3){?><!--  menú de módulo de seguimiento -->
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		        <ul class="nav navbar-nav">
		           <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Reportes de seguimiento<span class="caret"></span></a>
		        <ul class="dropdown-menu">
		        	<li><a href="#" class="reporte" id ="v_asignaciones">Asignación de Cursos a Monitores</a></li>
		            <li><a href="#" class="reporte" id ="v_estadoIE">Estado de Establecimientos Educativos</a></li>
		            <li><a href="#" class="reporte" id ="v_novIE">Novedades de Establecimientos Educativos</a></li>
		            <li><a href="#" class="reporte" id ="v_estadoCurso">Estado de Cursos</a></li>
		       		<li><a href="#" class="reporte" id ="v_estudiantes">Estado Estudiantes</a></li>
		       		<li><a href="#" class="reporte" id ="v_cobertura_est">Cobertura Estudiantes</a></li>
		        </ul>
		      </li>
		    </ul>
		    </div>
		<!--     <ul class="nav navbar-nav">
		      <li class="active"><a href="#" id="agenda">Agenda</a></li>
		      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Personas<span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="<?php echo base_url().'index.php/c_elps/ver_personas';?>">Nuevos</a></li>
		          <li><a href="#">Actualizadas</a></li>
		          <li><a href="#">Completas</a></li>
		          <li><a href="#" id ="todas">Todas</a></li>
		        </ul>
		      </li>
		    </ul> --> 
		    <ul class="nav navbar-nav navbar-right">
		     <!-- <li><a href="<?php echo base_url().'index.php/c_elps'?>" <span class="glyphicon glyphicon-user"></span>Regresar</a></li> -->
		     <!--li><a href="<?php echo base_url()?>"<span class="glyphicon glyphicon-user"></span>Salir</a></li-->
		     <li><a href="<?php echo base_url()?>"<span class="glyphicon glyphicon-log-in"></span><?php echo  $usuario;?></a></li>
		    </ul>
		  </div>
		</nav>

	<?php }?>
	</div>
	<div class="estilo_campos" id='campos'>
		<?php }?>
			<h2>
			Señor(a) Monitor(a):
			<?php 
		 		echo $usuario."<br> ";
		 		if (isset($mensaje))
		 			echo $mensaje;
	    	if(isset($encuestar))
	 		if ($encuestar==1)
			{
				//$data["mensaje"]="";
				require('v_recomenda.php');  
				
    		}
       ?>
       </h2>
</div>
    
</div>
</body>
<script type="text/javascript" src= "<?php echo base_url('js/menu.js')?> "></script>
<!--<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.js"></script>-->
<script type="text/javascript" src="<?php echo base_url()?>js/material.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/validar.js"></script>
<?php if ($rol == 3){?>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/asignaciones/jquery.easyui.min.js"></script> 
<?php }?>
</html>
  <style>
		/*Quita flecha del campo número*/
			input[type=number]::-webkit-outer-spin-button,
			input[type=number]::-webkit-inner-spin-button {
			    -webkit-appearance: none;
			    margin: 0;
			}
			input[type=number] {
			    -moz-appearance:textfield;
			}
	</style>

  <script type="text/javascript">

  var base_url = '<?php echo base_url();?>';

	  function estilo_menu(id){
	  	$(".btn-menu1").removeClass('clasemenu');
		$(id).addClass('clasemenu');
	  }

	  $(document).ready(function(){
		
	  
	//--------------desplegar opciones del menú

  //-----------------reportes..............
  	$("#reportar").click(function(){
  		if($('#campo').length>0)
			$('#campo').remove();
  		estilo_menu('#reportar');
  		$.post('<?php echo base_url('index.php/C_cheklg/ver_reportes');?>', 
  				function(rta,status){
  				$('#campos').html(rta);
  				});

  		});
   //----------
	//---------------------------nov_ie-------
	     $('#nov_ie').click(function(){
	     		if($('#campo').length>0)
					$('#campo').remove();
				estilo_menu('#nov_ie');
				$.ajax({
					url: '<?php echo base_url('index.php/C_cheklg/ver_novedad_ie');?>',
					type: 'GET',
					//data: $(this).serialize(),
					beforeSend : function(){
						$("#campos").html("<img src='<?php echo base_url('images/ajax-loader.gif');?>'>");
					},
					success:function (response) {
	                	     if ($.trim(response)){
								$('#campos').html(response);
							   }
							   else {
	                			$("#campos").html("Error No se exixte vista para Novedad");
	                		}
				     },
				     error: function(errorThrown){
	        	 	 alert(errorThrown);
	        	 	 alert("Ocurrio un error en AJAX!");
	        	 	 }	
				});

			});

	//---------------nov_lt
	     $('#nov_lt').click(function(){
	     	    if($('#campo').length>0)
					$('#campo').remove();
				estilo_menu('#nov_lt');
				$.ajax({
					url: '<?php echo base_url('index.php/C_cheklg/ver_novedad_lt');?>',
					type: 'GET',
					//data: $(this).serialize(),
					beforeSend : function(){
						$("#campos").html("<img src='<?php echo base_url('images/ajax-loader.gif');?>'>");
					},
					success:function (response) {
	                	     if ($.trim(response)){
								$('#campos').html(response);
							   }
							   else {
	                			$("#campos").html("Error No se exixte vista para Novedad");
	                		}
				     },
				     error: function(errorThrown){
	        	 	 alert(errorThrown);
	        	 	 alert("Ocurrio un error en AJAX!");
	        	 	 }	
				});

			});

//---------------------Descargar encuestas

function importarScript(nombre, callback) {
    var s = document.createElement("script");
    s.onload = callback;
    s.src = nombre;
    document.querySelector("head").appendChild(s);
}


function scriptCargado() { 
    console.log("se cargo"); 
}

//-----------Cargar la vista reaunudar encuesta.
		 $('#reanudar_e').click(function(){
		  if($('#campo').length>0)
		   	$('#campo').remove();
			estilo_menu('#reanudar_e');
			$.ajax({
				url: '<?php echo base_url('index.php/C_cheklg/ver_retomar');?>',
				type: 'GET',
				//data: $(this).serialize(),
				beforeSend : function(){
					$("#campos").html("<img src='<?php echo base_url('images/ajax-loader.gif');?>'>");
				},
				success:function (response) {
                	     if ($.trim(response)){
							$('#campos').html(response);
						   }
						   else {
                			$("#campos").html("Error No se pudo Retomar La Encuesta");
                		}
			     },
			     error: function(errorThrown){
        	 	 alert(errorThrown);
        	 	 alert("Ocurrio un error en AJAX!");
        	 	 }	
			});

		});
//-----------Cargar la vista cerrar lote.
	 $('#cerrar_lt').click(function(){
	 	if($('#campo').length>0)
			$('#campo').remove();
		  estilo_menu('#cerrar_lt');
			$.ajax({
				url: '<?php echo base_url('index.php/C_cheklg/ver_cerralt');?>',
				type: 'GET',
				//data: $(this).serialize(),
				beforeSend : function(){
					$("#campos").html("<img src='<?php echo base_url('images/ajax-loader.gif');?>'>");
				},
				success:function (response) {
                	     if ($.trim(response)){
							$('#campos').html(response);
						   }
						   else {
                			$("#campos").html("Error No se pudo Cerrar el Lote");
                		}
			     },
			     error: function(errorThrown){
        	 	 alert(errorThrown);
        	 	 alert("Ocurrio un error en AJAX!");
        	 	 }	
			});

		});
//----------------carga la vista para ingresar nueva encuesta
	  $('#crear_enc').click(function(){
		  if($('#campo').length>0)
			$('#campo').remove();
		  estilo_menu('#crear_enc');
			$.ajax({
				url: '<?php echo base_url('index.php/C_cheklg/vista_encuesta');?>',
				type: 'GET',
				//data: $(this).serialize(),
				beforeSend : function(){
					$("#campos").html("<img src='<?php echo base_url('images/ajax-loader.gif');?>'>");
				},
				success:function (response) {
                	     if ($.trim(response)){
							$('#campos').html(response);
						   }
						   else {
                			$("#campos").html("Error No se pudo crear la encuesta");
                		}
			     },
			     error: function(errorThrown){
        	 	 alert(errorThrown);
        	 	 alert("Ocurrio un error en AJAX!");
        	 	 }	
			});

		});


//------------------------carga la vista para ingresar datos del lote
		$('#crear_lte').click(function(){
		if($('#campo').length>0)
			$('#campo').remove();
	     //$("#cont_ppal").append("<div id='campos'>Texto Agregado</div>");
		//alert("vamos");
		 /*$("head").empty();
		 importarScript("<?php echo base_url()?>js/jquery-2.2.0.min.js", scriptCargado);*/

		 estilo_menu('#crear_lte');
			$.ajax({
				url: '<?php echo base_url('index.php/C_cheklg/vista_lote');?>',
				type: 'GET',
				//data: $(this).serialize(),
				beforeSend : function(){
					$("#campos").html("<img src='<?php echo base_url('images/ajax-loader.gif');?>'>");
				},
				success:function (response) {
                	     if ($.trim(response)){
							$('#campos').html(response);
						   }
						   else {
                			$("#campos").html("Error No se pudo crear el Lote");
                		}
			     },
			     error: function(errorThrown){
        	 	 alert(errorThrown);
        	 	 alert("Ocurrio un error en AJAX!");
        	 	 }	
			});

		});
		
		$('#asignar_col').click(function(){
		if($('#campo').length>0)
			$('#campo').remove();
	     //$("#cont_ppal").append("<div id='campos'>Texto Agregado</div>");
		//alert("vamos");
		 //
		 //importarScript("<?php echo base_url();?>assets/js/asignaciones/jquery.easyui.min.js", scriptCargado);
		 estilo_menu('#asignar_col');
			$.ajax({
				url: '<?php echo base_url('index.php/C_asignaciones');?>',
				type: 'GET',
				//data: $(this).serialize(),
				beforeSend : function(){
					$("#campos").html("<img src='<?php echo base_url('images/ajax-loader.gif');?>'>");
				},
				success:function (response) {
                	     if ($.trim(response)){
                	     	               	     	
                	     	//response+= "<div id='ms'>Texto Agregado</div>";
							$('#campos').html(response);
							//console.log(response);
						   }
						   else {
                			$("#campos").html("Error No se pudo crear el Lote");
                		}
			     },
			     error: function(errorThrown){
        	 	 alert(errorThrown);
        	 	 alert("Ocurrio un error en AJAX!");
        	 	 }	
			});

		});
	});
	</script>
	</body>

</html>