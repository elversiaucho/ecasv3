<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>ECAS</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap-material-design.min.css">
		<!--link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/ripples.min.css"-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/animaciones.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
		<!--link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/custom.css"-->
		
		
	</head>
	<body>

		<header>
			 <section id="form_cierre" class="form-group" style="display:none;">
			   <div class="row">
				 <div class="col-lg-5" ></div>
				 
					<label class="col-lg-2 control-label">Digita tu Clave:</label>
				  	<input class="col-lg-1" type="password" name="clave" id="clave" autocomplete="off"/>
				  	
			 </div>
			 <!--div class="row"-->
			 	<div class="col-lg-7"></div>
			    <span id="err_clave" class="t_error col-lg-4"></span>
			 <!--/div-->
			
			<div class="row">
				 <div class="col-lg-5" ></div>
				 
					<label class="col-lg-2 control-label">Motivo cierre:</label><br>
					<textarea class="col-lg-2" name="motivo" id="motivo"></textarea> 
					<div class="col-lg-2">
						<a class="btn" id="btn_close" >Cerrar</a>
					</div> 
				<div class="col-lg-7"></div>
				<span id="err_motivo" class="t_error col-lg-4"></span>
			</div>
			<div class="row">
				<P id="ms_cierre"></P>
				
			</div>
				 
			</section>
			
				<a class="btn_ini" id="monitor">Monitor</a>
			
			<img class="col-md-4 col-sm-4 col-xs-8 logo-dane img-responsive" src="<?php echo base_url()?>images/logo_dane.png">
			<img src='<?php echo base_url('/images/Cabezotep.png')?>' class="img-responsive"/>
			<div style="height:40%;"></div>
			<div id="franja"></div>
			<div class="bs-component" style="width: 90%;margin: 20px auto;">
				<div class="btn-group btn-group-sm btn-group-justified btn-group-raised">
					<a id="btn-seccion_1"  class="btn itemMenu" data-pag="1">Características generales</a>
					<a id="btn-seccion_2"  class="btn itemMenu" data-pag="4">Mi entorno social</a>
					<a id="btn-seccion_3"  class="btn itemMenu" data-pag="6">Actividades</a>
					<a id="btn-seccion_4"  class="btn itemMenu" data-pag="9">Sexualidad</a>
					<a id="btn-seccion_5"  class="btn itemMenu" data-pag="15">Uso de Internet</a>
				</div>
			</div>
			
		</header>
	
		<section class="container-fluid" id="encuesta">	
				<?php $attributes = array('class' => '', 'id' => 'formulario');
				echo form_open('index.php/c_ecas/', $attributes); ?> 
				<div><?php 
				  $rta1 =FALSE; $rta2=FALSE;
				  $rta[]=NULL;
				for ($i=0;$i<20;$i++)
				{
					$rta[$i]=FALSE;
				}
					if (isset($mensaje)){
				    	echo "<span id='ms'>".$mensaje."</span>";
				    	} 
				//if (isset($data_e))
				     $fila = $data_e;
				    //var_dump($fila);
				    //echo $fila->A4a;
				    //if(isset($data_e) && $data_e != NULL){
					/*    foreach ($data_e as $key => $value) {
					    	echo $key." ".$value;
					    }*/
				    //}
				?>
			</div>
				<input type ="text" id="estado_e"  value="<?php echo $estado_e; ?>" style="display:none;"/> <!--style="display:none;"-->
				<input type ="text" id="seguir" name ="seguir" value="<?php if (isset($seguir)){echo $seguir; } else echo '1';?>" style="display:none;/> <!--"-->
				<input type ="text" id="id_e" name ="id_e" value="<?php if(isset($ID_ENCUESTA)) echo $ID_ENCUESTA; else echo 'Erro Encuesta sin ID'?>" style="display:none;"/>	
			
			<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="1" style="top:20%;">  <!--Slide 1-->
				<label class="col-md-12 sub_t" id="cap_1">En este capítulo encontrarás preguntas de información general.</label>

					<!-- Pregunta 1-->
					
						<label class="col-md-12">1. ¿Eres Hombre o Mujer?</label>
						<div class="row form-group">
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<?php 
										$rta1=''; $rta2='';
											if ($fila->A1=='checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->A1== 2) {$rta1  =''; $rta2='checked';}
										?>
										<img src='<?php echo base_url("images/hombre.png");?>' class="img-responsive"/> 
										<input type="radio" name="A1" value="1" <?php echo set_radio("A1","1"); echo $rta1; ?> />  Hombre
									</label>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<img src='<?php echo base_url("images/mujer.png");?>' class="img-responsive"/> 
										<input type="radio" name="A1" value="2" <?php echo set_radio("A1","2"); echo $rta2; ?> />
										<?php #echo form_radio('A1',"2",$rta2);?> Mujer <!--set_radio("A1",$rta2)-->
									</label>
								</div>
							</div>	
						</div>
					
					<!-- Pregunta 2-->	
					<div class="col-md-12 row">
						<p class="t_error"><?php echo strip_tags(form_error('A1')); ?></p>
						<label class="col-md-4">
								2. ¿Cuántos años cumplidos tienes?
						</label>
						<label class="col-md-8">
							<input type="text" id="A2" name="A2" onkeypress="return solonumeros(event);" <?php echo "value='".set_value('A2',$fila->A2)."'";?> /><!--"<?php echo set_value('A2');?>" )-->
						</label>
					</div>					
					<div class="col-lg-12">
						<p class="t_error"><?php echo strip_tags(form_error('A2')); ?></p>
					</div>
					<!-- Pregunta 3-->
					<div class="row form-group">
						<label class="col-lg-12">3. De acuerdo a tu cultura, pueblo o rasgos fisicos, te reconoces como:</label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<?php 
										for ($i=0;$i<=6;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->A3=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->A3] = 'checked';
									?>
									<input type="radio" name="A3" value="1" <?php echo set_radio("A3","1"); echo $rta[1]; ?> />
									Indigena
								</label>

							</div>
							<div class="radio radio-primary">
								<label>
								
									<input type="radio" name="A3" value="2" <?php echo set_radio("A3","2"); echo $rta[2]; ?> />
									Gitano - ROM
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="A3" value="3" <?php echo set_radio("A3","3"); echo $rta[3]; ?> />
									Raizal del archipiélago
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="A3" value="4" <?php echo set_radio("A3","4"); echo $rta[4]; ?> />
									Palenquero
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="A3" value="5" <?php echo set_radio("A3","5"); echo $rta[5]; ?> />
									Negro, mulato, (afrodescendiente)
								</label>
							</div>							
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="A3" value="6" <?php echo set_radio("A3","6"); echo $rta[6]; ?> />
									Ninguno de los anteriores
								</label>
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('A3'));?></p>
						</div>
					</div>
					<!--Pregunta 4-->
					<div class="row form-group incluyente" >
							<label class="col-lg-12">4. ¿Con quién vives actualmente en tu hogar?</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>
									<input onclick="oculto()" class="A4" type="checkbox" name="A4[]" value="1" <?php echo set_checkbox('A4', "1");  echo $fila->A4a;?> />
									  Mamá
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4b" onclick="oculto()" class="A4" type="checkbox" name="A4[]" value="2" <?php echo set_checkbox('A4', "2"); echo $fila->A4b;?>/>
										Papá
									</label>
								</div>
								<div class="checkbox">
									<label> 
										<input id="A4c" onclick="oculto()" class="A4" type="checkbox" name="A4[]" value="3" <?php echo set_checkbox('A4', "3"); echo $fila->A4c;?>/>
										Padrastro
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4d" onclick="oculto()" class="A4" type="checkbox" name="A4[]" value="4"" <?php echo set_checkbox('A4', "4"); echo $fila->A4d;?>/>
										Madrastra
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4e" onclick="oculto()" class="A4" type="checkbox" name="A4[]" value="5" <?php echo set_checkbox('A4', "5"); echo $fila->A4e;?>/>
										Pareja(novio/a, esposo/a, compañero/a)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4f" onclick="oculto()" class="A4" type="checkbox" name="A4[]" value="6" <?php echo set_checkbox('A4', "6"); echo $fila->A4f;?>/>
										Abuelos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4g" onclick="oculto()" class="A4" type="checkbox" name="A4[]" value="7" <?php echo set_checkbox('A4', "7"); echo $fila->A4g;?>/>
										Hermanos(as)
									</label>
								</div>								
														
								<div class="checkbox">
									<label>
										<input id="A4h" onclick="oculto()" class="A4" type="checkbox" name="A4[]" value="8" <?php echo set_checkbox('A4', "8"); echo $fila->A4h;?>/>
										Hermanastros(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4i" onclick="oculto()" class="A4" type="checkbox" name="A4[]" value="9" <?php echo set_checkbox('A4', "9"); echo $fila->A4i;?>/>
										Hijos(as) tuyos(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4j" onclick="oculto()" class="A4" type="checkbox" name="A4[]" value="10" <?php echo set_checkbox('A4', "10"); echo $fila->A4j;?>/>
										Otros(as) familiares
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4k" onclick="oculto()" class="A4" type="checkbox" name="A4[]" value="11" <?php echo set_checkbox('A4', "11"); echo $fila->A4k; ?>/>
										Otras personas no familiares
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4l" onclick="ocultos(this.id)" type="checkbox" name="A4[]" value="12" <?php echo set_checkbox('A4', "12"); echo $fila->A4l; ?>/>
										Nadie(vives solo/a)
									</label>
								</div>
								<p class="t_error"><?php echo strip_tags(form_error('A4[]')); ?></p>
							</div>
					   </div>
					<!--Pregunta 5-->
					<div class="row form-group">
						<label class="col-lg-12">5. En tu cama duermes:</label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
								<?php
									for ($i=0;$i<=4;$i++)
									{
										$rta[$i]='';
									}
									if ($fila->A5=='checked'){
										$rta[1] = 'checked';
									}else $rta[$fila->A5] = 'checked';
								?>
									
									<input type="radio" name="A5" value="1" id="A5_1" <?php echo set_radio("A5","1"); echo $rta[1]; ?> />Solo(a)
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="A5" value="2" <?php echo set_radio("A5","2"); echo $rta[2]; ?> class="A5"/>
									Con una persona más
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="A5" value="3" <?php echo set_radio("A5","3"); echo $rta[3]; ?> class="A5"/>
									Con dos personas más
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="A5" value="4" <?php echo set_radio("A5","4"); echo $rta[4]; ?> class="A5"/>
									Con tres o más personas
								</label>
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('A5')); ?></p>
						</div>
					</div>
					<!-- Btn Siguiente javascript:void(0)-->
					<!--a href="javascript:void(0)" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" >Siguiente</a-->
					<input type="submit" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" value="Siguiente" />
						<div>
        			<?php #echo form_submit('submit', 'Guardar'); ?>
        			<?#php echo form_close(); ?><!--Fin formulario ppal-->
				</div>	

			</div> <!--Fin Slide 1-->
	<!-- ************************************************************************************************************************************************************************************* -->
			<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="2">
					<?php /*$attributes = array('class' => '', 'id' => '');
						echo form_open('index.php/c_ecas/slide/2', $attributes); */?> 
					
					<!--Pregunta 6-->
					<div class="row form-group">
						<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">6. ¿Cuáles de los siguientes servicios posee tu hogar?</label>
						<p class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></p>
						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12">Energía eléctrica conectada a red pública</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label><?php
										$rta1 =''; $rta2='';
										if ($fila->A6a=='checked') {$rta1 ='checked';}
										if ($fila->A6a== '2') {$rta2='checked';}?>
										<input type="radio" name="A6a" value="1" <?php echo set_radio("A6a","1"); echo $rta1; ?> />
										Sí
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="A6a" value="2" <?php echo set_radio("A6a","2"); echo $rta2; ?> />
										No
									</label>
								</div>							
							</div>
							<div class="col-lg-6"><p class="t_error"><?php echo strip_tags(form_error('A6a')); ?></p>
							</div>
						</div>

						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
						    <label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12">Gas natural conectado a red pública</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->A6b == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->A6b == '2') {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="A6b" value="1" <?php echo set_radio("A6b","1"); echo $rta1; ?>  />
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="A6b" value="2" <?php echo set_radio("A6b","2"); echo $rta2; ?> />
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<p class="t_error"><?php echo strip_tags(form_error('A6b')); ?></p>
							</div>
						</div>

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12">Alcantarillado</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->A6c == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->A6c == '2') {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="A6c" value ="1" <?php echo set_radio("A6c","1"); echo $rta1; ?> />
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="A6c" value ="2" <?php echo set_radio("A6c","2"); echo $rta2; ?> />
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6"><p class="t_error"><?php echo strip_tags(form_error('A6c')); ?></p>
							</div>
						</div>

						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12">Recolección de basuras</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->A6d == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->A6d == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="A6d" value ="1" <?php echo set_radio("A6d","1"); echo $rta1; ?> />
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="A6d" value ="2" <?php echo set_radio("A6d","2"); echo $rta2; ?> />
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6"><span class="t_error"><?php echo strip_tags(form_error('A6d')); ?></span>
							</div>
						</div>

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">					
							<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12">Acueducto</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->A6e == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->A6e == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="A6e" value ="1" <?php echo set_radio("A6e","1"); echo $rta1; ?> />
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="A6e" value ="2" <?php echo set_radio("A6e","2"); echo $rta2; ?> />
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6"><span class="t_error"><?php echo strip_tags(form_error('A6e')); ?></span>
							</div>
						</div>
					</div>

					<!-- Pregunta 7 -->
					<div class="row form-group">
						<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">7. La zona donde está ubicada tu casa o tu colegio tiene alguna de las siguientes características: </label>
						<p class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></p>
						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12">Hay bares o billares</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->A7a == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->A7a == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="A7a" value ="1" <?php echo set_radio("A7a","1"); echo $rta1; ?> />
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="A7a" value ="2" <?php echo set_radio("A7a","2"); echo $rta2; ?> />
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('A7a')); ?></span>
							</div>
						</div>
						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12">Hay venta de alcohol</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->A7b == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->A7b == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="A7b" value ="1" <?php echo set_radio("A7b","1"); echo $rta1; ?> />
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="A7b" value ="2" <?php echo set_radio("A7b","2"); echo $rta2; ?> />
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('A7b')); ?></span>
							</div>
						</div>

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12">Hay venta de sustancias psicoactivas</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->A7c == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->A7c == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="A7c" value ="1" <?php echo set_radio("A7c","1"); echo $rta1; ?> />
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="A7c" value ="2" <?php echo set_radio("A7c","2"); echo $rta2; ?> />
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('A7c')); ?></span>
							</div>
						</div>

						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12">Es una zona de tolerancia</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->A7d == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->A7d == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="A7d" value ="1" <?php echo set_radio("A7d","1"); echo $rta1; ?> />
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="A7d" value ="2" <?php echo set_radio("A7d","2"); echo $rta2; ?> />
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('A7d')); ?></span>
							</div>
						</div>					

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12">Hay delincuencia organizada</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->A7e == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->A7e == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="A7e" value ="1" <?php echo set_radio("A7e","1"); echo $rta1; ?> />
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="A7e" value ="2" <?php echo set_radio("A7e","2"); echo $rta2; ?> />
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('A7e')); ?></span>
							</div>
						</div>

						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12">Es una zona minera</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->A7f == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->A7f == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="A7f" value ="1" <?php echo set_radio("A7f","1"); echo $rta1; ?> />
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="A7f" value ="2" <?php echo set_radio("A7f","2"); echo $rta2; ?> />
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('A7f')); ?></span>
							</div>
						</div>

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12">Es una zona de conflicto armado</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->A7g == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->A7g == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="A7g" value ="1" <?php echo set_radio("A7g","1"); echo $rta1; ?> />
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="A7g" value ="2" <?php echo set_radio("A7g","2"); echo $rta2; ?> />
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('A7g')); ?></span>
							</div>
						</div>

						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12">Hay presencia de bases militares</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->A7h == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->A7h == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="A7h" value ="1" <?php echo set_radio("A7h","1"); echo $rta1; ?> />
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="A7h" value ="2" <?php echo set_radio("A7h","2"); echo $rta2; ?> />
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('A7h')); ?></span>
							</div>
						</div>

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12">Es una zona turística</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->A7i == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->A7i == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="A7i" value ="1" <?php echo set_radio("A7i","1"); echo $rta1; ?> />
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="A7i" value ="2" <?php echo set_radio("A7i","2"); echo $rta2; ?> />
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('A7i')); ?></span>
							</div>
						</div>

						<div class=" container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12">Es una zona portuaria</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->A7j == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->A7j == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="A7j" value ="1" <?php echo set_radio("A7j","1"); echo $rta1; ?> />
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="A7j" value ="2" <?php echo set_radio("A7j","2"); echo $rta2; ?> />
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('A7j')); ?></span>
							</div>
						</div>
					</div>

					<div class="container">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<input type="submit" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" value="Siguiente"/>
						</div>
					</div>
					<?#php echo form_close(); ?>
				</div>

	<!-- ************************************************************************************************************************************************************************************* -->
				<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="3">
					<?php /*$attributes = array('class' => '', 'id' => '');
						echo form_open('index.php/c_ecas/slide/3', $attributes); */?> 
					<!-- Pregunta 2-->
					<div class="row form-group incluyente">

					<!-- Pregunta 8-->
						<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">8. Actualmente, tienes una relación de pareja o afectiva con:</label>

						<div class="col-lg-12">
							<div class="checkbox">
								<label>
									<input id="A8a" type="checkbox" onclick="ocultoa()"  name="A8[]" value="1" class="A8" <?php echo set_checkbox("A8","1"); echo $fila->A8a;?> />
									Novio(a)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="A8b" type="checkbox"  onclick="ocultoa()" name="A8[]" value="2" class="A8" <?php echo set_checkbox("A8","2"); echo $fila->A8b;?> />
									Esposo(a)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="A8c" type="checkbox"  onclick="ocultoa()" name="A8[]" value="3" class="A8" <?php echo set_checkbox("A8","3"); echo $fila->A8c;?> />
									Amigovio(a) (entuque, vacilón)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="A8d" type="checkbox"  onclick="ocultoa()"  name="A8[]" value="4" class="A8" <?php echo set_checkbox("A8","4"); echo $fila->A8d;?> />
									Amigos(as) con derechos
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="A8e" type="checkbox" onclick="ocultoa()"  name="A8[]" value="5" class="A8" <?php echo set_checkbox("A8","5"); echo $fila->A8e;?> />
									Compañero(a) sentimental
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="A8f" type="checkbox" onclick="ocultoa()"  name="A8[]" value="6" class="A8" <?php echo set_checkbox("A8","6"); echo $fila->A8f;?> />
									Otro,¿cuál? <span class="t_error"><?php echo strip_tags(form_error('A8f_cual')); ?></span>
									<input id="A8f_cual" name="A8f_cual" onkeypress="return soloLetras(event);" <?php echo "value='".set_value('A8f_cual',$fila->A8f_cual)."'";?> />
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="A8g" onclick="ocultoa()" type="checkbox" name="A8[]" value="7" <?php echo set_checkbox("A8","7");  echo $fila->A8g;?> />
									No tengo una relación de pareja o afectiva actualmente
								</label>
							</div>							
							<p class="t_error" id="err_A8e"><?php echo strip_tags(form_error('A8[]')); ?></p>
						</div>

					</div>

					<!-- Pregunta 9-->
					<div class="row form-group">
						<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12">9. ¿Tienes hijos(as)?
						</label>
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-6">
							<div class="radio radio-primary">
								<label>
								<?php
									$rta1 =''; $rta2='';
									if ($fila->A9 == 'checked') {$rta1 ='checked'; $rta2='';}
									if ($fila->A9 == 2) {$rta1  =''; $rta2='checked';}
								?>
									<input type="radio" name="A9" id="A9a" value="1" onclick="ocultos(this.id)" <?php echo set_radio("A9","1"); echo $rta1; ?> />
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-6">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="A9" id="A9b" value="2" onclick="ocultos(this.id)" <?php echo set_radio("A9","2"); echo $rta2; ?> />
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error" id="err_A9"><?php echo strip_tags(form_error('A9')); ?></p>
						</div>
					</div>

					<!-- Pregunta 10-->
					<div class="row form-group label-floating TH" id="not1"  onclick="ocultos(this.id)" style="display:none;">
						<div class="col-lg-12">
							<?php 
								if ($fila->A10=='checked')
									$fila->A10=1;
							 ?>
							<label>10. ¿Cuántos(as) hijos(as) tienes? <input type="text" id="i5" name="A10" <?php echo "value='".set_value('A10',$fila->A10)."'";?> onkeypress="return solonumeros(event);"/></label>
							
						</div>
					<div class="col-lg-6">
						<p class="t_error"><?php echo strip_tags(form_error('A10')); ?></p>
					</div>
					</div>					
					
					<!--Pregunta 11-->
					<div class="row form-group TH" id="not2" onclick="ocultos(this.id)" style="display:none;">
						<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">11. Mientras estás en el colegio, ¿con quiénes pasan la mayor parte del tiempo tu(s) hijos(as)?</label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
								<?php
									for ($i=0;$i<=4;$i++)
									{
										$rta[$i]='';
									}
									if ($fila->A11=='checked'){
										$rta[1] = 'checked';
									}else $rta[$fila->A11] = 'checked';
								?>
									<input type="radio" name="A11" <?php echo set_radio("A11","1"); echo $rta[1]; ?> value="1" />
									Con el papá o la mamá de tu(s) hijos(as)
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="A11" <?php echo set_radio("A11","2"); echo $rta[2]; ?> value="2" />
									Con personas familiares
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="A11" <?php echo set_radio("A11","3"); echo $rta[3]; ?> value="3" />
									Con personas no familiares
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="A11" <?php echo set_radio("A11","4"); echo $rta[4]; ?> value="4" />
									Con personas a cargo en una guardería
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="A11" <?php echo set_radio("A11","5"); echo $rta[5]; ?> value="5" />
									Solo(s)
								</label>
							</div>
								<p class="t_error"><?php echo strip_tags(form_error('A11')); ?></p>
						</div>
					</div>

					<!--Pregunta 12-->
					<div class="row form-group TH incluyente" id="not3" onclick="ocultos(this.id)" style="display:none;">
						<label class="col-lg-12">12. ¿Quién te apoya en el sostenimiento económico de tus hijos(as)?</label>
						<div class="col-lg-12">
							<div class="checkbox">
								<label>
									<input id="A12a" type="checkbox" name="A12[]" onclick="ocultos('A12')" value="1" <?php echo set_checkbox("A12","1"); echo $fila->A12a;?>/>
									El papá o la mamá de tu(s) hijos(as)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="A12b" type="checkbox" name="A12[]" onclick="ocultos('A12')" value="2" <?php echo set_checkbox("A12","2"); echo $fila->A12b;?>/>
									Personas familiares
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="A12c" type="checkbox" name="A12[]" onclick="ocultos('A12')" value="3" <?php echo set_checkbox("A12","3"); echo $fila->A12c;?>/>
									Personas no familiares
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="A12d" type="checkbox" name="A12[]" onclick="ocultos('A12d')" value="4" <?php echo set_checkbox("A12","4"); echo $fila->A12d;?> />
									Nadie te apoya
								</label>
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('A12[]')); ?></p>
						</div>
					</div>				
					
					<div class="container">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<input type="submit" class="btn btn-raised btn-success arrow-r" id="btn_A8g" style="position:relative;right: 0px;" value="Siguiente" />
						</div>
					</div>
				    <?#php echo form_close(); ?>
				</div>
				<!-- ************************************************************************************************************************************************************************************* -->
				<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="4">				
					<?php /*$attributes = array('class' => '', 'id' => '');
					echo form_open('index.php/c_ecas/slide/4', $attributes);*/?> 
					<label class="sub_t col-lg-12 col-md-12 col-sm-12 col-xs-12" id="cap_2" >A continuación encontrarás preguntas acerca de tu hogar y de las personas con quien compartes tu vida</label>

					<!--Pregunta 13-->
					<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">13. Durante los <span class="sub_raya">últimos 12 meses</span>, ¿con quién o con quiénes compartiste la mayor parte del tiempo cuando no estabas en el colegio?</label>
					<div class="row form-group ">
					    <div class="col-md-12 incluyente" id="img-incluyente">
							<div class="checkbox">
								<label>
									<input id="B13a" onclick="ocultos(this.id)" type="checkbox" name="B13[]" value="1" <?php echo set_checkbox("B13","1"); echo $fila->B13a;?> />
									Solo(a)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13b" type="checkbox" name="B13[]" class="B13" onclick="sies()" value="2" <?php echo set_checkbox("B13","2"); echo $fila->B13b;?> />
									Mamá
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13c" type="checkbox" name="B13[]" class="B13" onclick="sies()" value="3" <?php echo set_checkbox("B13","3"); echo $fila->B13c;?> />
									Papá
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13d" type="checkbox" name="B13[]" class="B13" onclick="sies()" value="4" <?php echo set_checkbox("B13","4"); echo $fila->B13d;?> />
									Padrasto
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13e" type="checkbox" name="B13[]" class="B13" onclick="sies()" value="5" <?php echo set_checkbox("B13","5"); echo $fila->B13e;?> />
									Madrasta
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13f" type="checkbox" name="B13[]" class="B13" onclick="sies()" value="6" <?php echo set_checkbox("B13","6"); echo $fila->B13f;?> />
									Pareja(novio/a, esposo/a, compañero/a)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13g" type="checkbox" name="B13[]" class="B13" onclick="sies()" value="7" <?php echo set_checkbox("B13","7"); echo $fila->B13g;?> />
									Abuelos
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13h" type="checkbox" name="B13[]" class="B13" onclick="sies()" value="8" <?php echo set_checkbox("B13","8"); echo $fila->B13h;?> />
									Hermanos(as)
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input id="B13i" type="checkbox" name="B13[]" class="B13" onclick="sies()" value="9" <?php echo set_checkbox("B13","9"); echo $fila->B13i;?> />
									Hermanastros(as)
								</label>
							</div>
							<div class="checkbox" id="verB13j">
								<label>
									<input id="B13j" type="checkbox" name="B13[]" class="B13" onclick="sies()" value="10" <?php echo set_checkbox("B13","10"); echo $fila->B13j;?> />
									Hijos(as) tuyos(as)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13k" type="checkbox" name="B13[]" class="B13" onclick="sies()" value="11" <?php echo set_checkbox("B13","11"); echo $fila->B13k;?> />
									Otros(as) familiares
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13l" type="checkbox" name="B13[]" class="B13" onclick="sies()" value="12" <?php echo set_checkbox("B13","12"); echo $fila->B13l;?> />
									Empleados(as) del servicio doméstico
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B13m" type="checkbox" name="B13[]" class="B13" onclick="sies()" value="13" <?php echo set_checkbox("B13","13"); echo $fila->B13m;?> />
									Amigos(as)
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input id="B13n" type="checkbox" name="B13[]" class="B13" onclick="sies()" value="14" <?php echo set_checkbox("B13","14"); echo $fila->B13n;?> />
									Otras personas no familiares
								</label>							
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('B13[]')); ?></p>
					 </div>
				    </div>

				    <!--Pregunta 14-->
					<div class="row form-group">
						<label class="ol-lg-12 col-md-12 col-sm-12 col-xs-12">14. Durante los <span class="sub_raya">últimos 12 meses</span>, ¿en qué lugares pasaste la mayor parte del tiempo cuando no estabas en el colegio?</label>
					
						<div class="ol-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="checkbox">
									<label>
										<input id="ch47" type="checkbox" name="B14[]" value="1" <?php echo set_checkbox("B14","1"); echo $fila->B14a;?> />
										Tu casa
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch48" type="checkbox" name="B14[]" value="2" <?php echo set_checkbox("B14","2"); echo $fila->B14b;?> />
										En casa de familiares
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch49" type="checkbox" name="B14[]" value="3" <?php echo set_checkbox("B14","3"); echo $fila->B14c;?> />
										Centros comerciales
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch50" type="checkbox" name="B14[]" value="4" <?php echo set_checkbox("B14","4"); echo $fila->B14d;?> />
										Calle, parques, esquinas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch51" type="checkbox" name="B14[]" value="5" <?php echo set_checkbox("B14","5"); echo $fila->B14e;?> />
										Centros de videojuegos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch52" type="checkbox" name="B14[]" value="6" <?php echo set_checkbox("B14","6"); echo $fila->B14f;?> />
										Salas de internet
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch53" type="checkbox" name="B14[]" value="7" <?php echo set_checkbox("B14","7"); echo $fila->B14g;?> />
										Casas de amigos(as) o pareja
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch54" type="checkbox" name="B14[]" value="8" <?php echo set_checkbox("B14","8"); echo $fila->B14h;?> />
										Billares
									</label>							
								</div>
								<div class="checkbox">
									<label>
										<input id="ch55" type="checkbox" name="B14[]" value="9" <?php echo set_checkbox("B14","9"); echo $fila->B14i;?> />
										Bares, tabernas, discotecas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch56" type="checkbox" name="B14[]" value="10" <?php echo set_checkbox("B14","10"); echo $fila->B14j;?> />
										Otro centro de enseñanza o deportivo
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch57" type="checkbox" name="B14[]" value="11" <?php echo set_checkbox("B14","11"); echo $fila->B14k;?> />
										Otro
									</label>
								</div>	
								<p class="t_error"><?php echo strip_tags(form_error('B14[]')); ?></p>
						</div>
					</div>	
								
					<div class="row form-group">
						<p class="sub_t defini" id="cap_2">
						NOTA:<br> Debes marcar una alternativa para cada una de las siguientes personas.
							Marca «No aplica» cuando no haya comunicación o si esa persona no existe en tu vida.
						</p>
					</div>

					<!--Pregunta 15-->	
					<div class="row form-group">
						<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">15. Cómo consideras que es tu comunicación con:</label><br>
						<label class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></label>
						<label class="col-lg-1 col-md-2 col-sm-2 col-xs-2">Buena</label>
						<label class="col-lg-1 col-md-2 col-sm-2 col-xs-2">Regular</label>
						<label class="col-lg-1 col-md-2 col-sm-2 col-xs-2">Mala</label>
						<label class="col-lg-2 col-md-3 col-sm-3 col-xs-3">No aplica</label>
					

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label class="mg-top-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Mamá</label>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
									<?php
										for ($i=0;$i<=4;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->B15a=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B15a] = 'checked';
									?>
										<input type="radio" name="B15a" value="1" <?php echo set_radio("B15a","1"); echo $rta[1];?> />
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15a" value="2" <?php echo set_radio("B15a","2"); echo $rta[2];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15a" value="3" <?php echo set_radio("B15a","3"); echo $rta[3];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B15a" value="4" <?php echo set_radio("B15a","4"); echo $rta[4];?> />	
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('B15a')); ?></span>
							</div>
						</div>
						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label class="mg-top-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Papá</label>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
									<?php
										for ($i=0;$i<=4;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->B15b=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B15b] = 'checked';
									?>
										<input type="radio" name="B15b" value="1" <?php echo set_radio("B15b","1"); echo $rta[1];?> />								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15b" value="2" <?php echo set_radio("B15b","2"); echo $rta[2];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15b" value="3" <?php echo set_radio("B15b","3"); echo $rta[3];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B15b" value="4" <?php echo set_radio("B15b","4"); echo $rta[4];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('B15b')); ?></span>
							</div>
						</div>
						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label class="mg-top-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Padrasto</label>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
									<?php
										for ($i=0;$i<=4;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->B15c=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B15c] = 'checked';
									?>
										<input type="radio" name="B15c" value="1" <?php echo set_radio("B15c","1"); echo $rta[1]; ?> />								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15c" value="2" <?php echo set_radio("B15c","2"); echo $rta[2]; ?> />
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15c" value="3" <?php echo set_radio("B15c","3"); echo $rta[3]; ?> />
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B15c" value="4" <?php echo set_radio("B15c","4"); echo $rta[4]; ?> />
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('B15c')); ?></span>
							</div>
						</div>
						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label class="mg-top-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Madrastra</label>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
									<?php
										for ($i=0;$i<=4;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->B15d=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B15d] = 'checked';
									?>
										<input type="radio" name="B15d" value="1" <?php echo set_radio("B15d","1"); echo $rta[1];?> />								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15d" value="2" <?php echo set_radio("B15d","2"); echo $rta[2];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15d" value="3" <?php echo set_radio("B15d","3"); echo $rta[3];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B15d" value="4" <?php echo set_radio("B15d","4"); echo $rta[4];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('B15d')); ?></span>
							</div>
						</div>
						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12" id="B15e">
							<label class="mg-top-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Pareja (esposo/a, compañero/a, novio/a)</label>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2" >
								<div class="radio radio-primary">
									<label>
									<?php
										for ($i=0;$i<=4;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->B15e=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B15e] = 'checked';
									?>
										<input type="radio" name="B15e" value="1" <?php echo set_radio("B15e","1"); echo $rta[1];?> />								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15e" value="2" <?php echo set_radio("B15e","2"); echo $rta[2];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15e" value="3" <?php echo set_radio("B15e","3"); echo $rta[3];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B15e" value="4" id ="B15aplica" <?php echo set_radio("B15e","4"); echo $rta[4];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('B15e')); ?></span>
							</div>
						</div>
						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label class="mg-top-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Abuelos</label>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
									<?php
										for ($i=0;$i<=4;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->B15f=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B15f] = 'checked';
									?>
										<input type="radio" name="B15f" value="1" <?php echo set_radio("B15f","1"); echo $rta[1];?> />								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15f" value="2" <?php echo set_radio("B15f","2"); echo $rta[2];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15f" value="3" <?php echo set_radio("B15f","3"); echo $rta[3];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B15f" value="4" <?php echo set_radio("B15f","4"); echo $rta[4];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('B15f')); ?></span>
							</div>
						</div>
						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label class="mg-top-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Hermanos(as) mayores</label>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
									<?php
										for ($i=0;$i<=4;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->B15g=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B15g] = 'checked';
									?>
										<input type="radio" name="B15g" value="1" <?php echo set_radio("B15g","1"); echo $rta[1];?> />								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15g" value="2" <?php echo set_radio("B15g","2"); echo $rta[2];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15g" value="3" <?php echo set_radio("B15g","3"); echo $rta[3];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B15g" value="4" <?php echo set_radio("B15g","4"); echo $rta[4];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('B15g')); ?></span>
							</div>
						</div>
						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label class="mg-top-label col-lg-3 col-md-3 col-sm-3 col-xs-3"> Hermanos(as) menores</label>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
									<?php
										for ($i=0;$i<=4;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->B15h=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B15h] = 'checked';
									?>
										<input type="radio" name="B15h" value="1" <?php echo set_radio("B15h","1"); echo $rta[1];?> />								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15h" value="2" <?php echo set_radio("B15h","2"); echo $rta[2];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15h" value="3" <?php echo set_radio("B15h","3"); echo $rta[3];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B15h" value="4" <?php echo set_radio("B15h","4"); echo $rta[4];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('B15h')); ?></span>
							</div>
						</div>
						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label class="mg-top-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Hermanastros(as)</label>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
									<?php
										for ($i=0;$i<=4;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->B15i=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B15i] = 'checked';
									?>
										<input type="radio" name="B15i" value="1" <?php echo set_radio("B15i","1"); echo $rta[1];?>/>								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15i" value="2" <?php echo set_radio("B15i","2"); echo $rta[2];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15i" value="3" <?php echo set_radio("B15i","3"); echo $rta[3];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B15i" value="4" <?php echo set_radio("B15i","4"); echo $rta[4];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('B15i' )); ?></span>
							</div>
						</div>
						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12" id='B15j'>
							<label class="mg-top-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Hijos(as) tuyos(as)</label>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
									<?php
										for ($i=0;$i<=4;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->B15j=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B15j] = 'checked';
									?>
										<input type="radio" name="B15j" value="1"  <?php echo set_radio("B15j","1"); echo $rta[1];?>/>								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15j" value="2" <?php echo set_radio("B15j","2"); echo $rta[2];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15j" value="3" <?php echo set_radio("B15j","3"); echo $rta[3];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B15j" value="4" id="B15japli" <?php echo set_radio("B15j","4"); echo $rta[4];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('B15j')); ?></span>
							</div>
						</div>
						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label class="mg-top-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Otros familiares: tíos(as), primos(as)</label>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
									<?php
										for ($i=0;$i<=4;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->B15k=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B15k] = 'checked';
									?>
										<input type="radio" name="B15k" value="1" <?php echo set_radio("B15k","1"); echo $rta[1];?> />								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15k" value="2" <?php echo set_radio("B15k","2"); echo $rta[2];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15k" value="3" <?php echo set_radio("B15k","3"); echo $rta[3];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B15k" value="4" <?php echo set_radio("B15k","4"); echo $rta[4];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('B15k')); ?></span>
							</div>
						</div>
						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label class="mg-top-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Empleados(as) del servicio doméstico</label>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
									<?php
										for ($i=0;$i<=4;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->B15l=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B15l] = 'checked';
									?>
										<input type="radio" name="B15l" value="1" <?php echo set_radio("B15l","1"); echo $rta[1];?>/>								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15l" value="2" <?php echo set_radio("B15l","2"); echo $rta[2];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15l" value="3" <?php echo set_radio("B15l","3"); echo $rta[3];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B15l" value="4" <?php echo set_radio("B15l","4"); echo $rta[4];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('B15l')); ?></span>
							</div>
						</div>
						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label class="mg-top-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Compañeros(as) del colegio</label>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
									<?php
										for ($i=0;$i<=4;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->B15m=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B15m] = 'checked';
									?>
										<input type="radio" name="B15m" value="1" <?php echo set_radio("B15m","1"); echo $rta[1];?>/>								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15m" value="2" <?php echo set_radio("B15m","2"); echo $rta[2];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15m" value="3" <?php echo set_radio("B15m","3"); echo $rta[3];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B15m" value="4" <?php echo set_radio("B15m","4"); echo $rta[4];?> disabled/>
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('B15m')); ?></span>
							</div>
						</div>
						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label class="mg-top-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Otras personas no familiares</label>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
									<?php
										for ($i=0;$i<=4;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->B15n=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B15n] = 'checked';
									?>
										<input type="radio" name="B15n" value="1" <?php echo set_radio("B15n","1"); echo $rta[1];?>/>								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15n" value="2" <?php echo set_radio("B15n","2"); echo $rta[2];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B15n" value="3" <?php echo set_radio("B15n","3"); echo $rta[3];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B15n" value="4" <?php echo set_radio("B15n","4"); echo $rta[4];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('B15n')); ?></span>
							</div>
						</div>

						<div class="container">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<input type="submit" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" value="Siguiente"/>
							</div>	
						</div>				
				    </div>	
				</div>		

	<!-- ************************************************************************************************************************************************************************************* -->

				<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="5">
			 	<?php /*$attributes = array('class' => '', 'id' => '');
				echo form_open('index.php/c_ecas/slide/5', $attributes); */?> 	
					<!--Pregunta 16-->
					<div class="row form-group">	
						<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">16. En los <span class="sub_raya">últimos 12 meses</span>, ¿qué han hecho usualmente en tu hogar cuando se presentan problemas?</label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
								<?php
									for ($i=0;$i<=6;$i++)
									{
										$rta[$i]='';
									}
									if ($fila->B16=='checked'){
										$rta[1] = 'checked';
									}else $rta[$fila->B16] = 'checked';
								?>
									<input type="radio" name="B16" value="1" <?php echo set_radio("B16","1"); echo $rta[1]; ?>/>
									Dialogan
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B16" value="2" <?php echo set_radio("B16","2"); echo $rta[2]; ?>/>
									Se insultan o se gritan
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B16" value="3" <?php echo set_radio("B16","3"); echo $rta[3]; ?>/>
									Se agreden, se empujan o se golpean
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B16" value="4" <?php echo set_radio("B16","4"); echo $rta[4]; ?>/>
									Se dejan de hablar
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B16" value="5" <?php echo set_radio("B16","5"); echo $rta[5]; ?>/>
									Acuden a (psicólogo, orientador, comisarias de familia, ICBF, Policía, autoridades comunitarias de etnia)
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B16" value="6" <?php echo set_radio("B16","6"); echo $rta[6]; ?>/>
									No sabes
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B16" value="7" <?php echo set_radio("B16","7"); echo $rta[7]; ?>/>
									Evaden o ignoran la situación
								</label>
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('B16')); ?></p>
						</div>
					</div>

					<!--Pregunta 17-->	
					<div class="row form-group">
						<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">17. En los <span class="sub_raya">últimos 12 meses</span>, ¿principalmente cómo se han enterado tus padres o personas mayores que te cuidan, de tus dificultades o problemas?</label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
								<?php
									for ($i=0;$i<=4;$i++)
									{
										$rta[$i]='';
									}
									if ($fila->B17=='checked'){
										$rta[1] = 'checked';
									}else $rta[$fila->B17] = 'checked';
								?>
									<input type="radio" name="B17" value="1" <?php echo set_radio("B17","1"); echo $rta[1]; ?>/>
									Tú les cuentas por iniciativa propia
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B17" value="2" <?php echo set_radio("B17","2"); echo $rta[2]; ?>/>
									Ellos te preguntan
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B17" value="3" <?php echo set_radio("B17","3"); echo $rta[3]; ?>/>
									Por otras personas
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B17" value="4" <?php echo set_radio("B17","4"); echo $rta[4]; ?>/>
									No se enteran
								</label>
							</div>	
								<p class="t_error"><?php echo strip_tags(form_error('B17')); ?></p>					
						</div>
					</div>

					<!--Pregunta 18-->	
					<div class="row form-group">
						<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">18. Durante los <span class="sub_raya">últimos 12 meses</span>, ¿principalmente cómo te han llamado la atención o te han corregido en tu hogar?</label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
								<?php
									for ($i=0;$i<=9;$i++)
									{
										$rta[$i]='';
									}
									if ($fila->B18=='checked'){
										$rta[1] = 'checked';
									}else $rta[$fila->B18] = 'checked';
								?>
									<input type="radio" name="B18" value="1" <?php echo set_radio("B18","1"); echo $rta[1]; ?>/>
									Te prohíben lo que te gusta
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B18" value="2" <?php echo set_radio("B18","2"); echo $rta[2]; ?>/>
									Con puños o patadas
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B18" value="3" <?php echo set_radio("B18","3"); echo $rta[3]; ?>/>
									Palmadas, pellizcos, tirón de orejas
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B18" value="4" <?php echo set_radio("B18","4"); echo $rta[4]; ?>/>
									Golpes con objetos (correas, cables, palos, etc.)
								</label>
							</div>		
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B18" value="5" <?php echo set_radio("B18","5"); echo $rta[5]; ?>/>
									Te tratan con indiferencia, no te hablan
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B18" value="6" <?php echo set_radio("B18","6"); echo $rta[6]; ?>/>
									Con llamadas de atención, diálogo
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B18" value="7" <?php echo set_radio("B18","7"); echo $rta[7]; ?>/>
									Con gritos, amenazas, insultos
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B18" value="8" <?php echo set_radio("B18","8"); echo $rta[8]; ?>/>
									Con cantaleta
								</label>
							</div>		
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B18" id="B18a"  value="9" <?php echo set_radio("B18","9"); echo $rta[9]; ?>/>
									De otra forma, ¿Cuál? 
									<input type="text" id="B18b"  name="B18_cual" onkeypress="return soloLetras(event);" <?php echo "value='".set_value('B18_cual',$fila->B18_cual)."'";?> />
								</label>
								<span class="t_error"><?php echo strip_tags(form_error("B18_cual")); ?></span>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B18" value="10" <?php echo set_radio("B18","10"); echo $rta[10];?>/>
									No te llaman la atención
								</label>
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('B18')); ?></p>								
						</div>
					</div>

					<!-- Pregunta 19-->
					<div class="row form-group">
						<label class="col-lg-12">19. ¿Cuáles gustos o elecciones te respetan o toleran en tu hogar?
						</label>

						<div class="col-lg-12 incluyente">
							<div class="checkbox">
								<label>
									<input class="B19" type="checkbox" name="B19[]" onclick="B19()" value="1" <?php echo set_checkbox("B19","1"); echo $fila->B19a;?>/>
									Tus amigos(as)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="B19" type="checkbox" name="B19[]" onclick="B19()" value="2" <?php echo set_checkbox("B19","2"); echo $fila->B19b;?>/>
										Tu pareja (novio/a, esposo/a, compañero/a)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="B19" type="checkbox" name="B19[]" onclick="B19()" value="3" <?php echo set_checkbox("B19","3"); echo $fila->B19c;?>/>
										Tu forma de vestir o presentación personal
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="B19" type="checkbox" name="B19[]" onclick="B19()" value="4" <?php echo set_checkbox("B19","4"); echo $fila->B19d;?>/>
										Tu forma de pensar, ser o actuar
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="B19" type="checkbox" name="B19[]" onclick="B19()" value="5" <?php echo set_checkbox("B19","5"); echo $fila->B19e;?>/>
										Tus reuniones, fiestas o paseos con amigos(as)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B19j" type="checkbox" name="B19[]" onclick="ocultos(this.id)" value="6" <?php echo set_checkbox("B19","6"); echo $fila->B19f;?>/>
										Ninguno de los anteriores
								</label>
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('B19[]')); ?></p>								
						</div>
					</div>

					<!-- Pregunta 20-->
					<div class="row form-group incluyente">
						<label class="col-lg-12">20. En los <span class="sub_raya">últimos 12 meses</span>, ¿de quiénes has recibido malos tratos (gritos, insultos, burlas, humillaciones, golpes, castigos físicos)?
						</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="B20[]" id="B20a" class="B20" onclick="B20()" value="1" <?php echo set_checkbox("B20","1"); echo $fila->B20a;?>/>
										Mamá
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B20[]" id="B20b" class="B20" onclick="B20()" value="2" <?php echo set_checkbox("B20","2"); echo $fila->B20b;?>/>
										Papá
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="B20[]" id="B20c" class="B20" onclick="B20()" value="3" <?php echo set_checkbox("B20","3"); echo $fila->B20c;?>/>
										Padrastro
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B20[]" id="B20d" class="B20" onclick="B20()" value="4" <?php echo set_checkbox("B20","4"); echo $fila->B20d;?>/>
										Madrastra
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="B20[]" id="B20e" class="B20" onclick="B20()" value="5" <?php echo set_checkbox("B20","5"); echo $fila->B20e;?>/>
										Pareja (novio/a, esposo/a, compañero/a)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="B20[]" id="B20f" class="B20" onclick="B20()" value="6" <?php echo set_checkbox("B20","6"); echo $fila->B20f;?>/>
										Abuelos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B20[]" id="B20g" class="B20" onclick="B20()" value="7" <?php echo set_checkbox("B20","7"); echo $fila->B20g;?>/>
										Hermanos(as) mayores
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B20[]" id="B20h" class="B20" onclick="B20()" value="8" <?php echo set_checkbox("B20","8"); echo $fila->B20h;?>/>
										Hermanos(as) menores
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B20[]" id="B20i" class="B20" onclick="B20()" value="9" <?php echo set_checkbox("B20","9"); echo $fila->B20i;?>/>
										Hermanastros(as)
									</label>
								</div>
								<div class="checkbox" id="verB20j">
									<label>
										<input type="checkbox" name="B20[]" id="B20j" class="B20" onclick="B20()" value="10" <?php echo set_checkbox("B20","10"); echo $fila->B20j;?>/>
										Hijos(as) tuyos(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B20[]" id="B20k" class="B20" onclick="B20()" value="11" <?php echo set_checkbox("B20","11"); echo $fila->B20k;?>/>
										Otros familiares: tíos(as), primos(as)
									</label>
								</div>
									<div class="checkbox">
									<label>
										<input  type="checkbox" name="B20[]" id="B20l" class="B20" onclick="B20()" value="12" <?php echo set_checkbox("B20","12"); echo $fila->B20l;?>/>
										Empleados(as) del servicio doméstico
									</label>
								</div>
									<div class="checkbox">
									<label>
										<input  type="checkbox" name="B20[]" id="B20m" class="B20" onclick="B20()" value="13" <?php echo set_checkbox("B20","13"); echo $fila->B20m;?>/>
										Compañeros del colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B20[]" id="B20n" class="B20" onclick="B20()" value="14" <?php echo set_checkbox("B20","14"); echo $fila->B20n;?>/>
										Compañeras del colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B20[]" id="B20o" class="B20" onclick="B20()" value="15" <?php echo set_checkbox("B20","15"); echo $fila->B20o;?>/>
										Amigos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="B20[]" id="B20p" class="B20" onclick="B20()" value="16" <?php echo set_checkbox("B20","16"); echo $fila->B20p;?>/>
										Amigas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B20[]" id="B20q" class="B20" onclick="B20()" value="17" <?php echo set_checkbox("B20","17"); echo $fila->B20q;?>/>
										Profesores(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B20[]" id="B20r" class="B20" onclick="B20()" value="18" <?php echo set_checkbox("B20","18"); echo $fila->B20r;?>/>
										Otras personas que trabajan en tu colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B20[]" id="B20s" class="B20" onclick="B20()" value="19" <?php echo set_checkbox("B20","19"); echo $fila->B20s;?>/>
										Otras personas no familiares
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B20[]" id="B20t" onclick="ocultos(this.id)" value="20" <?php echo set_checkbox("B20","20"); echo $fila->B20t;?>/>
										No recibes malos tratos
									</label>
								</div>
								<p class="t_error"><?php echo strip_tags(form_error('B20[]')); ?></p>	
							</div>
					</div>

					<div class="container">
				    	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<input type="submit" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" value="Siguiente"/>
						</div>
					</div>
					<?#php echo form_close(); ?>
			</div>

		<!-- ************************************************************************************************************************************************************************************* -->
				<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="6">
					<?php /*$attributes = array('class' => '', 'id' => '');
						echo form_open('index.php/c_ecas/slide/6', $attributes);*/?>
					<label class="col-md-12 sub_t" id="cap_3">En esta sección encontrarás preguntas relacionadas con las actividades que haces con tu familia, amigos o compañeros del barrio, conjunto o colegio.</label>

					
					<!--Pregunta 21-->
					<div class="row form-group">
  				  		<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">21. En los <span class="sub_raya">últimos 12 meses</span>, ¿cuáles de las siguientes actividades has realizado en tu tiempo libre?</label>
  				  		<p class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></p>
  				  		<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Ir a eventos culturales, al cine o actividades artísticas</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C21a == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C21a == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C21a" value="1" <?php echo set_radio("C21a","1"); echo $rta1;?>/>
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C21a" value="2" <?php echo set_radio("C21a","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('C21a')); ?></span>
							</div>
						</div>

						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Ir al parque, jugar, hacer deporte</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C21b == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C21b == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C21b" value="1" <?php echo set_radio("C21b","1"); echo $rta1;?>/>
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C21b" value="2" <?php echo set_radio("C21b","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('C21b')); ?></span>
							</div>
						</div>
						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Leer, estudiar, hacer tareas</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C21c == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C21c == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C21c" value="1" <?php echo set_radio("C21c","1"); echo $rta1;?>/>
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C21c" value="2" <?php echo set_radio("C21c","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('C21c')); ?></span>
							</div>
						</div>

						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Ver televisión, películas, vídeos; escuchar música</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C21d == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C21d == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C21d" value="1" <?php echo set_radio("C21d","1"); echo $rta1;?>/>
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C21d" value="2" <?php echo set_radio("C21d","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('C21d')); ?></span>
							</div>
						</div>

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">		
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Salir con amigos(as) aproximadamente de tu misma edad</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C21e == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C21e == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C21e" value="1" <?php echo set_radio("C21e","1"); echo $rta1;?>/>
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C21e" value="2" <?php echo set_radio("C21e","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('C21e')); ?></span>
							</div>
						</div>

						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Hacer oficios del hogar</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C21f == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C21f == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C21f" value="1" <?php echo set_radio("C21f","1"); echo $rta1;?>/>
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C21f" value="2" <?php echo set_radio("C21f","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('C21f')); ?></span>
							</div>
						</div>

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Chatear o navegar en internet</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C21g == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C21g == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C21g" value="1" <?php echo set_radio("C21g","1"); echo $rta1;?>/>
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C21g" value="2" <?php echo set_radio("C21g","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('C21g')); ?></span>
							</div>
						</div>

						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Ir a fiestas y/o paseos</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C21h == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C21h == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C21h" value="1" <?php echo set_radio("C21h","1"); echo $rta1;?>/>
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C21h" value="2" <?php echo set_radio("C21h","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('C21h')); ?></span>
							</div>
						</div>

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Asistir a actividades culturales étnicas</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C21i == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C21i == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C21i" value="1" <?php echo set_radio("C21i","1"); echo $rta1;?>/>
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C21i" value="2" <?php echo set_radio("C21i","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('C21i')); ?></span>
							</div>
						</div>

						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Relacionarte con personas mayores de edad no familiares</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C21j == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C21j == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C21j" value="1" <?php echo set_radio("C21j","1"); echo $rta1;?>/>
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C21j" value="2" <?php echo set_radio("C21j","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error" class="col-lg-3"><?php echo strip_tags(form_error('C21j')); ?></span>
							</div>
						</div>
							
						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">		
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Jugar videojuegos</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C21k == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C21k == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C21k" value="1" <?php echo set_radio("C21k","1"); echo $rta1;?>/>
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C21k" value="2" <?php echo set_radio("C21k","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('C21k')); ?></span>
							</div>
						</div>
						
						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Trabajar</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C21l == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C21l == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C21l" value="1" <?php echo set_radio("C21l","1"); echo $rta1;?>/>
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C21l" value="2" <?php echo set_radio("C21l","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('C21l')); ?></span>
							</div>
						</div>

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Ir a tabernas, discotecas, etc.</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C21m == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C21m == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C21m" value="1" <?php echo set_radio("C21m","1"); echo $rta1;?>/>
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C21m" value="2" <?php echo set_radio("C21m","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('C21m')); ?></span>
							</div>
						</div>
						
						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Asistir a actividades religiosas</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C21n == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C21n == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C21n" value="1" <?php echo set_radio("C21n","1"); echo $rta1;?>/>
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C21n" value="2" <?php echo set_radio("C21n","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('C21n')); ?></span>
							</div>
						</div>

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Estar con tu pareja (novio/a, esposo/a)</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C21o == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C21o == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C21o" value="1" <?php echo set_radio("C21o","1"); echo $rta1;?>/>
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C21o" value="2" <?php echo set_radio("C21o","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<span class="t_error"><?php echo strip_tags(form_error('C21o')); ?></span>
							</div>
						</div>

						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Otra actividad</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C21p == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C21p == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C21p" value="1" <?php echo set_radio("C21p","1"); echo $rta1;?>/>
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C21p" value="2" <?php echo set_radio("C21p","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<p class="t_error"><?php echo strip_tags(form_error('C21p')); ?></p>
							</div>
						</div>
					</div>

					<!-- Pregunta 22-->
					
						<label class="col-lg-12">22. En tu grupo de amigos, ¿consideras que existe presión en temas relacionados con:
						</label>
						<div class="row form-group">
							<div class="col-lg-12 incluyente" >
								<div class="checkbox">
									<label>
									<input type="checkbox" id="C22a" name="C22[]" class="C22" onclick="C22()" value="1" <?php echo set_checkbox("C22","1"); echo $fila->C22a;?>/>Estudiar o cumplir con las obligaciones del colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" id="C22b" name="C22[]" class="C22" onclick="C22()" value="2" <?php echo set_checkbox("C22","2"); echo $fila->C22b;?>/>Cumplir con las normas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C22c" type="checkbox" name="C22[]" class="C22" onclick="C22()" value="3" <?php echo set_checkbox("C22","3"); echo $fila->C22c;?>/>			Participar en juegos o actividades recreativas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C22d" type="checkbox" name="C22[]" class="C22" onclick="C22()" value="4" <?php echo set_checkbox("C22","4"); echo $fila->C22d;?>/>		Interactuar con otros grupos 
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C22e" type="checkbox" name="C22[]" class="C22" onclick="C22()" value="5" <?php echo set_checkbox("C22","5"); echo $fila->C22e;?>/>			Participar en redes sociales
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C22f" type="checkbox" name="C22[]" class="C22" onclick="C22()" value="6" <?php echo set_checkbox("C22","6"); echo $fila->C22f;?>/>			Consumir sustancias psicoactivas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C22g" type="checkbox" name="C22[]" class="C22" onclick="C22()" value="7" <?php echo set_checkbox("C22","7"); echo $fila->C22g;?>/>
										Sexo
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C22h" type="checkbox" name="C22[]" onclick="ocultos(this.id)" value="8" <?php echo set_checkbox("C22","8"); echo $fila->C22h;?>/>No considero que exista presión
									</label>
								</div>							
								<div class="checkbox">
									<label>
										<input id="C22i" type="checkbox" name="C22[]" onclick="ocultos(this.id)" value="9" <?php echo set_checkbox("C22","9"); echo $fila->C22i;?>/>			No tengo amigos(as)
									</label>
								</div>
								<p class="t_error"><?php echo strip_tags(form_error('C22[]')); ?></p>
							</div>
						</div>
						<!-- Pregunta 23-->
						<div class="row form-group incluyente">
							<label class="col-lg-12">23. En los <span class="sub_raya">últimos 12 meses</span>, al momento de tomar decisiones importantes para ti, ¿principalmente con quién las consultas?
							</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>
										<input id="C23a" type="checkbox" name="C23[]" class="C23" onclick="C23()" value="1" <?php echo set_checkbox("C23","1"); echo $fila->C23a; ?>/>
										Mamá
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23b" type="checkbox" name="C23[]" class="C23" onclick="C23()"  value="2" <?php echo set_checkbox("C23","2"); echo $fila->C23b;?>/>
										Papá
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23c" type="checkbox" name="C23[]" class="C23" onclick="C23()"  value="3" <?php echo set_checkbox("C23","3"); echo $fila->C23c;?>/>
										Padrastro
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23d" type="checkbox" name="C23[]" class="C23" onclick="C23()"  value="4" <?php echo set_checkbox("C23","4"); echo $fila->C23d;?>/>
										Madrastra
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23e" type="checkbox" name="C23[]" class="C23" onclick="C23()" value="5" <?php echo set_checkbox("C23","5"); echo $fila->C23e;?>/>
										Pareja (novio/a, esposo/a, compañero/a)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23f" type="checkbox" name="C23[]" class="C23" onclick="C23()" value="6" <?php echo set_checkbox("C23","6"); echo $fila->C23f;?>/>
										Abuelos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23g" type="checkbox" name="C23[]" class="C23" onclick="C23()"  value="7" <?php echo set_checkbox("C23","7"); echo $fila->C23g;?>/>
										Hermanos(as) mayores
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23h" type="checkbox" name="C23[]" class="C23" onclick="C23()"  value="8" <?php echo set_checkbox("C23","8"); echo $fila->C23h;?>/>
										Hermanos(as) menores
									</label>
								</div>							
								<div class="checkbox">
									<label>
										<input id="C23i" type="checkbox" name="C23[]" class="C23" onclick="C23()"  value="9" <?php echo set_checkbox("C23","9"); echo $fila->C23i;?>/>
										Hermanastros(as)
									</label>
								</div>
								<div class="checkbox" id="verC23j">
									<label>
										<input id="C23j" type="checkbox" name="C23[]" class="C23" onclick="C23()"  value="10" <?php echo set_checkbox("C23","10"); echo $fila->C23j;?>/>
										Hijos(as) tuyos(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23k" type="checkbox" name="C23[]" class="C23" onclick="C23()" value="11" <?php echo set_checkbox("C23","11"); echo $fila->C23k;?>/>
										Otros familiares: tíos(as), primos(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23l" type="checkbox" name="C23[]" class="C23" onclick="C23()"  value="12" <?php echo set_checkbox("C23","12"); echo $fila->C23l;?>/>
										Empleados(as) del servicio doméstico
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23m" type="checkbox" name="C23[]" class="C23" onclick="C23()"  value="13" <?php echo set_checkbox("C23","13"); echo $fila->C23m;?>/>
										Compañeros(as) del colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23n" type="checkbox" name="C23[]" class="C23" onclick="C23()"  value="14" <?php echo set_checkbox("C23","14"); echo $fila->C23n;?>/>
										Amigos(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23o" type="checkbox" name="C23[]" class="C23" onclick="C23()"  value="15" <?php echo set_checkbox("C23","15"); echo $fila->C23o;?>/>
										Profesores(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23p" type="checkbox" name="C23[]" class="C23" onclick="C23()" value="16" <?php echo set_checkbox("C23","16"); echo $fila->C23p;?>/>
										Otras personas que trabajan en tu colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23q" type="checkbox" name="C23[]" class="C23" onclick="C23()" value="17" <?php echo set_checkbox("C23","17"); echo $fila->C23q;?>/>
										Otras personas no familiares
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C23r" type="checkbox" name="C23[]" onclick="ocultos(this.id)" value="18" <?php echo set_checkbox("C23","18"); echo $fila->C23r;?>/>
										No consultas con nadie
									</label>
								</div>	
								<p class="t_error"><?php echo strip_tags(form_error('C23[]')); ?></p>
							</div>										
						</div>
					
					<div class="container">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<input type="submit" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" value="Siguiente"/>
						</div>
					</div>
					<?#php echo form_close(); ?>
				</div>

	<!-- ************************************************************************************************************************************************************************************* -->
			<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="7">
				<p class="glosario">
					<b>Sustancia psicoactiva</b> se refiere a toda sustancia (química o de origen natural) que al ser consumida afecta el cerebro, modifica los estados de ánimo o altera la capacidad de los sentidos, como el cigarrillo, las bebidas alcohólicas, la marihuana, entre otras.
				</p>

				<!--Pregunta 24-->
				<div class="row form-group">
					<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">24. ¿Has consumido alguna sustancia psicoactiva?</label>
					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
						<div class="radio radio-primary">
							<label>
							<?php
								$rta1 =''; $rta2='';
								if ($fila->C24 == 'checked') {$rta1 ='checked'; $rta2='';}
								if ($fila->C24 == 2) {$rta1  =''; $rta2='checked';}
							?>
								<input type="radio" name="C24" id="C24si" onclick="ocultos(this.id)" value="1" <?php echo set_radio("C24","1"); echo $rta1; ?>/>
								Si
							</label>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
						<div class="radio radio-primary">
							<label>
								<input type="radio" name="C24" id="C24no" onclick="ocultos(this.id)" value="2" <?php echo set_radio("C24","2"); echo $rta2; ?>/>
								No
							</label>
						</div>
					</div>
					<span class="t_error"><?php echo strip_tags(form_error('C24')); ?></span>				
				</div>

				<div class="container">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
						</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
						<input type="submit" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" value="Siguiente"/>
					</div>
				</div>
			</div>

	<!-- ************************************************************************************************************************************************************************************* -->

			<div class="pregunta-encuesta pagina aparece-a-clase container-fluid" data-slide="8">
					
				<!--Pregunta 25 (respuesta si, al consumo de psicoactivos)-->
				<div class="row form-group"  id="C25">
					<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">25. De las siguientes sustancias psicoactivas, ¿cuáles has consumido en los <span class="sub_raya">últimos 12 meses</span> y con qué frecuencia?</label>
					<p class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></p>	
					<label class="col-lg-4"><span class="t_error"><?php echo strip_tags(form_error('C25')); ?></span></label>	
					<div class="container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12 grupo-enunciado">
						<label class="enunciado col-lg-3 col-md-3 col-sm-3 label25"><p></p></label>
						<label class="enunciado col-lg-1 col-md-1 col-sm-1 label25"><p>Todos los días</p></label>
						<label class="enunciado col-lg-1 col-md-1 col-sm-1 label25"><p>Varias veces a la semana</p></label>
						<label class="enunciado col-lg-1 col-md-1 col-sm-1 label25"><p>Una vez a la semana</p></label>
						<label class="enunciado col-lg-1 col-md-1 col-sm-1 label25"><p>Una vez al mes</p></label>
						<label class="enunciado col-lg-1 col-md-1 col-sm-1 label25"><p>De vez en cuando</p></label>
						<label class="enunciado col-lg-2 col-md-2 col-sm-2 label25"><p>No la he consumido en los <span class="sub_raya">últimos 12 meses</span></p></label>
						<label class="enunciado col-lg-2 col-md-2 col-sm-2 label25"><p>Nunca la he consumido</p></label></label>
					</div>							

					<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12" id="C25a">
						<label class="mg-top-label opcion col-lg-3 col-md-3 col-sm-3"><p>Cigarrillo</p></label>
								<div class="col-l3g-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
										<?php
											for ($i=0;$i<=7;$i++)
											{
												$rta[$i]='';
											}
											if ($fila->C25a=='checked'){
												$rta[1] = 'checked';
											}else $rta[$fila->C25a] = 'checked';
										?>
											<input type="radio" name="C25a" value="1" <?php echo set_radio("C25a","1"); echo $rta[1];?>/>
										</label>
									</div>
								</div>					
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" name="C25a" value="2" <?php echo set_radio("C25a","2"); echo $rta[2];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25a" value="3" <?php echo set_radio("C25a","3"); echo $rta[3];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25a" value="4" <?php echo set_radio("C25a","4"); echo $rta[4];?>/>	
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25a" value="5" <?php echo set_radio("C25a","5"); echo $rta[5];?>/>	
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25a" value="6" <?php echo set_radio("C25a","6"); echo $rta[6];?>/>	
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25a" value="7" <?php echo set_radio("C25a","7"); echo $rta[7];?>/>	
										</label>
									</div>
								</div>
								<div class="col-lg-6">
									<span class="t_error"><?php echo strip_tags(form_error('C25a')); ?></span>
								</div>
						</div>


						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12" id="C25b" >
								<label class="mg-top-label opcion col-lg-3 col-md-3 col-sm-3"><p>Bebidas alcohólicas (cerveza, aguardiente, vino, whiskey, etc.)</p></label>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
										<?php
											for ($i=0;$i<=7;$i++)
											{
												$rta[$i]='';
											}
											if ($fila->C25b=='checked'){
												$rta[1] = 'checked';
											}else $rta[$fila->C25b] = 'checked';
										?>
											<input type="radio" class="C25" name="C25b" value="1" <?php echo set_radio("C25b","1"); echo $rta[1];?>/>
										</label>
									</div>
								</div>					
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25b" value="2" <?php echo set_radio("C25b","2"); echo $rta[2];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25b" value="3" <?php echo set_radio("C25b","3"); echo $rta[3];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25b" value="4" <?php echo set_radio("C25b","4"); echo $rta[4];?>/>	
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25b" value="5" <?php echo set_radio("C25b","5"); echo $rta[5];?>/>	
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25b" value="6" <?php echo set_radio("C25b","6"); echo $rta[6];?>/>	
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25b" value="7" <?php echo set_radio("C25b","7"); echo $rta[7];?>/>	
										</label>
									</div>
								</div>
								<div class="col-lg-6">
									<span class="t_error"><?php echo strip_tags(form_error('C25b')); ?></span>
								</div>
						</div>

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12" id="C25c" >
								<label class="mg-top-label opcion col-lg-3 col-md-3 col-sm-3"><p>Marihuana (cannabis, crippy, leidys, corinto, etc.)</p></label>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
										<?php
											for ($i=0;$i<=7;$i++)
											{
												$rta[$i]='';
											}
											if ($fila->C25c=='checked'){
												$rta[1] = 'checked';
											}else $rta[$fila->C25c] = 'checked';
										?>
											<input type="radio" class="C25" name="C25c" value="1" <?php echo set_radio("C25c","1"); echo $rta[1];?>/>
										</label>
									</div>
								</div>					
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25c" value="2" <?php echo set_radio("C25c","2"); echo $rta[2];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25c" value="3" <?php echo set_radio("C25c","3"); echo $rta[3];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25c" value="4" <?php echo set_radio("C25c","4"); echo $rta[4];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25c" value="5" <?php echo set_radio("C25c","5"); echo $rta[5];?>/>	
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25c" value="6" <?php echo set_radio("C25c","6"); echo $rta[6];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25c" value="7" <?php echo set_radio("C25c","7"); echo $rta[7];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-6">
									<span class="t_error"><?php echo strip_tags(form_error('C25c')); ?></span>
								</div>
						</div>
						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12" id="C25d" >
								<label class="mg-top-label opcion col-lg-3 col-md-3 col-sm-3"><p>Cocaína (crack)</p></label>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
										<?php
											for ($i=0;$i<=7;$i++)
											{
												$rta[$i]='';
											}
											if ($fila->C25d=='checked'){
												$rta[1] = 'checked';
											}else $rta[$fila->C25d] = 'checked';
										?>
											<input type="radio" class="C25" name="C25d" value="1" <?php echo set_radio("C25d","1"); echo $rta[1];?>/>
										</label>
									</div>
								</div>					
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25d" value="2" <?php echo set_radio("C25d","2"); echo $rta[2];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25d" value="3" <?php echo set_radio("C25d","3"); echo $rta[3];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25d" value="4" <?php echo set_radio("C25d","4"); echo $rta[4];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25d" value="5" <?php echo set_radio("C25d","5"); echo $rta[5];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25d" value="6" <?php echo set_radio("C25d","6"); echo $rta[6];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25d" value="7" <?php echo set_radio("C25d","7"); echo $rta[7];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-6">
									<span class="t_error"><?php echo strip_tags(form_error('C25d')); ?></span>
								</div>
						</div>

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12" id="C25e" >
								<label class="mg-top-label opcion col-lg-3 col-md-3 col-sm-3"><p>Basuco</p></label>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
										<?php
											for ($i=0;$i<=7;$i++)
											{
												$rta[$i]='';
											}
											if ($fila->C25e=='checked'){
												$rta[1] = 'checked';
											}else $rta[$fila->C25e] = 'checked';
										?>
											<input type="radio" class="C25" name="C25e" value="1" <?php echo set_radio("C25e","1"); echo $rta[1];?>/>
										</label>
									</div>
								</div>					
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25e" value="2" <?php echo set_radio("C25e","2"); echo $rta[2];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25e" value="3" <?php echo set_radio("C25e","3"); echo $rta[3];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25e" value="4" <?php echo set_radio("C25e","4"); echo $rta[4];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25e" value="5" <?php echo set_radio("C25e","5"); echo $rta[5];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25e" value="6" <?php echo set_radio("C25e","6"); echo $rta[6];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25e" value="7" <?php echo set_radio("C25e","7"); echo $rta[7];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-6">
									<span class="t_error"><?php echo strip_tags(form_error('C25e')); ?></span>
								</div>
						</div>
						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12" id="C25f" >
								<label class="mg-top-label opcion col-lg-3 col-md-3 col-sm-3"><p>Extasis (MDMA)</p></label>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
										<?php
											for ($i=0;$i<=7;$i++)
											{
												$rta[$i]='';
											}
											if ($fila->C25f=='checked'){
												$rta[1] = 'checked';
											}else $rta[$fila->C25f] = 'checked';
										?>
											<input type="radio" class="C25" name="C25f" value="1" <?php echo set_radio("C25f","1"); echo $rta[1];?>/>
										</label>
									</div>
								</div>					
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25f" value="2" <?php echo set_radio("C25f","2"); echo $rta[2];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25f" value="3" <?php echo set_radio("C25f","3"); echo $rta[3];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25f" value="4" <?php echo set_radio("C25f","4"); echo $rta[4];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25f" value="5" <?php echo set_radio("C25f","5"); echo $rta[5];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25f" value="6" <?php echo set_radio("C25f","6"); echo $rta[6];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25f" value="7" <?php echo set_radio("C25f","7"); echo $rta[7];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-6">
									<span class="t_error"><?php echo strip_tags(form_error('C25f' )); ?></span>
								</div>
						</div>
						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12" id="C25g" >
								<label class="mg-top-label opcion col-lg-3 col-md-3 col-sm-3"><p>Inhalables (bóxer, gasolina, popper, dick, etc.)</p></label>
									<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
										<?php
											for ($i=0;$i<=7;$i++)
											{
												$rta[$i]='';
											}
											if ($fila->C25g=='checked'){
												$rta[1] = 'checked';
											}else $rta[$fila->C25g] = 'checked';
										?>
											<input type="radio" class="C25" name="C25g" value="1" <?php echo set_radio("C25g","1"); echo $rta[1];?>/>
										</label>
									</div>
								</div>					
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25g" value="2" <?php echo set_radio("C25g","2"); echo $rta[2];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25g" value="3" <?php echo set_radio("C25g","3"); echo $rta[3];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25g"  value="4" <?php echo set_radio("C25g","4"); echo $rta[4];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25g" value="5" <?php echo set_radio("C25g","5"); echo $rta[5];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25g" value="6" <?php echo set_radio("C25g","6"); echo $rta[6];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25g" value="7" <?php echo set_radio("C25g","7"); echo $rta[7];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-6">
									<span class="t_error"><?php echo strip_tags(form_error('C25g')); ?></span>
								</div>
						</div>
						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12" id="C25h" >
								<label class="mg-top-label opcion col-lg-3 col-md-3 col-sm-3"><p>Heroína</p></label>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
										<?php
											for ($i=0;$i<=7;$i++)
											{
												$rta[$i]='';
											}
											if ($fila->C25h=='checked'){
												$rta[1] = 'checked';
											}else $rta[$fila->C25h] = 'checked';
										?>
											<input type="radio" class="C25" name="C25h" value="1" <?php echo set_radio("C25h","1"); echo $rta[1];?>/>
										</label>
									</div>
								</div>					
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25h" value="2" <?php echo set_radio("C25h","2"); echo $rta[2];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25h" value="3" <?php echo set_radio("C25h","3"); echo $rta[3];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25h" value="4" <?php echo set_radio("C25h","4"); echo $rta[4];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25h" value="5" <?php echo set_radio("C25h","5"); echo $rta[5];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25h" value="6" <?php echo set_radio("C25h","6"); echo $rta[6];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25h" value="7" <?php echo set_radio("C25h","7"); echo $rta[7];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-6">
									<span class="t_error"><?php echo strip_tags(form_error('C25h' )); ?></span>
								</div>
						</div>
						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12" id="C25i" >
								<label class="mg-top-label opcion col-lg-3 col-md-3 col-sm-3"><p> Hongos alucinógenos</p></label>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
										<?php
											for ($i=0;$i<=7;$i++)
											{
												$rta[$i]='';
											}
											if ($fila->C25i=='checked'){
												$rta[1] = 'checked';
											}else $rta[$fila->C25i] = 'checked';
										?>
											<input type="radio" class="C25" name="C25i" value="1" <?php echo set_radio("C25i","1"); echo $rta[1];?>/>
										</label>
									</div>
								</div>					
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25i" value="2" <?php echo set_radio("C25i","2"); echo $rta[2];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25i" value="3" <?php echo set_radio("C25i","3"); echo $rta[3];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25i" value="4" <?php echo set_radio("C25i","4"); echo $rta[4];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25i" value="5" <?php echo set_radio("C25i","5"); echo $rta[5];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25i" value="6" <?php echo set_radio("C25i","6"); echo $rta[6];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25i" value="7" <?php echo set_radio("C25i","7"); echo $rta[7];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-6">
									<span class="t_error"><?php echo strip_tags(form_error('C25i')); ?></span>
								</div>
						</div>
						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12" id="C25j" >
								<label class="mg-top-label opcion col-lg-3 col-md-3 col-sm-3"><p>Ácidos (LSD, trip)</p></label>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
										<?php
											for ($i=0;$i<=7;$i++)
											{
												$rta[$i]='';
											}
											if ($fila->C25j=='checked'){
												$rta[1] = 'checked';
											}else $rta[$fila->C25j] = 'checked';
										?>
											<input type="radio" class="C25" name="C25j" value="1" <?php echo set_radio("C25j","1"); echo $rta[1];?>/>
										</label>
									</div>
								</div>					
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25j" value="2" <?php echo set_radio("C25j","2"); echo $rta[2];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25j" value="3" <?php echo set_radio("C25j","3"); echo $rta[3];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25j" value="4" <?php echo set_radio("C25j","4"); echo $rta[4];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25j" value="5" <?php echo set_radio("C25j","5"); echo $rta[5];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25j" value="6" <?php echo set_radio("C25j","6"); echo $rta[6];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25j" value="7" <?php echo set_radio("C25j","7"); echo $rta[7];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-6">
									<span class="t_error"><?php echo strip_tags(form_error('C25j')); ?></span>
								</div>
						</div>
						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12" id="C25k" >
								<label class="mg-top-label opcion col-lg-3 col-md-3 col-sm-3"><p> Otra ¿Cuál?</p><input type="text" id="C25k_cual" onkeypress="return soloLetras(event);" name="C25k_cual" <?php echo "value='".set_value('C25k_cual',$fila->C25k_cual)."'";?> /><br>
								<div class="col-lg-3"></div>
									 <span class="t_error" ><?php echo strip_tags(form_error('C25k_cual')); ?></span>
								</label>
									
									<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
										<?php
											for ($i=0;$i<=7;$i++)
											{
												$rta[$i]='';
											}
											if ($fila->C25k=='checked'){
												$rta[1] = 'checked';
											}else $rta[$fila->C25k] = 'checked';
										?>
											<input type="radio" class="C25" name="C25k"  class="C25k" onclick="ocultos(this.id)" value="1" <?php echo set_radio("C25k","1"); echo $rta[1];?>/>
										</label>
									</div>
								</div>					
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25k" class="C25k" onclick="ocultos(this.id)" value="2" <?php echo set_radio("C25k","2"); echo $rta[2];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25k" class="C25k" onclick="ocultos(this.id)" value="3" <?php echo set_radio("C25k","3"); echo $rta[3];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25k" class="C25k" onclick="ocultos(this.id)" value="4" <?php echo set_radio("C25k","4"); echo $rta[4];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25k" class="C25k" onclick="ocultos(this.id)" value="5" <?php echo set_radio("C25k","5"); echo $rta[5];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25k" class="C25k" onclick="ocultos(this.id)" value="6" <?php echo set_radio("C25k","6"); echo $rta[6];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="radio radio-primary align-center-radio">
										<label>
											<input type="radio" class="C25" name="C25k" class="C25k" value="7" <?php echo set_radio("C25k","7"); echo $rta[7];?>/>
										</label>
									</div>
								</div>
								<div class="col-lg-6">
									<p class="t_error"><?php echo strip_tags(form_error('C25k')); ?></p>
								</div>
						</div>
				   	</div>
				   	<div class="container">
					 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
						    <input type="submit" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" value="Siguiente"/>
						</div>
					</div>
			</div>
				<!-- ************************************************************************************************************************************************************************************* -->
				<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="9">  
			
							
						<label class="col-md-12 sub_t" id="cap_4">Ahora queremos conocer más acerca de la sexualidad de los jóvenes de tu edad.<br> Recuerda que esta información es totalmente anónima!.</label>
						
						<!--Pregunta 26-->
						<div class="row form-group">
					    	<label class="col-lg-12">26. Durante los <span class="sub_raya">últimos 12 meses</span>, ¿sobre qué temas de educación para la sexualidad te han hablado en el colegio?</label>
							<div class="col-lg-12 incluyente">
									<div class="checkbox">
										<label>
											<input id="D26a" type="checkbox" name="D26[]" class="D26 D26z" onclick="D26()" value="1" <?php echo set_checkbox('D26','1'); echo $fila->D26a;?> />Autoestima
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26b" type="checkbox" name="D26[]" class="D26 D26z" onclick="D26()" value="2" <?php echo set_checkbox('D26','2'); echo $fila->D26b;?> />Planes de vida
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26c" type="checkbox" name="D26[]" class="D26 D26z" onclick="D26()" value="3" <?php echo set_checkbox('D26','3'); echo $fila->D26c;?>/>
											Toma de decisiones
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26d" type="checkbox" name="D26[]" class="D26 D26z" onclick="D26()" value="4" <?php echo set_checkbox('D26','4'); echo $fila->D26d;?>/>
											Liderazgo
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26e" type="checkbox" name="D26[]" class="D26 D26z" onclick="D26()" value="5" <?php echo set_checkbox('D26','5'); echo $fila->D26e;?>/>
											Género
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26f" type="checkbox" name="D26[]" class="D26 D26z" onclick="D26()" value="6" <?php echo set_checkbox('D26','6'); echo $fila->D26f;?>/>
											Desigualdad de género
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26g" type="checkbox" name="D26[]" class="D26 D26z" onclick="D26()" value="7" <?php echo set_checkbox('D26','7'); echo $fila->D26g;?>/>
											Homosexualidad
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26i" type="checkbox" name="D26[]" class="D26 D26z" onclick="D26()" value="8" <?php echo set_checkbox('D26','8'); echo $fila->D26h;?>/>
											Derechos sexuales y reproductivos
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26j" type="checkbox" name="D26[]" class="D26 D26z" onclick="D26()" value="9" <?php echo set_checkbox('D26','9'); echo $fila->D26i;?>/>
											Afecto y comunicación
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26k" type="checkbox" name="D26[]" class="D26 D26z" onclick="D26()" value="10" <?php echo set_checkbox('D26','10'); echo $fila->D26j;?>/>
											Vida en pareja
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26l" type="checkbox" name="D26[]" class="D26 D26z" onclick="D26()" value="11" <?php echo set_checkbox('D26','11'); echo $fila->D26k;?>/>
											Decisiones sexuales en pareja
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26m" type="checkbox" name="D26[]" class="D26 D26z" onclick="D26()" value="12" <?php echo set_checkbox('D26','12'); echo $fila->D26l;?>/>
											Anatomía y fisiología del aparato reproductor
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input id="D26n" type="checkbox" name="D26[]" class="D26 D26z" onclick="D26()" value="13" <?php echo set_checkbox('D26','13'); echo $fila->D26m;?>/>
											Anticoncepción
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input id="D26o" type="checkbox" name="D26[]" class="D26 D26z" onclick="D26()" value="14" <?php echo set_checkbox('D26','14'); echo $fila->D26n;?>/>
											Embarazo y parto
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input id="D26p" type="checkbox" name="D26[]" class="D26 D26z" onclick="D26()" value="15" <?php echo set_checkbox('D26','15'); echo $fila->D26o;?>/>
											Aborto
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input id="D26q" type="checkbox" name="D26[]" class="D26 D26z" onclick="D26()" value="16" <?php echo set_checkbox('D26','16'); echo $fila->D26p;?>/>
											Violencia y abuso sexual
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input id="D26q" type="checkbox" name="D26[]" class="D26 D26z" onclick="D26()" value="17" <?php echo set_checkbox('D26','17'); echo $fila->D26q;?>/>
											Infecciones de Transmisión Sexual y Sida
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input id="D26r" class type="checkbox" name="D26[]" onclick="ocultos(this.id)" value="18" <?php echo set_checkbox('D26','18'); echo $fila->D26r;?>/>
											No te acuerdas
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input id="D26s" type="checkbox" name="D26[]"  onclick="D26()" value="19" <?php echo set_checkbox('D26','19'); echo $fila->D26s;?>/>
											No te han hablado de estos temas
										</label>							
									</div>
									<div class="t_error"><?php echo strip_tags(form_error('D26[]')); ?></div>
							</div>
						</div>
								
						<!-- Pregunta 27-->
						<div class="row form-group">
							<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">27. En los <span class="sub_raya">últimos 12 meses</span>, ¿con quién o con quiénes has hablado sobre sexualidad?</label>
							<div class="col-lg-12 incluyente">
									<div class="checkbox">
										<label>
											<input type="checkbox" id="D27a" name="D27[]" class="D27" onclick="D27()"  value="1" <?php echo set_checkbox('D27','1'); echo $fila->D27a;?>/>	Mamá
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" id="D27b"  name="D27[]" class="D27" onclick="D27()"  value="2" <?php echo set_checkbox('D27','2'); echo $fila->D27b;?>/>	Papá
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" id="D27c"  name="D27[]" class="D27" onclick="D27()"  value="3" <?php echo set_checkbox('D27','3'); echo $fila->D27c;?>/>	Padrastro
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" id="D27d"  name="D27[]" class="D27" onclick="D27()"  value="4" <?php echo set_checkbox('D27','4'); echo $fila->D27d;?>/>
											Madrastra
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input  id="D27e" type="checkbox" name="D27[]" class="D27" onclick="D27()"  value="5" <?php echo set_checkbox('D27','5'); echo $fila->D27e;?>/>
											Tu pareja (novio/a, esposo/a, compañero/a)
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input  id="D27f" type="checkbox" name="D27[]" class="D27" onclick="D27()"  value="6" <?php echo set_checkbox('D27','6'); echo $fila->D27f;?>/>
											Hermanas
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input  id="D27g" type="checkbox" name="D27[]" class="D27" onclick="D27()" value="7" <?php echo set_checkbox('D27','7'); echo $fila->D27g;?>/>
											Hermanos
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D27h" type="checkbox" name="D27[]" class="D27" onclick="D27()" value="8" <?php echo set_checkbox('D27','8'); echo $fila->D27h;?>/>
											Otros familiares: abuelos(as), tíos(as), primos(as)
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input  id="D27i" type="checkbox" name="D27[]" class="D27" onclick="D27()"  value="9" <?php echo set_checkbox('D27','9'); echo $fila->D27i;?>/>
											Empleados(as) del servicio doméstico
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input  id="D27j" type="checkbox" name="D27[]" class="D27" onclick="D27()"  value="10" <?php echo set_checkbox('D27','10'); echo $fila->D27j;?>/>
											Amigos o compañeros
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input  id="D27k" type="checkbox" name="D27[]" class="D27" onclick="D27()"  value="11" <?php echo set_checkbox('D27','11'); echo $fila->D27k;?>/>
											Amigas o compañeras
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input  id="D27l" type="checkbox" name="D27[]" class="D27" onclick="D27()"  value="12" <?php echo set_checkbox('D27','12'); echo $fila->D27l;?>/>
											Profesores
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input  id="D27m" type="checkbox" name="D27[]" class="D27" onclick="D27()"  value="13" <?php echo set_checkbox('D27','13'); echo $fila->D27m;?>/>
											Profesoras
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input  id="D27n" type="checkbox" name="D27[]" class="D27" onclick="D27()" value="14" <?php echo set_checkbox('D27','14'); echo $fila->D27n;?>/>
											Con personas no familiares
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input  id="D27o" type="checkbox" name="D27[]" class="D27" onclick="D27()" value="15" <?php echo set_checkbox('D27','15'); echo $fila->D27o;?>/>
											Psicólogo(a) u orientador(a)
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input  id="D27p" type="checkbox" name="D27[]" class="D27" onclick="D27()" value="16" <?php echo set_checkbox('D27','16'); echo $fila->D27p;?>/>
											Contactos a través de internet
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input  id="D27q" type="checkbox" name="D27[]" class="D27" onclick="D27()" value="17" <?php echo set_checkbox('D27','17'); echo $fila->D27q;?>/>
											Guía espiritual
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input id="D27r" class type="checkbox" name="D27[]" onclick="ocultos(this.id)" value="18" <?php echo set_checkbox('D27','18'); echo $fila->D27r;?>/>
											Con nadie
										</label>							
									</div>
									<p class="t_error"><?php echo strip_tags(form_error('D27[]')); ?></p>
							</div>
						</div>		

						<!-- Pregunta 28-->
						<div class="row form-group">
							<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">28. Te gustan o sientes atracción por: </label>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<label class="col-lg-3 col-md-3 col-sm-2 col-xs-4">
									<img src='<?php echo base_url("images/hombre2.png");?>' class="img-responsive"/> 
										Hombres 
								</label>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
									<div class="radio radio-primary">
										<label>
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D28a == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D28a == 2) {$rta1  =''; $rta2='checked';}
										?>
											<input type="radio" name="D28a" value ="1" <?php echo set_radio('D28a','1'); echo $rta1;?>/>
											Si
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D28a" value ="2" <?php echo set_radio('D28a','2'); echo $rta2;?>/>
											No
										</label>
									</div>
								</div>	
								<div class="col-lg-6">
									<p class="t_error"><?php echo strip_tags(form_error('D28a')); ?></p>
								</div>
							</div>
						
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<label class="col-lg-3 col-md-3 col-sm-2 col-xs-4">
										<img src='<?php echo base_url("images/mujer2.png");?>' class="img-responsive"/> 
								   		Mujeres
								</label>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
									<div class="radio radio-primary">
										<label>
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D28b == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D28b == 2) {$rta1  =''; $rta2='checked';}
										?>
											<input type="radio" name="D28b" value ="1" <?php echo set_radio('D28b','1'); echo $rta1;?>/>
											Si
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D28b" value ="2" <?php echo set_radio('D28b','2'); echo $rta2;?>/>
											No
										</label>
									</div>
								</div>
								<div class="col-lg-4">
									<p class="t_error"><?php echo strip_tags(form_error('D28b')); ?></p>
								</div>
							</div>
						</div>

						<div class="container">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<input type="submit" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" value="Siguiente"/>
							</div>
						</div>
					
				</div>
					<!-- ************************************************************************************************************************************************************************************* -->
				<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="10">  <!--Slide 9-->
					<p class="glosario">
						<b>Relación sexual:</b> "Incluyen, además de besos, abrazos y caricias, contacto genital (pene - vagina, pene - ano, pene – boca) o penetración con otro tipo de elementos u objetos."
					</p>

						<!-- Pregunta 29-->
						<div class="row form-group">
								
								<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">29. ¿Conoces a alguna persona que haya recibido algo a cambio de tener relaciones sexuales (por ejemplo, dinero, ropa, calificaciones u otros regalos)?</label>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D29 == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D29 == 2) {$rta1  =''; $rta2='checked';}
										?>
											<input type="radio" name="D29" id="D29a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D29','1'); echo $rta1; ?>/>
											Si
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D29" id="D29b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D29','2'); echo $rta2; ?>/>
											No
										</label>
									</div>
								</div>
								<div class="col-lg-6">
									<p class="t_error"><?php echo strip_tags(form_error('D29')); ?></p>
								</div>
							</div>
							
							<!-- Pregunta 30-->						
							<div class="row form-group">
							<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">30. ¿Alguna vez te han hecho propuestas o insinuaciones de tipo sexual?</label>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
											<?php
												$rta1 =''; $rta2='';
												if ($fila->D30 == 'checked') {$rta1 ='checked'; $rta2='';}
												if ($fila->D30 == 2) {$rta1  =''; $rta2='checked';}
											?>
											<input type="radio" name="D30" id="D30a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D30','1'); echo $rta1; ?>/>
											Si
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D30" id="D30b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D30','2'); echo $rta2; ?>/>
											No
										</label>
									</div>
								</div>	
								<div class="col-lg-6">
									<p class="t_error"><?php echo strip_tags(form_error('D30')); ?></p>
								</div>
							</div>	

							<!-- Pregunta 31-->
							<div class="row form-group">		
								<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">31. ¿Alguna vez te han propuesto exponer tu cuerpo (por ejemplo, en videos o fotos) a cambio de  algo (por ejemplo, dinero, ropa, calificaciones u otros regalos)?</label>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D31 == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D31 == 2) {$rta1  =''; $rta2='checked';}
										?>
											<input type="radio" name="D31" id="D31a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D31','1'); echo $rta1; ?>/>
											Si
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D31" id="D31b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D31','2'); echo $rta2; ?>/>
											No
										</label>
									</div>
								</div>
								<div class="col-lg-6">
									<p class="t_error"><?php echo strip_tags(form_error('D31')); ?></p>
								</div>
							</div>

							<!-- Pregunta 32-->
							<div class="row form-group">	
								<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">32. ¿Alguna vez te han ofrecido algo (por ejemplo, dinero, ropa, calificaciones u otros regalos) a cambio de tener relaciones sexuales contigo?</label>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D32 == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D32 == 2) {$rta1  =''; $rta2='checked';}
										?>
											<input type="radio" name="D32" id="D32a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D32','1'); echo $rta1; ?>/>
											Si
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D32" id="D32b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D32','2'); echo $rta2; ?>/>
											No
										</label>
									</div>
								</div>
								<div class="col-lg-6">
									<p class="t_error"><?php echo strip_tags(form_error('D32')); ?></p>
								</div>
							</div>

							<!-- Pregunta 33-->
							<div class="row form-group">	
								<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">33. ¿Alguna vez te han tocado alguna parte de tu cuerpo de manera sexual, sin que tú lo quisieras?</label>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D33 == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D33 == 2) {$rta1  =''; $rta2='checked';}
										?>
											<input type="radio" name="D33" id="D33a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D33','1'); echo $rta1; ?>/>
											Si
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D33" id="D33b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D33','2'); echo $rta2; ?>/>
											No
										</label>
									</div>
								</div>
								<div class="col-lg-6">
									<p class="t_error"><?php echo strip_tags(form_error('D33')); ?></p>
								</div>
							</div>

							<!-- Pregunta 34-->
							<div class="row form-group">	
								<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">34. ¿Alguna vez has enviado fotos o videos sexuales tuyos por mensaje de texto o email?</label>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D34 == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D34 == 2) {$rta1  =''; $rta2='checked';}
										?>
											<input type="radio" name="D34" id="D34a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D34','1'); echo $rta1; ?>/>
											Si
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D34" id="D34b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D34','2'); echo $rta2; ?>/>
											No
										</label>
									</div>
								</div>
								<div class="col-lg-6">
									<p class="t_error"><?php echo strip_tags(form_error('D34')); ?></p>
								</div>
							</div>

							<!-- Pregunta 35 (if)-->
							<div class="row form-group" id="verD35">	
								<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">35. ¿Alguna vez has recibido algo (por ejemplo, dinero, ropa, calificaciones u otros regalos) a cambio de exponer tu cuerpo (por ejemplo, en videos o fotos)?</label>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D35 == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D35 == 2) {$rta1  =''; $rta2='checked';}
										?>
											<input type="radio" name="D35" id="D35a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D35','1'); echo $rta1; ?>/>
											Si
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D35" id="D35b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D35','2'); echo $rta2; ?>/>
											No
										</label>
									</div>
								</div>
								<div class="col-lg-6">
									<p class="t_error"><?php echo strip_tags(form_error('D35')); ?></p>
								</div>
							</div>

							<!-- Pregunta 36-->
							<div class="row form-group">
							 	<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
									36. ¿Alguna vez has participado en juegos sexuales en grupo?
								</label>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D36 == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D36 == 2) {$rta1  =''; $rta2='checked';}
										?>
										<label>
											<input type="radio" name="D36" id="D36a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D36','1'); echo $rta1; ?>/>
											Si
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D36" id="D36b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D36','2'); echo $rta2; ?>/>
											No
										</label>
									</div>
								</div>	
								<div class="col-lg-6">
									<p class="t_error"><?php echo strip_tags(form_error('D36')); ?></p>
								</div>				
							</div>

							<div class="col-md-12 glosario">
								<b>Juegos Sexuales:</b> se refiere a la práctica de relaciones sexuales, entre dos o más personas, en el contexto de algún tipo de juego o de competencia.
							</div>	
							

							<!-- Pregunta 37 -->
							<div class="row form-group">
								<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">37. ¿Alguna vez te han pagado o dado algo a cambio (por ejemplo, dinero, ropa, calificaciones u otros regalos) para trasladarte a otra región, ciudad o barrio a realizar alguna de las siguientes actividades: </label>

								<p class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></p>					
								<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Tener relaciones sexuales</label>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
											<?php
												$rta1 =''; $rta2='';
												if ($fila->D37a == 'checked') {$rta1 ='checked'; $rta2='';}
												if ($fila->D37a == 2) {$rta1  =''; $rta2='checked';}
											?>
											<input type="radio" name="D37a" id="D37a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D37a','1'); echo $rta1;?>/>
												Si
											</label>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
												<input type="radio" name="D37a" id="D37b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D37a','2'); echo $rta2;?>/>
												No
											</label>
										</div>
									</div>
									<div class="col-lg-6">
										<span class="t_error"><?php echo strip_tags(form_error('D37a')); ?></span>
									</div>
								</div>
								<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Bailar en clubes nocturnos</label>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
											<?php
												$rta1 =''; $rta2='';
												if ($fila->D37b == 'checked') {$rta1 ='checked'; $rta2='';}
												if ($fila->D37b == 2) {$rta1  =''; $rta2='checked';}
											?>
												<input type="radio" name="D37b" id="D38a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D37b','1'); echo $rta1;?>/>
												Si
											</label>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
												<input type="radio" name="D37b" id="D38b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D37b','2'); echo $rta2;?>/>
												No
											</label>
										</div>
									</div>	
									<div class="col-lg-6">
										<span class="t_error"><?php echo strip_tags(form_error('D37b')); ?></span>
									</div>
								</div>	
								<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">		
									<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Acompañar turistas</label>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
											<?php
												$rta1 =''; $rta2='';
												if ($fila->D37c == 'checked') {$rta1 ='checked'; $rta2='';}
												if ($fila->D37c == 2) {$rta1  =''; $rta2='checked';}
											?>
												<input type="radio" name="D37c" id="D39a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D37c','1'); echo $rta1;?>/>
												Si
											</label>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
												<input type="radio" name="D37c" id="D39b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D37c','2'); echo $rta2;?>/>
												No
											</label>
										</div>
									</div>
									<div class="col-lg-6">
										<span class="t_error"><?php echo strip_tags(form_error('D37c')); ?></span>
									</div>
								</div>
								<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
									<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Asistir a sesiones de fotografía y video sin ropa</label>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
											<?php
												$rta1 =''; $rta2='';
												if ($fila->D37d == 'checked') {$rta1 ='checked'; $rta2='';}
												if ($fila->D37d == 2) {$rta1  =''; $rta2='checked';}
											?>
												<input type="radio" name="D37d" id="D40a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D37d','1'); echo $rta1;?>/>
												Si
											</label>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
												<input type="radio" name="D37d" id="D40b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D37d','2'); echo $rta2;?>/>
												No
											</label>
										</div>
									</div>
									<div class="col-lg-6">
										<span class="t_error"><?php echo strip_tags(form_error('D37d')); ?></span>
									</div>
								</div>
								<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
									<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Dar masajes</label>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
											<?php
												$rta1 =''; $rta2='';
												if ($fila->D37e == 'checked') {$rta1 ='checked'; $rta2='';}
												if ($fila->D37e == 2) {$rta1  =''; $rta2='checked';}
											?>
												<input type="radio" name="D37e" id="D41a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D37e','1'); echo $rta1;?>/>
												Si
											</label>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
												<input type="radio" name="D37e" id="D41b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D37e','2'); echo $rta2;?>/>
												No
											</label>
										</div>
									</div>
									<div class="col-lg-6">
										<span class="t_error"><?php echo strip_tags(form_error('D37e')); ?></span>
									</div>
								</div>
							</div>

							<!-- Pregunta 38-->
							<div class="row form-group" id="D40ab" style ="display:none;">	
								<label class="col-lg-6 col-md-8 col-sm-12 col-xs-12">38. ¿Le has comentado a alguien sobre estas experiencias que has vivido?</label>								
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D38 == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D38 == 2) {$rta1  =''; $rta2='checked';}
										?>
											<input type="radio" name="D38" id="D38ab" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D38','1'); echo $rta1; ?>/>
											Si
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D38" id="D38abc" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D38','2'); echo $rta2; ?>/>
											No
										</label>
									</div>
								</div>	
								<div class="col-lg-3">
									<span class="t_error"><?php echo strip_tags(form_error('D38')); ?></span>
								</div>						
							</div>


							<!-- Pregunta 39-->
							
							<div class="row form-group" id="D39" style ="display:none;">
								<label>39. ¿A quién?</label>
									<div class="checkbox">
										<label>
											<input id="ch33" type="checkbox" class="D39" name="D39[]" value ="1" <?php echo set_radio('D39[]','1'); echo $fila->D39a; ?> />
											A algún familiar (mamá, papá, hermanos, abuelos, madrastra, etc.)
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="ch34" type="checkbox" class="D39" name="D39[]" value ="2" <?php echo set_radio('D39[]','2'); echo $fila->D39b; ?> />
											A tus amigos(as) o compañeros(as)
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="ch35" type="checkbox" class="D39" name="D39[]" value ="3" <?php echo set_radio('D39[]','3'); echo $fila->D39c; ?> />
											A tu pareja (novio/a, esposo/a, compañero/a sentimental)
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="ch36" type="checkbox" class="D39" name="D39[]" value ="4" <?php echo set_radio('D39[]','4'); echo $fila->D39d; ?> />
											A algún trabajador de tu colegio (orientador, profesor, etc.)
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="ch37" type="checkbox" class="D39" name="D39[]" value ="5" <?php echo set_radio('D39[]','5'); echo $fila->D39e; ?> />
											Acudiste donde un médico(a), enfermera(o), psicólogo(a), etc.
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="ch38" type="checkbox" class="D39" name="D39[]" value ="6" <?php echo set_radio('D39[]','6'); echo $fila->D39f; ?> />
											Acudiste a las autoridades (ICBF, Comisarias de familia, Policia)
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="ch39" type="checkbox" class="D39" name="D39[]" value ="7" <?php echo set_radio('D39[]','7'); echo $fila->D39g; ?> onclick="ocultos(this.id)" />
											Otro, ¿cuál?
										</label>
										<input type="text" id="D39g_cual" onkeypress="return soloLetras(event);" <?php echo "value='".set_value('D39g_cual',$fila->D39g_cual)."'";?> name="D39g_cual"/>
										<span class="t_error"><?php echo strip_tags(form_error('D39g_cual')); ?></span>
								</div>	
								<div class="col-lg-6">
									<p class="t_error"><?php echo strip_tags(form_error('D39[]')); ?></p>
								</div>
							</div>	

							<div class="container">			
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<input type="submit" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" value="Siguiente"/>
								</div>
							</div>
					<?#php echo form_close(); ?>
				</div>
								<!-- ************************************************************************************************************************************************************************************* -->
				<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="11">

						<!-- Pregunta 40-->
						<div class="row form-group">
							<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">40. ¿Has tenido relaciones sexuales?</label>
							<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->D40 == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->D40 == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="D40" value ="1" <?php echo set_radio('D40','1'); echo $rta1; ?>/>
										Si
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="D40" value ="2" <?php echo set_radio('D40','2'); echo $rta2; ?>/>
										No
									</label>
								</div>
							</div>
							<p class="t_error" id="error_D40"><?php echo strip_tags(form_error('D40')); ?></p>
						</div>
						<div class="container"></div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<input type="submit" class="btn btn-raised btn-success arrow-r" id="btn_D40" style="position:relative;right: 0px;" value="Siguiente"/>
							</div>
				</div>
				<div class="pagina aparece-a-clase container" data-slide="12"> <!--Slide 10-->
					
						
					     <div id="grupo_sex">
					     	<!-- Pregunta 41-->
							<div class="row form-group">
								<label class="col-lg-5 col-md-8 col-sm-6 col-xs-12">41. ¿A qué edad fue tu primera relación sexual?</label>
								<div class="col-lg-7 col-md-4 col-sm-6 col-xs-12">
									<div class="radio radio-primary"> 
										<label>
											<input type="text" id="D41" name="D41" onkeypress="return solonumeros(event);" <?php echo "value='".set_value('D41',$fila->D41)."'";?> />
										</label>
									</div>
									<p class="t_error"><?php echo strip_tags(form_error('D41')); ?></p>
								</div>	
							</div>

							<!-- Pregunta 42-->
							<div class="row form-group">
								<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">42. La persona con la que tuviste la primera relación sexual era:</label>

								<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<?php
									 	$rta1 =''; $rta2='';
										if ($fila->D42I == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->D42I == 2) {$rta1  =''; $rta2='checked';}
								?>	
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sub_t" id="cap_4">Sexo</label>	
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container">
											<div class="row radio radio-primary col-lg-12 col-md-12 col-sm-12 col-xs-12">
										 		<img class="col-lg-6 col-md-6 col-sm-12 col-xs-4 img-responsive" src='<?php echo base_url("images/hombre2.png");?>'> <br>
											    <label class="col-lg-6 col-md-6 col-sm-12 col-xs-8">
											    	<input type="radio" name="D42I" value ="1" <?php echo set_radio('D42I','1'); echo $rta1;?>/>
											  	    Hombre
											   	</label>							
											</div>
										  	<div class="row radio radio-primary col-lg-12 col-md-12 col-sm-12 col-xs-12">	 	
										  		<img class="col-lg-6 col-md-6 col-sm-12 col-xs-4 img-responsive" src='<?php echo base_url("images/mujer2.png");?>'><br> 
												<label class="col-lg-6 col-md-6 col-sm-12 col-xs-8">
													<input type="radio" name="D42I" value ="2" <?php echo set_radio('D42I','2'); echo $rta2;?>/>
												  Mujer
												</label>
										 	</div>	
										 	<p class="t_error"><?php echo strip_tags(form_error('D42I')); ?>
										 	</p>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sub_t" id="cap_4">Edad</label>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">						
											<div class="radio radio-primary">
													<label>
													<?php
													for ($i=0;$i<=7;$i++)
													{
														$rta[$i]='';
													}
													if ($fila->D42II=='checked'){
														$rta[1] = 'checked';
													}else $rta[$fila->D42II] = 'checked';
												?>
														<input type="radio" name="D42II" value ="1" <?php echo set_radio('D42II','1'); echo $rta[1]; ?>/>
														Una persona mayor que tú (cinco años o más)
													</label>
											</div>
											<div class="radio radio-primary">
													<label>
														<input type="radio" name="D42II" value ="2" <?php echo set_radio('D42II','2'); echo $rta[2]; ?>/>
														Una persona aproximadamente de tu misma edad
													</label>
											</div>				
											<div class="radio radio-primary">
													<label>
														<input type="radio" name="D42II" id="D42II_c" value ="3" <?php echo set_radio('D42II','3'); echo $rta[3]; ?>/>
														Una persona menor que tú (cinco años o más)
													</label>
											</div>
											<p class="t_error"><?php echo strip_tags(form_error('D42II')); ?></p>	
										</div>	
									</div>
									<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
										<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sub_t" id="cap_4">Relación con esa persona</label>	
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">							<div class="radio radio-primary">
												<label>
													<?php
														for ($i=0;$i<=7;$i++)
														{
															$rta[$i]='';
														}
														if ($fila->D42III=='checked'){
															$rta[1] = 'checked';
														}else $rta[$fila->D42III] = 'checked';
													?>
														<input type="radio" name="D42III" value ="1" <?php echo set_radio('D42III','1'); echo $rta[1]; ?>/>
														Pareja (novio/a, esposo/a, compañero/a)
												</label>
											</div>
											<div class="radio radio-primary">
												<label>
													<input type="radio" name="D42III" value ="2" <?php echo set_radio('D42III','2'); echo $rta[2]; ?>/>
													Amigo(a)
												</label>
											</div>
											  <div class="radio radio-primary">
												<label>
													<input type="radio" name="D42III" value ="3" <?php echo set_radio('D42III','3'); echo $rta[3]; ?>/>
													Un familiar
												</label>
											</div>
									
											<div class="radio radio-primary">
												<label>
													<input type="radio" name="D42III" value ="4" <?php echo set_radio('D42III','4'); echo $rta[4]; ?>/>
													Conocido(a)
												</label>
											</div>
											<div class="radio radio-primary">
												<label>
													<input type="radio" name="D42III" value ="5" <?php echo set_radio('D42III','5'); echo $rta[5]; ?>/>
													Persona en ejercicio de la prostitución
												</label>
											</div>
											<div class="radio radio-primary">
												<label>
													<input type="radio" name="D42III" value ="6" <?php echo set_radio('D42III','6'); echo $rta[6]; ?>/>
													Desconocido
												</label>
											</div>
								   			<p class="t_error"><?php echo strip_tags(form_error('D42III')); ?></p>					
							    		</div>
									</div>
								</div>
							</div>

							<!-- Pregunta 43-->	
							<div class="row form-group">
							   <label class="col-lg-12">43. ¿Cuál fue el principal motivo para tener tu primera relación sexual?</label>
								<div class="col-lg-12">
									<div class="radio radio-primary">
										<label>
										<?php
											for ($i=0;$i<=10;$i++)
											{
												$rta[$i]='';
											}
											if ($fila->D43=='checked'){
												$rta[1] = 'checked';
											}else $rta[$fila->D43] = 'checked';
										?>
											<input type="radio" name="D43" value ="1" <?php echo set_radio('D43','1'); echo $rta[1]; ?>/>
											Amor
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D43" value ="2" <?php echo set_radio('D43','2'); echo $rta[2]; ?>/>
											Curiosidad
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D43" value ="3" <?php echo set_radio('D43','3'); echo $rta[3]; ?>/>
											En el momento te dieron ganas
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D43" value ="4" <?php echo set_radio('D43','4'); echo $rta[4]; ?>/>
											Te casaste (fue en tu noche de bodas)
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D43" value ="5" <?php echo set_radio('D43','5'); echo $rta[5]; ?>/>
											Presión de tu pareja / novio(a)
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D43" value ="6" <?php echo set_radio('D43','6'); echo $rta[6]; ?>/>
											Presión de tus amigos(as)
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D43" value ="7" <?php echo set_radio('D43','7'); echo $rta[7]; ?>/>
											Estabas bajo los efectos del alcohol o sustancias psicoactivas
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D43" value ="8" <?php echo set_radio('D43','8'); echo $rta[8]; ?>/>
											Fue contra tu voluntad
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D43" value ="9" <?php echo set_radio('D43','9'); echo $rta[9]; ?>/>
											Te dieron algo a cambio (comida, regalos, dinero, etc.)
										</label>
									</div>
									<div class="radio radio-primary" class="col-lg-12">
										<label class="col-lg-2">
											<input type="radio" name="D43" id="D41_otro" value ="10" <?php echo set_radio('D43','10'); echo $rta[10];?> />
											Otro, ¿cuál?
										</label>
										<label class="col-lg-3">
										<input type="text" id="D43_cual" name='D43_cual' onkeypress="return soloLetras(event);" value ="<?php echo set_value('D43_cual');?>" />
										</label>
										<span class="t_error"><?php echo strip_tags(form_error('D43_cual')); ?></span>
									</div>	
							    </div>					 
						    </div>
						    <p class="t_error"><?php echo strip_tags(form_error('D43')); ?></p>
						</div>
						<div class="container">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<input type="submit" class="btn btn-raised btn-success arrow-r" id="btn_D40" style="position:relative;right: 0px;" value="Siguiente"/>
							</div>
						</div>
					
				</div>

				<!-- ************************************************************************************************************************************************************************************* -->
			<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="13">
					
						<!-- Pregunta 44-->
					    <div class="form-group row">
					        <label class="col-lg-6 col-md-8 col-sm-12 col-xs-12">44. ¿Has estado en embarazo o has dejado en embarazo a alguna mujer?</label>
					        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
						        <div class ="radio radio-primary">
							         <label>
							          <?php
							          	$rta1 =''; $rta2='';
											if ($fila->D44 == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D44 == 2) {$rta1  =''; $rta2='checked';}
										?>
							            <input type="radio" name="D44" value ="1" <?php echo set_radio('D44','1'); echo $rta1; ?>/>
							          	   Si
							        </label>
							    </div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							    <div class ="radio radio-primary">

							        <label>
							         <input type="radio" name="D44" value ="2" <?php echo set_radio('D44','2'); echo $rta2; ?>/>
							         No
							        </label>
							        <p class="t_error" id="error_D44"> <?php echo strip_tags(form_error('D44')); ?></p>
						     	</div>
						    </div>
					    </div>

					    <!-- Pregunta 45-->
					    <div class="row form-group">
					        <label class="col-lg-6 col-md-8 col-sm-12 col-xs-12">45. ¿En tu primera relación sexual utilizaste algún método anticonceptivo?</label>
					        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
						        <div class ="radio radio-primary">
							        <label>
							        <?php
							        	$rta1 =''; $rta2='';
										if ($fila->D45 == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->D45 == 2) {$rta1  =''; $rta2='checked';}
										?>
							         <input type="radio" name="D45" value ="1" <?php echo set_radio('D45','1'); echo $rta1; ?>/>
							         Si
							        </label>
							    </div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							    <div class ="radio radio-primary">
							        <label>
							         <input type="radio" name="D45" value ="2" <?php echo set_radio('D45','2'); echo $rta2; ?>/>
							         No
							        </label>
							        <span class="t_error"><?php echo strip_tags(form_error('D45')); ?></span>
							    </div>
							</div>
					    </div>

					    <!-- Pregunta 46-->
					    <div class="row form-group">
					        <label class="col-lg-6 col-md-8 col-sm-12 col-xs-12">46. ¿En tu última relación sexual utilizaste algún método anticonceptivo?</label>
					        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
						        <div class ="radio radio-primary">
							        <label>
							        <?php
							        	$rta1 =''; $rta2='';
										if ($fila->D46 == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->D46 == 2) {$rta1  =''; $rta2='checked';}
									?>
							         <input type="radio" name="D46" value ="1" <?php echo set_radio('D46','1'); echo $rta1; ?>/>
							         Si
							        </label>
							    </div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">   
							    <div class ="radio radio-primary">
							        <label>
							         <input type="radio" name="D46" value ="2" <?php echo set_radio('D46','2'); echo $rta2; ?>/>
							         No
							        </label>
							        <span class="t_error"><?php echo strip_tags(form_error('D46')); ?></span>
						        </div>
						    </div>
					  </div>
					
					<div class="glosario">
							<b>Métodos anticonceptivos:</b> aquellos que impiden o reducen significativamente las posibilidades de una fecundación o un embarazo en las relaciones sexuales.
					</div>

					<!-- Pregunta 47-->
					<div class="row form-group">
					    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
							<label>47. ¿En los <span class="sub_raya">últimos 12 meses</span> has tenido relaciones sexuales sin uso de métodos anticonceptivos?</label>
						</div>					
						<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
							<div class="radio radio-primary">
								<label>
								<?php
									for ($i=0;$i<=3;$i++)
									{
										$rta[$i]='';
									}
									if ($fila->D47=='checked'){
										$rta[1] = 'checked';
									}else $rta[$fila->D47] = 'checked';
								?>
									<input type="radio" name="D47" id="D47si" onclick="ocultos('D47')" value ="1" <?php echo set_radio('D47','1'); echo $rta[1]; ?>/>
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="D47" onclick = "ocultos('D47no')" value ="2" <?php echo set_radio('D47','2'); echo $rta[2]; ?>/>
									No
								</label>
							</div>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="D47" onclick = "ocultos('D47no2')" value ="3" <?php echo set_radio('D47','3'); echo $rta[3]; ?>/>
									No has tenido relaciones sexuales en los últimos doce meses
								</label>
							</div>
							<span class="t_error"><?php echo strip_tags(form_error('D47')); ?></span>
						</div>
					</div>

					<!-- Pregunta 48-->								
					<div class="row form-group"  style="display:none;" id="anti_c">
						<label class="col-lg-12">48. Si has tenido relaciones sexuales sin uso de métodos anticonceptivos fue porque:
						</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>
										<input id="D45a" class ="D48" type="checkbox" value="1" name="D48[]" <?php echo set_checkbox('D48','1'); echo $fila->D48a;?>/>	
										Son muy costosos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="D45b" class ="D48" type="checkbox" value="2" name="D48[]" <?php echo set_checkbox('D48','2'); echo $fila->D48b;?>/>
										Te dio pena adquirirlos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="D45c" class ="D48" type="checkbox" value="3" name="D48[]" <?php echo set_checkbox('D48','3'); echo $fila->D48c;?>/>
										Te dio pena utilizarlos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="D45d" class ="D48" type="checkbox" value="4" name="D48[]" <?php echo set_checkbox('D48','4'); echo $fila->D48d;?>/>
										Cuando se dio el momento, no los tenías a disposición
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="D45e" class ="D48" type="checkbox" value="5" name="D48[]" <?php echo set_checkbox('D48','5'); echo $fila->D48e;?>/>
										A tu pareja no le gustan
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="D45f" class ="D48" type="checkbox" value="6" name="D48[]" <?php echo set_checkbox('D48','6'); echo $fila->D48f;?>/>
										No se siente lo mismo si los utilizas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="D45g" class ="D48" type="checkbox" value="7" name="D48[]" <?php echo set_checkbox('D48','7'); echo $fila->D48g;?>/>
										Estabas bajo los efectos del alcohol o sustancias psicoactivas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="D45h" class ="D48" type="checkbox" value="8" name="D48[]" <?php echo set_checkbox('D48','8'); echo $fila->D48h;?>/>
										No sabías usarlos
									</label>
								</div>							
								<div class="checkbox">
									<label>
										<input id="D45i" class ="D48" type="checkbox" value="9" name="D48[]" <?php echo set_checkbox('D48','9'); echo $fila->D48i;?>/>
										No conoces los métodos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="D45j" class ="D48" type="checkbox" value="10" name="D48[]" <?php echo set_checkbox('D48','10'); echo $fila->D48j;?>/>
										Fue una relación contra tu voluntad
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="D45k" class ="D48" type="checkbox" value="11" name="D48[]" <?php echo set_checkbox('D48','11'); echo $fila->D48k;?>/>
										Otro
									</label>
								</div>
								
								<span class="t_error"><?php echo strip_tags(form_error('D48[]')); ?></span>
							</div>				
					</div><!--fIN uso anticonceptivo-->

					<div class="container">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<input type="submit" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" value="Siguiente"/>
						</div>
					</div>
				<!--/div-->
			</div>

				<!-- ************************************************************************************************************************************************************************************* -->
			<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="14">
				<?php /*$attributes = array('class' => '', 'id' => '');
					echo form_open('index.php/c_ecas/slide/12', $attributes); */?>
					
					<!--Pregunta 49-->
		       		<div class="row form-group" id="ver_D49">
	             		<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">49. ¿Alguna vez has recibido algo a cambio de tener relaciones sexuales (por ejemplo, dinero, ropa, calificaciones u otros regalos)?
	             		</label>
	             		<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
	             			<div class="radio radio-primary">
	             				<label>
					            <?php
					            	$rta1 =''; $rta2='';
										if ($fila->D49 == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->D49 == 2) {$rta1  =''; $rta2='checked';}
									?>
					             	<input type="radio" name="D49" id="D49si" onclick="ocultos(this.id)" value=1 <?php echo set_radio('D49','1'); echo $rta1; ?>/>
					                Si
					            </label>
	             			</div>
	             		</div>
	             		<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
	             			<div class="radio radio-primary">
	             				<label>
				              		<input type="radio" name="D49" id="D49no" onclick="ocultos(this.id)" value=2 <?php echo set_radio('D49','2'); echo $rta2; ?>/>
				              		No
				             	</label>	
	             			</div>
	             		</div>
						<span class="t_error"><?php echo strip_tags(form_error('D49')); ?></span>			            
		            </div>
		           
		            <!--Pregunta 50-->
		            <div class="row form-group" style="display:none;" id=D50>
		            	<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">50. En los <span class="sub_raya">últimos 12 meses</span>, ¿has tenido relaciones sexuales a cambio de dinero o algo material?</label>
		            	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
		            		<div class="radio radio-primary">
		            			<label>
				                <?php
				                	$rta1 =''; $rta2='';
										if ($fila->D50 == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->D50 == 2) {$rta1  =''; $rta2='checked';}
									?>
				                	<input type="radio" name="D50"  value ="1" <?php echo set_radio('D50','1'); echo $rta1; ?>/>
				                    Si
				                </label>
		            		</div>
		            	</div>
		            	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
		            		<div class="radio radio-primary">
		            			<label>
				                	<input type="radio" name="D50" value ="2" id="D50no" <?php echo set_radio('D50','2'); echo $rta2; ?>/>
				                    No
				                </label>
		            		</div>
		            	</div>
				        <span class="t_error"><?php echo strip_tags(form_error('D50')); ?></span>
		            </div>

		            <!--Pregunta 51-->
		            <div class="row form-group">
		            	<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">51. ¿Alguna vez alguien te forzó a tener una relación sexual sin que lo desearas?</label>
		            	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
		            		<div class="radio radio-primary">
		            			<label>
					            <?php
					            	$rta1 =''; $rta2='';
									if ($fila->D51 == 'checked') {$rta1 ='checked'; $rta2='';}
									if ($fila->D51 == 2) {$rta1  =''; $rta2='checked';}
								?>
					                <input type="radio" name="D51" id="D51si" onclick="ocultos(this.id)" value=1 <?php echo set_radio('D51','1'); echo $rta1; ?>/>
					                Si
					            </label>
		            		</div>
		            	</div>
		            	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
		            		<div class="radio radio-primary">
		            			<label>
				                    <input type="radio" name="D51" id= "D51no" onclick="ocultos(this.id)" value=2 <?php echo set_radio('D51','2'); echo $rta2; ?>/>
				                    No
				                </label>
		            		</div>
		            	</div>
					    <span class="t_error"><?php echo strip_tags(form_error('D51')); ?></span>
		            </div>

		            <!--Pregunta 52-->
		            <div class="row form-group" id="D52" style ='display:none;'>
		            	<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">52. En los <span class="sub_raya">últimos 12 meses</span>, ¿alguien te forzó a tener una relación sexual sin que lo desearas?</label>
		            	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
		            		<div class="radio radio-primary">
		            			<label>
				            	<?php
				            		$rta1 =''; $rta2='';
										if ($fila->D52 == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->D52 == 2) {$rta1  =''; $rta2='checked';}
									?>
				            		<input type="radio" name="D52" value ="1" <?php echo set_radio('D52','1'); echo $rta1; ?>/>
				              		Si
				                </label>
		            		</div>
		            	</div>
		            	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
		            		<div class="radio radio-primary">
		            			<label>
				                    <input type="radio" name="D52" value ="2" id="D52no" <?php echo set_radio('D52','2'); echo $rta2; ?>/>
				              		No
				             	</label>
		            		</div>
		            	</div>
				        <span class="t_error"><?php echo strip_tags(form_error('D52')); ?></span>
		            </div>
		       
		        			
				<!-- Pregunta 53-->
				<div class="row form-group" style="display:none;" id='D53'>
				    
						<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">53. ¿Le has comentado a alguien de lo sucedido?</label>
									
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							<div class="radio radio-primary">
								<label>
								<?php
									$rta1 =''; $rta2='';
									if ($fila->D53 == 'checked') {$rta1 ='checked'; $rta2='';}
									if ($fila->D53 == 2) {$rta1  =''; $rta2='checked';}
								?>
									<input type="radio" name="D53" onclick="ocultos('D53si')" value ="1" <?php echo set_radio('D53','1'); echo $rta1; ?>/>
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="D53" id="D53no" onclick="ocultos('D53no')" value ="2" <?php echo set_radio('D53','2'); echo $rta2; ?>/>
									No
								</label>
							</div>
						</div>
						<span class="t_error"><?php echo strip_tags(form_error('D53')); ?></span>
				</div>

				<!-- Pregunta 54-->								
				<div class="row form-group" style="display:none;" id='D54'>
					<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">54. ¿A quién se lo has comentado?</label>
						<div class="col-lg-12">
							<div class="checkbox">
								<label>
									<input class="D54" type="checkbox" value="1" name="D54[]" <?php echo set_checkbox('D54','1'); echo $fila->D54a;?>/>
									A algún familiar (mamá, papá, hermanos, abuelos, madrastra, etc.)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="D54" type="checkbox" value="2" name="D54[]" <?php echo set_checkbox('D54','2'); echo $fila->D54b;?>/>
									A tus amigos(as) o compañeros(as)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="D54" type="checkbox" value="3" name="D54[]" <?php echo set_checkbox('D54','3'); echo $fila->D54c;?>/>
									A tu pareja (novio/a, esposo/a, compañero/a sentimental)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="D54" type="checkbox" value="4" name="D54[]" <?php echo set_checkbox('D54','4'); echo $fila->D54d;?>/>
									A algún trabajador de tu colegio (orientador, profesor, etc.)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="D54" type="checkbox" value="5" name="D54[]" <?php echo set_checkbox('D54','5'); echo $fila->D54e;?>/>
									Acudiste donde un médico(a), enfermera(o), psicólogo(a), etc.
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="D54" type="checkbox" value="6" name="D54[]" <?php echo set_checkbox('D54','6'); echo $fila->D54f;?>/>
									Acudiste a las autoridades (ICBF, Comisarias de familia, Policia)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="D54" id="D54g" type="checkbox" onclick="ocultos('D54g')" value="7" name="D54[]" <?php echo set_checkbox('D54','7'); echo $fila->D54g;?>/>
									Otro, ¿cuál?
									<input type="text" id="D54g_cual" onkeypress="return soloLetras(event);" name ="D54g_cual" <?php echo "value='".set_value('D54g_cual',$fila->D54g_cual)."'";?> />
									<span class="t_error"><?php echo strip_tags(form_error('D54g_cual')); ?></span>
								</label>
							</div>
							<span class="t_error"><?php echo strip_tags(form_error('D54[]')); ?></span>
						</div>	
					</div>

					<div class="container">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
						<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<input type="submit" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" value="Siguiente"/>
						</div>
					</div>
					<?#php echo form_close(); ?>
			</div>
					<!-- ************************************************************************************************************************************************************************************* -->
			 
			<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="15">
					<?php /*$attributes = array('class' => '', 'id' => '');
						echo form_open('index.php/c_ecas/slide/13', $attributes); */?>

					<label class="col-md-12 sub_t" id="cap_5">Para finalizar, te preguntaremos sobre el uso que haces de la internet. Para eso quiero explicarte que es el uso de Internet.
					</label>

					<div form-group>
						<p class="glosario"><b>Internet:</b> El uso de internet implica el acceso a contenidos en páginas web, buscadores como Google, Bing, etc., mensajería instantánea o chat, correo electrónico, descarga de música, juegos o películas y uso de redes sociales con Facebook, Twitter. Ask.fm, Instagram, entre otras.</p>
					</div>

					<!-- Pregunta 55-->
					<div class="row form-group">
						<label class="col-lg-6 col-md-8 col-sm-12 col-xs-12">55. En los <span class="sub_raya">últimos 12 meses</span>, ¿has navegado en internet?</label>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							<div class="radio radio-primary">
								<label>
								<?php
									$rta1 =''; $rta2='';
									if ($fila->E55 == 'checked') {$rta1 ='checked'; $rta2='';}
									if ($fila->E55 == 2) {$rta1  =''; $rta2='checked';}
								?>
									<input type="radio" name="E55" id='E55si' onclick="ocultos(this.id)" value ="1" <?php echo set_radio('E55','1'); echo $rta1; ?>/>
									Si
								</label>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="E55" id='E55no' onclick="ocultos(this.id)" value ="2" <?php echo set_radio('E55','2'); echo $rta2; ?>/>
									No
								</label>
							</div>
						</div>
						<span class="t_error"><?php echo strip_tags(form_error('E55')); ?></span>
					</div>

					<!-- Pregunta 56-->								
					<div class="row form-group" id="E56" style="display:none;">
						<label class="col-lg-12">56. En los <span class="sub_raya">últimos 12 meses</span>, ¿desde dónde has accedido a internet?</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>

										<input class="E56" type="checkbox" value="1" name="E56[]" <?php echo set_checkbox('E56','1'); echo $fila->E56a;?>/>
										Desde el computador de tu casa
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input class="E56" type="checkbox" value="2" name="E56[]" <?php echo set_checkbox('E56','2'); echo $fila->E56b;?>/>
									    Desde tu celular o dispositivo móvil
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input class="E56" type="checkbox" value="3" name="E56[]" <?php echo set_checkbox('E56','3'); echo $fila->E56c;?>/>
										En el colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input class="E56" type="checkbox" value="4" name="E56[]" <?php echo set_checkbox('E56','4'); echo $fila->E56d;?>/>
										En una sala de internet
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input class="E56" type="checkbox" value="5" name="E56[]" <?php echo set_checkbox('E56','5'); echo $fila->E56e;?>/>
										Desde el computador de la casa de otra persona (familiar, novio/a, amigo/a, vecino/a)
								 	</label>
								</div>
								<div class="checkbox">
									<label>
										<input class="E56" type="checkbox" value="6" name="E56[]" <?php echo set_checkbox('E56','6'); echo $fila->E56f;?>/>
										Otro
									</label>
								</div>
								<span class="t_error"><?php echo strip_tags(form_error('E56[]')); ?></span>		
							</div>	
					</div>

					<!-- Pregunta 57-->	
					<div class="row form-group" id="E57" style="display:none;">
						<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">57. En los <span class="sub_raya">últimos 12 meses</span>, ¿con qué frecuencia has navegado en internet?</label>
							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
								<div class="radio radio-primary">
									<label>
									<?php
									for ($i=0;$i<=4;$i++)
									{
										$rta[$i]='';
									}
									if ($fila->E57=='checked'){
										$rta[1] = 'checked';
									}else $rta[$fila->E57] = 'checked';
								?>
										<input id="E53a" type="radio" name="E57" value ="1" <?php echo set_radio('E57','1'); echo $rta[1]; ?>/>
										Al menos una vez al día
									</label>
								</div>
							</div>
							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
								<div class="radio radio-primary">
									<label>
										<input id="E53b" type="radio"  name="E57" value ="2" <?php echo set_radio('E57','2'); echo $rta[2]; ?>/>
									    Al menos una vez a la semana, pero no todos los días
									</label>
								</div>
							</div>
							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
								<div class="radio radio-primary">
									<label>
										<input id="E53c" type="radio"  name="E57" value ="3" <?php echo set_radio('E57','3'); echo $rta[3]; ?>/>
										Al menos una vez al mes, pero no todas las semanas
									</label>
								</div>
							</div>
							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
								<div class="radio radio-primary">
									<label>
										<input id="E53d" type="radio"  name="E57" value ="4" <?php echo set_radio('E57','4'); echo $rta[4]; ?>/>
										Menos de una vez al mes
									</label>
								</div>
								<span class="t_error"><?php echo strip_tags(form_error('E57')); ?></span>
							</div>	
					</div>
					<!--javascript:void(0)-->

					<div class="container">
					   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<input type="submit" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" value="Siguiente"/>
						</div>
					</div>
				
			</div>
				<!-- ************************************************************************************************************************************************************************************* -->
			<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="16">
					<?php /*$attributes = array('class' => '', 'id' => '');
						echo form_open('index.php/c_ecas/slide/14', $attributes); */?>

					<!-- Pregunta 58-->								
					<div class="row form-group" id="E58" style="display:none;">
						<label class="col-lg-12">58. En los <span class="sub_raya">últimos 12 meses</span>, ¿cuál o cuáles temas has consultado cuando navegas en internet?</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>
										<input id="E54a" type="checkbox" value="1" name="E58[]" class="E58" <?php echo set_checkbox('E58','1'); echo $fila->E58a;?>/>
										Tareas del colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="E54b" type="checkbox" value="2" name="E58[]" class="E58" <?php echo set_checkbox('E58','2'); echo $fila->E58b;?>/>
									    Cursos virtuales
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="E54c" type="checkbox" value="3" name="E58[]" class="E58" <?php echo set_checkbox('E58','3'); echo $fila->E58c;?>/>
										Redes sociales (chat)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="E54d" type="checkbox" value="4" name="E58[]" class="E58" <?php echo set_checkbox('E58','4'); echo $fila->E58d;?>/>
										Noticias o información general
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="E54e" type="checkbox" value="5" name="E58[]" class="E58" <?php echo set_checkbox('E58','5'); echo $fila->E58e;?>/>
										Juegos en línea
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="E54f" type="checkbox" value="6" name="E58[]" class="E58" <?php echo set_checkbox('E58','6'); echo $fila->E58f;?>/>
										Páginas con contenido sexual
									</label>
								</div>	
								<div class="checkbox">
									<label>
										<input id="E54g" type="checkbox" value="7" name="E58[]" class="E58" <?php echo set_checkbox('E58','7'); echo $fila->E58g;?>/>
										Música, videos, películas
									</label>
								</div>		
								<div class="checkbox">
									<label>
										<input id="E54h" type="checkbox" value="8" name="E58[]" class="E58" <?php echo set_checkbox('E58','8'); echo $fila->E58h;?>/>
										Otro
									</label>
								</div>
								<span class="t_error"><?php echo strip_tags(form_error('E58[]')); ?></span>		
							</div>	
					</div>

					<!--Pregunta 59-->
					<div class="row form-group" id= "E59" style="display:none;">
			             <label class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
			            	59. En los <span class="sub_raya">últimos 12 meses</span>, ¿has conocido personas a través de internet?
			                </label>
			                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
			                	<div class="radio radio-primary">
			                		<label>
					                <?php
					                	$rta1 =''; $rta2='';
										if ($fila->E59 == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->E59 == 2) {$rta1  =''; $rta2='checked';}
									?>
					                    <input type="radio"  name="E59" value ="1" <?php echo set_radio('E59','1'); echo $rta1; ?>/>
					                    Si
					                </label>
			                	</div>
			                </div>
			                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
			                	<div class="radio radio-primary">
			                		<label>
					                    <input type="radio"  name="E59" value ="2" <?php echo set_radio('E59','2'); echo $rta2; ?>/>
					                    No
					                </label>
			                	</div>
			                </div>
					                
					                
			                <span class="t_error"><?php echo strip_tags(form_error('E59')); ?></span>
			            </div>

			            <!--Pregunta 60-->
			            <div class="row form-group" id= "E60" style="display:none;">
			            	<label class="col-lg-6 col-md-8 col-sm-12 col-xs-12">60. En los <span class="sub_raya">últimos 12 meses</span>, ¿has tenido conversaciones con contenido sexual con personas que conociste en internet?
			                </label>
			                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
			                	<div class="radio radio-primary">
			                		<label>
					                <?php
					                	$rta1 =''; $rta2='';
										if ($fila->E60 == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->E60 == 2) {$rta1  =''; $rta2='checked';}
									?>
					                    <input type="radio" name="E60"  value ="1" <?php echo set_radio('E60','1'); echo $rta1; ?>/>
					                    Si
					                </label>
			                	</div>
			                </div>
			                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
			                	<div class="radio radio-primary">
			                		<label>
					                    <input type="radio" name="E60" value ="2" id="E60no" <?php echo set_radio('E60','2'); echo $rta2; ?>/>
					                    No
					                </label>
			                	</div>
			                </div>
					                
					                
			                <span class="t_error"><?php echo strip_tags(form_error('E60')); ?></span>
			            </div>
			            
			            <!--Pregunta 61-->
			            <div class="row form-group" id= "E61" style="display:none;">
			            	<label class="col-lg-6 col-md-8 col-sm-12 col-xs-12">61. En los <span class="sub_raya">últimos 12 meses</span>, ¿te has encontrado con una persona que conociste en internet?</label>
				        	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
					        	<div class="radio radio-primary"><label>
					                <?php
					                	$rta1 =''; $rta2='';
										if ($fila->E61 == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->E61 == 2) {$rta1  =''; $rta2='checked';}
									?>
					                    <input type="radio" name="E61" value ="1" <?php echo set_radio('E61','1'); echo $rta1; ?>/>
					                    Si
					                </label></div>
				      	    </div>
				       		<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
					        	<div class="radio radio-primary">
					        		<label>
					                    <input type="radio" name="E61" value ="2" id="E61no" <?php echo set_radio('E61','2'); echo $rta2; ?>/>
					                    No
					                </label>
					        	</div>
				        	</div>        
				        	<span class="t_error"><?php echo strip_tags(form_error('E61')); ?></span>
			            </div>

			            <!--Pregunta 62-->
			            <div class="row form-group" id= "E62" style="display:none;" >
			            	<label class="col-lg-6 col-md-8 col-sm-12 col-xs-12">62. En los <span class="sub_raya">últimos 12 meses</span>, ¿le has enviado fotos o videos tuyos íntimos a personas que conociste en internet?</label>
			            	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
			            		<div class="radio radio-primary">
			            			<label>
					                <?php
					                	$rta1 =''; $rta2='';
										if ($fila->E62 == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->E62 == 2) {$rta1  =''; $rta2='checked';}
									?>
					                    <input type="radio" name="E62" value ="1" <?php echo set_radio('E62','1'); echo $rta1; ?>/>
					                    Si
					                </label>
			            		</div>
			            	</div>
			            	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
			            		<div class="radio radio-primary">
			            			<label>
					                    <input type="radio" name="E62" value ="2" id="E62no" <?php echo set_radio('E62','2'); echo $rta2; ?>/>
					                    No
					                </label>
			            		</div>
			            	</div>
					        <span class="t_error"><?php echo strip_tags(form_error('E62')); ?></span>
			            </div>
			          
			       		<!--Pregunta 63-->
					    <div class="row form-group" id="E63" style="display:none;">
							<label class="col-lg-12">63. ¿Cuáles de los siguientes riesgos de internet conoces?</label>
							<div class="col-lg-12 incluyente">
								<div class="checkbox">
									<label>
										<input id="E59a" type="checkbox" class="E63" value="1" name="E63[]" onclick="ocultos('E63e')" <?php echo set_checkbox('E63','1'); echo $fila->E63a;?>/>	
										Grooming
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="E59b" type="checkbox" class="E63" value="2" name="E63[]" onclick="ocultos('E63e')" <?php echo set_checkbox('E63','2'); echo $fila->E63b;?>/>
									    Sexting
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="E59c" type="checkbox" class="E63" value="3" name="E63[]" onclick="ocultos('E63e')" <?php echo set_checkbox('E63','3'); echo $fila->E63c;?>/>
										Ciberacoso
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="E59d" type="checkbox" class="E63" value="4" name="E63[]" onclick="ocultos('E63e')" <?php echo set_checkbox('E63','4'); echo $fila->E63d;?>/>
										Ciberdependencia
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="E63e" type="checkbox" value="5" onclick="ocultos(this.id)" name="E63[]" <?php echo set_checkbox('E63','5'); echo $fila->E63e;?>/>
										No conozco ninguno de los anteriores
									</label>
								</div>
								<span class="t_error"><?php echo strip_tags(form_error('E63[]')); ?></span>
							</div>	
					    </div>
					<div class="row form-group" id="E64" style="display:none;">
						<label class="col-lg-12">64. ¿Qué es lo que más te gusta de las redes sociales?</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>
										<input id="ch1" type="checkbox" value="1" name="E64[]" class="E64" <?php echo set_checkbox('E64','1'); echo $fila->E64a;?>/>
										Puedes subir fotos, videos y música para compartir
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch2" type="checkbox" value="2" name="E64[]" class="E64" <?php echo set_checkbox('E64','2'); echo $fila->E64b;?>/>
									    Te puedes reencontrar con gente que hace mucho no ves
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch3" type="checkbox" value="3" name="E64[]" class="E64" <?php echo set_checkbox('E64','3'); echo $fila->E64c;?>/>
										Puedes conocer gente nueva
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" value="4" name="E64[]" class="E64" <?php echo set_checkbox('E64','4'); echo $fila->E64d;?>/>
										Te enteras de las cosas que le pasan a tus amigos(as)
									</label>
								</div>
									<div class="checkbox">
									<label>
										<input id="ch4" type="checkbox" value="5" name="E64[]" class="E64" <?php echo set_checkbox('E64','5'); echo $fila->E64e;?>/>
										Otra
									</label>
								</div>
								<span class="t_error"><?php echo strip_tags(form_error('E64[]')); ?></span>
							</div>	
					    </div>
					    <div class="container">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							    <a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<input type="submit" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" value="Finalizar" />
							</div>
						</div>
			<?php echo form_close(); ?>
			</div>
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
		<!--script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"> </script-->

		<script type="text/javascript">

		$(document).ready(function(){

			/*validacione de formulario de cierre*/
			$("#monitor").click(function(){
				$("#form_cierre").show();
			});
			$("#clave").focus(function(){
				$("#err_clave").text("");
			});
			$("#motivo").focus(function(){
				$("#err_motivo").text("");
			});
			$("#btn_close").click(function(){
				var seguir=1
				if ($("#clave").val()=='')
				{
					$("#err_clave").text("Ingresa tu clave");
					seguir=0;
				}
				if ($("#motivo").val()=='')
				{
					$("#err_motivo").text("Ingresa El motivo");
					seguir=0;
				}
				if (seguir==1){
					$.ajax({
		                data: {clave : $("#clave").val(), motivo: $("#motivo").val(), id_e : $("#id_e").val() },
		                url:   '<?php echo base_url('index.php/c_ecas/cerrar_e');?>',//+'index.php/c_ecas/get_grados',
		                type:  'POST',
		                dataType: 'json',
		                beforeSend: function () 
		                {
		                    $("#ms_cierre").html("<img src='<?php echo base_url('images/ajax-loader.gif');?>'>");
		                },
		                success:  function (r) 
		                {
		                	if (r=='0'){
		                		alert("Datos errados");

		                		$("#form_cierre").hide();
		                		$("#clave").val('');
		                		$("#motivo").val('');
		                		$("#ms_cierre").html('');

		                	}
		                	else
		                	    $("#encuesta").text(r);
		                },
		                error: function(errorThrown)
		                {
		                 alert("Ocurrio un error en AJAX!");
		                 alert(errorThrown);
		                }
	            });
			}
		});
			/*validaciones de las preguntas*/
			//Pregunta Pregunta 19
		$("#btn_A8g").click(function(event){
			if($("#A4i").prop('checked') && $("#A9b").prop('checked') ){
			$('#err_A9').text('Por favor revisa tu respuesta, en la pregunta 4 nos informaste vivir actualmente con hijos(as) tuyos(as)');
		    	event.preventDefault();
	 		}
		});
			//pregunta A
			$('input:radio[name=A9]').click(function(){
				if($('input:radio[name=A9]:checked').val()==2){
					$('#B15j').hide();
					$("input:radio[name=B15j]").prop('checked',false);
					}
				else{
					$('#B15j').show();
				}
			});

			$('input:radio[name=C25k]').click(function(){
				if($('input:radio[name=C25k]:checked').val()==7){
					$('#C25k_cual').val('');
					$('#C25k_cual').prop('disabled',true);
				}
				else{
					$('#C25k_cual').prop('disabled',false);
					$('#C25k_cual').val('');
				}
			});

			/*$('#D39g_cual').click(function(){
				$('#ch39').prop('checked',true);
				});*/

			$('#D54g_cual').click(function(){
				$('#D54g').prop('checked',true);
				});

			$('input:radio[name=B18]').click(function(){
				if($('input:radio[name=B18]:checked').val()!='9'){
					$("#B18b").prop("disabled",true);
					$("#B18b").val('');
				}else if ($("#B18a").prop("checked"))
					{
					  $("#B18b").prop("disabled",false);					   
					}
				});

			/**/
			$('input:radio[name=E59]').click(function(){
				if($('input:radio[name=E59]:checked').val()=='1'){
					$('input:radio[name=E60]').prop("checked",false);
					$('#E60').slideDown();
					$('input:radio[name=E61]').prop("checked",false);
					$('#E61').slideDown();
					$('input:radio[name=E62]').prop("checked",false);
					$('#E62').slideDown();
					
				}
				else {
					$('#E60no').prop("checked",true);
					$('#E61no').prop("checked",true);
					$('#E62no').prop("checked",true);
					$('#E60').slideUp();
					$('#E61').slideUp();
					$('#E62').slideUp();

					
					/*$('input:radio[name=E60]').prop('checked',false);
					$('input:radio[name=E61]').prop('checked',false);
					$('input:radio[name=E62]').prop('checked',false);*/
				}
			});

			
			$('input:radio[name=D43]').click(function(){
				if($('input:radio[name=D43]:checked').val()=='10')
					$('#D43_cual').prop('disabled',false);
				else {
					$('#D43_cual').prop('disabled',true);
					$('#D43_cual').val('');
				}
			});

			$('input:radio[name=D40]').click(function(){
			
				if($('input:radio[name=D40]:checked').val()=='1')
				{

					$('#grupo_sex').slideDown("slow");
					$("#btn_D40").prop('disabled',false);
					$("#error_D40").text("");
				}
				else {
					$('#D41').val('');
					$('input:radio[name=D42I]').prop('checked',false);
					$('input:radio[name=D42II]').prop('checked',false);
					$('input:radio[name=D42III]').prop('checked',false);
					$('input:radio[name=D43]').prop('checked',false);
					$('#D43_cual').val('');
					$('#grupo_sex').slideUp("slow");
					if($("#D36a").prop("checked")||$("#D37a").prop("checked"))
					{
						$("#error_D40").text("Por favor revisa tus respuestas de las preguntas 36 y/o 37, nos informaste que ya habías tenido relaciones sexuales");
						$("#btn_D40").prop('disabled',true);
					}
					if ($("#A9a").prop('checked')){
						$("#error_D40").text("Por favor revisa tu respuesta de la pregunta 9, nos informaste que tienes hijos");
						$("#btn_D40").prop('disabled',true);
					}
					$('input:radio[name=D44]').prop('checked',false);
					$('input:radio[name=D45]').prop('checked',false);
					$('input:radio[name=D46]').prop('checked',false);
					$('input:radio[name=D47]').prop('checked',false);
					$('.D48').prop('checked',false);
					$('input:radio[name=D49]').prop('checked',false);
					$('input:radio[name=D50]').prop('checked',false);
					$('input:radio[name=D51]').prop('checked',false);
					$('input:radio[name=D52]').prop('checked',false);
					$('input:radio[name=D53]').prop('checked',false);
					$('.D54').prop('checked',false);
					$("#D54g_cual").val('');
				}

			});

			$("#D41").blur(function(){
				if ($("#D41").val()<=10){
					$("#D42II_c").prop("checked",false);
					$("#D42II_c").prop("disabled",true);
				}
				else
					$("#D42II_c").prop("disabled",false);
			});

			$('input:radio[name=D44]').click(function(){
				if(($('input:radio[name=A9]:checked').val()=='1') && ($('input:radio[name=D44]:checked').val()=='2'))
					{
					 	$("#error_D44").text("Por favor revisa tu respuesta, nos informaste tener hijos");
					}
					else{
						$("#error_D44").text("");
					}
				});
			});

		</script>
		
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
	</body>
</html>
			
