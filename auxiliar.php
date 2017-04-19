	<div class="estilo_campos row" id="campos">
	    <?php 
		   $ruta_base="";
		    if (isset($_POST['url_base'])){
		    	$ruta_base=$_POST['url_base'];
		    	$id_encuesta =$_POST['id_encuesta'];
		    	echo $_POST['mensaje'];
		    }
		    else{
		    	$ruta_base=base_url();
		    }
	   
	    ?>
	   	    
		<div class="col-md-6">
			<img src="<?php echo $ruta_base.'images/reco-ilustracion.png';?>" class="img-responsive"/>
		</div>
		<div class="col-md-6">
			<img src="<?php echo $ruta_base.'images/recomienda.png';?>" class="img-responsive"/>
		
			<div style="height:70px">
		  	 	<a href="<?php echo $ruta_base.'index.php/c_ecas?id_e='.$id_encuesta;?>" class="btn btn-raised btn-danger" style="position:auto; 0px;" >Iniciar</a>
			</div>

		</div>
	</div>

	<script type="text/javascript">
		//para colocar en blanco a preguntas flujo D40
		$('input:radio[name=D44').prop('checked',false);
		$('input:radio[name=D45').prop('checked',false);
		$('input:radio[name=D46').prop('checked',false);
		$('input:radio[name=D47').prop('checked',false);
		$('.D48').prop('checked',false);
		$('input:radio[name=D49').prop('checked',false);
		$('input:radio[name=D50').prop('checked',false);
		$('input:radio[name=D51').prop('checked',false);
		$('input:radio[name=D52').prop('checked',false);
		$('input:radio[name=D53').prop('checked',false);
		$('.D54').prop('checked',false);
		$("#D54g_cual").val('');

		//validacion D


	</script>