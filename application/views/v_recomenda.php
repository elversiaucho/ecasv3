

	<div class="estilo_campos row" id="campos">
	    <?php 
	    $seguir ="";
	      if (isset($slide)) $seguir = "&seguir=".$slide;
		   $ruta_base="";
		    if (isset($_POST['url_base'])){
		    	$ruta_base=$_POST['url_base'];
		    	$id_encuesta =$_POST['id_encuesta'];
		    	$slide =$_POST['slide'];
		    	//echo "<div>".$_POST['mensaje']."</div>";
		    }
		    else{
		    	$ruta_base=base_url();
		    }
	   
	    ?>
	   	  
	   	   <div class="pagination-centered">
	   	   	  <div class="col-lg-12"><?php if (isset($mensaje)){echo "<div>NOTA:  ".$mensaje."</div>";}?></div>
	   	   </div>
		<div class="col-md-6">
			<img src="<?php echo $ruta_base.'images/reco-ilustracion.png';?>" class="img-responsive"/>
		</div>
		<div class="col-md-6">
			<img src="<?php echo $ruta_base.'images/recomienda.png';?>" class="img-responsive"/>
		


		</div>
		<div class='pagination-centered'>
		  	 	<a href=<?php echo $ruta_base.'index.php/c_ecas?id_e='.$id_encuesta.$seguir;?> class="btn btn-raised btn-danger" style="position:auto; 0px;" ><?php if (isset($retomada)){
		  	 		 echo "RETOMAR";
		  	 		}
		  	 		else echo "INICIAR";?> 

		  	 	</a>
		</div>
	</div>
