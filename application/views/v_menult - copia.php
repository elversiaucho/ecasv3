<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <!--link rel="stylesheet" href="/resources/demos/style.css"-->
  <!--script src="https://code.jquery.com/jquery-1.12.4.js"></script-->
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
     
<style type="text/css">

		@font-face {
			font-family: "Sans extrab";
			src:url(<?php base_url('fonts/OpenSans-ExtraBold.ttf'); ?>) format("truetype");
			}
		@font-face {
			font-family: "Sans";
			src:url(<?php base_url('fonts/OpenSans-Semibold.ttf'); ?>) format("truetype");
			}
     	.btn-menu1{
     		
     		border-left:thin dotted;
     		border-top:thin dotted;
     		border-right: thin dotted;
     		border-radius: 10px 10px 0px 0px;
     		color: #91224C;
     		margin-left: 20px;
     		
     	}
     
     	.btn-menu1:hover{
     		/*background-color: #91224C;*/
     		color: #91224C;
     		background: rgba(145, 34, 76, 0.1);
   			filter: alpha(opacity=50);

     	}
     	.menu1{
     		font-family: 'Sans extrab' , sans-serif;
     		border-bottom:thin dotted #91224C;
     		color: #91224C;
     		padding: 0 100px 0 100px;
     		margin: 50px 0 0 0;

     	}
     	.estilo_campos{
     		margin: 0px 75px 0px 75px;
     		font-family: 'Sans', sans-serif;
     		background-color: white;
     		padding:20px 0px 0 85px;
     		/*color: #91224C;*/
     	}
     	.clasemenu{
			background-color:#91224C;
			color:white;
		}
     	/*.container{
     		
     	}*/

     	label{
     		font-size: 14px;
     		}
    
</style>

<div id="cont_ppal">
     <?php
  if(!isset($encuestar)){  	?>
     <div class="bs-component" style="width: 90%;margin: 0px  auto;">
		<div class="btn-group-justified menu1"><!--btn-group btn-group-sm btn-group-justified btn-group-raised-->
		<!--Para generar nuevo lote mostrar el nro del lote si se intenta generar nuevamente mostra el nro de lote para agregarle encuenstas-->
		    <a  class="btn btn-menu1" id="crear_lte">Crear Lote</a>
			<a  class="btn btn-menu1" id="crear_enc">Crear Encuesta</a>
			<a  class="btn btn-menu1" id="reanudar_e">Retomar Encuesta</a>
			<a  class="btn btn-menu1" id="cerrar_lt">Cerrar Lote</a>
			<a  class="btn btn-menu1" id="nov_lt">Lote Novedad</a>
			<a  class="btn btn-menu1" id="nov_ie">IE Novedad</a>
			<?php 
			if(!isset($encuestar)){
				if ($rol==1){
			?>
			<a  class="btn btn-menu1" id="reportar">Descargar Base</a>	
			<?php
				}
			}
			?>
			
			<!--a  class="btn" id="salir">Salir</a-->
		</div>
	</div>
	<div class="estilo_campos" id='campos'>
		<?php }?>
			
			Señor(a) Monitor(a):
			<?php 
		 		echo $usuario." ";
		 		if (isset($mensaje))
		 			echo $mensaje;
	    	if(isset($encuestar))
	 		if ($encuestar==1)
			{
				//$this->load("v_recomenda.php");
				require('v_recomenda.php');
    		}
       ?>
</div>
    <?php #include('v_pie.html'); ?>
</div>

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

	  function estilo_menu(id){
	  	$(".btn-menu1").removeClass('clasemenu');
		$(id).addClass('clasemenu');
	  }

	  $(document).ready(function(){
		
	  
	//--------------desplegar opciones del menú

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

			$('#reportar').click(function(){
				estilo_menu('#reportar');
				alert("Opción en construcción");
			});


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
		 //
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
	});
	</script>
	</body>
</html>