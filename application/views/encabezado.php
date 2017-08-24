<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>ECAS</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css">
		<!--link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap-material-design.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/ripples.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/animaciones.css"-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
			

	</head>
	<style type="text/css">
		.cont-btn{
				float: right;
				position:absolute;
				height: 10%;
			}
			.btn-cerrar, .lb-btn{
				/*float: left;*/
				margin: 40px 0px 0px 62%;
				position: absolute;
				/*background-color: pink;*/
			}
			.lb-btn{
				margin-top: 20px;
			}

		</style>
	<body>
		<header>
			<img id = 'logo' style="width:20%; position:relative;" src="<?php echo base_url()?>images/logo_dane.png" class="img-responsive"/>
			<?php if(isset($ingreso))
				{
					echo "<label class='lb-btn'>".$usuario."</label>";
			?>
			<!--div class="cont-btn"-->
			   <a href=<?php echo base_url('');?> class="btn btn-cerrar">Cerrar sesión</a>
			 <!--/div-->
			<?php }?>
			<img src='<?php echo base_url('/images/Cabezotep.png')?>' class="img-responsive"/>
		</header>	
		
	</body>
	   
	    <script type="text/javascript" src="<?php echo base_url()?>js/jquery-2.2.0.min.js"></script>
	    <script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>js/material.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>js/ripples.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>js/main.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>js/validar.js"></script>
        

	</html>