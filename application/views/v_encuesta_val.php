<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>ECAS</title>
		<link href="<?php echo base_url('images/favicon.png')?>" rel="shortcut icon"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap-material-design.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/animaciones.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
				
		
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
					<textarea class="col-lg-2" name="motivo" id="motivo" onkeypress="return soloLetras(event);"></textarea> 
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
			<div class="bs-component" id="menu" style="width: 90%;margin: 20px auto;">
				<div class="btn-group btn-group-sm btn-group-justified btn-group-raised">
					<a class="btn itemMenu" data-pag="1">Características generales</a>
					<a class="btn itemMenu" data-pag="3">Mi entorno social</a>
					<a class="btn itemMenu" data-pag="5">Actividades</a>
					<a class="btn itemMenu" data-pag="7">Sexualidad</a>
					<a class="btn itemMenu" data-pag="14">Uso de internet</a>
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
				    	echo "<div class = 'col-md-2' ></div><span id='ms'>".$mensaje."</span>";
				    } 
				   //echo "<span id='ms'>".$mensaje."</span>";
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
				<input type ="text" id="seguir" name ="seguir" value="<?php if (isset($seguir)){echo $seguir; } else echo '1';?>" style="display:none;"/> 
				<input type ="text" id="id_e" name ="id_e" value="<?php if(isset($ID_ENCUESTA)) echo $ID_ENCUESTA; else echo 'Erro Encuesta sin ID'?>" style="display:none;"/>	
			
			<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="1" style="top:20%;">  <!--Slide 1-->
				<label class="col-md-12 sub_t" id="cap_1">En este capítulo encontrarás preguntas de información general.</label>

					<!-- Pregunta 1-->
					
						<label class="col-md-12">1. ¿Eres hombre o mujer?</label>
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
										Mujer
									</label>
								</div>
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('A1')); ?></p>
						</div>
					
					<!-- Pregunta 2-->	
				<div class="row form-group">
					<label class="col-lg-12">2. ¿Cuántos años cumplidos tienes?</label>
						<div class="col-lg-2">
							<input type="text" id="A2" name="A2" onblur="valNumero(this.id);" onkeypress="return edad(event);" <?php echo "value='".set_value('A2',$fila->A2)."'";?> maxlength="3" size="6"/>
						</div>
					
					<p class="t_error col-lg-6" id='errA2'><?php echo strip_tags(form_error('A2')); ?></p>
				</div>					
				<!-- Pregunta 3-->
					<div class="row form-group"> 
						<label class="col-lg-12">3. De acuerdo con tu cultura, pueblo o rasgos físicos, te reconoces como:</label>
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
									Indígena
								</label>

							</div>
							<div class="radio radio-primary">
								<label>
								
									<input type="radio" name="A3" value="2" <?php echo set_radio("A3","2"); echo $rta[2]; ?> />
									Gitano - Rrom
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="A3" value="3" <?php echo set_radio("A3","3"); echo $rta[3]; ?> />
									Raizal del Archipiélago
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
							<label class="col-lg-12">4. ¿Con quién o con quiénes vives actualmente en tu hogar?</label>
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
										<input id="A4d" onclick="oculto()" class="A4" type="checkbox" name="A4[]" value="4" <?php echo set_checkbox('A4', "4"); echo $fila->A4d;?>/>
										Madrastra
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4e" onclick="oculto()" class="A4 pareja" type="checkbox" name="A4[]" value="5" <?php echo set_checkbox('A4', "5"); echo $fila->A4e;?>/>
										Pareja
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
										<input id="A4i" onclick="oculto()" class="A4 hijos" type="checkbox" name="A4[]" value="9" <?php echo set_checkbox('A4', "9"); echo $fila->A4i;?>/>
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
										Otras personas ajenas a tu familia
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="A4l" onclick="ocultos(this.id)" type="checkbox" name="A4[]" value="12" <?php echo set_checkbox('A4', "12"); echo $fila->A4l; ?>/>
										Nadie (vives solo/a)
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
										Sí
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
										Sí
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
										Sí
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
										Sí
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
										Sí
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
										Sí
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
							<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12"> Hay venta de sustancias psicoactivas (como marihuana, éxtasis, bazuco, entre otras)
							</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->A7c == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->A7c == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="A7c" value ="1" <?php echo set_radio("A7c","1"); echo $rta1; ?> />
										Sí
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
							<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12">Es una zona de tolerancia (sitios destinados a la prestación de servicios para actividades relacionadas al trabajo sexual)</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->A7d == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->A7d == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="A7d" value ="1" <?php echo set_radio("A7d","1"); echo $rta1; ?> />
										Sí
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
										Sí
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
										Sí
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
										Sí
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
										Sí
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
										Sí
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
							<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12"> Es una zona portuaria (zona de servicio de un puerto, donde entran y salen barcos)</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->A7j == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->A7j == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="A7j" value ="1" <?php echo set_radio("A7j","1"); echo $rta1; ?> />
										Sí
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
					
				</div>

		
				<!-- ************************************************************************************************************************************************************************************* -->
				<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="3">				
				  <label class="sub_t col-lg-12 col-md-12 col-sm-12 col-xs-12" id="cap_2" >A continuación encontrarás preguntas acerca de tu hogar y de las personas con quienes compartes tu vida.</label>

					<!--Pregunta 13 ahora B11 solo cambia la numeración en la vista de aqui en adelante se debe ralizar la homologación para reportes-->
					<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">8. Durante los <span class="sub_raya">últimos 12 meses</span>, ¿con quién o con quiénes compartiste la mayor parte del tiempo cuando no estabas en el colegio?</label>
					<div class="row form-group ">
					    <div class="col-md-12 incluyente" id="img-incluyente">
							<div class="checkbox">
								<label>
									<input id="B8a" onclick="ocultos(this.id)" type="checkbox" name="B8[]" value="1" <?php echo set_checkbox("B8","1"); echo $fila->B8a;?> />
									Solo(a)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B8b" type="checkbox" name="B8[]" class="B8" onclick="ocho()" value="2" <?php echo set_checkbox("B8","2"); echo $fila->B8b;?> />
									Mamá
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B8c" type="checkbox" name="B8[]" class="B8" onclick="ocho()" value="3" <?php echo set_checkbox("B8","3"); echo $fila->B8c;?> />
									Papá
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B8d" type="checkbox" name="B8[]" class="B8" onclick="ocho()" value="4" <?php echo set_checkbox("B8","4"); echo $fila->B8d;?> />
									Padrastro
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B8e" type="checkbox" name="B8[]" class="B8" onclick="ocho()" value="5" <?php echo set_checkbox("B8","5"); echo $fila->B8e;?> />
									Madrasta
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B8f" type="checkbox" name="B8[]" class="B8 pareja" onclick="ocho()" value="6" <?php echo set_checkbox("B8","6"); echo $fila->B8f;?> />
									Pareja
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B8g" type="checkbox" name="B8[]" class="B8" onclick="ocho()" value="7" <?php echo set_checkbox("B8","7"); echo $fila->B8g;?> />
									Abuelos
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B8h" type="checkbox" name="B8[]" class="B8" onclick="ocho()" value="8" <?php echo set_checkbox("B8","8"); echo $fila->B8h;?> />
									Hermanos(as)
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input id="B8i" type="checkbox" name="B8[]" class="B8" onclick="ocho()" value="9" <?php echo set_checkbox("B8","9"); echo $fila->B8i;?> />
									Hermanastros(as)
								</label>
							</div>
							<div class="checkbox" id="verB8j">
								<label>
									<input id="B8j" type="checkbox" name="B8[]" class="B8 hijos" onclick="ocho()" value="10" <?php echo set_checkbox("B8","10"); echo $fila->B8j;?> />
									Hijos(as) tuyos(as)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B8k" type="checkbox" name="B8[]" class="B8" onclick="ocho()" value="11" <?php echo set_checkbox("B8","11"); echo $fila->B8k;?> />
									Otros(as) familiares
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B8l" type="checkbox" name="B8[]" class="B8" onclick="ocho()" value="12" <?php echo set_checkbox("B8","12"); echo $fila->B8l;?> />
									Empleados(as) del servicio doméstico
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B8m" type="checkbox" name="B8[]" class="B8" onclick="ocho()" value="13" <?php echo set_checkbox("B8","13"); echo $fila->B8m;?> />
									Amigos(as)
								</label>							
							</div>
							<div class="checkbox">
								<label>
									<input id="B8n" type="checkbox" name="B8[]" class="B8" onclick="ocho()" value="14" <?php echo set_checkbox("B8","14"); echo $fila->B8n;?> />
									Otras personas ajenas a tu familia
								</label>							
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('B8[]')); ?></p>
					 </div>
				    </div>

				    <!--Pregunta 14 ahora 17-->
					<div class="row form-group">
						<label class="ol-lg-12 col-md-12 col-sm-12 col-xs-12">9. Durante los <span class="sub_raya">últimos 12 meses</span>, ¿en qué lugares pasaste la mayor parte del tiempo cuando no estabas en el colegio?</label>
					
						<div class="ol-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="checkbox">
									<label>
										<input id="ch47" type="checkbox" name="B9[]" value="1" <?php echo set_checkbox("B9","1"); echo $fila->B9a;?> />
										Tu casa
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch48" type="checkbox" name="B9[]" value="2" <?php echo set_checkbox("B9","2"); echo $fila->B9b;?> />
										En casa de familiares
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch49" type="checkbox" name="B9[]" value="3" <?php echo set_checkbox("B9","3"); echo $fila->B9c;?> />
										Centros comerciales
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch50" type="checkbox" name="B9[]" value="4" <?php echo set_checkbox("B9","4"); echo $fila->B9d;?> />
										Calle, parques, esquinas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch51" type="checkbox" name="B9[]" value="5" <?php echo set_checkbox("B9","5"); echo $fila->B9e;?> />
										Centros de videojuegos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch52" type="checkbox" name="B9[]" value="6" <?php echo set_checkbox("B9","6"); echo $fila->B9f;?> />
										Salas de internet
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch53" type="checkbox" name="B9[]" value="7" <?php echo set_checkbox("B9","7"); echo $fila->B9g;?> />
										Casas de amigos(as) o pareja
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch54" type="checkbox" name="B9[]" value="8" <?php echo set_checkbox("B9","8"); echo $fila->B9h;?> />
										Billares
									</label>							
								</div>
								<div class="checkbox">
									<label>
										<input id="ch55" type="checkbox" name="B9[]" value="9" <?php echo set_checkbox("B9","9"); echo $fila->B9i;?> />
										Bares, tabernas, discotecas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch56" type="checkbox" name="B9[]" value="10" <?php echo set_checkbox("B9","10"); echo $fila->B9j;?> />
										Otro centro de enseñanza o deportivo
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="ch57" type="checkbox" name="B9[]" value="11" <?php echo set_checkbox("B9","11"); echo $fila->B9k;?> />
										Otro
									</label>
								</div>	
								<p class="t_error"><?php echo strip_tags(form_error('B9[]')); ?></p>
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
						<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">10. ¿Cómo consideras que es tu comunicación con:</label><br>
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
										if ($fila->B10a=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B10a] = 'checked';
									?>
										<input type="radio" name="B10a" value="1" <?php echo set_radio("B10a","1"); echo $rta[1];?> />
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10a" value="2" <?php echo set_radio("B10a","2"); echo $rta[2];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10a" value="3" <?php echo set_radio("B10a","3"); echo $rta[3];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B10a" value="4" <?php echo set_radio("B10a","4"); echo $rta[4];?> />	
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('B10a')); ?></span>
							
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
										if ($fila->B10b=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B10b] = 'checked';
									?>
										<input type="radio" name="B10b" value="1" <?php echo set_radio("B10b","1"); echo $rta[1];?> />								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10b" value="2" <?php echo set_radio("B10b","2"); echo $rta[2];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10b" value="3" <?php echo set_radio("B10b","3"); echo $rta[3];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B10b" value="4" <?php echo set_radio("B10b","4"); echo $rta[4];?> />
									</label>
								</div>
							</div>
								<span class="t_error col-lg-6"><?php echo strip_tags(form_error('B10b')); ?></span>
						</div>
						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label class="mg-top-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Padrastro</label>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
									<?php
										for ($i=0;$i<=4;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->B10c=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B10c] = 'checked';
									?>
										<input type="radio" name="B10c" value="1" <?php echo set_radio("B10c","1"); echo $rta[1]; ?> />								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10c" value="2" <?php echo set_radio("B10c","2"); echo $rta[2]; ?> />
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10c" value="3" <?php echo set_radio("B10c","3"); echo $rta[3]; ?> />
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B10c" value="4" <?php echo set_radio("B10c","4"); echo $rta[4]; ?> />
									</label>
								</div>
							</div>
								<span class="t_error col-lg-6"><?php echo strip_tags(form_error('B10c')); ?></span>
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
										if ($fila->B10d=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B10d] = 'checked';
									?>
										<input type="radio" name="B10d" value="1" <?php echo set_radio("B10d","1"); echo $rta[1];?> />								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10d" value="2" <?php echo set_radio("B10d","2"); echo $rta[2];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10d" value="3" <?php echo set_radio("B10d","3"); echo $rta[3];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B10d" value="4" <?php echo set_radio("B10d","4"); echo $rta[4];?> />
									</label>
								</div>
							</div>
								<span class="t_error col-lg-6"><?php echo strip_tags(form_error('B10d')); ?></span>
						</div>
						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label class="mg-top-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Pareja</label>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2" >
								<div class="radio radio-primary">
									<label>
									<?php
										for ($i=0;$i<=4;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->B10e=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B10e] = 'checked';
									?>
										<input type="radio" name="B10e" value="1" <?php echo set_radio("B10e","1"); echo $rta[1];?> />								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10e" value="2" <?php echo set_radio("B10e","2"); echo $rta[2];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10e" value="3" <?php echo set_radio("B10e","3"); echo $rta[3];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B10e" value="4"  id="B10eapli" <?php echo set_radio("B10e","4"); echo $rta[4];?> />
									</label>
								</div>
							</div>
								<span class="t_error col-lg-6"><?php echo strip_tags(form_error('B10e')); ?></span>
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
										if ($fila->B10f=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B10f] = 'checked';
									?>
										<input type="radio" name="B10f" value="1" <?php echo set_radio("B10f","1"); echo $rta[1];?> />								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10f" value="2" <?php echo set_radio("B10f","2"); echo $rta[2];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10f" value="3" <?php echo set_radio("B10f","3"); echo $rta[3];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B10f" value="4" <?php echo set_radio("B10f","4"); echo $rta[4];?> />
									</label>
								</div>
							</div>
								<span class="t_error col-lg-6"><?php echo strip_tags(form_error('B10f')); ?></span>
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
										if ($fila->B10g=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B10g] = 'checked';
									?>
										<input type="radio" name="B10g" value="1" <?php echo set_radio("B10g","1"); echo $rta[1];?> />								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10g" value="2" <?php echo set_radio("B10g","2"); echo $rta[2];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10g" value="3" <?php echo set_radio("B10g","3"); echo $rta[3];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B10g" value="4" <?php echo set_radio("B10g","4"); echo $rta[4];?> />
									</label>
								</div>
							</div>
								<span class="t_error col-lg-6"><?php echo strip_tags(form_error('B10g')); ?></span>
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
										if ($fila->B10h=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B10h] = 'checked';
									?>
										<input type="radio" name="B10h" value="1" <?php echo set_radio("B10h","1"); echo $rta[1];?> />								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10h" value="2" <?php echo set_radio("B10h","2"); echo $rta[2];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10h" value="3" <?php echo set_radio("B10h","3"); echo $rta[3];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B10h" value="4" <?php echo set_radio("B10h","4"); echo $rta[4];?> />
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('B10h')); ?></span>
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
										if ($fila->B10i=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B10i] = 'checked';
									?>
										<input type="radio" name="B10i" value="1" <?php echo set_radio("B10i","1"); echo $rta[1];?>/>								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10i" value="2" <?php echo set_radio("B10i","2"); echo $rta[2];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10i" value="3" <?php echo set_radio("B10i","3"); echo $rta[3];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B10i" value="4" <?php echo set_radio("B10i","4"); echo $rta[4];?>/>
									</label>
								</div>
							</div>
						  <span class="t_error col-lg-6"><?php echo strip_tags(form_error('B10i' )); ?></span>
						</div>

						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12" id='B10j'>
							<label class="mg-top-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Hijos(as) tuyos(as)</label>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
									<?php
										for ($i=0;$i<=4;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->B10j=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B10j] = 'checked';
									?>
										<input type="radio" name="B10j" value="1"  <?php echo set_radio("B10j","1"); echo $rta[1];?>/>								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10j" value="2" <?php echo set_radio("B10j","2"); echo $rta[2];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10j" value="3" <?php echo set_radio("B10j","3"); echo $rta[3];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B10j" value="4" id="B10japli" <?php echo set_radio("B10j","4"); echo $rta[4];?>/>
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('B10j')); ?></span>
							
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
										if ($fila->B10k=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B10k] = 'checked';
									?>
										<input type="radio" name="B10k" value="1" <?php echo set_radio("B10k","1"); echo $rta[1];?> />								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10k" value="2" <?php echo set_radio("B10k","2"); echo $rta[2];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10k" value="3" <?php echo set_radio("B10k","3"); echo $rta[3];?> />
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B10k" value="4" <?php echo set_radio("B10k","4"); echo $rta[4];?> />
									</label>
								</div>
							</div>
								<span class="t_error col-lg-6"><?php echo strip_tags(form_error('B10k')); ?></span>
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
										if ($fila->B10l=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B10l] = 'checked';
									?>
										<input type="radio" name="B10l" value="1" <?php echo set_radio("B10l","1"); echo $rta[1];?>/>								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10l" value="2" <?php echo set_radio("B10l","2"); echo $rta[2];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10l" value="3" <?php echo set_radio("B10l","3"); echo $rta[3];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B10l" value="4" <?php echo set_radio("B10l","4"); echo $rta[4];?>/>
									</label>
								</div>
							</div>
								<span class="t_error col-lg-6"><?php echo strip_tags(form_error('B10l')); ?></span>
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
										if ($fila->B10m=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B10m] = 'checked';
									?>
										<input type="radio" name="B10m" value="1" <?php echo set_radio("B10m","1"); echo $rta[1];?>/>								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10m" value="2" <?php echo set_radio("B10m","2"); echo $rta[2];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10m" value="3" <?php echo set_radio("B10m","3"); echo $rta[3];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B10m" value="4" <?php echo set_radio("B10m","4"); echo $rta[4];?> disabled/>
									</label>
								</div>
							</div>
								<span class="t_error col-lg-6"><?php echo strip_tags(form_error('B10m')); ?></span>
						</div>
						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label class="mg-top-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Otras personas ajenas a tu familia</label>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
									<?php
										for ($i=0;$i<=4;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->B10n=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->B10n] = 'checked';
									?>
										<input type="radio" name="B10n" value="1" <?php echo set_radio("B10n","1"); echo $rta[1];?>/>								
									</label>
								</div>
							</div>					
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10n" value="2" <?php echo set_radio("B10n","2"); echo $rta[2];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="B10n" value="3" <?php echo set_radio("B10n","3"); echo $rta[3];?>/>
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
								<div class="radio radio-primary center-radio">
									<label>
										<input type="radio" name="B10n" value="4" <?php echo set_radio("B10n","4"); echo $rta[4];?>/>
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('B10n')); ?></span>
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

				<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="4">
			
					<!--Pregunta 11-->
					<div class="row form-group">	
						<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">11. En los <span class="sub_raya">últimos 12 meses</span>, ¿qué han hecho usualmente en tu hogar cuando se presentan problemas?</label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
								<?php
									for ($i=0;$i<=6;$i++)
									{
										$rta[$i]='';
									}
									if ($fila->B11=='checked'){
										$rta[1] = 'checked';
									}else $rta[$fila->B11] = 'checked';
								?>
									<input type="radio" name="B11" value="1" <?php echo set_radio("B11","1"); echo $rta[1]; ?>/>
									Dialogan
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B11" value="2" <?php echo set_radio("B11","2"); echo $rta[2]; ?>/>
									Se insultan o se gritan
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B11" value="3" <?php echo set_radio("B11","3"); echo $rta[3]; ?>/>
									Se agreden, se empujan o se golpean
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B11" value="4" <?php echo set_radio("B11","4"); echo $rta[4]; ?>/>
									Se dejan de hablar
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B11" value="5" <?php echo set_radio("B11","5"); echo $rta[5]; ?>/>
									Acuden a (psicólogo(a), orientador(a), comisarías de familia, ICBF, Policía, autoridades comunitarias de etnia)
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B11" value="6" <?php echo set_radio("B11","6"); echo $rta[6]; ?>/>
									No sabes
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B11" value="7" <?php echo set_radio("B11","7"); echo $rta[7]; ?>/>
									Evaden o ignoran la situación
								</label>
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('B11')); ?></p>
						</div>
					</div>

					<!--Pregunta 17 20 12-->	
					<div class="row form-group">
						<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">12. En los <span class="sub_raya">últimos 12 meses</span>, ¿principalmente cómo se han enterado de tus dificultades o problemas, tus padres o las personas mayores que te cuidan?</label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
								<?php
									for ($i=0;$i<=4;$i++)
									{
										$rta[$i]='';
									}
									if ($fila->B12=='checked'){
										$rta[1] = 'checked';
									}else $rta[$fila->B12] = 'checked';
								?>
									<input type="radio" name="B12" value="1" <?php echo set_radio("B12","1"); echo $rta[1]; ?>/>
									Tú les cuentas por iniciativa propia
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B12" value="2" <?php echo set_radio("B12","2"); echo $rta[2]; ?>/>
									Ellos te preguntan
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B12" value="3" <?php echo set_radio("B12","3"); echo $rta[3]; ?>/>
									Por otras personas
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B12" value="4" <?php echo set_radio("B12","4"); echo $rta[4]; ?>/>
									No se enteran
								</label>
							</div>	
								<p class="t_error"><?php echo strip_tags(form_error('B12')); ?></p>					
						</div>
					</div>

					<!--Pregunta 18 21-->	
					<div class="row form-group">
						<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">13. Durante los <span class="sub_raya">últimos 12 meses</span>, ¿principalmente cómo te han llamado la atención o te han corregido en tu hogar?</label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
								<?php
									for ($i=0;$i<=9;$i++)
									{
										$rta[$i]='';
									}
									if ($fila->B13=='checked'){
										$rta[1] = 'checked';
									}else $rta[$fila->B13] = 'checked';
								?>
									<input type="radio" name="B13" value="1" <?php echo set_radio("B13","1"); echo $rta[1]; ?>/>
									Te prohíben lo que te gusta
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B13" value="2" <?php echo set_radio("B13","2"); echo $rta[2]; ?>/>
									Con puños o patadas
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B13" value="3" <?php echo set_radio("B13","3"); echo $rta[3]; ?>/>
									Palmadas, pellizcos, tirón de orejas
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B13" value="4" <?php echo set_radio("B13","4"); echo $rta[4]; ?>/>
									Golpes con objetos (correas, cables, palos, etc.)
								</label>
							</div>		
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B13" value="5" <?php echo set_radio("B13","5"); echo $rta[5]; ?>/>
									Te tratan con indiferencia, no te hablan
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B13" value="6" <?php echo set_radio("B13","6"); echo $rta[6]; ?>/>
									Con llamados de atención a través del dialogo
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B13" value="7" <?php echo set_radio("B13","7"); echo $rta[7]; ?>/>
									Con gritos, amenazas, insultos
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B13" value="8" <?php echo set_radio("B13","8"); echo $rta[8]; ?>/>
									Con cantaleta
								</label>
							</div>		
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B13" id="B13a"  value="9" <?php echo set_radio("B13","9"); echo $rta[9]; ?>/>
									De otra forma, ¿cuál? 
									<input type="text" id="B13b"  name="B13_cual" onkeypress="return soloLetras(event);" <?php echo "value='".set_value('B13_cual',$fila->B13_cual)."'";?> />
								</label>
								<span class="t_error"><?php echo strip_tags(form_error("B13_cual")); ?></span>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="B13" value="10" <?php echo set_radio("B13","10"); echo $rta[10];?>/>
									No te llaman la atención
								</label>
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('B13')); ?></p>								
						</div>
					</div>

					<!-- Pregunta 14-->
					<div class="row form-group">
						<label class="col-lg-12">14. ¿Cuáles gustos y preferencias aceptan en tu hogar?
						</label>

						<div class="col-lg-12 incluyente">
							<div class="checkbox">
								<label>
									<input class="B14" type="checkbox" name="B14[]" onclick="B14()" value="1" <?php echo set_checkbox("B14","1"); echo $fila->B14a;?>/>
									Tus amigos(as)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="B14" type="checkbox" name="B14[]" onclick="B14()" value="2" <?php echo set_checkbox("B14","2"); echo $fila->B14b;?>/>
										Tu pareja
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="B14" type="checkbox" name="B14[]" onclick="B14()" value="3" <?php echo set_checkbox("B14","3"); echo $fila->B14c;?>/>
										Tu forma de vestir o presentación personal
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="B14" type="checkbox" name="B14[]" onclick="B14()" value="4" <?php echo set_checkbox("B14","4"); echo $fila->B14d;?>/>
										Tu forma de pensar, ser o actuar
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="B14" type="checkbox" name="B14[]" onclick="B14()" value="5" <?php echo set_checkbox("B14","5"); echo $fila->B14e;?>/>
										Tus reuniones, fiestas o paseos con amigos(as)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="B14j" type="checkbox" name="B14[]" onclick="ocultos(this.id)" value="6" <?php echo set_checkbox("B14","6"); echo $fila->B14f;?>/>
										Ninguno de los anteriores
								</label>
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('B14[]')); ?></p>								
						</div>
					</div>

					<!-- Pregunta 20  B23-->
					<div class="row form-group incluyente">
						<label class="col-lg-12">15. En los <span class="sub_raya">últimos 12 meses</span>, ¿de quiénes has recibido malos tratos (gritos, insultos, burlas, humillaciones, golpes, castigos físicos)?
						</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="B15[]" id="B15a" class="B15" onclick="B15()" value="1" <?php echo set_checkbox("B15","1"); echo $fila->B15a;?>/>
										Mamá
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B15[]" id="B15b" class="B15" onclick="B15()" value="2" <?php echo set_checkbox("B15","2"); echo $fila->B15b;?>/>
										Papá
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="B15[]" id="B15c" class="B15" onclick="B15()" value="3" <?php echo set_checkbox("B15","3"); echo $fila->B15c;?>/>
										Padrastro
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B15[]" id="B15d" class="B15" onclick="B15()" value="4" <?php echo set_checkbox("B15","4"); echo $fila->B15d;?>/>
										Madrastra
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="B15[]" id="B15e" class="B15" onclick="B15()" value="5" <?php echo set_checkbox("B15","5"); echo $fila->B15e;?>/>
										Pareja
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="B15[]" id="B15f" class="B15" onclick="B15()" value="6" <?php echo set_checkbox("B15","6"); echo $fila->B15f;?>/>
										Abuelos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B15[]" id="B15g" class="B15" onclick="B15()" value="7" <?php echo set_checkbox("B15","7"); echo $fila->B15g;?>/>
										Hermanos(as) mayores
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B15[]" id="B15h" class="B15" onclick="B15()" value="8" <?php echo set_checkbox("B15","8"); echo $fila->B15h;?>/>
										Hermanos(as) menores
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B15[]" id="B15i" class="B15" onclick="B15()" value="9" <?php echo set_checkbox("B15","9"); echo $fila->B15i;?>/>
										Hermanastros(as)
									</label>
								</div>
								<div class="checkbox" id="verB15j">
									<label>
										<input type="checkbox" name="B15[]" id="B15j" class="B15" onclick="B15()" value="10" <?php echo set_checkbox("B15","10"); echo $fila->B15j;?>/>
										Hijos(as) tuyos(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B15[]" id="B15k" class="B15" onclick="B15()" value="11" <?php echo set_checkbox("B15","11"); echo $fila->B15k;?>/>
										Otros familiares: tíos(as), primos(as)
									</label>
								</div>
									<div class="checkbox">
									<label>
										<input  type="checkbox" name="B15[]" id="B15l" class="B15" onclick="B15()" value="12" <?php echo set_checkbox("B15","12"); echo $fila->B15l;?>/>
										Empleados(as) del servicio doméstico
									</label>
								</div>
									<div class="checkbox">
									<label>
										<input  type="checkbox" name="B15[]" id="B15m" class="B15" onclick="B15()" value="13" <?php echo set_checkbox("B15","13"); echo $fila->B15m;?>/>
										Compañeros del colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B15[]" id="B15n" class="B15" onclick="B15()" value="14" <?php echo set_checkbox("B15","14"); echo $fila->B15n;?>/>
										Compañeras del colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B15[]" id="B15o" class="B15" onclick="B15()" value="15" <?php echo set_checkbox("B15","15"); echo $fila->B15o;?>/>
										Amigos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="B15[]" id="B15p" class="B15" onclick="B15()" value="16" <?php echo set_checkbox("B15","16"); echo $fila->B15p;?>/>
										Amigas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B15[]" id="B15q" class="B15" onclick="B15()" value="17" <?php echo set_checkbox("B15","17"); echo $fila->B15q;?>/>
										Profesores(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B15[]" id="B15r" class="B15" onclick="B15()" value="18" <?php echo set_checkbox("B15","18"); echo $fila->B15r;?>/>
										Otras personas que trabajan en tu colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B15[]" id="B15s" class="B15" onclick="B15()" value="19" <?php echo set_checkbox("B15","19"); echo $fila->B15s;?>/>
										Otras personas ajenas a tu familia
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input  type="checkbox" name="B15[]" id="B15t" onclick="ocultos(this.id)" value="20" <?php echo set_checkbox("B15","20"); echo $fila->B15t;?>/>
										No recibes malos tratos
									</label>
								</div>
								<p class="t_error" id="ErrB15"><?php echo strip_tags(form_error('B15[]')); ?></p>	
							</div>
					</div>

					<div class="container">
				    	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<input type="submit" id="btnSl4" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" value="Siguiente"/>
						</div>
					</div>
					<?#php echo form_close(); ?>
			</div>

		<!-- ************************************************************************************************************************************************************************************* -->
				<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="5">
				
					<label class="col-md-12 sub_t" id="cap_3">En esta sección encontrarás preguntas relacionadas con las actividades que haces con tu familia, amigos(as) o compañeros(as) del barrio, conjunto o colegio.</label>

					<!--Pregunta 21- C24-->
					<div class="row form-group">
  				  		<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">16. En los <span class="sub_raya">últimos 12 meses</span>, ¿cuáles de las siguientes actividades has realizado en tu tiempo libre?</label>
  				  		<p class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></p>
  				  		<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Ir a eventos culturales, al cine o actividades artísticas</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C16a == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C16a == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C16a" value="1" <?php echo set_radio("C16a","1"); echo $rta1;?>/>
										Sí
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C16a" value="2" <?php echo set_radio("C16a","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('C16a')); ?></span>
						</div>

						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Ir al parque, jugar, hacer deporte</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C16b == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C16b == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C16b" value="1" <?php echo set_radio("C16b","1"); echo $rta1;?>/>
										Sí
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C16b" value="2" <?php echo set_radio("C16b","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('C16b')); ?></span>
						</div>
						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Leer, estudiar, hacer tareas</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C16c == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C16c == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C16c" value="1" <?php echo set_radio("C16c","1"); echo $rta1;?>/>
										Sí
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C16c" value="2" <?php echo set_radio("C16c","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('C16c')); ?></span>
						</div>

						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Ver televisión, películas, videos; escuchar música</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C16d == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C16d == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C16d" value="1" <?php echo set_radio("C16d","1"); echo $rta1;?>/>
										Sí
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C16d" value="2" <?php echo set_radio("C16d","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('C16d')); ?></span>
						</div>

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">		
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Salir con amigos(as) aproximadamente de tu misma edad</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C16e == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C16e == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C16e" value="1" <?php echo set_radio("C16e","1"); echo $rta1;?>/>
										Sí
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C16e" value="2" <?php echo set_radio("C16e","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('C16e')); ?></span>
						</div>

						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Hacer oficios del hogar</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C16f == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C16f == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C16f" value="1" <?php echo set_radio("C16f","1"); echo $rta1;?>/>
										Sí
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C16f" value="2" <?php echo set_radio("C16f","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('C16f')); ?></span>
						</div>

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Chatear o navegar en internet</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C16g == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C16g == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C16g" value="1" <?php echo set_radio("C16g","1"); echo $rta1;?>/>
										Sí
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C16g" value="2" <?php echo set_radio("C16g","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('C16g')); ?></span>
						</div>

						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Ir a fiestas y/o paseos</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C16h == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C16h == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C16h" value="1" <?php echo set_radio("C16h","1"); echo $rta1;?>/>
										Sí
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C16h" value="2" <?php echo set_radio("C16h","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('C16h')); ?></span>
						</div>

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Asistir a actividades culturales étnicas</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C16i == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C16i == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C16i" value="1" <?php echo set_radio("C16i","1"); echo $rta1;?>/>
										Sí
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C16i" value="2" <?php echo set_radio("C16i","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('C16i')); ?></span>
						</div>

						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Relacionarte con personas mayores de edad que no son de tu familia</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C16j == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C16j == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C16j" value="1" <?php echo set_radio("C16j","1"); echo $rta1;?>/>
										Sí
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C16j" value="2" <?php echo set_radio("C16j","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('C16j')); ?></span>
						</div>
							
						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">		
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Jugar videojuegos</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C16k == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C16k == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C16k" value="1" <?php echo set_radio("C16k","1"); echo $rta1;?>/>
										Sí
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C16k" value="2" <?php echo set_radio("C16k","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('C16k')); ?></span>
						</div>
						
						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Trabajar</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C16l == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C16l == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C16l" value="1" <?php echo set_radio("C16l","1"); echo $rta1;?>/>
										Sí
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C16l" value="2" <?php echo set_radio("C16l","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('C16l')); ?></span>
						</div>

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Ir a tabernas, discotecas, etc.</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C16m == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C16m == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C16m" value="1" <?php echo set_radio("C16m","1"); echo $rta1;?>/>
										Sí
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C16m" value="2" <?php echo set_radio("C16m","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('C16m')); ?></span>
						</div>
						
						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Asistir a actividades religiosas</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C16n == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C16n == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C16n" value="1" <?php echo set_radio("C16n","1"); echo $rta1;?>/>
										Sí
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C16n" value="2" <?php echo set_radio("C16n","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('C16n')); ?></span>
						</div>

						<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Estar con tu pareja</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C16o == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C16o == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C16o" value="1" <?php echo set_radio("C16o","1"); echo $rta1;?>/>
										Sí
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C16o" value="2" <?php echo set_radio("C16o","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('C16o')); ?></span>
						</div>

						<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
							<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Otra actividad</label>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->C16p == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->C16p == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="C16p" value="1" <?php echo set_radio("C16p","1"); echo $rta1;?>/>
										Sí
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="C16p" value="2" <?php echo set_radio("C16p","2"); echo $rta2;?>/>
										No
									</label>
								</div>
							</div>
							<span class="t_error col-lg-6"><?php echo strip_tags(form_error('C16p')); ?></span>
						</div>
					</div>

					<!-- Pregunta 17-->
					
						<div class="row form-group">
						<label class="mg-top-label col-lg-12 col-md-12 col-sm-12 col-xs-12">17. En tu grupo de amigos(as), ¿consideras que existe presión en temas relacionados con:</label>
							<div class="col-lg-12 incluyente" >
								<div class="checkbox">
									<label>
									<input type="checkbox" id="C17a" name="C17[]" class="C17" onclick="C17()" value="1" <?php echo set_checkbox("C17","1"); echo $fila->C17a;?>/> Estudiar o cumplir con las obligaciones del colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" id="C17b" name="C17[]" class="C17" onclick="C17()" value="2" <?php echo set_checkbox("C17","2"); echo $fila->C17b;?>/> Cumplir con las normas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C17c" type="checkbox" name="C17[]" class="C17" onclick="C17()" value="3" <?php echo set_checkbox("C17","3"); echo $fila->C17c;?>/> Participar en juegos o actividades recreativas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C17d" type="checkbox" name="C17[]" class="C17" onclick="C17()" value="4" <?php echo set_checkbox("C17","4"); echo $fila->C17d;?>/>		Interactuar con otros grupos 
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C17e" type="checkbox" name="C17[]" class="C17" onclick="C17()" value="5" <?php echo set_checkbox("C17","5"); echo $fila->C17e;?>/>			Participar en redes sociales
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C17f" type="checkbox" name="C17[]" class="C17" onclick="C17()" value="6" <?php echo set_checkbox("C17","6"); echo $fila->C17f;?>/>			Consumir sustancias psicoactivas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C17g" type="checkbox" name="C17[]" class="C17" onclick="C17()" value="7" <?php echo set_checkbox("C17","7"); echo $fila->C17g;?>/>
										Sexo
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C17h" type="checkbox" name="C17[]" onclick="ocultos(this.id)" value="8" <?php echo set_checkbox("C17","8"); echo $fila->C17h;?>/> No considero que exista presión
									</label>
								</div>							
								<div class="checkbox">
									<label>
										<input id="C17i" type="checkbox" name="C17[]" onclick="ocultos(this.id)" value="9" <?php echo set_checkbox("C17","9"); echo $fila->C17i;?>/> No tengo amigos(as)
									</label>
								</div>
								<p class="t_error"><?php echo strip_tags(form_error('C17[]')); ?></p>
							</div>
						</div>
						<!-- Pregunta 23 C26-->
						<div class="row form-group incluyente">
							<label class="col-lg-12">18. En los <span class="sub_raya">últimos 12 meses</span>, al momento de tomar decisiones importantes para ti, ¿con quién las consultaste?
							</label>
							<div class="col-lg-12">
								<div class="checkbox">
									<label>
										<input id="C18a" type="checkbox" name="C18[]" class="C18" onclick="C18()" value="1" <?php echo set_checkbox("C18","1"); echo $fila->C18a; ?>/>
										Mamá
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C18b" type="checkbox" name="C18[]" class="C18" onclick="C18()"  value="2" <?php echo set_checkbox("C18","2"); echo $fila->C18b;?>/>
										Papá
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C18c" type="checkbox" name="C18[]" class="C18" onclick="C18()"  value="3" <?php echo set_checkbox("C18","3"); echo $fila->C18c;?>/>
										Padrastro
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C18d" type="checkbox" name="C18[]" class="C18" onclick="C18()"  value="4" <?php echo set_checkbox("C18","4"); echo $fila->C18d;?>/>
										Madrastra
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C18e" type="checkbox" name="C18[]" class="C18" onclick="C18()" value="5" <?php echo set_checkbox("C18","5"); echo $fila->C18e;?>/>
										Pareja
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C18f" type="checkbox" name="C18[]" class="C18" onclick="C18()" value="6" <?php echo set_checkbox("C18","6"); echo $fila->C18f;?>/>
										Abuelos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C18g" type="checkbox" name="C18[]" class="C18" onclick="C18()"  value="7" <?php echo set_checkbox("C18","7"); echo $fila->C18g;?>/>
										Hermanos(as) mayores
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C18h" type="checkbox" name="C18[]" class="C18" onclick="C18()"  value="8" <?php echo set_checkbox("C18","8"); echo $fila->C18h;?>/>
										Hermanos(as) menores
									</label>
								</div>							
								<div class="checkbox">
									<label>
										<input id="C18i" type="checkbox" name="C18[]" class="C18" onclick="C18()"  value="9" <?php echo set_checkbox("C18","9"); echo $fila->C18i;?>/>
										Hermanastros(as)
									</label>
								</div>
								<div class="checkbox" id="verC18j">
									<label>
										<input id="C18j" type="checkbox" name="C18[]" class="C18" onclick="C18()"  value="10" <?php echo set_checkbox("C18","10"); echo $fila->C18j;?>/>
										Hijos(as) tuyos(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C18k" type="checkbox" name="C18[]" class="C18" onclick="C18()" value="11" <?php echo set_checkbox("C18","11"); echo $fila->C18k;?>/>
										Otros familiares: tíos(as), primos(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C18l" type="checkbox" name="C18[]" class="C18" onclick="C18()"  value="12" <?php echo set_checkbox("C18","12"); echo $fila->C18l;?>/>
										Empleados(as) del servicio doméstico
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C18m" type="checkbox" name="C18[]" class="C18" onclick="C18()"  value="13" <?php echo set_checkbox("C18","13"); echo $fila->C18m;?>/>
										Compañeros(as) del colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C18n" type="checkbox" name="C18[]" class="C18" onclick="C18()"  value="14" <?php echo set_checkbox("C18","14"); echo $fila->C18n;?>/>
										Amigos(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C18o" type="checkbox" name="C18[]" class="C18" onclick="C18()"  value="15" <?php echo set_checkbox("C18","15"); echo $fila->C18o;?>/>
										Profesores(as)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C18p" type="checkbox" name="C18[]" class="C18" onclick="C18()" value="16" <?php echo set_checkbox("C18","16"); echo $fila->C18p;?>/>
										Otras personas que trabajan en tu colegio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C18q" type="checkbox" name="C18[]" class="C18" onclick="C18()" value="17" <?php echo set_checkbox("C18","17"); echo $fila->C18q;?>/>
										Otras personas ajenas a tu familia
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input id="C18r" type="checkbox" name="C18[]" onclick="ocultos(this.id)" value="18" <?php echo set_checkbox("C18","18"); echo $fila->C18r;?>/>
										No consultas con nadie
									</label>
								</div>	
								<p class="t_error"><?php echo strip_tags(form_error('C18[]')); ?></p>
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
				<p class="glosario">
					<b>Sustancias psicoactivas:</b> son todas las sustancias (químicas o de origen natural) tales como el cigarrillo, las bebidas alcohólicas, la marihuana, entre otras, que al ser ingeridas o consumidas afectan el cerebro, modifican los estados de ánimo o alteran la capacidad de los sentidos.
				</p>

			<!--Pregunta -27-->
				<div class="row form-group">
					<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">19. ¿Alguna vez has consumido alguna sustancia psicoactiva?</label>
					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
						<div class="radio radio-primary">
							<label>
							<?php
								$rta1 =''; $rta2='';
								if ($fila->C19 == 'checked') {$rta1 ='checked'; $rta2='';}
								if ($fila->C19 == 2) {$rta1  =''; $rta2='checked';}
							?>
								<input type="radio" name="C19" id="C19si" onclick="ocultos(this.id)" value="1" <?php echo set_radio("C19","1"); echo $rta1; ?>/>
								Sí
							</label>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
						<div class="radio radio-primary">
							<label>
								<input type="radio" name="C19" id="C19no" onclick="ocultos(this.id)" value="2" <?php echo set_radio("C19","2"); echo $rta2; ?>/>
								No
							</label>
						</div>
					</div>
					<span class="t_error"><?php echo strip_tags(form_error('C19')); ?></span>				
				</div>

					<!--Pregunta 20-->
				<div class="row form-group" id="C20" style="display: none;">
					<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12" >20. En los <span class="sub_raya">últimos 12 meses,</span> ¿has consumido alguna sustancia psicoactiva?</label>
					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
						<div class="radio radio-primary">
							<label>
							<?php
								$rta1 =''; $rta2='';
								if ($fila->C20 == 'checked') {$rta1 ='checked'; $rta2='';}
								if ($fila->C20 == 2) {$rta1  =''; $rta2='checked';}
							?>
								<input type="radio" name="C20" id="C20si" onclick="ocultos(this.id)" value="1" <?php echo set_radio("C20","1"); echo $rta1; ?>/>
								Sí
							</label>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
						<div class="radio radio-primary">
							<label>
								<input type="radio" name="C20" id="C20no" onclick="ocultos(this.id)" value="2" <?php echo set_radio("C20","2"); echo $rta2; ?>/>
								No
							</label>
						</div>
					</div>
					<span class="t_error"><?php echo strip_tags(form_error('C20')); ?></span>				
				</div>
				<!--Pergunta 29 nueva-->
				<div class="row form-group" id="C21" style="display: none;">
					<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">21. ¿Has fumado cigarrillo en los <span class="sub_raya">últimos 12 meses</span>?</label>
					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
						<div class="radio radio-primary">
							<label>
							<?php
								$rta1 =''; $rta2='';
								if ($fila->C21 == 'checked') {$rta1 ='checked'; $rta2='';}
								if ($fila->C21 == 2) {$rta1  =''; $rta2='checked';}
							?>
								<input type="radio" name="C21" id="C21si" onclick="ocultos(this.id)" value="1" <?php echo set_radio("C21","1"); echo $rta1; ?>/>
								Sí
							</label>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
						<div class="radio radio-primary">
							<label>
								<input type="radio" name="C21" id="C21no" onclick="ocultos(this.id)" value="2" <?php echo set_radio("C21","2"); echo $rta2; ?>/>
								No
							</label>
						</div>
					</div>
					<span class="t_error"><?php echo strip_tags(form_error('C21')); ?></span>				
				</div>
				<!--Pergunta 29 nueva-->
				<div class="row form-group" id="C22" style="display: none;">
						<label class="col-lg-12">22. ¿Con qué frecuencia has fumado cigarrillo en los <span class="sub_raya">últimos 12 meses</span>? </label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<?php 
										for ($i=0;$i<=5;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->C22=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->C22] = 'checked';
									?>
									<input type="radio" name="C22" value="1" <?php echo set_radio("C22","1"); echo $rta[1]; ?> />
									Todos los días
								</label>

							</div>
							<div class="radio radio-primary">
								<label>
								
									<input type="radio" name="C22" value="2" <?php echo set_radio("C22","2"); echo $rta[2]; ?> />
									Varias veces a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C22" value="3" <?php echo set_radio("C22","3"); echo $rta[3]; ?> />
									Una vez a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C22" value="4" <?php echo set_radio("C22","4"); echo $rta[4]; ?> />
									Una vez al mes
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C22" value="5" <?php echo set_radio("C22","5"); echo $rta[5]; ?> />
									De vez en cuando
								</label>
							</div>							
							
							<p class="t_error"><?php echo strip_tags(form_error('C22'));?></p>
						</div>
					</div>

					<!--Pregunta C23 nueva-->
					<div class="row form-group" id="C23" style="display: none;">
						<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">23. ¿Has consumido bebidas alcohólicas (cerveza, aguardiente, vino, whisky, etc) en los <span class="sub_raya">últimos 12 meses</span>?</label>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							<div class="radio radio-primary">
								<label>
								<?php
									$rta1 =''; $rta2='';
									if ($fila->C23 == 'checked') {$rta1 ='checked'; $rta2='';}
									if ($fila->C23 == 2) {$rta1  =''; $rta2='checked';}
								?>
									<input type="radio" name="C23" id="C23si" onclick="ocultos(this.id)" value="1" <?php echo set_radio("C23","1"); echo $rta1; ?>/>
									Sí
								</label>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C23" id="C23no" onclick="ocultos(this.id)" value="2" <?php echo set_radio("C23","2"); echo $rta2; ?>/>
									No
								</label>
							</div>
						</div>
						<span class="t_error"><?php echo strip_tags(form_error('C23')); ?></span>
						
				</div>
				<!--Pergunta C24 nueva-->
				<div class="row form-group" id="C24" style="display: none;">
					<!--div class="col-lg-12 panel-heading">
						<b>¿Cuál?</b>
						<input type="text" id="C23_cual"  name="C23_cual" onkeypress="return soloLetras(event);" <?php #echo "value='".set_value('C23_cual',$fila->C23_cual)."'";?> />
						<span class="t_error" id="errC23_cual"> <?php #echo strip_tags(form_error("C23_cual")); ?></span>
					</div-->
						<label class="col-lg-12">24. ¿Con qué frecuencia has consumido bebidas alcohólicas en los <span class="sub_raya">últimos 12 meses</span>?</label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<?php 
										for ($i=0;$i<=5;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->C24=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->C24] = 'checked';
									?>
									<input type="radio" name="C24" value="1" <?php echo set_radio("C24","1"); echo $rta[1]; ?> />
									Todos los días
								</label>

							</div>
							<div class="radio radio-primary">
								<label>
								
									<input type="radio" name="C24" value="2" <?php echo set_radio("C24","2"); echo $rta[2]; ?> />
									Varias veces a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C24" value="3" <?php echo set_radio("C24","3"); echo $rta[3]; ?> />
									Una vez a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C24" value="4" <?php echo set_radio("C24","4"); echo $rta[4]; ?> />
									Una vez al mes
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C24" value="5" <?php echo set_radio("C24","5"); echo $rta[5]; ?> />
									De vez en cuando
								</label>
							</div>							
							
							<p class="t_error"><?php echo strip_tags(form_error('C24'));?></p>
						</div>
					</div>
					<!--Pregunta C25 nueva-->
					<div class="row form-group" id="C25" style="display: none;">
						<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">25. ¿Has consumido <b>otra(s)</b> sustancia(s) psicoactiva(s) en los <span class="sub_raya">últimos 12 meses</span>?</label>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							<div class="radio radio-primary">
								<label>
								<?php
									$rta1 =''; $rta2='';
									if ($fila->C25 == 'checked') {$rta1 ='checked'; $rta2='';}
									if ($fila->C25 == 2) {$rta1  =''; $rta2='checked';}
								?>
									<input type="radio" name="C25" id="C25si" onclick="ocultos(this.id)" value="1" <?php echo set_radio("C25","1"); echo $rta1; ?>/>
									Sí
								</label>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C25" id="C25no" onclick="ocultos(this.id)" value="2" <?php echo set_radio("C25","2"); echo $rta2; ?>/>
									No
								</label>
							</div>
						</div>
					<span class="t_error" id="errConsume" ><?php echo strip_tags(form_error('C25')); ?></span>
						
			</div>
				<!--Pergunta C26a nueva-->
			<div class="row form-group panel panel-default verC26" id="C26a" style="display: none;">
				<div class="col-lg-12 panel-heading">
					<b>¿Cuál?</b>							
					<input type="text" onkeypress="return soloLetras(event);" class ="cual_C25" onblur="cual_tex(this.id,'')" onfocus="cual_tex(this.id,'cls')" name="C25a_cual" id="C25_cual1" <?php echo "value='".set_value('C25a_cual',$fila->C25a_cual)."'";?> />
					 <span class="t_error" id="errC25_cual1"><?php echo strip_tags(form_error('C25a_cual')); ?></span>
				</div>
				<div class="row form-group" > 
						<label class="col-lg-12">26. ¿Con qué frecuencia has consumido esta sustancia en los <span class="sub_raya">últimos 12 meses</span>? </label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<?php 
										for ($i=0;$i<=5;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->C26a=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->C26a] = 'checked';
									?>
									<input type="radio" name="C26a" value="1" <?php echo set_radio("C26a","1"); echo $rta[1]; ?> />
									Todos los días
								</label>

							</div>
							<div class="radio radio-primary">
								<label>
								
									<input type="radio" name="C26a" value="2" <?php echo set_radio("C26a","2"); echo $rta[2]; ?> />
									Varias veces a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26a" value="3" <?php echo set_radio("C26a","3"); echo $rta[3]; ?> />
									Una vez a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26a" value="4" <?php echo set_radio("C26a","4"); echo $rta[4]; ?> />
									Una vez al mes
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26a" value="5" <?php echo set_radio("C26a","5"); echo $rta[5]; ?> />
									De vez en cuando
								</label>
							</div>							
							
							<p class="t_error" id="errC26_1"><?php echo strip_tags(form_error('C26a'));?></p>
						</div>
				</div>
			</div>
				<!--Pergunta C26b nueva-->
			<div class="row form-group panel panel-default verC26" id="C26b" style="display: none;">
				<div class="col-lg-12 panel-heading">
					<b>¿Cuál?</b>							
					<input type="text" onkeypress="return soloLetras(event);" class ="cual_C25" onblur="cual_tex(this.id,'')" onfocus="cual_tex(this.id,'cls')" name="C25b_cual" id="C25_cual2" <?php echo "value='".set_value('C25b_cual',$fila->C25b_cual)."'";?> />
					 <span class="t_error" id="errC25_cual2"><?php echo strip_tags(form_error('C25b_cual')); ?></span>
					 <!--span class="panel-title">  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Frecuencia</a>
        			</span-->
				</div>
				<div class="row form-group" > <!--panel-collapse collapse in" id="collapse1"-->
						<label class="col-lg-12">26a. ¿Con qué frecuencia has consumido esta sustancia en los <span class="sub_raya">últimos 12 meses</span>? </label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<?php 
										for ($i=0;$i<=5;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->C26b=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->C26b] = 'checked';
									?>
									<input type="radio" name="C26b" value="1" <?php echo set_radio("C26b","1"); echo $rta[1]; ?> />
									Todos los días
								</label>

							</div>
							<div class="radio radio-primary">
								<label>
								
									<input type="radio" name="C26b" value="2" <?php echo set_radio("C26b","2"); echo $rta[2]; ?> />
									Varias veces a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26b" value="3" <?php echo set_radio("C26b","3"); echo $rta[3]; ?> />
									Una vez a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26b" value="4" <?php echo set_radio("C26b","4"); echo $rta[4]; ?> />
									Una vez al mes
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26b" value="5" <?php echo set_radio("C26b","5"); echo $rta[5]; ?> />
									De vez en cuando
								</label>
							</div>							
							
							<p class="t_error" id="errC26_2"><?php echo strip_tags(form_error('C26b'));?></p>
						</div>
				</div>
			</div>
			
				<!--Pergunta C26c nueva-->
			<div class="row form-group panel panel-default verC26" id="C26c" style="display: none;">
				<div class="col-lg-12 panel-heading">
					<b>¿Cuál?</b>							
					<input type="text" onkeypress="return soloLetras(event);" class ="cual_C25" onblur="cual_tex(this.id,'')" onfocus="cual_tex(this.id,'cls')" name="C25c_cual" id="C25_cual3" <?php echo "value='".set_value('C25c_cual',$fila->C25c_cual)."'";?> />
					 <span class="t_error" id="errC25_cual3"><?php echo strip_tags(form_error('C25c_cual')); ?></span>
					 <!--span class="panel-title">  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Frecuencia</a>
        			</span-->
				</div>
				<div class="row form-group" > <!--panel-collapse collapse in" id="collapse1"-->
						<label class="col-lg-12">26b. ¿Con qué frecuencia has consumido esta sustancia en los <span class="sub_raya">últimos 12 meses</span>? </label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<?php 
										for ($i=0;$i<=5;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->C26c=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->C26c] = 'checked';
									?>
									<input type="radio" name="C26c" value="1" <?php echo set_radio("C26c","1"); echo $rta[1]; ?> />
									Todos los días
								</label>

							</div>
							<div class="radio radio-primary">
								<label>
								
									<input type="radio" name="C26c" value="2" <?php echo set_radio("C26c","2"); echo $rta[2]; ?> />
									Varias veces a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26c" value="3" <?php echo set_radio("C26c","3"); echo $rta[3]; ?> />
									Una vez a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26c" value="4" <?php echo set_radio("C26c","4"); echo $rta[4]; ?> />
									Una vez al mes
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26c" value="5" <?php echo set_radio("C26c","5"); echo $rta[5]; ?> />
									De vez en cuando
								</label>
							</div>							
							
							<p class="t_error" id="errC26_3"><?php echo strip_tags(form_error('C26c'));?></p>
						</div>
				</div>
			</div>
				<!--Pergunta C26d nueva-->
			<div class="row form-group panel panel-default verC26" id="C26d" style="display: none;">
				<div class="col-lg-12 panel-heading">
					<b>¿Cuál?</b>							
					<input type="text" onkeypress="return soloLetras(event);" class ="cual_C25" onblur="cual_tex(this.id,'')" onfocus="cual_tex(this.id,'cls')" name="C25d_cual" id="C25_cual4" <?php echo "value='".set_value('C25d_cual',$fila->C25d_cual)."'";?> />
					 <span class="t_error" id="errC25_cual4"><?php echo strip_tags(form_error('C25d_cual')); ?></span>
					 <!--span class="panel-title">  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Frecuencia</a>
        			</span-->
				</div>
				<div class="row form-group" > 
						<label class="col-lg-12">26c. ¿Con qué frecuencia has consumido esta sustancia en los <span class="sub_raya">últimos 12 meses</span>? </label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<?php 
										for ($i=0;$i<=5;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->C26d=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->C26d] = 'checked';
									?>
									<input type="radio" name="C26d" value="1" <?php echo set_radio("C26d","1"); echo $rta[1]; ?> />
									Todos los días
								</label>

							</div>
							<div class="radio radio-primary">
								<label>
								
									<input type="radio" name="C26d" value="2" <?php echo set_radio("C26d","2"); echo $rta[2]; ?> />
									Varias veces a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26d" value="3" <?php echo set_radio("C26d","3"); echo $rta[3]; ?> />
									Una vez a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26d" value="4" <?php echo set_radio("C26d","4"); echo $rta[4]; ?> />
									Una vez al mes
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26d" value="5" <?php echo set_radio("C26d","5"); echo $rta[5]; ?> />
									De vez en cuando
								</label>
							</div>							
							
							<p class="t_error" id="errC26_4"><?php echo strip_tags(form_error('C26d'));?></p>
						</div>
				</div>
			</div>
				<!--Pergunta C26e nueva-->
			<div class="row form-group panel panel-default verC26" id="C26e" style="display: none;">
				<div class="col-lg-12 panel-heading">
					<b>¿Cuál?</b>							
					<input type="text" onkeypress="return soloLetras(event);" class ="cual_C25" onblur="cual_tex(this.id,'')" onfocus="cual_tex(this.id,'cls')" name="C25e_cual" id="C25_cual5" <?php echo "value='".set_value('C25e_cual',$fila->C25e_cual)."'";?> />
					 <span class="t_error" id="errC25_cual5"><?php echo strip_tags(form_error('C25e_cual')); ?></span>
					 <!--span class="panel-title">  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Frecuencia</a>
        			</span-->
				</div>
				<div class="row form-group" > <!--panel-collapse collapse in" id="collapse1"-->
						<label class="col-lg-12">26d. ¿Con qué frecuencia has consumido esta sustancia en los <span class="sub_raya">últimos 12 meses</span>? </label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<?php 
										for ($i=0;$i<=5;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->C26e=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->C26e] = 'checked';
									?>
									<input type="radio" name="C26e" value="1" <?php echo set_radio("C26e","1"); echo $rta[1]; ?> />
									Todos los días
								</label>

							</div>
							<div class="radio radio-primary">
								<label>
								
									<input type="radio" name="C26e" value="2" <?php echo set_radio("C26e","2"); echo $rta[2]; ?> />
									Varias veces a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26e" value="3" <?php echo set_radio("C26e","3"); echo $rta[3]; ?> />
									Una vez a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26e" value="4" <?php echo set_radio("C26e","4"); echo $rta[4]; ?> />
									Una vez al mes
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26e" value="5" <?php echo set_radio("C26e","5"); echo $rta[5]; ?> />
									De vez en cuando
								</label>
							</div>							
							
							<p class="t_error" id="errC26_5"><?php echo strip_tags(form_error('C26e'));?></p>
						</div>
				</div>
			</div>
				<!--Pergunta C26f nueva-->
			<div class="row form-group panel panel-default verC26" id="C26f" style="display: none;">
				<div class="col-lg-12 panel-heading">
					<b>¿Cuál?</b>							
					<input type="text" onkeypress="return soloLetras(event);" class ="cual_C25" onblur="cual_tex(this.id,'')" onfocus="cual_tex(this.id,'cls')" name="C25f_cual" id="C25_cual6" <?php echo "value='".set_value('C25f_cual',$fila->C25f_cual)."'";?> />
					 <span class="t_error" id="errC25_cual6"><?php echo strip_tags(form_error('C25f_cual')); ?></span>
					 <!--span class="panel-title">  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Frecuencia</a>
        			</span-->
				</div>
				<div class="row form-group" > <!--panel-collapse collapse in" id="collapse1"-->
						<label class="col-lg-12">26e. ¿Con qué frecuencia has consumido esta sustancia en los <span class="sub_raya">últimos 12 meses</span>? </label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<?php 
										for ($i=0;$i<=5;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->C26f=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->C26f] = 'checked';
									?>
									<input type="radio" name="C26f" value="1" <?php echo set_radio("C26f","1"); echo $rta[1]; ?> />
									Todos los días
								</label>

							</div>
							<div class="radio radio-primary">
								<label>
								
									<input type="radio" name="C26f" value="2" <?php echo set_radio("C26f","2"); echo $rta[2]; ?> />
									Varias veces a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26f" value="3" <?php echo set_radio("C26f","3"); echo $rta[3]; ?> />
									Una vez a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26f" value="4" <?php echo set_radio("C26f","4"); echo $rta[4]; ?> />
									Una vez al mes
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26f" value="5" <?php echo set_radio("C26f","5"); echo $rta[5]; ?> />
									De vez en cuando
								</label>
							</div>							
							
							<p class="t_error" id="errC26_6"><?php echo strip_tags(form_error('C26f'));?></p>
						</div>
				</div>
			</div>

				<!--Pergunta C26g nueva-->
			<div class="row form-group panel panel-default verC26" id="C26g" style="display: none;">
				<div class="col-lg-12 panel-heading">
					<b>¿Cuál?</b>							
					<input type="text" onkeypress="return soloLetras(event);" class ="cual_C25" onblur="cual_tex(this.id,'')" onfocus="cual_tex(this.id,'cls')" name="C25g_cual" id="C25_cual7" <?php echo "value='".set_value('C25g_cual',$fila->C25g_cual)."'";?> />
					 <span class="t_error" id="errC25_cual7"><?php echo strip_tags(form_error('C25g_cual')); ?></span>
					 <!--span class="panel-title">  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Frecuencia</a>
        			</span-->
				</div>
				<div class="row form-group" > <!--panel-collapse collapse in" id="collapse1"-->
						<label class="col-lg-12">26f. ¿Con qué frecuencia has consumido esta sustancia en los <span class="sub_raya">últimos 12 meses</span>? </label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<?php 
										for ($i=0;$i<=5;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->C26g=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->C26g] = 'checked';
									?>
									<input type="radio" name="C26g" value="1" <?php echo set_radio("C26g","1"); echo $rta[1]; ?> />
									Todos los días
								</label>

							</div>
							<div class="radio radio-primary">
								<label>
								
									<input type="radio" name="C26g" value="2" <?php echo set_radio("C26g","2"); echo $rta[2]; ?> />
									Varias veces a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26g" value="3" <?php echo set_radio("C26g","3"); echo $rta[3]; ?> />
									Una vez a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26g" value="4" <?php echo set_radio("C26g","4"); echo $rta[4]; ?> />
									Una vez al mes
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26g" value="5" <?php echo set_radio("C26g","5"); echo $rta[5]; ?> />
									De vez en cuando
								</label>
							</div>							
							
							<p class="t_error" id="errC26_7"><?php echo strip_tags(form_error('C26g'));?></p>
						</div>
				</div>
			</div>
				<!--Pergunta C26h nueva-->
			<div class="row form-group panel panel-default verC26" id="C26h" style="display: none;">
				<div class="col-lg-12 panel-heading">
					<b>¿Cuál?</b>							
					<input type="text" onkeypress="return soloLetras(event);" class ="cual_C25" onblur="cual_tex(this.id,'')" onfocus="cual_tex(this.id,'cls')" name="C25h_cual" id="C25_cual8" <?php echo "value='".set_value('C25h_cual',$fila->C25h_cual)."'";?> />
					 <span class="t_error" id="errC25_cual8"><?php echo strip_tags(form_error('C25h_cual')); ?></span>
					 <!--span class="panel-title">  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Frecuencia</a>
        			</span-->
				</div>
				<div class="row form-group" > <!--panel-collapse collapse in" id="collapse1"-->
						<label class="col-lg-12">26g. ¿Con qué frecuencia has consumido esta sustancia en los <span class="sub_raya">últimos 12 meses</span>? </label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<?php 
										for ($i=0;$i<=5;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->C26h=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->C26h] = 'checked';
									?>
									<input type="radio" name="C26h" value="1" <?php echo set_radio("C26h","1"); echo $rta[1]; ?> />
									Todos los días
								</label>

							</div>
							<div class="radio radio-primary">
								<label>
								
									<input type="radio" name="C26h" value="2" <?php echo set_radio("C26h","2"); echo $rta[2]; ?> />
									Varias veces a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26h" value="3" <?php echo set_radio("C26h","3"); echo $rta[3]; ?> />
									Una vez a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26h" value="4" <?php echo set_radio("C26h","4"); echo $rta[4]; ?> />
									Una vez al mes
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26h" value="5" <?php echo set_radio("C26h","5"); echo $rta[5]; ?> />
									De vez en cuando
								</label>
							</div>							
							
							<p class="t_error" id="errC26_8"><?php echo strip_tags(form_error('C26h'));?></p>
						</div>
				</div>
			</div>
				<!--Pergunta C26i nueva-->
			<div class="row form-group panel panel-default verC26" id="C26i" style="display: none;">
				<div class="col-lg-12 panel-heading">
					<b>¿Cuál?</b>							
					<input type="text" onkeypress="return soloLetras(event);" class ="cual_C25" onblur="cual_tex(this.id,'')" onfocus="cual_tex(this.id,'cls')" name="C25i_cual" id="C25_cual9" <?php echo "value='".set_value('C25i_cual',$fila->C25i_cual)."'";?> />
					 <span class="t_error" id="errC25_cual9"><?php echo strip_tags(form_error('C25i_cual')); ?></span>
					 <!--span class="panel-title">  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Frecuencia</a>
        			</span-->
				</div>
				<div class="row form-group" > <!--panel-collapse collapse in" id="collapse1"-->
						<label class="col-lg-12">26h. ¿Con qué frecuencia has consumido esta sustancia en los <span class="sub_raya">últimos 12 meses</span>? </label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<?php 
										for ($i=0;$i<=5;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->C26i=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->C26i] = 'checked';
									?>
									<input type="radio" name="C26i" value="1" <?php echo set_radio("C26i","1"); echo $rta[1]; ?> />
									Todos los días
								</label>

							</div>
							<div class="radio radio-primary">
								<label>
								
									<input type="radio" name="C26i" value="2" <?php echo set_radio("C26i","2"); echo $rta[2]; ?> />
									Varias veces a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26i" value="3" <?php echo set_radio("C26i","3"); echo $rta[3]; ?> />
									Una vez a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26i" value="4" <?php echo set_radio("C26i","4"); echo $rta[4]; ?> />
									Una vez al mes
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26i" value="5" <?php echo set_radio("C26i","5"); echo $rta[5]; ?> />
									De vez en cuando
								</label>
							</div>							
							
							<p class="t_error" id="errC26_9"><?php echo strip_tags(form_error('C26i'));?></p>
						</div>
				</div>
			</div>

				<!--Pergunta C26j nueva-->
			<div class="row form-group panel panel-default verC26" id="C26j" style="display: none;">
				<div class="col-lg-12 panel-heading">
					<b>¿Cuál?</b>							
					<input type="text" onkeypress="return soloLetras(event);" class ="cual_C25" onblur="cual_tex(this.id,'')" onfocus="cual_tex(this.id,'cls')" name="C25j_cual" id="C25_cual10" <?php echo "value='".set_value('C25j_cual',$fila->C25j_cual)."'";?> />
					 <span class="t_error" id="errC25_cual10"><?php echo strip_tags(form_error('C25j_cual')); ?></span>
					 <!--span class="panel-title">  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Frecuencia</a>
        			</span-->
				</div>
				<div class="row form-group" > <!--panel-collapse collapse in" id="collapse1"-->
						<label class="col-lg-12">26i. ¿Con qué frecuencia has consumido esta sustancia en los <span class="sub_raya">últimos 12 meses</span>? </label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
									<?php 
										for ($i=0;$i<=5;$i++)
										{
											$rta[$i]='';
										}
										if ($fila->C26j=='checked'){
											$rta[1] = 'checked';
										}else $rta[$fila->C26j] = 'checked';
									?>
									<input type="radio" name="C26j" value="1" <?php echo set_radio("C26j","1"); echo $rta[1]; ?> />
									Todos los días
								</label>

							</div>
							<div class="radio radio-primary">
								<label>
								
									<input type="radio" name="C26j" value="2" <?php echo set_radio("C26j","2"); echo $rta[2]; ?> />
									Varias veces a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26j" value="3" <?php echo set_radio("C26j","3"); echo $rta[3]; ?> />
									Una vez a la semana
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26j" value="4" <?php echo set_radio("C26j","4"); echo $rta[4]; ?> />
									Una vez al mes
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="C26j" value="5" <?php echo set_radio("C26j","5"); echo $rta[5]; ?> />
									De vez en cuando
								</label>
							</div>							
							
							<p class="t_error" id="errC26_10"><?php echo strip_tags(form_error('C26j'));?></p>
						</div>
				</div>
			</div>
			<div id="consume" class = "row" style="display: none;">
					<div class="col-md-5"></div>
					<input type="button" class="btn btn-raised col-md-2" id="btn_mas" value="Agregar sustancia" />
					<input type="button" class="btn btn-raised col-md-2" id="btn_menos" value="Quitar sustancia" style="display: none;"/>
				    <input type="button" class="btn btn-raised col-md-2" id="btn_sigue" value="Siguiente pregunta" />
			</div>
					<!-- Pregunta 35 nueva-->
			 <div class="row form-group" id="C27" style="display: none;">
					   <label class="col-lg-12">27.  De los siguientes lugares, ¿en cuales te han ofrecido este tipo de sustancias?
						</label>
						<div class="col-lg-12">
							<div class="checkbox">
								<label>
									<input type="checkbox" class= "C27" name="C27[]" value="1" <?php echo set_checkbox("C27","1"); echo $fila->C27a;?>/>
									Colegio o escuela
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" class= "C27" name="C27[]" value="2" <?php echo set_checkbox("C27","2"); echo $fila->C27b;?>/>
										Ruta o transporte
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" class= "C27" name="C27[]" value="3" <?php echo set_checkbox("C27","3"); echo $fila->C27c;?>/>
										A la salida o alrededores del colegio
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" class= "C27" name="C27[]" value="4" <?php echo set_checkbox("C27","4"); echo $fila->C27d;?>/>
										En tu barrio
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" class= "C27" name="C27[]" value="5" <?php echo set_checkbox("C27","5"); echo $fila->C27e;?>/>
										En los lugares que frecuentas (discoteca, bar, tienda, parque)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" class= "C27" name="C27[]" value="6" <?php echo set_checkbox("C27","6"); echo $fila->C27f;?>/>
										En tu entorno familiar
								</label>
							</div>
							<p class="t_error" id="errC27"><?php echo strip_tags(form_error('C27[]')); ?></p>								
						</div>
						
			 </div>
			 	   <p class="sub_t" id="mensa1" style="display: none;">
				 	No dependas de sustancias psicoactivas para demostrar qué tan bueno(a) eres y las cosas que puedes lograr. Si has empezado a consumir este tipo de sustancias, comunícate con un adulto de confianza y/o llama a la línea  01 8000 11 24 40.
				 </p>					
				 
			  	<div class="container">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
						</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" id="btn7" style="display: none;">
						<input type="submit" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" value="Siguiente"/>
					</div>
				</div>
			</div>

	<!-- ************************************************************************************************************************************************************************************* -->

			<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="7">
					<label class="col-md-12 sub_t" id="cap_4">Ahora queremos conocer más acerca de la sexualidad de las y los adolescentes de tu edad.<br> Recuerda que esta información es totalmente anónima.</label>

					<p class="glosario">
						<b>Relación afectiva cercana:</b>
						 se entiende como relación romántica, relación con novio o novia, relación de pareja, o con amigos o amigas especiales.
					</p>		

					<!-- Pregunta 8-->
					<div class="row form-group">
						<label class="mg-top-label col-lg-4 col-md-6 col-sm-6 col-xs-12">28. ¿Has tenido relaciones afectivas cercanas?

						</label>
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-6">
							<div class="radio radio-primary">
								<label>
								<?php
									$rta1 =''; $rta2='';
									if ($fila->A8 == 'checked') {$rta1 ='checked'; $rta2='';}
									if ($fila->A8 == 2) {$rta1  =''; $rta2='checked';}
								?>
									<input type="radio" name="A8" id="A8a" onclick="ocultos(this.id)" value="1" <?php echo set_radio("A8","1"); echo $rta1; ?> />
									Sí
								</label>
							</div>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-6">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="A8" id="A8b" onclick="ocultos(this.id)" value="2" <?php echo set_radio("A8","2"); echo $rta2; ?> />
									No
								</label>
							</div>
						</div>
						<span class="t_error col-lg-6" id="errA8b"><?php echo strip_tags(form_error('A8')); ?></span>
					</div>
					<div id="not1" style="display:none;">
						<div class="row form-group label-floating TH">
						<label class="col-md-6">
								 29. ¿A qué edad tuviste la primera relación afectiva cercana?</label>
							<div class="col-lg-12">
									<input type="text" id="A9" name="A9" onblur="valNumero(this.id);" onkeypress="return edadRel(event);" <?php echo "value='".set_value('A9',$fila->A9)."'";?> maxlength="2" size="6"/>
								
							</div>
							<div class="col-lg-6">
								<p class="t_error" id="errA9"><?php echo strip_tags(form_error('A9')); ?></p>
							</div>
						</div>					
						
						<!-- Pregunta 10-->
						<div class="row form-group label-floating TH">
						<label class="col-md-7">30. ¿Cuántas relaciones afectivas cercanas has tenido desde ese momento? </label>
							<div class="col-lg-12">
								<?php #si es checked quiere decir que tiene un hijo
									if ($fila->A10=='checked')
										$fila->A10=1;
								 ?>
								<input type="text" id="A10" name="A10" <?php echo "value='".set_value('A10',$fila->A10)."'";?> onkeypress="return nroRel(event,this.id);" maxlength="1" size="6" min="1" max="9"/>
								
							</div>
							<p class="t_error col-lg-6" id="errA10"><?php echo strip_tags(form_error('A10')); ?></p>
						</div>					
						
						<!--Pregunta 11-->
						<div class="row form-group">
							<label class="mg-top-label col-lg-7 col-md-7 col-sm-7 col-xs-7">
							  31. Actualmente, ¿tienes una relación afectiva cercana con alguna persona?
							</label>
							<div class="col-md-1">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->A11 == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->A11 == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="A11" id="A11a" value="1" onclick="ocultos(this.id)" <?php echo set_radio("A11","1"); echo $rta1; ?> />
										Sí
									</label>
								</div>
							</div>
							<div class="col-md-1">
								<div class="radio radio-primary">
									<label>
										<input type="radio" name="A11" id="A11b" value="2" onclick="ocultos(this.id)" <?php echo set_radio("A11","2"); echo $rta2; ?> />
										No
									</label>
								</div>
							</div>
						</div>

						<p class="t_error" id="errA11b"><?php echo strip_tags(form_error('A11')); ?></p>

					 </div>
					<div id="not2" style="display:none;">
						<!--Pregunta 12-->
						<div class="row form-group">
								<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">32. Esa persona es: </label>
								<div class="row form-group">
									<div class="col-md-3 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
												<?php 
												$rta1=''; $rta2='';
													if ($fila->A12=='checked') {$rta1 ='checked'; $rta2='';}
													if ($fila->A12== 2) {$rta1  =''; $rta2='checked';}
												?>
												<img src='<?php echo base_url("images/hombre.png");?>' class="img-responsive"/> 
												<input type="radio" name="A12" value="1" <?php echo set_radio("A12","1"); echo $rta1; ?> />Un hombre
											</label>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
											<img src='<?php echo base_url("images/mujer.png");?>' class="img-responsive"/> 
												<input type="radio" name="A12" value="2" <?php echo set_radio("A12","2"); echo $rta2; ?> />Una mujer
											</label>
										</div>
									</div>	
								</div>
								<div class="col-lg-6">
									<p class="t_error"><?php echo strip_tags(form_error('A12')); ?></p>
								</div>
						</div>
						<!--Pregunta 13-->		
						<div class="row form-group label-floating TH">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<label class="">
								 33. ¿Qué edad tiene esa persona?
									<input type="text" id="A13" name="A13" onblur="valNumero(this.id);" onkeypress="return edadPrel(event);" <?php echo "value='".set_value('A13',$fila->A13)."'";?> maxlength="2" size="6" min="6" max="99"/>
							     </label>
							</div>
							<p class="t_error col-lg-6" id="errA13"><?php echo strip_tags(form_error('A13')); ?></p>
						</div>			
						<!--P14-->
						<div class="row form-group TH">
								<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">34. Esta relación afectiva cercana es con:</label>
								<div class="col-lg-12">
									<div class="radio radio-primary">
										<label>
										<?php
											for ($i=0;$i<=7;$i++)
											{
												$rta[$i]='';
											}
											if ($fila->A14=='checked'){
												$rta[1] = 'checked';
											}else $rta[$fila->A14] = 'checked';
										?>
											<input type="radio" name="A14" <?php echo set_radio("A14","1"); echo $rta[1]; ?> value="1" />
											Novio(a)
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="A14" <?php echo set_radio("A14","2"); echo $rta[2]; ?> value="2" />
											Esposo(a)
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="A14" <?php echo set_radio("A14","3"); echo $rta[3]; ?> value="3" />
											Amigovio(a)
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="A14" <?php echo set_radio("A14","4"); echo $rta[4]; ?> value="4" />
											Amigos(as) con derechos
										</label>
									</div>
									<div class="radio radio-primary">	
										<label>
											<input type="radio" name="A14" <?php echo set_radio("A14","5"); echo $rta[5]; ?> value="5" />
											Compañero(a) sentimental
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="A14" <?php echo set_radio("A14","6"); echo $rta[6]; ?> value="6" />
											Otro, ¿cuál? 
										<input type="text" id="A14_cual"  name="A14_cual" onkeypress="return soloLetras(event);" <?php echo "value='".set_value('A14_cual',$fila->A14_cual)."'";?> />
										</label>
										<span class="t_error" id=""><?php echo strip_tags(form_error("A14_cual")); ?></span>
									</div>
										<p class="t_error"><?php echo strip_tags(form_error('A14')); ?></p>
								</div>
						</div>
						<!--P15-->
						<div class="row form-group TH">
								<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">35. ¿Con qué frecuencia te ves personalmente con esta persona?</label>
								<div class="col-lg-12">
									<div class="radio radio-primary">
										<label>
										<?php
											for ($i=0;$i<=5;$i++)
											{
												$rta[$i]='';
											}
											if ($fila->A15=='checked'){
												$rta[1] = 'checked';
											}else $rta[$fila->A15] = 'checked';
										?>
											<input type="radio" name="A15" <?php echo set_radio("A15","1"); echo $rta[1]; ?> value="1" />
											Todos los días en el colegio
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="A15" <?php echo set_radio("A15","2"); echo $rta[2]; ?> value="2" />
											Todos los días en el barrio
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="A15" <?php echo set_radio("A15","3"); echo $rta[3]; ?> value="3" />
											Vivimos en la misma casa
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="A15" <?php echo set_radio("A15","4"); echo $rta[4]; ?> value="4" />
											Solo los fines de semana
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="A15" <?php echo set_radio("A15","5"); echo $rta[5]; ?> value="5" />
											Casi nunca
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="A15" <?php echo set_radio("A15","6"); echo $rta[6]; ?> value="6" />
											Cuando podemos y a escondidas
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="A15" <?php echo set_radio("A15","7"); echo $rta[7]; ?> value="7" />
											Nunca, solo por teléfono, carta o internet
										</label>
									</div>
										<p class="t_error" id="errA15"><?php echo strip_tags(form_error('A15')); ?></p>
								</div>
						</div>
					</div>
						
					<div class="container">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<input type="submit" class="btn btn-raised btn-success arrow-r" id="btn8" style="position:relative;right: 0px;" value="Siguiente" />
						</div>
					</div>
				</div>

				<!-- ************************************************************************************************************************************************************************************* -->
				<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="8">  
			
						<!--Pregunta 36-->
						<div class="row form-group">
					    	<label class="col-lg-12">36. Durante los <span class="sub_raya">últimos 12 meses</span>, ¿sobre qué temas de educación para la sexualidad te han hablado en el colegio?</label>
							<div class="col-lg-12 incluyente">
									<div class="checkbox">
										<label>
											<input id="D26a" type="checkbox" name="D26[]" class="D26" onclick="D26()" value="1" <?php echo set_checkbox('D26','1'); echo $fila->D26a;?> /> Autoestima
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26b" type="checkbox" name="D26[]" class="D26" onclick="D26()" value="2" <?php echo set_checkbox('D26','2'); echo $fila->D26b;?> /> Planes de vida
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26c" type="checkbox" name="D26[]" class="D26" onclick="D26()" value="3" <?php echo set_checkbox('D26','3'); echo $fila->D26c;?>/>
											Toma de decisiones
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26d" type="checkbox" name="D26[]" class="D26" onclick="D26()" value="4" <?php echo set_checkbox('D26','4'); echo $fila->D26d;?>/>
											Liderazgo
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26e" type="checkbox" name="D26[]" class="D26" onclick="D26()" value="5" <?php echo set_checkbox('D26','5'); echo $fila->D26e;?>/>
											Género
										</label>
									</div>
									<!--div class="checkbox">
										<label>
											<input id="D26f" type="checkbox" name="D26[]" class="D26" onclick="D26()" value="6" <?php #echo set_checkbox('D26','6'); echo $fila->D26f;?>/>
											Desigualdad de género
										</label>
									</div-->
									<div class="checkbox">
										<label>
											<input id="D26f" type="checkbox" name="D26[]" class="D26" onclick="D26()" value="6" <?php echo set_checkbox('D26','6'); echo $fila->D26f;?>/>
											Homosexualidad
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26g" type="checkbox" name="D26[]" class="D26" onclick="D26()" value="7" <?php echo set_checkbox('D26','7'); echo $fila->D26g;?>/>
											Derechos sexuales y reproductivos
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26h" type="checkbox" name="D26[]" class="D26" onclick="D26()" value="8" <?php echo set_checkbox('D26','8'); echo $fila->D26h;?>/>
											Afecto y comunicación
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26i" type="checkbox" name="D26[]" class="D26" onclick="D26()" value="9" <?php echo set_checkbox('D26','9'); echo $fila->D26i;?>/>
											Vida en pareja
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26j" type="checkbox" name="D26[]" class="D26" onclick="D26()" value="10" <?php echo set_checkbox('D26','10'); echo $fila->D26j;?>/>
											Decisiones sexuales en pareja
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="D26k" type="checkbox" name="D26[]" class="D26" onclick="D26()" value="11" <?php echo set_checkbox('D26','11'); echo $fila->D26k;?>/>
											Anatomía y fisiología del aparato reproductor
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input id="D26l" type="checkbox" name="D26[]" class="D26" onclick="D26()" value="12" <?php echo set_checkbox('D26','12'); echo $fila->D26l;?>/>
											Anticoncepción
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input id="D26m" type="checkbox" name="D26[]" class="D26" onclick="D26()" value="13" <?php echo set_checkbox('D26','13'); echo $fila->D26m;?>/>
											Embarazo y parto
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input id="D26n" type="checkbox" name="D26[]" class="D26" onclick="D26()" value="14" <?php echo set_checkbox('D26','14'); echo $fila->D26n;?>/>
											Aborto
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input id="D26o" type="checkbox" name="D26[]" class="D26" onclick="D26()" value="15" <?php echo set_checkbox('D26','15'); echo $fila->D26o;?>/>
											Violencia y abuso sexual
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input id="D26p" type="checkbox" name="D26[]" class="D26" onclick="D26()" value="16" <?php echo set_checkbox('D26','16'); echo $fila->D26p;?>/>
											Infecciones de Transmisión Sexual y SIDA
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input id="D26q" class type="checkbox" name="D26[]" onclick="ocultos(this.id)" value="17" <?php echo set_checkbox('D26','17'); echo $fila->D26q;?>/>
											No te acuerdas
										</label>							
									</div>
									<div class="checkbox">
										<label>
											<input id="D26r" type="checkbox" name="D26[]"  onclick="D26()" value="18" <?php echo set_checkbox('D26','18'); echo $fila->D26r;?>/>
											No te han hablado de estos temas
										</label>							
									</div>
									<div class="t_error"><?php echo strip_tags(form_error('D26[]')); ?></div>
							</div>
						</div>
								
						<!-- Pregunta 37-->
						<div class="row form-group">
							<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">37. En los <span class="sub_raya">últimos 12 meses</span>, ¿con quién o con quiénes has hablado sobre sexualidad?</label>
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
											Tu pareja
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
											Con personas ajenas a tu familia
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
				<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="9">  <!--Slide 9-->
				
					<p class="glosario">
						<b>Actividad sexual:</b> en esta encuesta queremos saber si conoces o has tenido experiencias con otras personas que involucren <u>besos, abrazos, caricias y tocamientos</u> en diferentes partes del cuerpo,  incluida la zona genital (pene, vagina, nalgas y/o senos).
					</p>

						<!-- Pregunta 38-->
						<div class="row form-group">
								
								<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">38. ¿Conoces a alguna persona que haya recibido algo a cambio de tener actividades sexuales (por ejemplo, dinero, ropa, calificaciones u otros regalos)?
								</label>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D28 == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D28 == 2) {$rta1  =''; $rta2='checked';}
										?>
											<input type="radio" name="D28" id="D28a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D28','1'); echo $rta1; ?>/>
											Sí
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D28" id="D28b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D28','2'); echo $rta2; ?>/>
											No
										</label>
									</div>
								</div>
								<span class="t_error"><?php echo strip_tags(form_error('D28')); ?></span>
						</div>
					
							<!-- Pregunta 39-->						
						<div class="row form-group">
							<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">39. ¿Alguna vez te han propuesto o insinuado que participes en actividades sexuales?</label>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
											<?php
												$rta1 =''; $rta2='';
												if ($fila->D39 == 'checked') {$rta1 ='checked'; $rta2='';}
												if ($fila->D39 == 2) {$rta1  =''; $rta2='checked';}
											?>
											<input type="radio" name="D39aux" class="" id= 'D39auxa' onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D39aux','1'); echo $rta1; ?>/>
											Sí
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D39aux" id="D39auxb" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D39aux','2'); echo $rta2; ?>/>
											No
										</label>
									</div>
								</div>	
								<span class="t_error"><?php echo strip_tags(form_error('D39aux')); ?></span>
							</div>
							

							<!-- Pregunta 31-->
							<div class="row form-group">		
								<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">40. ¿Alguna vez te han dicho que muestres las partes íntimas de tu cuerpo (por ejemplo, a través de videos o fotos) a cambio de algún regalo (por ejemplo, dinero, ropa, calificaciones u otros regalos)?</label>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D31 == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D31 == 2) {$rta1  =''; $rta2='checked';}
										?>
											<input type="radio" name="D31" class="" id="D31a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D31','1'); echo $rta1; ?>/>
											Sí
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
								<span class="t_error"><?php echo strip_tags(form_error('D31')); ?></span>
							</div>
							
									<!-- Pregunta 40a-->
							<div class="row form-group" id="verD35" style="display: none;">	
								<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">40a. ¿Alguna vez has aceptado algo (por ejemplo, dinero, ropa, calificaciones u otros regalos) a cambio de mostrar las partes íntimas de tu cuerpo (por ejemplo, en videos o fotos)?
								</label>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D35 == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D35 == 2) {$rta1  =''; $rta2='checked';}
										?>
											<input type="radio" name="D35" class="" id="D35a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D35','1'); echo $rta1; ?>/>
											Sí
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
								<span class="t_error"><?php echo strip_tags(form_error('D35')); ?></span>
							</div>
							
							<!-- Pregunta 41-->
							<div class="row form-group">	
								<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">41. ¿Alguna vez te han ofrecido algo (por ejemplo, dinero, ropa, calificaciones u otros regalos) a cambio de participar en actividades sexuales contigo? </label>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D32 == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D32 == 2) {$rta1  =''; $rta2='checked';}
										?>
											<input type="radio" name="D32" class="" id="D41si" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D32','1'); echo $rta1; ?>/>
											Sí
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D32" id="D41no" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D32','2'); echo $rta2; ?>/>
											No
										</label>
									</div>
								</div>
								<span class="t_error"><?php echo strip_tags(form_error('D32')); ?></span>
							</div>
							
							<div class="row form-group" style="display: none;" id="D41_a">	
								<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">41a. ¿Alguna vez has aceptado algo (por ejemplo, dinero, ropa, calificaciones u otros regalos) a cambio de participar en actividades sexuales?
								</label>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D41a == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D41a == 2) {$rta1  =''; $rta2='checked';}
										?>
											<input type="radio" name="D41a" value ="1" <?php echo set_radio('D41a','1'); echo $rta1; ?>/>
											Sí
										</label>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="D41a" id="D41a_no" value ="2" <?php echo set_radio('D41a','2'); echo $rta2; ?>/>
											No
										</label>
									</div>
								</div>
								<span class="t_error"><?php echo strip_tags(form_error('D41a')); ?></span>
							</div>
						
							<!-- Pregunta 33-->
							<div class="row form-group">	
								<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">42. ¿Alguna vez te han tocado alguna parte de tu cuerpo de manera sexual, sin que tú lo quisieras?</label>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D33 == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D33 == 2) {$rta1  =''; $rta2='checked';}
										?>
											<input type="radio" name="D33" class="" id="D33a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D33','1'); echo $rta1; ?>/>
											Sí
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
								<span class="t_error"><?php echo strip_tags(form_error('D33')); ?></span>
							</div>
						
							<!-- Pregunta 43-->
							<div class="row form-group">	
								<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">43. ¿Alguna vez has enviado fotos o videos de las partes íntimas de tu cuerpo por mensajes de texto y/o medios virtuales como: correo electrónico, páginas de internet y redes sociales (WhatsApp, Line, Facebook, Twitter, Instagram, Snapchat, etc.)?</label>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D34 == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D34 == 2) {$rta1  =''; $rta2='checked';}
										?>
											<input type="radio" name="D34" class="" id="D34a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D34','1'); echo $rta1; ?>/>
											Sí
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
								<span class="t_error"><?php echo strip_tags(form_error('D34')); ?></span>
							</div>
						
						
							<!-- Pregunta 44-->
							<div class="row form-group">
							 	<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
									44. ¿Alguna vez has participado en juegos que involucren actividades sexuales con más de una persona?
								</label>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D36 == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D36 == 2) {$rta1  =''; $rta2='checked';}
										?>
										<input type="radio" name="D36" class="" id="D36a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D36','1'); echo $rta1; ?>/>
											Sí
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
								<span class="t_error"><?php echo strip_tags(form_error('D36')); ?></span>
							</div>
							
							<!--div class="col-md-12 glosario">
								<b>Juegos Sexuales:</b> se refiere a la práctica de relaciones sexuales, entre dos o más personas, en el contexto de algún tipo de juego o de competencia.
							</div-->	
							
						<!-- Pregunta 37 -->
							<div class="row form-group">
								<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">45. ¿Alguna vez te han llevado a otra región, ciudad o barrio y te han ofrecido algo a cambio (por ejemplo, dinero, ropa, calificaciones u otros regalos) para realizar alguna de las siguientes actividades:
								</label>

								<p class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></p>					
								<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Tener actividades sexuales</label>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
											<?php
												$rta1 =''; $rta2='';
												if ($fila->D46a == 'checked') {$rta1 ='checked'; $rta2='';}
												if ($fila->D46a == 2) {$rta1  =''; $rta2='checked';}
											?>
											<input type="radio" name="D46a" class="" id="D46a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D46a','1'); echo $rta1;?>/>
												Sí
											</label>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
												<input type="radio" name="D46a" id="D46b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D46a','2'); echo $rta2;?>/>
												No
											</label>
										</div>
									</div>
									<span class="t_error"><?php echo strip_tags(form_error('D46a')); ?></span>
								</div>
								<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Bailar en clubes nocturnos</label>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
											<?php
												$rta1 =''; $rta2='';
												if ($fila->D46b == 'checked') {$rta1 ='checked'; $rta2='';}
												if ($fila->D46b == 2) {$rta1  =''; $rta2='checked';}
											?>
												<input type="radio" name="D46b" class="" id="D38a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D46b','1'); echo $rta1;?>/>
												Sí
											</label>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
												<input type="radio" name="D46b" id="D38b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D46b','2'); echo $rta2;?>/>
												No
											</label>
										</div>
									</div>	
									<span class="t_error"><?php echo strip_tags(form_error('D46b')); ?></span>
								</div>	

								<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">		
									<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Acompañar turistas</label>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
											<?php
												$rta1 =''; $rta2='';
												if ($fila->D46c == 'checked') {$rta1 ='checked'; $rta2='';}
												if ($fila->D46c == 2) {$rta1  =''; $rta2='checked';}
											?>
												<input type="radio" name="D46c" class="" id="D39a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D46c','1'); echo $rta1;?>/>
												Sí
											</label>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
												<input type="radio" name="D46c" id="D39b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D46c','2'); echo $rta2;?>/>
												No
											</label>
										</div>
									</div>
										<span class="t_error"><?php echo strip_tags(form_error('D46c')); ?></span>
								</div>

								<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
									<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Asistir a sesiones de fotografía y video sin ropa</label>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
											<?php
												$rta1 =''; $rta2='';
												if ($fila->D46d == 'checked') {$rta1 ='checked'; $rta2='';}
												if ($fila->D46d == 2) {$rta1  =''; $rta2='checked';}
											?>
												<input type="radio" name="D46d" class="" id="D40a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D46d','1'); echo $rta1;?>/>
												Sí
											</label>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
												<input type="radio" name="D46d" id="D40b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D46d','2'); echo $rta2;?>/>
												No
											</label>
										</div>
									</div>
									<span class="t_error"><?php echo strip_tags(form_error('D46d')); ?></span>
								</div>

								<div class="fila-1 container col-lg-12 col-md-12 col-sm-12 col-xs-12">	
									<label class="mg-top-label col-lg-6 col-md-8 col-sm-8 col-xs-12">Dar masajes</label>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
											<?php
												$rta1 =''; $rta2='';
												if ($fila->D46e == 'checked') {$rta1 ='checked'; $rta2='';}
												if ($fila->D46e == 2) {$rta1  =''; $rta2='checked';}
											?>
												<input type="radio" name="D46e" class="" id="D41a" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D46e','1'); echo $rta1;?>/>
												Sí
											</label>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
										<div class="radio radio-primary">
											<label>
												<input type="radio" name="D46e" id="D41b" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D46e','2'); echo $rta2;?>/>
												No
											</label>
										</div>
									</div>
									<span class="t_error"><?php echo strip_tags(form_error('D46e')); ?></span>
								</div>

							</div>

							<!-- Pregunta 38-->
							<div class="row form-group" id="D40ab" style ="display:none;">	
								<label class="col-lg-6 col-md-8 col-sm-12 col-xs-12">46. ¿Le has comentado a alguien sobre estas experiencias que has vivido?</label>								
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<div class="radio radio-primary">
										<label>
										<?php
											$rta1 =''; $rta2='';
											if ($fila->D38 == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D38 == 2) {$rta1  =''; $rta2='checked';}
										?>
											<input type="radio" name="D38" class="sisexo1" id="D38ab" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D38','1'); echo $rta1; ?>/>
											Sí
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
							</div>
							<span class="t_error col-lg-3"><?php echo strip_tags(form_error('D38')); ?></span>

							<!-- Pregunta 39-->
							
							<div class="row form-group" id="D39" style ="display:none;">
								<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">47. ¿A quién se lo has comentado?</label>
								 <div class="col-lg-12">
									<div class="checkbox">
										<label>
											<input id="ch33" type="checkbox" class="D39 sisexo1" name="D39[]" value ="1" <?php echo set_radio('D39[]','1'); echo $fila->D39a; ?> />
											A algún familiar (mamá, papá, hermanos(as), abuelos, madrastra, etc.
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="ch34" type="checkbox" class="D39 sisexo1" name="D39[]" value ="2" <?php echo set_radio('D39[]','2'); echo $fila->D39b; ?> />
											A tus amigos(as) o compañeros(as)
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="ch35" type="checkbox" class="D39 sisexo1" name="D39[]" value ="3" <?php echo set_radio('D39[]','3'); echo $fila->D39c; ?> />
											A tu pareja
										</label>
									</div>
									<div class="checkbox">	
										<label>
											<input id="ch36" type="checkbox" class="D39 sisexo1" name="D39[]" value ="4" <?php echo set_radio('D39[]','4'); echo $fila->D39d; ?> />
											A algún trabajador(a) de tu colegio (orientador(a), profesor(a), etc.)
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="ch37" type="checkbox" class="D39 sisexo1" name="D39[]" value ="5" <?php echo set_radio('D39[]','5'); echo $fila->D39e; ?> />
											Acudiste donde un médico(a), enfermera(o), psicólogo(a), etc.
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="ch38" type="checkbox" class="D39 sisexo1" name="D39[]" value ="6" <?php echo set_radio('D39[]','6'); echo $fila->D39f; ?> />
											Acudiste a las autoridades (ICBF, Comisarías de familia, Policía)
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input id="ch39" type="checkbox" class="D39 sisexo1" name="D39[]" value ="7" <?php echo set_radio('D39[]','7'); echo $fila->D39g; ?> onclick="ocultos(this.id)" />
											Otro, ¿cuál?
										</label>
										<input type="text" id="D39g_cual" onkeypress="return soloLetras(event);" <?php echo "value='".set_value('D39g_cual',$fila->D39g_cual)."'";?> name="D39g_cual"/>
										<span class="t_error"><?php echo strip_tags(form_error('D39g_cual')); ?></span>
								</div>	
							 </div>
								<div class="col-lg-6">
									<p class="t_error"><?php echo strip_tags(form_error('D39[]')); ?></p>
								</div>
							</div>	

							<p class="sub_t" id="mensa2" style="display: none;"> Si tú o alguien que conoces ha vivido  alguna de las situaciones anteriores comunícate con un adulto de confianza y/o llama a la línea  01 8000 11 24 40.</p>					

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
				<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="10">
						<p class="glosario">
						<b>Para fines de esta encuesta relación sexual es:</b> actividad sexual que incluye el contacto directo de los genitales de otra persona con tus genitales u otra parte de tu cuerpo, que incluya penetración. 
						</p>
						<!-- Pregunta 40 48-->
						 
						<div class="row form-group">
							<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">48. ¿Has tenido relaciones sexuales?</label><!-- col-md-8 col-sm-12 col-xs-12-->
							<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
								<div class="radio radio-primary">
									<label>
									<?php
										$rta1 =''; $rta2='';
										if ($fila->D40 == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->D40 == 2) {$rta1  =''; $rta2='checked';}
									?>
										<input type="radio" name="D40" value ="1" <?php echo set_radio('D40','1'); echo $rta1; ?>/>
										Sí
									</label>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
								<div class="radio radio-primary">
									<label>
										<input type="radio" id="D40no" name="D40" value ="2" onclick="ocultos(this.id)" <?php echo set_radio('D40','2'); echo $rta2; ?>/>
										No
									</label>
								</div>
							</div>
							<p class="t_error col-lg-12 col-md-12 col-sm-12" id="error_D40"><?php echo strip_tags(form_error('D40')); ?></p>
						</div>
						<div class="container"></div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<input type="submit" class="btn btn-raised btn-success arrow-r" id="btn_D40" style="position:relative;right: 0px;" value="Siguiente"/>
							</div>
				</div>

				<div class="pagina aparece-a-clase container" data-slide="11"> 
					   <!--Pregunta 49  revisarlo con 41a-->
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
					             	<input type="radio" name="D49" id="D49si" onclick="ocultos(this.id)" value="1" <?php echo set_radio('D49','1'); echo $rta1; ?>/>
					                Sí
					            </label>
	             			</div>
	             		</div>
	             		<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
	             			<div class="radio radio-primary">
	             				<label>
				              		<input type="radio" name="D49" class="noMensa3" id="D49no" onclick="ocultos(this.id)" value="2" <?php echo set_radio('D49','2'); echo $rta2; ?>/>
				              		No
				             	</label>	
	             			</div>
	             		</div>
						<span class="t_error"><?php echo strip_tags(form_error('D49')); ?></span>			            
		            </div>
		           
		            <!--Pregunta 50 49a-->
		            <div class="row form-group" id="ver_D49a" style="display: none;">
		            	<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">49a. En los <span class="sub_raya">últimos 12 meses</span>, ¿has tenido relaciones sexuales a cambio de dinero o algo material?</label>
		            	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
		            		<div class="radio radio-primary">
		            			<label>
				                <?php
				                	$rta1 =''; $rta2='';
										if ($fila->D50 == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->D50 == 2) {$rta1  =''; $rta2='checked';}
									?>
				                	<input type="radio" name="D50" value ="1" <?php echo set_radio('D50','1'); echo $rta1; ?>/>
				                    Sí
				                </label>
		            		</div>
		            	</div>
		            	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
		            		<div class="radio radio-primary">
		            			<label>
				                	<input type="radio" name="D50"  id="D50no" value ="2" <?php echo set_radio('D50','2'); echo $rta2; ?>/>
				                    No
				                </label>
		            		</div>
		            	</div>
		            </div>
		            <div class="row">
		            	<div class="col-xs-1"></div>
		            	 <span class="t_error"><?php echo strip_tags(form_error('D50')); ?></span>
		           	</div>

		            <div class="row form-group">
		            	<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">50. ¿Alguna vez  te han llevado a otra región, ciudad o barrio y te han ofrecido algo a cambio (por ejemplo, dinero, ropa, calificaciones u otros regalos) para tener relaciones sexuales?</label>
		            	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
		            		<div class="radio radio-primary">
		            			<label>
				                <?php
				                	$rta1 =''; $rta2='';
										if ($fila->D50_51 == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->D50_51 == 2) {$rta1  =''; $rta2='checked';}
									?>
				                	<input type="radio" name="D50_51" id="D50_si" onclick="ocultos(this.id)" value ="1" <?php echo set_radio('D50_51','1'); echo $rta1; ?>/>
				                    Sí
				                </label>
		            		</div>
		            	</div>
		            	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
		            		<div class="radio radio-primary">
		            			<label>
				                	<input type="radio" name="D50_51" class="noMensa3" id="D50_no" onclick="ocultos(this.id)" value ="2" <?php echo set_radio('D50_51','2'); echo $rta2; ?>/>
				                    No
				                </label>
		            		</div>
		            	</div>
		            </div>
		            <div class="row">
		            	<div class="col-xs-1"></div>
						<span class="t_error"><?php echo strip_tags(form_error('D50_51')); ?></span>
					</div>

		            <!--Pregunta 51-->
		            <div class="row form-group">
		            	<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">51. ¿Alguna vez alguien te obligó a tener una relación sexual?</label>
		            	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
		            		<div class="radio radio-primary">
		            			<label>
					            <?php
					            	$rta1 =''; $rta2='';
									if ($fila->D51 == 'checked') {$rta1 ='checked'; $rta2='';}
									if ($fila->D51 == 2) {$rta1  =''; $rta2='checked';}
								?>
					                <input type="radio" name="D51" id="D51si" onclick="ocultos(this.id)" value="1" <?php echo set_radio('D51','1'); echo $rta1; ?>/>
					                Sí
					            </label>
		            		</div>
		            	</div>
		            	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
		            		<div class="radio radio-primary">
		            			<label>
				                    <input type="radio" name="D51" class="noMensa3" id= "D51no" onclick="ocultos(this.id)" value="2" <?php echo set_radio('D51','2'); echo $rta2; ?>/>
				                    No
				                </label>
		            		</div>
		            	</div>
					    <span class="t_error"><?php echo strip_tags(form_error('D51')); ?></span>
		            </div>

		            <!--Pregunta 52-->
		            <div class="row form-group" id="D52" style ='display:none;'>
		            	<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">51a. En los <span class="sub_raya">últimos 12 meses</span>, ¿alguien te obligó a tener una relación sexual?</label>
		            	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
		            		<div class="radio radio-primary">
		            			<label>
				            	<?php
				            		$rta1 =''; $rta2='';
										if ($fila->D52 == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->D52 == 2) {$rta1  =''; $rta2='checked';}
									?>
				            		<input type="radio" name="D52" value ="1" <?php echo set_radio('D52','1'); echo $rta1; ?>/>
				              		Sí
				                </label>
		            		</div>
		            	</div>
		            	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
		            		<div class="radio radio-primary">
		            			<label>
				                    <input type="radio" name="D52"  id="D52no" value ="2" <?php echo set_radio('D52','2'); echo $rta2; ?>/>
				              		No
				             	</label>
		            		</div>
		            	</div>
				        <span class="t_error"><?php echo strip_tags(form_error('D52')); ?></span>
		            </div>
		      
		        			
				<!-- Pregunta 53-->
				<div class="row form-group"  id='D53' style="display:none;">
				    
						<label class="col-lg-8 col-md-8 col-sm-12 col-xs-12">52. ¿Le has comentado a alguien de lo sucedido?</label>
									
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							<div class="radio radio-primary">
								<label>
								<?php
									$rta1 =''; $rta2='';
									if ($fila->D53 == 'checked') {$rta1 ='checked'; $rta2='';}
									if ($fila->D53 == 2) {$rta1  =''; $rta2='checked';}
								?>
									<input type="radio" name="D53" onclick="ocultos('D53si')" value ="1" <?php echo set_radio('D53','1'); echo $rta1; ?>/>
									Sí
								</label>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="D53" id="D53no" class="sisexo2" onclick="ocultos('D53no')" value ="2" <?php echo set_radio('D53','2'); echo $rta2; ?>/>
									No
								</label>
							</div>
						</div>
						<span class="t_error"><?php echo strip_tags(form_error('D53')); ?></span>
				</div>

				<!-- Pregunta 54-->								
				<div class="row form-group" style="display:none;" id='D54'><!-- -->
					<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">53. ¿A quién se lo has comentado?</label>
						<div class="col-lg-12">
							<div class="checkbox">
								<label>
									<input class="D54 sisexo2" type="checkbox" value="1" name="D54[]" <?php echo set_checkbox('D54','1'); echo $fila->D54a;?>/>
									A algún familiar (mamá, papá, hermanos(as), abuelos, madrastra, etc.)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="D54 sisexo2" type="checkbox" value="2" name="D54[]" <?php echo set_checkbox('D54','2'); echo $fila->D54b;?>/>
									A tus amigos(as) o compañeros(as)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="D54 sisexo2" type="checkbox" value="3" name="D54[]" <?php echo set_checkbox('D54','3'); echo $fila->D54c;?>/>
									A tu pareja
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="D54 sisexo2" type="checkbox" value="4" name="D54[]" <?php echo set_checkbox('D54','4'); echo $fila->D54d;?>/>
									A algún trabajador(a) de tu colegio (orientador(a), profesor(a), etc.)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="D54 sisexo2" type="checkbox" value="5" name="D54[]" <?php echo set_checkbox('D54','5'); echo $fila->D54e;?>/>
									Acudiste donde un médico(a), enfermera(o), psicólogo(a), etc.
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="D54 sisexo2" type="checkbox" value="6" name="D54[]" <?php echo set_checkbox('D54','6'); echo $fila->D54f;?>/>
									Acudiste a las autoridades (ICBF, Comisarias de familia, Policía)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input class="D54 sisexo2" id="D54g" type="checkbox" onclick="ocultos('D54g')" value="7" name="D54[]" <?php echo set_checkbox('D54','7'); echo $fila->D54g;?>/>
									Otro, ¿cuál?
									<input type="text" id="D54g_cual" onkeypress="return soloLetras(event);" name ="D54g_cual" <?php echo "value='".set_value('D54g_cual',$fila->D54g_cual)."'";?> />
									<span class="t_error"><?php echo strip_tags(form_error('D54g_cual')); ?></span>
								</label>
							</div>
							<span class="t_error"><?php echo strip_tags(form_error('D54[]')); ?></span>
						</div>	
				</div>
				<p class="sub_t" id="mensa3" style="display: none;"> Si tú o alguien que conoces ha vivido  alguna de las situaciones anteriores comunícate con un adulto de confianza y/o llama a la línea  01 8000 11 24 40.</p>					
				<div class="container">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
						<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
						<input type="submit" class="btn btn-raised btn-success arrow-r" id="btn_D40?" style="position:relative;right: 0px;" value="Siguiente"/>
					</div>
				</div>
					
			</div>

				<!-- ************************************************************************************************************************************************************************************* -->
			<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="12">
				     <div id="grupo_sex">
					     	<!-- Pregunta 41-->
							<div class="row form-group">
								<label class="col-lg-5 col-md-8 col-sm-6 col-xs-12">54. ¿A qué edad fue tu primera relación sexual?</label>
								<div class="col-lg-7 col-md-4 col-sm-6 col-xs-12">
									<div class="radio radio-primary"> 
										<label>
									<?php
									 	$rta1 ='';
										if ($fila->D41 == 'checked') {$rta1 ='1';}
										else 
											$rta1=$fila->D41;
									?>	
										<input type="text" id="D41" name="D41" onkeypress="return edadSexo(event);" <?php echo "value='".set_value('D41',$rta1)."'";?> maxlength="2" size="10" min="6" max="99"/>
										</label>
									</div>
									<p class="t_error" id="errD41"><?php echo strip_tags(form_error('D41')); ?></p>
								</div>	
							</div>

							<!-- Pregunta 42 sub_t cllase de orde puneado-->
							<div class="row form-group">
								<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">55. La persona con la que tuviste la primera relación sexual era:</label>

								<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<?php
									 	$rta1 =''; $rta2='';
										if ($fila->D42I == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->D42I == 2) {$rta1  =''; $rta2='checked';}
								?>	
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="cap_4">Sexo</label>	
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
										<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="cap_4">Edad</label>

										<div class="col-lg-7 col-md-4 col-sm-6 col-xs-12">
											¿Qué edad crees que tenía la persona con la que tuviste tu primera relación sexual?
											<div class="radio radio-primary"> 
												<label>
													<input type="text" id="D55II" name="D55II" onblur="valNumero(this.id);" onkeypress="return edadPSexo(event);" <?php echo "value='".set_value('D55II',$fila->D55II)."'";?> maxlength="2" size="10" min="6" max="99"/>
												</label>
											</div>
											<p class="t_error" id="errD55II"><?php echo strip_tags(form_error('D55II')); ?></p>
										</div>
									</div>
									<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
										<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="cap_4">Relación con esa persona</label>	
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
														Pareja
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
													Desconocido(a)
												</label>
											</div>
								   			<p class="t_error"><?php echo strip_tags(form_error('D42III')); ?></p>					
							    		</div>
									</div>
								</div>
							</div>

							<!-- Pregunta 43-->	
							<div class="row form-group">
							   <label class="col-lg-12">56. ¿Cuál fue el principal motivo para tener tu primera relación sexual?</label>
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
											Presión de tu pareja
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
										<input type="text" id="D43_cual" name='D43_cual' onkeypress="return soloLetras(event);" <?php echo "value='".set_value('D43_cual',$fila->D43_cual)."'";?> />
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
							<input type="submit" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" value="Siguiente"/>
						</div>
					</div>
				</div>
			</div>

				<!-- ************************************************************************************************************************************************************************************* -->
			<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="13">
					<!-- Pregunta 44-->
					    <div class="form-group row">
					        <label class="col-lg-6 col-md-8 col-sm-12 col-xs-12">57. ¿Has estado en embarazo o has dejado en embarazo a alguna mujer?</label>
					        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
						        <div class ="radio radio-primary">
							         <label>
							          <?php
							          	$rta1 =''; $rta2='';
											if ($fila->D44 == 'checked') {$rta1 ='checked'; $rta2='';}
											if ($fila->D44 == 2) {$rta1  =''; $rta2='checked';}
										?>
							            <input type="radio" name="D44" value ="1" <?php echo set_radio('D44','1'); echo $rta1; ?>/>
							          	   Sí
							        </label>
							    </div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							    <div class ="radio radio-primary">

							        <label>
							         <input type="radio" name="D44" value ="2" <?php echo set_radio('D44','2'); echo $rta2; ?>/>
							         No
							        </label>
						     	</div>
						    </div>
					    </div>
					    <div class="row">
					    	<div class="col-xs-1"></div>
					    	<p class="t_error" id="error_D44"> <?php echo strip_tags(form_error('D44')); ?></p>
					    </div>
					    	<!-- Pregunta 9 57-->
					<div class="row form-group" id="D57" style="display: none;">
						<label class="mg-top-label col-lg-6 col-md-8 col-sm-12 col-xs-12">58. ¿Tienes hijos(as)?
						</label>
						<p class="t_error" id="err_D60"></p>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							<div class="radio radio-primary">
								<label>
								<?php
									$rta1 =''; $rta2='';
									if ($fila->D60 == 'checked') {$rta1 ='checked'; $rta2='';}
									if ($fila->D60 == 2) {$rta1  =''; $rta2='checked';}
								?>
									<input type="radio" name="D60" id="D60a" onclick="ocultos(this.id)" value="1" <?php echo set_radio("D60","1"); echo $rta1; ?> />
									Sí
								</label>
							</div>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-6 col-xs-6">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="D60" id="D60b" onclick="ocultos(this.id)" value="2" <?php echo set_radio("D60","2"); echo $rta2; ?> />
									No
								</label>
							</div>
						</div>
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<p class="t_error"><?php echo strip_tags(form_error('D60')); ?></p>
						</div>
					</div>

					<!-- Pregunta 61-->
					<div class="row form-group label-floating TH" id="hijosp1"  onclick="ocultos(this.id)" style="display:none;">
						<div class="col-lg-12">
							<?php 
								if ($fila->D61=='checked')
									$fila->D61=1;
							 ?>
							<label>59. ¿Cuántos(as) hijos(as) tienes? <input type="text" id="D61" name="D61" <?php echo "value='".set_value('D61',$fila->D61)."'";?> onblur="valNumero(this.id);" onkeypress="return nroRel(event,this.id);" maxlength="1" size="10" min="1" max="9" />
						</label> 
						
						</div>
						<p class="t_error col-lg-6" id="errD61"><?php echo strip_tags(form_error('D61')); ?></p>
					</div>					
				<!--Pregunta 62-->
					<div class="row form-group TH" id="hijosp2" onclick="ocultos(this.id)" style="display:none;">
						<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">60. Mientras estás en el colegio, ¿con quién o con quiénes pasan la mayor parte del tiempo tu(s) hijos(as)?</label>
						<div class="col-lg-12">
							<div class="radio radio-primary">
								<label>
								<?php
									for ($i=0;$i<=4;$i++)
									{
										$rta[$i]='';
									}
									if ($fila->D62=='checked'){
										$rta[1] = 'checked';
									}else $rta[$fila->D62] = 'checked';
								?>
									<input type="radio" name="D62" <?php echo set_radio("D62","1"); echo $rta[1]; ?> value="1" />
									Con el papá o la mamá de tu(s) hijos(as)
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="D62" <?php echo set_radio("D62","2"); echo $rta[2]; ?> value="2" />
									Con personas familiares
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="D62" <?php echo set_radio("D62","3"); echo $rta[3]; ?> value="3" />
									Con personas ajenas a tu familia
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="D62" <?php echo set_radio("D62","4"); echo $rta[4]; ?> value="4" />
									Con personas a cargo en una guardería o jardín infantil
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="D62" <?php echo set_radio("D62","5"); echo $rta[5]; ?> value="5" />
									Solo(s)
								</label>
							</div>
								<p class="t_error"><?php echo strip_tags(form_error('D62')); ?></p>
						</div>
					</div>

					<!--Pregunta 63-->
					<div class="row form-group TH incluyente" id="hijosp3" onclick="ocultos(this.id)" style="display:none;">
						<label class="col-lg-12">61. ¿Quién te apoya en el sostenimiento económico de tu(s) hijos(as)?</label>
						<div class="col-lg-12">
							<div class="checkbox">
								<label>
									<input id="D63a" type="checkbox" class="verbq63" name="D63[]" onclick="ocultos('D63')" value="1" <?php echo set_checkbox("D63","1"); echo $fila->D63a;?>/>
									El papá o la mamá de tu(s) hijos(as)
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="D63b" type="checkbox" class="verbq63" name="D63[]" onclick="ocultos('D63')" value="2" <?php echo set_checkbox("D63","2"); echo $fila->D63b;?>/>
									Personas familiares
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="D63c" type="checkbox" class="verbq63" name="D63[]" onclick="ocultos('D63')" value="3" <?php echo set_checkbox("D63","3"); echo $fila->D63c;?>/>
									Personas ajenas a tu familia
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input id="D63d" type="checkbox" class="verbq63" name="D63[]" onclick="ocultos('D63d')" value="4" <?php echo set_checkbox("D63","4"); echo $fila->D63d;?> />
									Nadie te apoya
								</label>
							</div>
							<p class="t_error"><?php echo strip_tags(form_error('D63[]')); ?></p>
						</div>
					</div>	

					    <!-- Pregunta 62-->
				<div id="bq63" style="display: none;">
				    <div class="row form-group">
				        <label class="col-lg-6 col-md-8 col-sm-12 col-xs-12">62. ¿En tu primera relación sexual utilizaste algún método anticonceptivo o de prevención de Infecciones de Transmisión Sexual?</label>
				        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
					        <div class ="radio radio-primary">
						        <label>
						        <?php
						        	$rta1 =''; $rta2='';
									if ($fila->D45 == 'checked') {$rta1 ='checked'; $rta2='';}
									if ($fila->D45 == 2) {$rta1  =''; $rta2='checked';}
									?>
						         <input type="radio" name="D45" value ="1" <?php echo set_radio('D45','1'); echo $rta1; ?>/>
						         Sí
						        </label>
						    </div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
						    <div class ="radio radio-primary">
						        <label>
						         <input type="radio" name="D45" value ="2" <?php echo set_radio('D45','2'); echo $rta2; ?>/>
						         No
						        </label>
						    </div>
						</div>
						<div>
						</div>
				    </div>
				    <div class="row">
				    	<div class="col-xs-1"></div>
							 <span class="t_error" ><?php echo strip_tags(form_error('D45')); ?></span>	
					</div>

				    <!-- Pregunta 63-->
				  
				    <div class="row form-group">
				        <label class="col-lg-6 col-md-8 col-sm-12 col-xs-12">63. ¿En tu última relación sexual utilizaste algún método anticonceptivo o de prevención de Infecciones de Transmisión Sexual?</label>
				        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
					        <div class ="radio radio-primary">
						        <label>
						        <?php
						        	$rta1 =''; $rta2='';
									if ($fila->D46 == 'checked') {$rta1 ='checked'; $rta2='';}
									if ($fila->D46 == 2) {$rta1  =''; $rta2='checked';}
								?>
						         <input type="radio" name="D46" value ="1" <?php echo set_radio('D46','1'); echo $rta1; ?>/>
						         Sí
						        </label>
						    </div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">   
						    <div class ="radio radio-primary">
						        <label>
						         <input type="radio" name="D46" value ="2" <?php echo set_radio('D46','2'); echo $rta2; ?>/>
						         No
						        </label>
					        </div>
					    </div>
				  	</div>
					<div class="row">
						<div class="col-xs-1"></div>
							<span class="t_error"><?php echo strip_tags(form_error('D46')); ?></span>
					</div>
					
				<!-- Pregunta 64-->
					<div class="row form-group">
					    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
							<label>64. En los <span class="sub_raya">últimos 12 meses,</span> ¿has tenido relaciones sexuales sin uso de métodos anticonceptivos o de prevención de Infecciones de Transmisión Sexual?</label>
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
									Sí
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
									No has tenido relaciones sexuales en los últimos 12 meses
								</label>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-1"></div>
							<span class="t_error"><?php echo strip_tags(form_error('D47')); ?></span>
						</div>
					</div>

					<!-- Pregunta 65-->								
					<div class="row form-group"  style="display:none;" id="anti_c">
						<label class="col-lg-12">65. ¿Cuál fue la razón para no utilizar métodos anticonceptivos o de prevención de Infecciones de Transmisión Sexual?
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
					
			</div>
				<div class="container">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
						<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<input type="submit" id ="btn_D60" class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" value="Siguiente"/>
						</div>
					</div>
				
			    </div>
					<!-- ************************************************************************************************************************************************************************************* -->
			 
			<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="14">
					
					<label class="col-md-12 sub_t" id="cap_5">Para finalizar, te preguntaremos sobre el uso que haces del internet.
					</label>

					<div form-group>
						<p class="glosario"><b>Internet:</b> el uso de internet implica el acceso a contenidos en páginas web, buscadores como Google, Bing, etc., mensajería instantánea (WhatsApp, Line) o chat, correo electrónico, descarga de música, juegos o películas y uso de redes sociales como Facebook, Twitter, Ask.fm, Instagram, Snapchat, entre otras. </p>
					</div>

					<!-- Pregunta 55-->
					<div class="row form-group">
						<label class="col-lg-6 col-md-8 col-sm-12 col-xs-12">66. En los <span class="sub_raya">últimos 12 meses</span>, ¿has navegado en internet?</label>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							<div class="radio radio-primary">
								<label>
								<?php
									$rta1 =''; $rta2='';
									if ($fila->E55 == 'checked') {$rta1 ='checked'; $rta2='';}
									if ($fila->E55 == 2) {$rta1  =''; $rta2='checked';}
								?>
									<input type="radio" name="E55" id='E55si' onclick="ocultos(this.id)" value ="1" <?php echo set_radio('E55','1'); echo $rta1; ?>/>
									Sí
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
						<span class="t_error col-xs-12 col-sm-12 col-lg-12" id="ErrE66"><?php echo strip_tags(form_error('E55')); ?></span> 
					</div>

					<!-- Pregunta 69-->								
					<div class="row form-group" id="E56" style="display:none;">
						<label class="col-lg-12">67. En los <span class="sub_raya">últimos 12 meses</span>, ¿desde dónde has accedido a internet?</label>
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
										Desde el computador de la casa de otra persona (familiar, novio(a), amigo(a), vecino(a))
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

					<!-- Pregunta 70-->	
					<div class="row form-group" id="E57" style="display:none;">
						<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">68. En los <span class="sub_raya">últimos 12 meses</span>, ¿con qué frecuencia has navegado en internet?</label>
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
										Una o más veces al día
									</label>
								</div>
							</div>
							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
								<div class="radio radio-primary">
									<label>
										<input id="E53b" type="radio"  name="E57" value ="2" <?php echo set_radio('E57','2'); echo $rta[2]; ?>/>
									    Una o más veces a la semana 
									</label>
								</div>
							</div>
							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
								<div class="radio radio-primary">
									<label>
										<input id="E53c" type="radio"  name="E57" value ="3" <?php echo set_radio('E57','3'); echo $rta[3]; ?>/>
										Una o más veces al mes
									</label>
								</div>
							</div>
					</div>
					<div class="row">
							<div class="col-xs-1"></div>
							<span class="t_error"><?php echo strip_tags(form_error('E57[]')); ?></span>	
						</div>

				
					<div class="container">
					   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<input type="submit" class="btn btn-raised btn-success arrow-r" id="internet" style="position:relative;right: 0px;" value="Siguiente"/>
						</div>
					</div>
				
			</div>
				<!-- ************************************************************************************************************************************************************************************* -->
			<div class="pregunta-encuesta pagina aparece-a-clase container" data-slide="15">
				
					<!-- Pregunta 58-->								
					<div class="row form-group" id="E58" style="display:none;">
						<label class="col-lg-12">69. En los <span class="sub_raya">últimos 12 meses</span>, ¿cuál o cuáles temas has consultado cuando navegas en internet?</label>
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

					<!--Pregunta 72-->
					<div class="row form-group" id= "E59" style="display:none;">
			             <label class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
			            	70. En los <span class="sub_raya">últimos 12 meses</span>, ¿has conocido personas a través de internet?
			                </label>
			                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6"-->
			                	<div class="radio radio-primary">
			                		<label>
					                <?php
					                	$rta1 =''; $rta2='';
										if ($fila->E59 == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->E59 == 2) {$rta1  =''; $rta2='checked';}
									?>
					                    <input type="radio"  name="E59" value ="1" <?php echo set_radio('E59','1'); echo $rta1; ?>/>
					                    Sí
					                </label>
			                	</div>
			                </div>
			                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6"-->
			                	<div class="radio radio-primary">
			                		<label>
					                    <input type="radio"  name="E59" value ="2" <?php echo set_radio('E59','2'); echo $rta2; ?>/>
					                    No
					                </label>
			                	</div>
			                </div>
			            </div>
			            <div class="row">
			            	<div class="col-xs-1"></div>
			            	<span class="t_error"><?php echo strip_tags(form_error('E59')); ?></span>	
			            </div>
			            
			            <!--Pregunta 73-->
			            <div class="row form-group" id= "E60" style="display:none;">
			            	<label class="col-lg-6 col-md-8 col-sm-12 col-xs-12">71. En los <span class="sub_raya">últimos 12 meses</span>, 
			            	¿has tenido conversaciones con contenido sexual con personas que conociste en internet?
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
					                    Sí
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
			            
			            <!--Pregunta 74-->
			            <div class="row form-group" id= "E61" style="display:none;">
			            	<label class="col-lg-6 col-md-8 col-sm-12 col-xs-12">72. En los <span class="sub_raya">últimos 12 meses</span>, ¿te has encontrado con una persona que conociste en internet?</label>
				        	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
					        	<div class="radio radio-primary"><label>
					                <?php
					                	$rta1 =''; $rta2='';
										if ($fila->E61 == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->E61 == 2) {$rta1  =''; $rta2='checked';}
									?>
					                    <input type="radio" name="E61" value ="1" <?php echo set_radio('E61','1'); echo $rta1; ?>/>
					                    Sí
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

			            <!--Pregunta 75-->
			            <div class="row form-group" id= "E62" style="display:none;" >
			            	<label class="col-lg-6 col-md-8 col-sm-12 col-xs-12">73. En los <span class="sub_raya">últimos 12 meses</span>, ¿le has enviado fotos o videos íntimos tuyos a personas que conociste en internet?</label>
			            	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
			            		<div class="radio radio-primary">
			            			<label>
					                <?php
					                	$rta1 =''; $rta2='';
										if ($fila->E62 == 'checked') {$rta1 ='checked'; $rta2='';}
										if ($fila->E62 == 2) {$rta1  =''; $rta2='checked';}
									?>
					                    <input type="radio" name="E62" value ="1" <?php echo set_radio('E62','1'); echo $rta1; ?>/>
					                    Sí
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
			          
			       		<!--Pregunta 76-->
					    <div class="row form-group" id="E63" style="display:none;  text-align: justify;">
							<label class="col-lg-12">74. ¿Cuáles de los siguientes riesgos de internet conoces?</label>
							
							<div class="col-lg-12">

								<div class="checkbox col-lg-4">

									<label>
										<input id="E59a" type="checkbox" class="E63" value="1" name="E63[]" onclick="ocultos('E63e')" <?php echo set_checkbox('E63','1'); echo $fila->E63a;?>/>	
										<b>Grooming:</b> es cuando un posible abusador o una persona que usa una identidad falsa trata de iniciar una relación en línea con un menor de edad, buscando involucrarlo en actos sexuales, en intercambio de imágenes y en conversaciones con contenido sexual.
									</label>
								</div>
								
								<div class="checkbox col-lg-4">
								<br>
										<label>
										<input id="E59b" type="checkbox" class="E63" value="2" name="E63[]" onclick="ocultos('E63e')" <?php echo set_checkbox('E63','2'); echo $fila->E63b;?>/>
									    <b>Sexting:</b> es cuando alguien hace fotos o videos de sí mismo, poco apropiados (sugestivos o sexualmente explícitos), y los envía a alguien vía teléfono celular o internet.
									</label>
								</div>
								<div class="col-lg-4"><img src='<?php echo base_url('/images/excluye.png')?>' class="img-responsive"></div>
							</div>
							
							<div class="col-lg-12">
								<div class="checkbox col-lg-4">
									<label>
										<input id="E59c" type="checkbox" class="E63" value="3" name="E63[]" onclick="ocultos('E63e')" <?php echo set_checkbox('E63','3'); echo $fila->E63c;?>/>
										<b>Ciberacoso:</b> es un tipo de agresión psicológica que se da usando las nuevas tecnologías: teléfonos celulares e internet. Por medio del envío de correos, mensajes o imágenes, se busca herir o intimidar a otra persona. La víctima desconoce la identidad de su agresor.
									</label>
								</div>
								<div class="checkbox col-lg-4">
									<br>
									<label>
										<input id="E59d" type="checkbox" class="E63" value="4" name="E63[]" onclick="ocultos('E63e')" <?php echo set_checkbox('E63','4'); echo $fila->E63d;?>/>
										<b>Ciberdependencia:</b> se da cuando el tiempo dedicado a navegar en internet y usar redes sociales es superior al tiempo que se  invierte  en actividades fuera de la red. Son comportamientos donde las personas convierten en imprescindibles las herramientas digitales, significa el miedo a perderse de algo que sucede en el mundo virtual.
									</label>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="checkbox col-lg-6">
									<label>
									<input id="E63e" type="checkbox" value="5" onclick="ocultos(this.id)" name="E63[]" <?php echo set_checkbox('E63','5'); echo $fila->E63e;?>/>
										Ninguno de los anteriores
									</label>
								</div>
							</div>
							<span class="t_error"><?php echo strip_tags(form_error('E63[]')); ?></span>
						</div>	
							<div class="row form-group" id="E64" style="display:none;">
						<label class="col-lg-12">75. ¿Qué es lo que más te gusta de las redes sociales?</label>
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
					    <div class="container" id="fin_internet">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							    <a href="javascript:void(0)" class="btn btn-raised btn-warning arrow-l" style="position:relative;right: 0px;" >Anterior</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<input type="submit"  class="btn btn-raised btn-success arrow-r" style="position:relative;right: 0px;" value="Finalizar" />
							</div>
						</div>
					    </div>
					
			
			</div>
			<?php echo form_close(); ?>
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
			$("#btn_close").click(function(){
				var seguir=1
				if ($("#clave").val()=='')
				{
					$("#err_clave").text("Ingresa tu clave");
					seguir=0;
				}
				
				if ($("#motivo").val().trim()=='')
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
		                		$("#err_motivo").text("Revise su contraseña");
		                		$("#form_cierre").show();
		                		$("#ms_cierre").html("");
	                	}else{
		                	  $("#encuesta").html('');
		                	  $("#monitor").hide();
		                	  $("#menu").html(r);
		                	  $("#form_cierre").hide();
		                	}                	
		                },
		                error: function(errorThrown)
		                {
		                 alert("Ocurrio un error en AJAX!");
		                 alert(errorThrown);
		                }
	            });
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
			
