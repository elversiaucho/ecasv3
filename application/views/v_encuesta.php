<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>ECAS</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap-material-design.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/ripples.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/animaciones.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/miestilo.css">

	
	</head>
	<body>
		<header>

			<img src="<?php echo base_url()?>images/logo.png">
			<div id="franja"></div>
			<div class="bs-component" style="width: 90%;margin: 0 auto;">
				<div class="btn-group btn-group-sm btn-group-justified btn-group-raised">
					<a class="btn itemMenu" data-pag="1">Paso 1. Características generales</a>
					<a class="btn itemMenu" data-pag="4">Paso 2. Mi entorno</a>
					<a class="btn itemMenu" data-pag="6">Paso 3. Actividades</a>
					<a class="btn itemMenu" data-pag="8">Paso 4. Sexualidad</a>
					<a class="btn itemMenu" data-pag="13">Paso 5. Uso de Internet</a>
					<a class="btn itemMenu">Paso 6. Confirmación</a>
				</div>
			</div>
		</header>
		<br>
		<section class="container">
			<?php $attributes = array('class' => '', 'id' => '');
			echo form_open('index.php/c_ecas', $attributes); ?>  	
				<div class="pagina aparece-a-clase" data-slide="1">  <!--Slide 1-->
					<!-- Pregunta 1-->
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">¿Eres Hombre o Mujer?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="A1" >
									Hombre
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="A1">
									Mujer
								</label>
							</div>
						</div>	
					</div>
					<div class="col-lg-12">
						<p class="t_error"><?php echo strip_tags(form_error('A1')); ?></p>
					</div>
					<!-- Pregunta 2-->
					<div class="row form-group label-floating">
						<div class="col-lg-6">
							<label for="A2" class="control-label" style="font-size: 1.3em;">¿Cuántos años cumplidos tienes?</label>
							<input type="number" class="form-control" id="A2" name="A2"  value="<?php echo set_value('A2');?>" border="2"/>
						</div>
					</div>
					<div class="col-lg-12">
						<p class="t_error"><?php echo strip_tags(form_error('A2')); ?></p>
					</div>
					<!-- Pregunta 3-->
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">De acuerdo a tu cultura, pueblo o rasgos fisicos, te reconoces como:</label>

						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="rasgos" value="<?php echo set_value('rasgos');?>">
									Indigena
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="rasgos" value="<?php echo set_value('rasgos');?>">
									Gitano - ROM
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="rasgos" value="<?php echo set_value('rasgos');?>">
									Raizal del archipiélago
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="rasgos" value="<?php echo set_value('rasgos');?>">
									Palenquero
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="rasgos" value="<?php echo set_value('rasgos');?>">
									Ninguno de las anteriores
								</label>
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('rasgos')); ?></p>
						</div>
					</div>
					<!--Pregunta 4-->
					<div class="row form-group">
							<label class="col-lg-12 control-label" style="font-size: 1.3em;">¿Con quién vives actualmente en tu hogar?</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>
										<input id="A4a"  type="checkbox" name="culturarasgos" onclick="oculto()" class="A4" value="1">
										Mamá
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4b" onclick="oculto()" class="A4" type="checkbox" name="culturarasgos" value="1">
										Papá
									</label>
								</div>
								<div class="checkbox">
									<label> 
										<input id="A4c" onclick="oculto()" class="A4" type="checkbox" name="culturarasgos" value="2" >
										Padrastro
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4d" onclick="oculto()" class="A4" type="checkbox" name="culturarasgos" value="3">
										Madrastra
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4e" onclick="oculto()" class="A4" type="checkbox" name="culturarasgos" value="4">
										Pareja(novio/a, esposo/a, compañero/a)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4f" onclick="oculto()" class="A4" type="checkbox" name="culturarasgos" value="5">
										Abuelos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4g" onclick="oculto()" class="A4" type="checkbox" name="culturarasgos" value="1">
										Hermanos(as) mayores
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4h" onclick="oculto()" class="A4" type="checkbox" name="culturarasgos" value="0">
										Hermanos(as) menores
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4i" onclick="oculto()" class="A4" type="checkbox" name="culturarasgos" value="5">
										Hermanastros(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4j" onclick="oculto()" class="A4" type="checkbox" name="culturarasgos" value="">
										Hijos(as) tuyos(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4k" onclick="oculto()" class="A4" type="checkbox" name="culturarasgos" value="">
										Otros(as) familiares: tíos(as), primos(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4l" onclick="oculto()"  class="A4" type="checkbox" name="culturarasgos" value="">
										Otras personas no familiares
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4m" onclick="ocultos(this.id)" type="checkbox" name="culturarasgos" value="">
										Nadie(vives solo/a)
									</label>
								</div>
								<p class="t_error"><?php echo strip_tags(form_error('culturarasgos')); ?></p>
							</div>
					</div>
					<!--Pregunta 5-->
					<div class="row form-group">

						<label class="col-lg-12 control-label" style="font-size: 1.3em;">En tu cama duermes:</label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="cama">
									Solo(a)
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="cama">
									Con una persona más
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="cama">
									Con dos personas más
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="cama">
									Con tres o más personas
								</label>
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('cama')); ?></p>
						</div>

					</div>
					<!-- Btn Siguiente javascript:void(0)-->
					<a href="javascript:void(0)" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" >Siguiente</a>
				</div> <!--Fin Slide 1-->
	<!-- ************************************************************************************************************************************************************************************* -->
				<div class="pagina aparece-a-clase" data-slide="2">
					<!--Pregunta 6-->
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">¿Cuáles de los siguientes servicios posee tu hogar?</label>

						<label class="col-lg-6 ">a. Energia electrica conectada a red pública</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="energiaelectrica">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="energiaelectrica">
									No
								</label>
							</div>							
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('energiaelectrica')); ?></p>
						</div>
						<label class="col-lg-6">b. Gas natural conectado a red pública</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="Gas">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="Gas">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('Gas')); ?></p>
						</div>
						<label class="col-lg-6">c. Alacantarillado</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="Alcantarillado">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="Alcantarillado">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('Alcantarillado')); ?></p>
						</div>
						<label class="col-lg-6">d. Recolección de basuras</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="basuras">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="basuras">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('basuras')); ?></p>
						</div>
						<label class="col-lg-6">e. Acueducto</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="acueducto">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="acueducto">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('acueducto')); ?></p>
						</div>
					</div>
					<!-- Pregunta 7 -->
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">La zona donde está ubicada tu casa o tu colegio tiene alguna de las siguientes características: </label>
						<label class="col-lg-6 ">Hay bares o billares</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="baresbillares">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="baresbillares">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('baresbillares')); ?></p>
						</div>
						<label class="col-lg-6">Hay venta de alcohol</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="alcohol">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="alcohol">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('alcohol')); ?></p>
						</div>
						<label class="col-lg-6">Hay venta de sustancias psicoactivas</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="sustancias">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="sustancias">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('sustancias')); ?></p>
						</div>
						<label class="col-lg-6">Es una zona de tolerancia</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="zona">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="zona">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('zona')); ?></p>
						</div>
						<label class="col-lg-6">Hay delincuencia organizada</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="delincuencia">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="delincuencia">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('delincuencia')); ?></p>
						</div>
						<label class="col-lg-6">Es una zona minera</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="zonaminera">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="zonaminera">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('zonaminera')); ?></p>
						</div>
						<label class="col-lg-6">Es una zona de conflicto armado</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="conflictoarmado">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="conflictoarmado">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('conflictoarmado')); ?></p>
						</div>
						<label class="col-lg-6">Hay presencia de bases militares</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="militares">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="militares">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('militares')); ?></p>
						</div>
						<label class="col-lg-6">Es una zona turística</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="turistica">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="turistica">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('turistica')); ?></p>
						</div>
						<label class="col-lg-6">Es una zona portuaria</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="portuaria">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="portuaria">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('portuaria')); ?></p>
						</div>
					</div>
					<a href="javascript:void(0)" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" >Siguiente</a>
				</div>

	<!-- ************************************************************************************************************************************************************************************* -->
				<div class="pagina aparece-a-clase" data-slide="3">
					<!-- Pregunta 2-->
					<div class="row form-group">

						<label class="col-lg-12 control-label" style="font-size: 1.3em;">Actualmente, tienes una relacion de pareja o afectiva con:</label>

						<div class="col-lg-12">
							<div class="checkbox">
								<label>
									<input id="A8a" type="checkbox" onclick="ocultoa()"  name="relacionpareja" class="A8" >
									Novio(a)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="A8b" type="checkbox"  onclick="ocultoa()" name="relacionpareja" class="A8">
									Esposo(a)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="A8c" type="checkbox"  onclick="ocultoa()" name="relacionpareja" class="A8" >
									Amigovio(o)(entuque, vacilón)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="A8d" type="checkbox"  onclick="ocultoa()"  name="relacionpareja" class="A8" >
									Amigos(as) con derechos
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="A8e" type="checkbox" onclick="ocultoa()"  name="relacionpareja" class="A8">
									Compañero(a) sentimental
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="A8f" type="checkbox" onclick="ocultoa()"  name="relacionpareja" class="A8">
									Otro,¿cuál?
									<input type="text" class="form-control" id="A8g" onclick="ocultos(this.id)" class="A8" disabled>
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="A8h" onclick="ocultos(this.id)" type="checkbox" name="relacionpareja" >
									No tengo una relación de pareja o afectiva actualmente
								</label>
							</div>							
							<p class="t_error"><?php echo strip_tags(form_error('relacionpareja')); ?></p>
						</div>

					</div>
					<!-- Pregunta 2-->
					<div class="form-group">
						<label class="col-lg-6">¿Tienes hijos?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="tieneshijos" id="A9a" onclick="ocultos(this.id)">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="tieneshijos" id="A9b" onclick="ocultos(this.id)">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('tieneshijos')); ?></p>
						</div>
					</div>

					<!-- Pregunta 2-->
					<div class="row form-group label-floating TH" id="not1"  onclick="ocultos(this.id)" style="display:none;">
						<div class="col-lg-12">
							<label for="i5" class="control-label" style="font-size: 1.3em;">¿Cuántos(as) hijos(as) tienes?</label>
							<input type="text" class="form-control" id="i5" name="cuantoshijos">
						</div>
					<div class="col-lg-6">
						<p class="t_error"><?php echo strip_tags(form_error('cuantoshijos')); ?></p>
					</div>
					</div>					
					


					<!--Pregunta 5-->
					<div class="row form-group TH" id="not2" onclick="ocultos(this.id)" style="display:none;>
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">Mientras estás en el colegio, ¿con quiénes pasan la mayor parte del tiempo tu(s) hijos(as)?</label>


						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="colegiotiempo">
									Con el papá a la mamá de tu(s) hijos(as)
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="colegiotiempo">
									Con personas familiares
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="colegiotiempo">
									Con personas no familiares
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="colegiotiempo">
									Con personas a cargo en una guardería
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="colegiotiempo">
									Solo(s)
								</label>
							</div>
								<p class="t_error"><?php echo strip_tags(form_error('colegiotiempo')); ?></p>
						</div>
					</div>
					<div class="row form-group TH" id="not3" onclick="ocultos(this.id)" style="display:none;">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">¿Quién te apoya en el sostenimiento económico de tus hijos(as)?</label>
						<div class="col-lg-12">
							<div class="checkbox">
								<label>
									<input id="ch31" type="checkbox" name="ayudasostenimiento">
									El papá a la mamá de tu(s) hijos(as)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="ch32" type="checkbox" name="ayudasostenimiento">
									Personas familiares
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="ch33" type="checkbox" name="ayudasostenimiento">
									Personas no familiares
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="ch34" type="checkbox" name="ayudasostenimiento">
									Nadie te apoya
								</label>
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('ayudasostenimiento')); ?></p>
						</div>
					</div>

					<a href="javascript:void(0)" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" >Siguiente</a>
				</div>
				<!-- ************************************************************************************************************************************************************************************* -->
				<div class="pagina aparece-a-clase" data-slide="4">				
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.5em;" >A continuación encontrarás preguntas acerca de tu hogar y de las personas con quien compartes tu vida</label>
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">Durante los últimos 12 meses,¿con quién o quiénes compartiste la mayor parte del tiempo cuando no estabas en el colegio?</label>
					</div>
					<div class="col-lg-12">
							<div class="checkbox">
								<label>
									<input id="B13a"  onclick="ocultos(this.id)" type="checkbox" name="compartiste" value="">
									Solo(a)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13b" type="checkbox" name="compartiste" class="B13" onclick="sies()">
									Mamá
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13c" type="checkbox" name="compartiste" class="B13" onclick="sies()">
									Papá
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13d" type="checkbox" name="compartiste" class="B13" onclick="sies()">
									Padrasto
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13e" type="checkbox" name="compartiste" class="B13" onclick="sies()">
									Madrasta
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13f" type="checkbox" name="compartiste" class="B13" onclick="sies()">
									Pareja(novio/a, esposo/a, compañero/a)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13g" type="checkbox" name="compartiste" class="B13" onclick="sies()">
									Abuelos
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13h" type="checkbox" name="compartiste" class="B13" onclick="sies()">
									Hermanos(as)
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input id="B13i" type="checkbox" name="compartiste" class="B13" onclick="sies()">
									Hermanastros(as)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13j" type="checkbox" name="compartiste" class="B13" onclick="sies()">
									Hijos(as) tuyos(as)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13k" type="checkbox" name="compartiste" class="B13" onclick="sies()">
									Otros(as) familiares
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13l" type="checkbox" name="compartiste" class="B13" onclick="sies()">
									Empleados(as) del servicio doméstico
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13m" type="checkbox" name="compartiste" class="B13" onclick="sies()">
									Amigos(as)
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input id="B13n" type="checkbox" name="compartiste" class="B13" onclick="sies()">
									Otras personas no familiares
								</label>							
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('compartiste')); ?></p>
						</div>

					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">Durante los últimos 12 meses,¿en qué lugares pasaste la mayor parte del tiempo cuando no estabas en el colegio?</label>
					
					<div class="col-lg-12">
							<div class="checkbox">
								<label>
									<input id="ch47" type="checkbox" name="tiempolugares">
									Tu casa
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="ch48" type="checkbox" name="tiempolugares">
									En casa de familiares
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="ch49" type="checkbox" name="tiempolugares">
									Centro comerciales
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="ch50" type="checkbox" name="tiempolugares">
									Calle, parque, esquinas
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="ch51" type="checkbox" name="tiempolugares">
									Centro de videojuegos
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="ch52" type="checkbox" name="tiempolugares">
									Salas de internet
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="ch53" type="checkbox" name="tiempolugares">
									Casas de amigos(as) o pareja
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="ch54" type="checkbox" name="tiempolugares">
									Billares
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input id="ch55" type="checkbox" name="tiempolugares">
									Bares, tabernas, discotecas
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="ch56" type="checkbox" name="tiempolugares">
									Otro centro de enseñanza o deportivo
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="ch57" type="checkbox" name="tiempolugares">
									Otro
								</label>
							</div>	
							<p class="t_error"><?php echo strip_tags(form_error('tiempolugares')); ?></p>
						</div>	
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">Cómo consideras que es tu comunicación con:</label></br>
						<label class="col-lg-4"></label>
						<label class="col-lg-2">Bueno</label>
						<label class="col-lg-2">Regular</label>
						<label class="col-lg-2">Malo</label>
						<label class="col-lg-2">No aplica</label>
					</div>
					<div class="row form-group">
						<label class="col-lg-4">a. Mamá</label>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="Mama">
								</label>
							</div>
						</div>					
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="Mama">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="Mama">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="Mama">	
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('Mama')); ?></p>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-lg-4">b. Papá</label>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="papa">								
								</label>
							</div>
						</div>					
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="papa">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="papa">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="papa">
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('papa')); ?></p>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-lg-4">c. Padrasto</label>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="padrasto">								
								</label>
							</div>
						</div>					
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="padrasto">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="padrasto">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="padrasto">
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('padrasto')); ?></p>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-lg-4">d. Madrastra</label>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="madrastra">								
								</label>
							</div>
						</div>					
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="madrastra">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="madrastra">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="madrastra">
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('madrastra')); ?></p>
						</div>
					</div>
					<div class="row form-group" id="B15e">
						<label class="col-lg-4">e. Pareja (novio/a, esposo/a, compañero/a)</label>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="pareja">								
								</label>
							</div>
						</div>					
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="pareja">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="pareja">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="pareja">
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('pareja')); ?></p>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-lg-4">f. Abuelos</label>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="abuelos">								
								</label>
							</div>
						</div>					
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="abuelos">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="abuelos">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="abuelos">
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('abuelos')); ?></p>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-lg-4">g. Hermanos(as) mayores</label>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="mayores">								
								</label>
							</div>
						</div>					
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="mayores">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="mayores">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="mayores">
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('mayores')); ?></p>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-lg-4">h.  Hermanos(as) menores</label>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="menores">								
								</label>
							</div>
						</div>					
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="menores">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="menores">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="menores">
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('menores')); ?></p>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-lg-4">i. Hermanastros(as)</label>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="hermanastros">								
								</label>
							</div>
						</div>					
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="hermanastros">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="hermanastros">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="hermanastros">
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('hermanastros')); ?></p>
						</div>
					</div>
					<div class="row form-group" id="B15j">
						<label class="col-lg-4">j. Hijos(as) tuyos(as)</label>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="hijos">								
								</label>
							</div>
						</div>					
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="hijos">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="hijos">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="hijos">
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('hijos')); ?></p>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-lg-4">k. Otros(as) familiares: tíos(as), primos(as)</label>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="otrosfam">								
								</label>
							</div>
						</div>					
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="otrosfam">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="otrosfam">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="otrosfam">
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('otrosfam')); ?></p>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-lg-4">l. Empleados(as) del servicio doméstico</label>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="domestico">								
								</label>
							</div>
						</div>					
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="domestico">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="domestico">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="domestico">
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('domestico')); ?></p>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-lg-4">m. Compañeros(as) del colegio</label>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="colegio">								
								</label>
							</div>
						</div>					
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="colegio">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="colegio">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="colegio">
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('colegio')); ?></p>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-lg-4">n. Otras personas no familiares</label>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="nofami">								
								</label>
							</div>
						</div>					
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="nofami">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="nofami">
								</label>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="nofami">
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('nofami')); ?></p>
						</div>
					</div>
				</div>

					<a href="javascript:void(0)" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" >Siguiente</a>			
				</div>		

	<!-- ************************************************************************************************************************************************************************************* -->
				<div class="pagina aparece-a-clase" data-slide="5">	
				<!--Pregunta 16-->			
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">En los últimos 12 meses, ¿qué han hecho usualmente en tu hogar cuando se presentan problemas?</label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="problemas">
									Dialogan
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="problemas">
									Se insultan o se gritan
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="problemas">
									Se agreden, se empujan o se golpean
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="problemas">
									Se dejan de hablar
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="problemas">
									Acuden a (psicólogo, orientador, comisarias de familia, ICBF, Policía, autoridades comunitarias de etnia)
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="problemas">
									No sabes
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="problemas">
									Evaden o ignoran la situación
								</label>
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('problemas')); ?></p>
						</div>
					</div>

					<div class="row form-group">
						<!--Pregunta 17-->		
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">En los últimos 12 meses, ¿principalmente cómo se han enterado tus padres o personas mayores que te cuidan, de tus dificultades o problemas?</label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="enterado">
									Tú les cuentas por iniciativa propia
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="enterado">
									Ellos te preguntan
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="enterado">
									Por otras personas
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="enterado">
									No se enteran
								</label>
							</div>	
								<p class="t_error"><?php echo strip_tags(form_error('enterado')); ?></p>					
						</div>
					</div>
					<div class="row form-group">
						<!--Pregunta 18-->		
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">Durante los últimos 12 meses, ¿principalmente cómo te han llamado la atención o te han corregido en tu hogar?</label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="corregido" onclick="ocultos('B18a')">
									Te prohíben lo que te gusta
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="corregido" onclick="ocultos('B18a')">
									Con puños o patadas
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="corregido" onclick="ocultos('B18a')">
									Palmadas, pellizcos, tirón de orejas
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="corregido" onclick="ocultos('B18a')">
									Golpes con objetos (correas, cables, palos, etc.)
								</label>
							</div>		
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="corregido" onclick="ocultos('B18a')">
									Te tratan con indiferencia, no te hablan
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="corregido" onclick="ocultos('B18a')">
									Con llamadas de atención, diálogo
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="corregido" onclick="ocultos('B18a')">
									Con gritos, amenazas, insultos
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="corregido" onclick="ocultos('B18a')">
									Con cantaleta
								</label>
							</div>		
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="corregido" id="B18a" onclick="ocultos(this.id)">
									De otra forma, ¿Cuál? 
									<input type="text" class="form-control" id="B18b" disabled>
								</label>
							</div>	
							<p class="t_error"><?php echo strip_tags(form_error('corregido')); ?></p>								
						</div>
					</div>
						<!-- Pregunta 19-->
					<div class="row form-group">

							<label class="col-lg-12 control-label" style="font-size: 1.3em;">¿Cuáles gustos o elecciones te respetan o toleran en tu hogar?
							</label>

							<div class="col-lg-12">
								<div class="checkbox">
									<label>
										<input id="ch1" type="checkbox" name="eleccionesrespetan">
										Tus amigos(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch2" type="checkbox" name="eleccionesrespetan">
										Tu pareja (novio/a, esposo/a, compañero/a)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch3" type="checkbox" name="eleccionesrespetan">
										Tu forma de vestir o presentación personal
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" name="eleccionesrespetan">
										Tu forma de pensar, ser o actuar
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch5" type="checkbox" name="eleccionesrespetan">
										Tus reuniones, fiestas o paseos con amigos(as)
									</label>
								</div>
									<p class="t_error"><?php echo strip_tags(form_error('eleccionesrespetan')); ?></p>								
							</div>
					</div>
					<!-- Pregunta 20-->
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">En los últimos 12 meses, ¿de quiénes has recibido malos tratos (gritos, insultos, burlas, humillaciones, golpes, castigos físicos)?
						</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="malostratos" id="B20a" class="B20" onclick="B20()">									
										Mamá
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="malostratos" id="B20b" class="B20" onclick="B20()">
										Papá
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="malostratos" id="B20c" class="B20" onclick="B20()">
										Padrastro
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="malostratos" id="B20d" class="B20" onclick="B20()">
										Madrastra
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="malostratos" id="B20e" class="B20" onclick="B20()">
										Pareja (novio/a, esposo/a, compañero/a)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="malostratos" id="B20f" class="B20" onclick="B20()">
										Abuelos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="malostratos" id="B20g" class="B20" onclick="B20()">
										Hermanos(as) mayores
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="malostratos" id="B20h" class="B20" onclick="B20()">
										Hermanos(as) menores
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="malostratos" id="B20i" class="B20" onclick="B20()">
										Hermanastros(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="malostratos" id="B20j" class="B20" onclick="B20()">
										Hijos(as) tuyos(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="malostratos" id="B20k" class="B20" onclick="B20()">
										Otros(as) familiares: tíos(as), primos(as)
									</label>
								</div>
									<div class="checkbox">
									<label>
										<input  type="checkbox" name="malostratos" id="B20l" class="B20" onclick="B20()">									
										Empleados(as) del servicio doméstico
									</label>
								</div>
									<div class="checkbox">
									<label>
										<input  type="checkbox" name="malostratos" id="B20m" class="B20" onclick="B20()">
										Compañeros del colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="malostratos" id="B20n" class="B20" onclick="B20()">
										Compañeras del colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="malostratos" id="B20o" class="B20" onclick="B20()">
										Amigos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="malostratos" id="B20p" class="B20" onclick="B20()">
										Amigas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="malostratos" id="B20q" class="B20" onclick="B20()">
										Profesores(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="malostratos" id="B20r" class="B20" onclick="B20()">
										Otras personas que trabajan en tu colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="malostratos" id="B20s" class="B20" onclick="B20()">
										Otras personas no familiares
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="malostratos" id="B20t" onclick="ocultos(this.id)">
										No recibes malos tratos
									</label>
								</div>
								<p class="t_error"><?php echo strip_tags(form_error('malostratos')); ?></p>	
							</div>
					</div>
					
								
					<a href="javascript:void(0)" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" >Siguiente</a>
				</div>
				<!-- ************************************************************************************************************************************************************************************* -->
				<div class="pagina aparece-a-clase" data-slide="6">
					<!--Pregunta 21-->
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">En los últimos 12 meses, ¿cuáles de las siguientes actividades has realizado en tu tiempo libre? </label>

						<label class="col-lg-6 ">a. Ir a eventos culturales, al cine o actividades artísticas</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="eventoscine">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="eventoscine">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('eventoscine')); ?></p>
						</div>
						<label class="col-lg-6">b. ir al parque, jugar, hacer deporte</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="jugardeportes">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="jugardeportes">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('jugardeportes')); ?></p>
						</div>
						<label class="col-lg-6">c. Leer, estudiar, hacer tareas</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="estudiartareas">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="estudiartareas">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('estudiartareas')); ?></p>
						</div>
						<label class="col-lg-6">d. Ver televisión, películas, vídeos; escuchar música</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="television">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="television">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('television')); ?></p>
						</div>
						<label class="col-lg-6">e. Salir con amigos(as) aproximadamente de tu misma edad</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="mismaedad">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="mismaedad">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('mismaedad')); ?></p>
						</div>
						<label class="col-lg-6">f. Hacer oficios del hogar</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="haceroficios">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="haceroficios">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('haceroficios')); ?></p>
						</div>
						<label class="col-lg-6">g. Chatear o navegar en internet</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="chatear">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="chatear">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('chatear')); ?></p>
						</div>
						<label class="col-lg-6">h. Ir a fiestas y/o paseos</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="fiestas">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="fiestas">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('fiestas')); ?></p>
						</div>
						<label class="col-lg-6">i. Asistir a actividades culturales étnicas</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="culturales">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="culturales">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('culturales')); ?></p>
						</div>
						<label class="col-lg-6">j. Relacionarte con personas mayores de edad no familiares</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="mayoresno">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="mayoresno">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('mayoresno')); ?></p>
						</div>
						<label class="col-lg-6">k. Jugar videojuegos</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="videojuegos">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="videojuegos">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('videojuegos')); ?></p>
						</div>
						<label class="col-lg-6">l. Trabajar</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="trabajar">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="trabajar">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('trabajar')); ?></p>
						</div>
						<label class="col-lg-6">m. Ir a tabernas, discotecas, etc.</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="tabernas">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="tabernas">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('tabernas')); ?></p>
						</div>
						<label class="col-lg-6">n. Asistir a actividades religiosas</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="religiosos">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="religiosos">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('religiosos')); ?></p>
						</div>
						<label class="col-lg-6">o. Estar con tu pareja (novio/a, esposo/a)</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="estarnovio">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="estarnovio">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('estarnovio')); ?></p>
						</div>
						<label class="col-lg-6">p. Otra actividad</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="otraactividad">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="otraactividad">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('otraactividad')); ?></p>
						</div>
					</div>

					<!-- Pregunta 22-->
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">En tu grupo de amigos, ¿consideras que existe presión en temas relacionados con:
						</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>
										<input id="C22a" type="checkbox" name="existepresiones" class="C22" onclick="C22()">									
										Estudiar o cumplir con las obligaciones del colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C22b" type="checkbox" name="existepresiones" class="C22" onclick="C22()">
										Cumplir con las normas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C22c" type="checkbox" name="existepresiones" class="C22" onclick="C22()">
										Participar en juegos o actividades recreativas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C22d" type="checkbox" name="existepresiones" class="C22" onclick="C22()">
										Interactuar con otros grupos 
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C22e" type="checkbox" name="existepresiones" class="C22" onclick="C22()">
										Participar en redes sociales
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C22f" type="checkbox" name="existepresiones" class="C22" onclick="C22()">
										Consumir sustancias psicoactivas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C22g" type="checkbox" name="existepresiones" class="C22" onclick="C22()">
										Sexo
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C22h" type="checkbox" name="existepresiones" class="C22" onclick="C22()">
										No considero que exista presión
									</label>
								</div>							
								<div class="checkbox">
									<label>
										<input id="C22i" type="checkbox" name="existepresiones" onclick="ocultos(this.id)">
										No tengo amigos(as)
									</label>
								</div>
								<p class="t_error"><?php echo strip_tags(form_error('existepresiones')); ?></p>
							</div>
						<!-- Pregunta 23-->
						<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">En los últimos 12 meses, al momento de tomar decisiones importantes para ti, ¿principalmente con quién las consultas?
						</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>
										<input id="C23a" type="checkbox" name="tomardeciciones" class="C23" onclick="C23()" >									
										Mamá
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23b" type="checkbox" name="tomardeciciones" class="C23" onclick="C23()"  >
										Papá
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23c" type="checkbox" name="tomardeciciones" class="C23" onclick="C23()"  >
										Padrastro
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23d" type="checkbox" name="tomardeciciones" class="C23" onclick="C23()"  >
										Madrastra
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23e" type="checkbox" name="tomardeciciones" class="C23" onclick="C23()" >
										Pareja (novio/a, esposo/a, compañero/a)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23f" type="checkbox" name="tomardeciciones" class="C23" onclick="C23()" >
										Abuelos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23g" type="checkbox" name="tomardeciciones" class="C23" onclick="C23()"  >
										Hermanos(as) mayores
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23h" type="checkbox" name="tomardeciciones" class="C23" onclick="C23()"  >
										Hermanos(as) menores
									</label>
								</div>							
								<div class="checkbox">
									<label>
										<input id="C23i" type="checkbox" name="tomardeciciones" class="C23" onclick="C23()"  >
										Hermanastros(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23j" type="checkbox" name="tomardeciciones" class="C23" onclick="C23()"  >
										Hijos(as) tuyos(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23k" type="checkbox" name="tomardeciciones" class="C23" onclick="C23()" >
										Otros familiares: tíos(as), primos(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23l" type="checkbox" name="tomardeciciones" class="C23" onclick="C23()"  >
										Empleados(as) del servicio doméstico
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23m" type="checkbox" name="tomardeciciones" class="C23" onclick="C23()"  >
										Compañeros(as) del colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23n" type="checkbox" name="tomardeciciones" class="C23" onclick="C23()"  >
										Amigos(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23o" type="checkbox" name="tomardeciciones" class="C23" onclick="C23()"  >
										Profesores(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23p" type="checkbox" name="tomardeciciones" class="C23" onclick="C23()" >
										Otras personas que trabajan en tu colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23q" type="checkbox" name="tomardeciciones" class="C23" onclick="C23()" >
										Otras personas no familiares
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23r" type="checkbox" name="tomardeciciones" onclick="ocultos(this.id)" >
										No consultas con nadie
									</label>
								</div>	
								<p class="t_error"><?php echo strip_tags(form_error('tomardeciciones')); ?></p>						
							</div>										
						</div>
					</div>
					<a href="javascript:void(0)" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" >Siguiente</a>
				</div>

	<!-- ************************************************************************************************************************************************************************************* -->
		<div class="pagina aparece-a-clase" data-slide="7">  <!--Slide 7-->
					<!-- Pregunta 24-->
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">¿Has consumido alguna sustancia psicoactiva?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="haconsumidosustancias" id="C24a" onclick="ocultos(this.id)">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="haconsumidosustancias" id="C24b" onclick="ocultos(this.id)">
									No
								</label>
							</div>
						</div>					
					</div>
					<!-- Pregunta 25-->
					<div class="row form-group"  id="C25" style="display:none;">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">De las siguientes sustancias psicoactivas, ¿cuáles has consumido en los últimos 12 meses y con qué frecuencia?</label>
						<label class="col-lg-4"></label>
						<label class="col-lg-1">Todos los</br> días</label>
						<label class="col-lg-1">Varias veces a la semana</label>
						<label class="col-lg-1">Una vez a la semana</label>
						<label class="col-lg-1">Una vez al mes</label>
						<label class="col-lg-1">De vez en cuando</label>
						<label class="col-lg-1">No la he consumido en los últimos 12 meses</label>
						<label class="col-lg-1">Nunca la he consumido</label>
					</div>
					<div class="row form-group" id="C25a" style="display:none;">
						<label class="col-lg-4">a. Cigarrillo</label>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="cigarrillo">
								</label>
							</div>
						</div>					
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="cigarrillo">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="cigarrillo">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="cigarrillo">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="cigarrillo">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="cigarrillo">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="cigarrillo">	
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('cigarrillo')); ?></p>
						</div>
					</div>
					<div class="row form-group" id="C25b" style="display:none;">
						<label class="col-lg-4">b. Bebidas alcohólicas (cerveza, aguardiente, vino, whiskey, etc.)</label>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="alcoholicas">
								</label>
							</div>
						</div>					
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="alcoholicas">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="alcoholicas">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="alcoholicas">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="alcoholicas">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="alcoholicas">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="alcoholicas">	
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('alcoholicas')); ?></p>
						</div>
					</div>
					<div class="row form-group" id="C25c" style="display:none;">
						<label class="col-lg-4">c. Marihuana (cannabis, crippy, leidys, corinto, etc.)</label>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="marihuana">
								</label>
							</div>
						</div>					
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="marihuana">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="marihuana">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="marihuana">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="marihuana">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="marihuana">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="marihuana">	
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('marihuana')); ?></p>
						</div>
					</div>
					<div class="row form-group" id="C25d" style="display:none;">
						<label class="col-lg-4">d. Cocaína (crack)</label>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="cocaina">
								</label>
							</div>
						</div>					
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="cocaina">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="cocaina">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="cocaina">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="cocaina">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="cocaina">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="cocaina">	
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('cocaina')); ?></p>
						</div>
					</div>
					<div class="row form-group" id="C25e" style="display:none;">
						<label class="col-lg-4">e. Basuco</label>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="basuco">
								</label>
							</div>
						</div>					
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="basuco">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="basuco">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="basuco">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="basuco">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="basuco">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="basuco">	
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('basuco')); ?></p>
						</div>
					</div>
					<div class="row form-group" id="C25f" style="display:none;">
						<label class="col-lg-4">f. Extasis (MDMA)</label>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="extasis">
								</label>
							</div>
						</div>					
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="extasis">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="extasis">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="extasis">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="extasis">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="extasis">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="extasis">	
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('extasis')); ?></p>
						</div>
					</div>
					<div class="row form-group" id="C25g" style="display:none;">
						<label class="col-lg-4">g. Inhalables (bóxer, gasolina, popper, dick, etc.)</label>
							<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="inhalables">
								</label>
							</div>
						</div>					
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="inhalables">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="inhalables">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="inhalables">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="inhalables">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="inhalables">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="inhalables">	
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('inhalables')); ?></p>
						</div>
					</div>
					<div class="row form-group" id="C25h" style="display:none;">
						<label class="col-lg-4">h. Heroína</label>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="heroina">
								</label>
							</div>
						</div>					
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="heroina">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="heroina">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="heroina">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="heroina">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="heroina">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="heroina">	
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('heroina')); ?></p>
						</div>
					</div>
					<div class="row form-group" id="C25i" style="display:none;">
						<label class="col-lg-4">i. Hongos alucinógenos</label>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="hongosalucinogenos">
								</label>
							</div>
						</div>					
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="hongosalucinogenos">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="hongosalucinogenos">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="hongosalucinogenos">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="hongosalucinogenos">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="hongosalucinogenos">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="hongosalucinogenos">	
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('hongosalucinogenos')); ?></p>
						</div>
					</div>
					<div class="row form-group" id="C25j" style="display:none;">
						<label class="col-lg-4">j. Ácidos (LSD, trip)</label>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="acidos">
								</label>
							</div>
						</div>					
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="acidos">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="acidos">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="acidos">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="acidos">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="acidos">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="acidos">	
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('acidos')); ?></p>
						</div>
					</div>
					<div class="row form-group" id="C25k" style="display:none;">
						<label class="col-lg-4">k. otra <input type="text" class="form-control" id="C25m" disabled></label>
						
							<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="otro"  id="C25l" onclick="ocultos(this.id)">
								</label>
							</div>
						</div>					
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="otro" id="C25s" onclick="ocultos(this.id)">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="otro" id="C25n" onclick="ocultos(this.id)">
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="otro" id="C25o" onclick="ocultos(this.id)">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="otro" id="C25p" onclick="ocultos(this.id)">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="otro" id="C25q" onclick="ocultos(this.id)">	
								</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="otro" id="C25r" onclick="ocultos(this.id)">	
								</label>
							</div>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('otro')); ?></p>
						</div>
					</div>
					<a href="javascript:void(0)" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" >Siguiente</a>
				</div>

				<!-- ************************************************************************************************************************************************************************************* -->
		<div class="pagina aparece-a-clase" data-slide="8">  <!--Slide 8-->
					<!-- Pregunta 26-->
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.5em;" >Ahora queremos conocer más acerca de la sexualidad de los jóvenes de tu edad. Recuerdaque esta información es totalmente anónima.</label>
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">Durante los últimos 12 meses, ¿sobre qué temas de educación para la sexualidad te han hablado en el colegio?</label>
					</div>
					<div class="col-lg-12">
							<div class="checkbox">
								<label>
									<input id="D26a" type="checkbox" name="temasexualidad" class="D26 D26z" onclick="D26()" >
									Autoestima
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="D26b" type="checkbox" name="temasexualidad" class="D26 D26z" onclick="D26()" >
									Planes de vida
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="D26c" type="checkbox" name="temasexualidad" class="D26 D26z" onclick="D26()">
									Toma de decisiones
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="D26d" type="checkbox" name="temasexualidad" class="D26 D26z" onclick="D26()" >
									Liderazgo
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="D26e" type="checkbox" name="temasexualidad" class="D26 D26z" onclick="D26()" >
									Género
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="D26f" type="checkbox" name="temasexualidad" class="D26 D26z" onclick="D26()" >
									Desigualdad de género
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="D26g" type="checkbox" name="temasexualidad" class="D26 D26z" onclick="D26()" >
									Homosexualidad
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="D26h" type="checkbox" name="temasexualidad" class="D26 D26z" onclick="D26()">
									Hermanos(as)
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input id="D26i" type="checkbox" name="temasexualidad" class="D26 D26z" onclick="D26()" >
									Derechos sexuales y reproductivos
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="D26j" type="checkbox" name="temasexualidad" class="D26 D26z" onclick="D26()" >
									Afecto y comunicación
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="D26k" type="checkbox" name="temasexualidad" class="D26 D26z" onclick="D26()" >
									Vida en Pareja
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="D26l" type="checkbox" name="temasexualidad" class="D26 D26z" onclick="D26()" >
									Decisiones sexuales en pareja
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="D26m" type="checkbox" name="temasexualidad" class="D26 D26z" onclick="D26()" >
									Anatomía y fisiología del aparato reproductor
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input id="D26n" type="checkbox" name="temasexualidad" class="D26 D26z" onclick="D26()" >
									Anticoncepción
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input id="D26o" type="checkbox" name="temasexualidad" class="D26 D26z" onclick="D26()" >
									Embarazo y parto
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input id="D26p" type="checkbox" name="temasexualidad" class="D26 D26z" onclick="D26()" >
									Aborto
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input id="D26q" type="checkbox" name="temasexualidad" class="D26 D26z" onclick="D26()" >
									Infecciones de Transmisión Sexual y Sida
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input id="D26r" class type="checkbox" name="temasexualidad" onclick="ocultos(this.id)">
									No te acuerdas
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input id="D26s" type="checkbox" name="temasexualidad"  onclick="D26()">
									No te han hablado de estos temas
								</label>							
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('temasexualidad')); ?></p>
						</div>
						<!-- Pregunta 27-->
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">En los últimos 12 meses, ¿con quién o con quiénes has hablado sobre sexualidad?</label>
					</div>
					<div class="col-lg-12">
							<div class="checkbox">
								<label>
									<input  id="D27a" type="checkbox" name="habladosexualidad" class="D27" onclick="D27()" >
									Mamá
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input  id="D27b" type="checkbox" name="habladosexualidad" class="D27" onclick="D27()" >
									Papá
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input  id="D27c" type="checkbox" name="habladosexualidad" class="D27" onclick="D27()" >
									Padrastro
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input  id="D27d" type="checkbox" name="habladosexualidad" class="D27" onclick="D27()" >
									Madrastra
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input  id="D27e" type="checkbox" name="habladosexualidad" class="D27" onclick="D27()" >
									Tu pareja (novio/a, esposo/a, compañero/a)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input  id="D27f" type="checkbox" name="habladosexualidad" class="D27" onclick="D27()" >
									Hermanas
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input  id="D27g" type="checkbox" name="habladosexualidad" class="D27" onclick="D27()">
									Hermanos
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="D27h" type="checkbox" name="habladosexualidad" class="D27" onclick="D27()">
									Otros familiares: abuelos(as), tíos(as), primos(as)
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input  id="D27i" type="checkbox" name="habladosexualidad" class="D27" onclick="D27()" >
									Empleados(as) del servicio doméstico
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input  id="D27j" type="checkbox" name="habladosexualidad" class="D27" onclick="D27()" >
									Amigos o compañeros
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input  id="D27k" type="checkbox" name="habladosexualidad" class="D27" onclick="D27()" >
									Amigas o compañeras
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input  id="D27l" type="checkbox" name="habladosexualidad" class="D27" onclick="D27()" >
									Profesores
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input  id="D27m" type="checkbox" name="habladosexualidad" class="D27" onclick="D27()" >
									Profesoras
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input  id="D27n" type="checkbox" name="habladosexualidad" class="D27" onclick="D27()">
									Con personas no familiares
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input  id="D27o" type="checkbox" name="habladosexualidad" class="D27" onclick="D27()">
									Psicólogo(a) u orientador(a)
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input  id="D27p" type="checkbox" name="habladosexualidad" class="D27" onclick="D27()">
									Contactos a través de internet
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input  id="D27q" type="checkbox" name="habladosexualidad" class="D27" onclick="D27()">
									Guía espiritual
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input id="D27r" class type="checkbox" name="habladosexualidad" onclick="ocultos(this.id)" >
									Con nadie
								</label>							
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('habladosexualidad')); ?></p>
						</div>						
						<!-- Pregunta 28-->
						<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">Te gustan o sientes atracción por: </label></br>

						<label class="col-lg-6 ">Mujeres</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="mujeresatraccion">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="mujeresatraccion">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('mujeresatraccion')); ?></p>
						</div>
						<label class="col-lg-6 ">Hombres</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="hombresatraccion" >
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="hombresatraccion">
									No
								</label>
							</div>
						</div>	
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('hombresatraccion')); ?></p>
						</div>
					</div>
					<a href="javascript:void(0)" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" >Siguiente</a>
				</div>
		<!-- ************************************************************************************************************************************************************************************* -->
		<div class="pagina aparece-a-clase" data-slide="9">  <!--Slide 9-->
					<!-- Pregunta 29-36 -->
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">¿Cuáles de los siguientes servicios posee tu hogar?</label>
						<label class="col-lg-6">a. ¿Conoces a alguna persona que haya recibido algo a cambio de tener relaciones sexuales (por ejemplo, dinero, ropa, calificaciones u otros regalos)?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="regalosropa" id="D29a" onclick="ocultos(this.id)">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="regalosropa" id="D29b" onclick="ocultos(this.id)">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('regalosropa')); ?></p>
						</div>
					</div>
					<div class="row form-group">
					<label class="col-lg-6">b. ¿Alguna vez te han hecho propuestas o insinuaciones de tipo sexual?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="propuestashecho" id="D30a" onclick="ocultos(this.id)">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="propuestashecho" id="D30b" onclick="ocultos(this.id)">
									No
								</label>
							</div>
						</div>	
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('propuestashecho')); ?></p>
						</div>
					</div>	
					<div class="row form-group">		
						<label class="col-lg-6">c. ¿Alguna vez te han propuesto exponer tu cuerpo (por ejemplo, en videos o fotos) a cambio de  algo (por ejemplo, dinero, ropa, calificaciones u otros regalos)?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="exponercuerpo" id="D31a" onclick="ocultos(this.id)">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="exponercuerpo" id="D31b" onclick="ocultos(this.id)">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('exponercuerpo')); ?></p>
						</div>
					</div>
					<div class="row form-group">	
						<label class="col-lg-6">d. ¿Alguna vez te han ofrecido algo (por ejemplo, dinero, ropa, calificaciones u otros regalos) a cambio de tener relaciones sexuales contigo?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="ofrecidodinero" id="D32a" onclick="ocultos(this.id)">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="ofrecidodinero" id="D32b" onclick="ocultos(this.id)">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('ofrecidodinero')); ?></p>
						</div>
					</div>
					<div class="row form-group">	
						<label class="col-lg-6">e. ¿Alguna vez te han tocado alguna parte de tu cuerpo de manera sexual, sin que tú lo quisieras?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="tocadocuerpo" id="D33a" onclick="ocultos(this.id)">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="tocadocuerpo" id="D33b" onclick="ocultos(this.id)">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('tocadocuerpo')); ?></p>
						</div>
					</div>
					<div class="row form-group">	
						<label class="col-lg-6">f. ¿Alguna vez has enviado fotos o videos sexuales tuyos por mensaje de texto o email?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="fotossexualesemail" id="D34a" onclick="ocultos(this.id)">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="fotossexualesemail" id="D34b" onclick="ocultos(this.id)">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('fotossexualesemail')); ?></p>
						</div>
					</div>
					<div class="row form-group">	
						<label class="col-lg-6">g. ¿Alguna vez has recibido algo (por ejemplo, dinero, ropa, calificaciones u otros regalos) a cambio de exponer tu cuerpo (por ejemplo, en videos o fotos)?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="recibidoexponer" id="D35a" onclick="ocultos(this.id)">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="recibidoexponer" id="D35b" onclick="ocultos(this.id)">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('recibidoexponer')); ?></p>
						</div>
					</div>
					<div class="row form-group">	
						<label class="col-lg-6">h. ¿Alguna vez has participado en juegos sexuales en grupo?(Juegos sexuales se refiere a la práctica de relaciones sexuales, entre dos o más personas, en el contexto de algún tipo de juego o de competencia.)</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="juegossexualescom" id="D36a" onclick="ocultos(this.id)">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="juegossexualescom" id="D36b" onclick="ocultos(this.id)">
									No
								</label>
							</div>
						</div>	
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('juegossexualescom')); ?></p>
						</div>				
					</div>
					<!-- Pregunta 37 -->
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">¿Alguna vez te han pagado o dado algo a cambio (por ejemplo, dinero, ropa, calificaciones u otros regalos) para trasladarte a otra región, ciudad o barrio a realizar alguna de las siguientes actividades: </label>
						<label class="col-lg-6">a. Tener relaciones sexuales</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="regalostraslado" id="D37a" onclick="ocultos(this.id)">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="regalostraslado" id="D37b" onclick="ocultos(this.id)">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('regalostraslado')); ?></p>
						</div>
					</div>
					<div class="row form-group">
					<label class="col-lg-6">b. Bailar en clubes nocturnos</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="propuestasnocturnas" id="D38a" onclick="ocultos(this.id)">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="propuestasnocturnas" id="D38b" onclick="ocultos(this.id)">
									No
								</label>
							</div>
						</div>	
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('propuestasnocturnas')); ?></p>
						</div>
					</div>	
					<div class="row form-group">		
						<label class="col-lg-6">c. Acompañar turistas</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="acompanarturistas" id="D39a" onclick="ocultos(this.id)">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="acompanarturistas" id="D39b" onclick="ocultos(this.id)">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('acompanarturistas')); ?></p>
						</div>
					</div>
					<div class="row form-group">	
						<label class="col-lg-6">d. Asistir a sesiones de fotografía y video sin ropa</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="asistirfotografia" id="D40a" onclick="ocultos(this.id)">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="asistirfotografia" id="D40b" onclick="ocultos(this.id)">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('asistirfotografia')); ?></p>
						</div>
					</div>
					<div class="row form-group">	
						<label class="col-lg-6">e. Dar masajes</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="darmasajes" id="D41a" onclick="ocultos(this.id)">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="darmasajes" id="D41b" onclick="ocultos(this.id)">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('darmasajes')); ?></p>
						</div>
					</div>

					<!-- Pregunta 38-->
					<div class="row form-group" id="D40ab" style ="display:none;">	
					<label class="col-lg-12">¿Le has comentado a alguien de lo sucedido?</label>								
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="comentadosucedido" id="D38ab" onclick="ocultos(this.id)">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="comentadosucedido" id="D38abc" onclick="ocultos(this.id)">
									No
								</label>
							</div>
						</div>							
					</div>
					<div class="col-lg-3" id="D40abc" style ="display:none;">
							<p class="t_error"><?php echo strip_tags(form_error('comentadosucedido')); ?></p>
					</div>
						<!-- Pregunta 39-->
					<div class="row form-group" id="D39ab" style ="display:none;">
						<label class="col-lg-1 control-label" style="font-size: 1.3em;"></label>
						<label class="col-lg-11 control-label" style="font-size: 1.3em;">¿A quién?</label>
					</div>
					<div class="col-lg-1 control-label" style="font-size: 1.3em;"></div>
					<div class="col-lg-11" id="D39abc" style ="display:none;">
							<div class="checkbox">
								<label>
									<input id="ch33" type="checkbox" >
									A algún familiar (mamá, papá, hermanos, abuelos, madrastra, etc.)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="ch34" type="checkbox" >
									A tus amigos(as) o compañeros(as)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="ch35" type="checkbox" >
									A tu pareja (novio/a, esposo/a, compañero/a sentimental)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="ch36" type="checkbox" >
									A algún trabajador de tu colegio (orientador, profesor…)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="ch37" type="checkbox" >
									Acudiste donde un médico(a), enfermera(o), psicólogo(a), etc.
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="ch38" type="checkbox" >
									Acudiste a las autoridades (ICBF, Comisarias de familia, Policia)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="ch39" type="checkbox">
									Otro, ¿cuál?
									<input type="text" class="form-control" id="i9">
								</label>							
							</div>	
					</div>				
					<a href="javascript:void(0)" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" >Siguiente</a>
					
				</div>
					<!-- ************************************************************************************************************************************************************************************* -->
		<div class="pagina aparece-a-clase" data-slide="10">  <!--Slide 10-->
					<!-- Pregunta 40 -->
					<div class="row form-group">
						<label class="col-lg-6">¿Has tenido relaciones sexuales?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="relacionessexuales">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="relacionessexuales">
									No
								</label>
							</div>
						</div>
						<!-- Pregunta 41 -->
					<div class="row form-group">
						<label class="col-lg-6">¿A qué edad fue tu primera relación sexual?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="text" class="form-control" id="i9">
								</label>
							</div>
						</div>	
					</div>
					<div class="row form-group">
						<label class="col-lg-12">La persona con la que tuviste la primera relación sexual era:</label>
						<label class="col-lg-4">Sexo</label>
						<label class="col-lg-4">Edad</label>
						<label class="col-lg-4">Relación con esa persona</label>		
						<div class="col-lg-4">						
							<div >
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="sexo">
										Hombre
									</label>
								</div>
							</div>
							<div >
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="sexo">
										Mujer
									</label>
								</div>
							</div>
						</div>
						<div class="col-lg-4">						
							<div>
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="edad">
										Una persona mayor que tú (cinco años o más)
									</label>
								</div>
							</div>
							<div>
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="edad">
										Una persona aproximadamente de tu misma edad
									</label>
								</div>
							</div>					
							<div>
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="edad">
										Una persona menor que tú (cinco años o más)
								</div>
							</div>
						</div>
						<div class="col-lg-4">									
							<div>
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="relacionpersona">
										Pareja (novio/a, esposo/a, compañero/a)
									</label>
								</div>
							</div>
							<div>
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="relacionpersona">
										Amigo(a)
									</label>
								</div>
							</div>
							<div>
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="relacionpersona">
										Un familiar
									</label>
								</div>
							</div>
							<div>
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="relacionpersona">
										Conocido(a)
									</label>
								</div>
							</div>
							<div>
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="relacionpersona">
										Persona en ejercicio de la prostitución
									</label>
								</div>
							</div>
							<div>
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="relacionpersona">
										Desconocido
									</label>
								</div>
							</div>
						</div>					
					</div>
					<div class="row form-group">
					<!-- Pregunta 43-->
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">¿Cuál fue el principal motivo para tener tu primera relación sexual?</label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="motivorelacion">
									Amor
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="motivorelacion">
									Curiosidad
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="motivorelacion">
									En el momento te dieron ganas
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="motivorelacion">
									Te casaste (fue en tu noche de bodas)
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="motivorelacion">
									Presión de tu pareja / novio(a)
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="motivorelacion">
									Presión de tus amigos(as)
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="motivorelacion">
									Estabas bajo los efectos del alcohol o sustancias psicoactivas
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="motivorelacion">
									Fue contra tu voluntad
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="motivorelacion">
									Te dieron algo a cambio (comida, regalos, dinero, etc.)
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="motivorelacion">
									Otro, ¿cuál?
									<input type="text" class="form-control" id="i5">
								</label>
							</div>						
						</div>
					</div>
					</div>
					<a href="javascript:void(0)" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" >Siguiente</a>
				</div>
				<!-- ************************************************************************************************************************************************************************************* -->
				<div class="pagina aparece-a-clase" data-slide="11">
					<!--Pregunta 46-->
					<div class="row form-group">
						<label class="col-lg-6 ">¿Has estado en embarazo o has dejado en embarazo a alguna mujer?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="eventos">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="eventos">
									No
								</label>
							</div>
						</div>
						<label class="col-lg-6">¿En tu primera relación sexual utilizaste algún método anticonceptivo?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="jugar">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="jugar">
									No
								</label>
							</div>
						</div>
						<label class="col-lg-6">¿En tu última relación sexual utilizaste algún método anticonceptivo?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="estudiar">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="estudiar">
									No
								</label>
							</div>
						</div>
					</div>
					<!-- Pregunta 47-->
					<div class="row form-group">
					    <div class="col-lg-12 control-label" >
							<label>¿En los últimos 12 meses has tenido relaciones sexuales sin uso de métodos anticonceptivos?</label>
						</div>					
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="sinanticonceptivos">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="sinanticonceptivos">
									No
								</label>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="sinanticonceptivos">
									No has tenido relaciones sexuales en los últimos doce meses
								</label>
							</div>
						</div>
					</div>
					<!-- Pregunta 48-->								
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">Si has tenido relaciones sexuales sin uso de métodos anticonceptivos fue porque:
						</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>
										<input id="ch1" type="checkbox" >									
										Son muy costosos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch2" type="checkbox" >
										Te dio pena adquirirlos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch3" type="checkbox" >
										Te dio pena utilizarlos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										Cuando se dio el momento, no los tenías a disposición
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch5" type="checkbox" >
										A tu pareja no le gustan
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										No se siente lo mismo si los utilizas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										Estabas bajo los efectos del alcohol o sustancias psicoactivas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										No sabías usarlos
									</label>
								</div>							
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										No conoces los métodos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										Fue una relación contra tu voluntad
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										Otro
									</label>
								</div>
							</div>				
					</div>
					<a href="javascript:void(0)" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" >Siguiente</a>
				</div>
				<!-- ************************************************************************************************************************************************************************************* -->
				<div class="pagina aparece-a-clase" data-slide="12">
					<!--Pregunta 46-->
					<div class="row form-group">
						<label class="col-lg-6">¿Alguna vez has recibido algo a cambio de tener relaciones sexuales (por ejemplo, dinero, ropa, calificaciones u otros regalos)?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="recibidorelaciones"/>
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="recibidorelaciones"/>
									No
								</label>
							</div>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-lg-6">En los últimos 12 meses, ¿has tenido relaciones sexuales a cambio de dinero o algo material?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="dinero">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="dinero">
									No
								</label>
							</div>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-lg-6">¿Alguna vez alguien te forzó a tener una relación sexual sin que lo desearas?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="sindesearlo">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="sindesearlo">
									No
								</label>
							</div>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-lg-6">En los últimos 12 meses, ¿alguien te forzó a tener una relación sexual sin que lo desearas?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="forzar">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="forzar">
									No
								</label>
							</div>
						</div>
					</div>
					<!-- Pregunta 47-->
					<div class="row form-group">
					    <div class="col-lg-12 control-label" >
							<label>¿Le has comentado a alguien de lo sucedido?</label>
						</div>					
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="sinanticonceptivos">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="sinanticonceptivos">
									No
								</label>
							</div>
						</div>
					</div>
					<!-- Pregunta 48-->								
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">¿A quién se lo has comentado?</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>
										<input id="ch1" type="checkbox" >									
										A algún familiar (mamá, papá, hermanos, abuelos, madrastra, etc.)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch2" type="checkbox" >
										A tus amigos(as) o compañeros(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch3" type="checkbox" >
										A tu pareja (novio/a, esposo/a, compañero/a sentimental)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										A algún trabajador de tu colegio (orientador, profesor…)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch5" type="checkbox" >
										Acudiste donde un médico(a), enfermera(o), psicólogo(a), etc.
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										Acudiste a las autoridades (ICBF, Comisarias de familia, Policia)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										Otro, ¿cuál?
										<input type="text" class="form-control" id="i9">
									</label>
								</div>							
							</div>	
					</div>
					<a href="javascript:void(0)" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" >Siguiente</a>
				</div>
				<!-- ************************************************************************************************************************************************************************************* -->
				<div class="pagina aparece-a-clase" data-slide="13">
					<!--Pregunta 46-->
					<div class="row form-group">
						<label class="col-lg-6">En los últimos 12 meses, ¿has navegado en internet?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="recibido"/>
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="recibido"/>
									No
								</label>
							</div>
						</div>
					</div>
					<!-- Pregunta 48-->								
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">En los últimos 12 meses, ¿desde dónde has accedido a internet?</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>
										<input id="ch1" type="checkbox" >									
										Desde el computador de tu casa
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch2" type="checkbox" >
									    Desde tu celular o dispositivo móvil
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch3" type="checkbox" >
										En el colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										En una sala de internet
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch5" type="checkbox" >
										Desde el computador de la casa de otra persona (familiar, novio/a, amigo/a, vecino/a)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										Otro
									</label>
								</div>			
							</div>	
					</div>
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">En los últimos 12 meses, ¿con qué frecuencia has navegado en internet?</label>
							<div class="col-lg-12">
								<div class="radio radio-primary">
									<label>
										<input id="ch1" type="radio" >									
										Al menos una vez al día
									</label>
								</div>
								<div class="radio radio-primary">
									<label>
										<input id="ch2" type="radio" >
									    Al menos una vez a la semana, pero no todos los días
									</label>
								</div>
								<div class="radio radio-primary">
									<label>
										<input id="ch3" type="radio" >
										Al menos una vez al mes, pero no todas las semanas
									</label>
								</div>
								<div class="radio radio-primary">
									<label>
										<input id="ch4" type="radio" >
										Menos de una vez al mes
									</label>
								</div>
							</div>	
					</div>
					<!--javascript:void(0)-->
					<a href="#" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" >Siguiente</a>
				</div>
				<!-- ************************************************************************************************************************************************************************************* -->
				<div class="pagina aparece-a-clase" data-slide="14">
					<!-- Pregunta 48-->								
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">En los últimos 12 meses, ¿cuál o cuáles temas has consultado cuando navegas en internet?</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>
										<input id="ch1" type="checkbox" >									
										Tareas del colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch2" type="checkbox" >
									    Cursos virtuales
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch3" type="checkbox" >
										Redes sociales (chat)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										Noticias o información general
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch5" type="checkbox" >
										Juegos en línea
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										Páginas con contenido sexual
									</label>
								</div>	
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										Música, videos, películas
									</label>
								</div>		
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										Otro
									</label>
								</div>			
							</div>	
					</div>
					<div class="row form-group">
						<label class="col-lg-6 ">En los últimos 12 meses, ¿has conocido personas a través de internet?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="conocidointernet">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="conocidointernet">
									No
								</label>
							</div>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-lg-6 ">En los últimos 12 meses, ¿has tenido conversaciones con contenido sexual con personas que conociste en internet?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="contenidosexu">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="contenidosexu">
									No
								</label>
							</div>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-lg-6 ">En los últimos 12 meses, ¿te has encontrado con una persona que conociste en internet?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="encontrado">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="encontrado">
									No
								</label>
							</div>
						</div>
					</div>				
					<div class="row form-group">
						<label class="col-lg-6 ">En los últimos 12 meses, ¿le has enviado fotos o videos tuyos íntimos a personas que conociste en internet?</label>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="videostuyos">
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="videostuyos">
									No
								</label>
							</div>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">¿Cuáles de los siguientes riesgos de internet conoces?</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>
										<input id="ch1" type="checkbox" >									
										Grooming
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch2" type="checkbox" >
									    Sexting
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch3" type="checkbox" >
										Ciberacoso
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										Ciberdependencia
									</label>
								</div>
									<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										No conozco ninguno de los anteriores
									</label>
								</div>
							</div>	
					</div>
					<div class="row form-group">
						<label class="col-lg-12 control-label" style="font-size: 1.3em;">¿Qué es lo que más te gusta de las redes sociales?</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>
										<input id="ch1" type="checkbox" >									
										Puedes subir fotos, videos y música para compartir con otros
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch2" type="checkbox" >
									    Te puedes reencontrar con gente que hace mucho no ves
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch3" type="checkbox" >
										Puedes conocer gente nueva
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										Te enteras de las cosas que le pasan a tus amigos(as)
									</label>
								</div>
									<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" >
										Otra
									</label>
								</div>
							</div>	
					</div>
					<a href="javascript:void(0)" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" >Siguiente</a>
				</div>
				<div>
        			<?php echo form_submit('submit', 'Guardar'); ?>
        			 <?php echo form_close(); ?><!--Fin formulario ppal-->
				</div>
			<br>
			<div class="progress">
				<div id="avance" class="progress-bar progress-bar-info" ></div>
			</div>
		</section>
		<script type="text/javascript" src="<?php echo base_url()?>js/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>js/material.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>js/ripples.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>js/main.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>js/validar.js"></script>

	</body>
</html>
