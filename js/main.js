var listaMenu = "";
var slide = 1;
var cont_C25=1;
var cant_paginas=parseInt($(".pagina").length);
if ($('#seguir').val()>0){
	slide = $('#seguir').val();

}

$(function(){
	$.material.init();
	main();
	delegateEvents();
});
function main()
{
	
/**espacio para limpiar campos*/




	/*******/
	$("#paginador").text(slide+"/"+cant_paginas);//origial
	var paginaActual = parseInt($(".active").attr("data-slide"));

	if($("input:radio[name=D32]:checked").val()==1)
		$("#D41_a").slideDown('slow');//D41a
		
		
	if(paginaActual == cant_paginas)
		{
			console.log("error");
			alert("Por favor Informa al Monitor que terminaste la Encuesta!");
		}
		else
		{
					
	if($('input:radio[name=C19]:checked').val()=='1'){
			 $('#C20').slideDown("slow");
			}

	if($('input:radio[name=C20]:checked').val()==2 || $('input:radio[name=C19]:checked').val()==2) {//salta el 8
	 	  	$('#btn7').show();	  
		 }

	if($('input:radio[name=C20]:checked').val()=='1'){
	 		  $('#C21').slideDown("slow");
	 		  if($('input:radio[name=C21]:checked').val()=='1')
	 		     $('#C22').slideDown("slow");
	 		  if($('input:radio[name=C22]:checked'))
	 		     $('#C23').slideDown("slow");
	 		  if($('input:radio[name=C23]:checked').val()=='1'){
	 		     $('#C24').slideDown("slow");
	 		  }
	 		  if($('input:radio[name=C23]:checked').val()=='2'){
	 		    $('#C25').slideDown("slow");
	 		  }
	 		  if($('input:radio[name=C24]').is(':checked')){
	 		    $('#C25').slideDown("slow");
	 		  }
	 		  if($('input:radio[name=C25]:checked').val()=='1'){
	 		    $('#C26a').slideDown("slow");
	 		    $('#consume').slideDown("slow");
	 		  }
	 		  var letra=['0','b','c','d','e','f','g','h','i','j'];
				   var nameC26="";
 					for (var i = 1; i < 10; i++) {
 						nameC26 ="input:radio[name=C26"+letra[i]+"]:checked";
 						if($(nameC26).val()!= undefined){
 							//alert(nameC26+" "+$(nameC26).val());
 							$("#C26"+letra[i]).slideDown("slow");
 							cont_C25 = i+1;
 						}else break;
		
 					}

 				if (cont_C25 > 1)
 					$('#btn_menos').show();
  
		 	}
		if($('input:radio[name=D40]:checked').val()=='2' && slide == 11){
		 	 	//alert('saltar al slide 13');
			 	//alert ($('#seguir').text()+" slide"+slide+" "+$('input:radio[name=D40]:checked').val());
			 	$("#avance").css('width',((100/cant_paginas)*(slide+3))+'%');
				//$("div[data-slide='"+(paginaActual)+"']").hide().removeClass("active");
				$('div[data-slide=14]').show().addClass("active");
				$("#seguir").val('14');
				 slide=14;
			 }
			 else{
				$("#avance").css('width',((100/cant_paginas)*(slide))+'%');
				$("div[data-slide='"+(paginaActual)+"']").hide().removeClass("active");
				$('div[data-slide='+slide+']').show().addClass("active");
				}
/*Muestra las opciones ocultas de acuerso a la respuesta*/
		oculto();
		if($('input:radio[name=D44]:checked').val()==2)	
			tieneHijos('D44');
		B15();
		B14();
		C17();
		C18();
		D27();
		D26();
		ocho();
		nt();
		if(slide > 15){
			$("#menu").hide();
		}
		if ($('#E55no').prop("checked") && slide == 15){
			$("#menu").hide();
		}


		if($("#A4l").prop("checked")){
			$(".A4").prop("disabled",true);
			$('#A5_1').prop("checked",true);
		}	
	      
		if($('input:radio[name=D60]:checked').val()==1){
		  	$("#hijosp1").slideDown("slow");
			$("#hijosp2").slideDown("slow");
			$("#hijosp3").slideDown("slow");
         }
		
		if($('input:radio[name=A8]:checked').val()==1){
			$("#not1").show();
			}

		if($('input:radio[name=A11]:checked').val()==1){
						
			$("#not2").show();
		}
				

		if(!$('input:radio[name=A11]').is(':checked')|| $('input:radio[name=A11]:checked').val()== 2){
			
			$("#not2").hide();
				
		}
		if (slide == 7){
			if ($("#A8b").prop("checked"))
	      		pareja("A8b");
		  }
		if ($("#A12d").prop("checked")){ 
			 $("#A12a").prop("disabled",true);
			 $("#A12b").prop("disabled",true);
			 $("#A12c").prop("disabled",true);

			}
		if($("#A12a").prop("checked") || $("#A12b").prop("checked") || $("#A12c").prop("checked")){
			$("#A12d").prop("checked",false);
			$("#A12d").prop("disabled",true);
			}

		if($('input:radio[name=B12]:checked').val()!='9'){
			$("#B12b").prop("disabled",true);
			$("#B12b").val('');
		}else if ($("#B12a").prop("checked"))
				{
				  $("#B12b").prop("disabled",false);					   
				}

		if ($("#B13a").prop("checked"))	{
			  $("#B13b").prop("disabled",false);					   
			}else $("#B13b").prop("disabled",true);
		if($("#B8a").prop("checked"))
			$(".B8").prop("disabled",true);
		else $(".B8").prop("disabled",false);

		if($('#A4e').prop('checked') /*|| $('#B8f').prop('checked')*/) {
			$("#B10eapli").prop("disabled",true);
		  }	else
		     $("#B10eapli").prop("disabled",false);	

		if($('#A4i').prop('checked') || $('#B8j').prop('checked')) {
			$("#B10japli").prop("disabled",true);
		  }	else
		     $("#B10japli").prop("disabled",false);	

		 if($('input:radio[name=A14]:checked').val()!=6){
					$('#A14_cual').val('');
					$('#A14_cual').prop('disabled',true);
				}

		
		if($("#B14j").prop("checked"))
			  $(".B14").prop("disabled",true);
			else $(".B14").prop("disabled",false);

		if($("#B15t").prop("checked"))
			$(".B15").prop("disabled",true);
		else $(".B15").prop("disabled",false);


		if($("#C17i").prop("checked")){
			$(".C17").prop("disabled",true);
			$("#C17h").prop("disabled",true)
		}
		
		if($("#C17h").prop("checked")){
			$(".C17").prop("disabled",true);
			$("#C17i").prop("disabled",true);
			

		}

		if($("#C18r").prop("checked"))
			$(".C18").prop("disabled",true);
		else $(".C18").prop("disabled",false);
		//--------------------
		if ($('.sisexo1').is(":checked"))
			$("#mensa2").slideDown('slow');
		
		//-----------------
		if ($('.sisexo2').is(":checked"))
			$("#mensa3").slideDown('slow');
		else 
			$("#mensa3").slideUp('slow');
		/*if ($("input:radio[name=C25k]:checked").val()==7 || $("input:radio[name=C25k]:checked")==false){
			$("#C25k_cual").prop('disabled',true);
		}else
			$("#C25k_cual").prop('disabled',false);*/
		
		
/**************************************/
		if($('.C27').is(':checked')) {
			$("#C27").slideDown('slow');
			$("#btn_sigue").hide();
			$('#btn7').slideDown('slow');
			$("#mensa1").slideDown('slow');
			$("#errC27").text("");
		 }
/******************/

		if($("#D27r").prop("checked")){
			  $(".D27").prop("disabled",true);
			  $(".D27").prop("checked",false);
			}
			else $(".D27").prop("disabled",false);

	
		if( $("#D31a").prop("checked")||  $("#D33a").prop("checked")||
		$("#D35a").prop("checked")|| $("#D36a").prop("checked")||
		$("#D46a").prop("checked")|| $("#D38a").prop("checked")|| $("#D39auxa").prop("checked")|| $("#D39a").prop("checked")||
		 $("#D40a").prop("checked")|| $("#D41si").prop("checked") || $("#D34a").prop("checked") || $("#D41a").prop("checked"))
					{
			$("#D40ab").show();
			//$("input:radio[name=D38]").prop("checked",false);
		}
		if($("#D31b").prop("checked")){
			$("#D35b").prop("checked",true);
			$("#verD35").hide();
			//$("#D35b").prop("checked",true);
		}
	
		//else $("input:radio[name=D49]").prop('checked',false);
		if ($(".D39").is(":checked")){
			$("#mensa2").show();
		}

		if ($("#D38abc").prop("checked"))
			$("#mensa2").slideDown('slow');

		if($("#D38ab").prop("checked"))
			$("#D39").show();
	

		if ($('#ch39').prop('checked'))
		    $('#D39g_cual').prop("disabled",false);
		 else
		 	$('#D39g_cual').prop("disabled",true);
/*****/
		if ($("#D41").val()<=10){
					$("#D42II_c").prop("checked",false);
					$("#D42II_c").prop("disabled",true);
				}
				
		if($('input:radio[name=D31]:checked').val()=='1')//40 muestra 40a
			$('#verD35').slideDown("slow");

		if($('input:radio[name=D44]:checked').val()=='1')//40 muestra 40a
			$('#D57').slideDown("slow");
		if ($('input:radio[name=D40]:checked').val()=='2' && $("#D60a").prop('checked')){
			 $("#error_D40").text("Nos informaste tener hijos por favor revisa tus respuestas.");
			 $("#btn_D40").prop('disabled',true);
					}
	
		if($('input:radio[name=D43]:checked').val()!='10')
			$('#D43_cual').prop('disabled',true);

		if ($("#D47si").prop("checked")){
			$("#anti_c").show();
			//alert("Hola valida d48");
		}

		if ($(".verbq63").is(":checked") || $('input:radio[name=D44]:checked'))
			$("#bq63").slideDown('slow');

		if ($('#D49si').prop("checked") ){
			$('#ver_D49a').show();
			$('#D50').show();
			$('#D53').show();
		}
		if ($('#D50_si').prop("checked") ){
			$('#D53').show();
		}
		if ($('#D51si').prop("checked") )
				{
			  $('#D52').show();
			  $('#D53').show();
			}
		if ($('input:radio[name=D53]:checked').val()=='1')
			 $('#D54').show();
		
		
		if($('#D54g').prop('checked'))
				$("#D54g_cual").prop("disabled",false);
			else{
				$("#D54g_cual").prop("disabled",true);
				$("#D54g_cual").val('');
			}
		if ($('#E55si').prop("checked") )
		{
		  $('#E56').show();
		  $('#E57').show();
		  $('#E58').show();
		  $('#E59').show();
		  $('#E63').show();
		  $('#E64').show();
		  $('#internet').prop("disabled",false);
		  $('#fin_internet').show();
		}
		if ($('#E55no').prop("checked"))
		{
		  $("#internet").val('Finalizar');
		  VerificaNavega();
		  $('#fin_internet').hide();
		  //slide=15;
		}


		if($('input:radio[name=E59]:checked').val()=='1'){
			$('#E60').show();
			$('#E61').show();
			$('#E62').show();
		}
	
    }
///Fin mostrar slide

	for(var i = 1;i<=cant_paginas;i++){
		if($(".titulo").eq([i-1]).parents(".pagina").attr("data-slide") === undefined){
			continue;
		}
		else{
			listaMenu+="<li class='itemMenu' data-pag='"+$(".titulo").eq([i-1]).parents(".pagina").attr("data-slide")+"'>"+$(".titulo").eq([i-1]).text()+"</li>";
		}
	}
	$(".menulista").html(listaMenu);
	cambia_m();
}

function cambia_m(){
	var nro=1;
	var sl_aux= Number(slide);
	var elementos = $(".itemMenu");
	for (var i =0; i<5; i++){//quita id's
		$(elementos[i]).removeAttr("id");
	}

	if (sl_aux >2 ){
		nro = 2;
		//$("data-pag").attr( "id",menu_activo)
	}
	if (sl_aux>4){
		nro = 3;
	}
	if (sl_aux>6 ){
		nro = 4;
	}
	if (sl_aux>13){
		nro = 5;
	}
	menu_activo= "btn-seccion_"+nro;
	$(elementos[nro-1]).attr("id",menu_activo);
}

function delegateEvents()
{

$(document).ready(function(){
 
 $("input:radio[name=B13]").click(function(){
 	var rtaB13 = $(this).val();
 	if ($("#B15t").prop("checked") && ((rtaB13 > 1 && rtaB13 < 5) || rtaB13 == 7))
 	{
 		VerificaB15t();
 	}else{
 		$("#btnSl4").prop("disabled",false);
 		$("#ErrB15").text("");
 	}


 });
	
	$("input:radio[name=A15]").click(function(){
		if($("input:radio[name=A15]:checked").val() != '3' && $('#A4e').prop('checked')){
			//$("#errA15").addClass("alert alert-warning");
			$("#errA15").text("Nos indicaste que vivías con tu pareja, por favor revisa tus respuestas."); 
		}else{
			//$("#errA15").removeClass("alert alert-warning");
			$("#errA15").text("");
		}

	});

	$("#monitor").click(function(){
	  if ($("#form_cierre").is(":hidden"))
		$("#form_cierre").show();
	  else 
	  	{
	  	 $("#clave").val("");
		 $("#motivo").val("");
	  	 $("#form_cierre").slideUp();
	  	 
	  	}
	});

	$("#clave").focus(function(){
		$("#err_clave").text("");
			});

	$("#motivo").focus(function(){
		$("#err_motivo").text("");
			});
			
			/*validaciones de las preguntas*/
			//Pregunta Pregunta 19
		

			$('input:radio[name=A14]').click(function(){
				if($('input:radio[name=A14]:checked').val()!=6){
					$('#A14_cual').val('');
					$('#A14_cual').prop('disabled',true);
				}
				else{
					$('#A14_cual').prop('disabled',false);
				}
			});

			$('.pareja').click(function(){
				if($('#A4e').prop('checked') /*|| $('#B8f').prop('checked')*/) {
					$("#B10eapli").prop("checked",false);
					$("#B10eapli").prop("disabled",true);
					}
				else $("#B10eapli").prop("disabled",false);
			});

		
			$('.hijos').click(function(){
				if($('#A4i').prop('checked') || $('#B8j').prop('checked')) {
					$("#B10japli").prop("checked",false);
					$("#B10japli").prop("disabled",true);
					}
				else $("#B10japli").prop("disabled",false);
			});

			$('input:radio[name=C22]').click(function(){
				$('#C23').slideDown();
				if ($("#C25no").prop("checked")){
					$("#C27").slideDown('slow');
				 }	
			
			});
			$('input:radio[name=C23]').click(function(){
				if($('input:radio[name=C23]:checked').val()==1){
					//$('#C23_cual').slideDown('');
				    $('#C24').slideDown();
				}
				else{
					$('input:radio[name=C24]').prop('checked',false);
					$('#C24').slideUp();
					$('#C25').slideDown();
					$('#C23_cual').val('');
				}

				});

			$('input:radio[name=C24]').click(function(){
				if ($("#C25no").prop("checked")){
					$("#C27").slideDown('slow');
				 }
				 $('#C25').slideDown();	
				});

		
			$('input:radio[name=C25]').click(function(){
				if($('input:radio[name=C25]:checked').val()==1){
				   $('#C26a').slideDown();
				   $('#consume').slideDown();
				   $('#btn_sigue').show();
				   if ($("#C27").is(":visible")){
				   		$("#C27").hide();
			  	   	}
			  	   	$('#btn7').hide();
			  	   	if(cont_C25<10)
						$("#btn_mas").show();
				 }
				else{
				   var letra=['0','a','b','c','d','e','f','g','h','i','j'];
				   var nameC26="";
 					for (var i = 1; i < 11; i++) {
 						nameC26 ="input:radio[name=C26"+letra[i]+"]";
 						$(nameC26).prop('checked',false);
 						$('#C25_cual'+i).val('');

 					}
					$('.verC26').hide();
					$('#consume').slideUp();

 					$('#C27').slideDown('slow');
 					if ($(".C27").is(":checked")){
 						$('#btn7').show();
 						$("#mensa1").slideDown('slow');
 					}
 					cont_C25=1;
 				}

				});

			$('.C27').click(function(){
				if($('.C27').is(':checked')) {
					$('#btn7').slideDown('slow');
					$("#errC27").text("");
					$("#mensa1").slideDown('slow');
				}
				else {
					$('#btn7').slideUp('slow');
					$("#errC27").text("Selecciona una o varias opciones.");
					$("#mensa1").slideUp('slow');
				}


			});

			$(".D39").click(function(){
				if ($(".D39").is(":checked")) {
					$("#mensa2").slideDown();
				}
			});
			/*$('#D39g_cual').click(function(){
				$('#ch39').prop('checked',true);
				});*/

			$('#D54g_cual').click(function(){
				$('#D54g').prop('checked',true);
				});

			$('input:radio[name=B13]').click(function(){
				if($('input:radio[name=B13]:checked').val()!='9'){
					$("#B13b").prop("disabled",true);
					$("#B13b").val('');
				}else if ($("#B13a").prop("checked"))
					{
					  $("#B13b").prop("disabled",false);					   
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
					$('#D54').slideDown("slow");
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
					

					if(($("#A4i").prop('checked') || $("#B8j").prop('checked') || 
					$('input:radio[name=B10j]:checked').val()<=3 || $("#B15j").prop('checked') || $("#C18j").prop('checked')) 
					&& $('input:radio[name=D40]:checked').val()==2)
						{	$("#error_D40").text("Nos informaste tener hijos por favor revisa tus respuestas.");
							$("#btn_D40").prop('disabled',true);
						}
				
					$('input:radio[name=D44]').prop('checked',false);
					$('input:radio[name=D45]').prop('checked',false);
					$('input:radio[name=D46]').prop('checked',false);
					$('input:radio[name=D47]').prop('checked',false);
					$('input:radio[name=D49]').prop('checked',false);
					$('input:radio[name=D50]').prop('checked',false);
					$('input:radio[name=D51]').prop('checked',false);
					$('input:radio[name=D50_51]').prop('checked',false);
					$('input:radio[name=D52]').prop('checked',false);
					$('input:radio[name=D53]').prop('checked',false);
					$('input:radio[name=D62]').prop('checked',false);
					$("input:radio[name=D60]").prop("checked",false);
					$(".D54").prop("checked",false);
					$(".D48").prop("checked",false);
					$(".verbq63").prop("checked",false);
					$("#D61").val('');
					$("#D55II").val('');
					$("#D54g_cual").val('');
					//$('#grupo_sex').slideUp("slow");
				}

			});

		$("#btn_D40").click(function(){
		 	if(($("#A4i").prop('checked') || $("#B8j").prop('checked') || 
					$('input:radio[name=B10j]:checked').val()<=3 || $("#B15j").prop('checked') || $("#C18j").prop('checked')) 
					&& $('input:radio[name=D40]:checked').val()==2)
						{	$("#error_D40").text("Nos informaste tener hijos por favor revisa tus respuestas.");
							$("#btn_D40").prop('disabled',true);
						}
		 });

		$("#btn8").click(function(){
			if ($('input:radio[name=A11]:checked').val()==2)
				pareja("A11b");
		});

			$("#D41").blur(function(){
				if ($("#D41").val()<=10){
					$("#D42II_c").prop("checked",false);
					$("#D42II_c").prop("disabled",true);
				}
				else
					$("#D42II_c").prop("disabled",false);
			});

			$("input:radio[name=D32]").click(function(){//corresponde a D41
				if($("input:radio[name=D32]:checked").val()==1){
					$("#D41_a").slideDown('slow');//D41a
					$('input:radio[name=D41a]').prop('checked',false);
				}
				else{
					$('#D41a_no').prop('checked',true);
					$("#D41_a").slideUp('slow');
				}

			});

			//$("input:radio[name=D35]").prop("checked",false);

			$('input:radio[name=D44]').click(function(){
			
				 if ($('input:radio[name=D44]:checked').val()=='1'){
				 	$("#D57").slideDown('slow');
				 	$('#error_D44').text('');
				 }
				 else {
				 	/*Valida tiene hijos pero dice no haber dejado a haber estado en embarazo*/
				 	  tieneHijos('D44');
				 		/**/
				 	$("input:radio[name=D60]").prop("checked",false);
				 	$("#D57").slideUp('slow');
				 	noHijos();
				 	$("#bq63").slideDown("slow");
				}
				});

			$("input:radio[neme=D46]").click(function(){
				$("#bq63").slideDown("slow");
			});

			//class="verbq63" 
			$(".verbq63").click(function(){
				if ($(".verbq63").is(":checked"))
				   $("#bq63").slideDown('slow');
				else
					$("#bq63").slideUp('slow');

			});


/////////////Grupo quita elerror de C26n.
			$('input:radio[name=C21]').click(function(){
				siConsume();
				});
			$('input:radio[name=C23]').click(function(){
				siConsume();
				});
			$('input:radio[name=C25]').click(function(){
				siConsume();
				
				});


//////Fin grupo 
			
			$('#btn_sigue').click(function(){
				mas_consumo(2);
				});
			$('#btn_mas').click(function(){
				//cantidad de sustancias ingresadas.
				if($('#C27').is(':visible')) {
					$("#C27").hide();
					$('#btn7').hide();
					$('#btn_sigue').show();
					$("#mensa1").hide();
				   }
				mas_consumo(1);
				});
			



			$('.sisexo1').click(function(){
				//$("#mensa2").slideDown('slow');
			});
			$('.sisexo2').click(function(){
				$("#mensa3").slideDown('slow');
			});

			$('.noMensa3').click(function(){
				if ($("#D49no").prop("checked") && $("#D50_no").prop("checked") && $("#D51no").prop("checked"))
					$("#mensa3").slideUp('slow');
			});

			$('#btn_menos').click(function(){
				var letra=['0','a','b','c','d','e','f','g','h','i','j'];
				var C26x= "#C26"+letra[cont_C25];
				var id_cualC25x='#C25_cual'+cont_C25;
				var nameC26="input:radio[name=C26"+letra[cont_C25]+"]";
				//cantidad de sustancias ingresadas.
				//rta=confirm("Seguro que quieres quitar la sustancia.");
				/*if (rta){

				}*/
				
				if (cont_C25>1){
					$(id_cualC25x).val("");
					$(nameC26).prop('checked',false);
					$(C26x).slideUp('slow');
					cont_C25=cont_C25-1;
				if(cont_C25==9)
					$("#btn_mas").show();
				}
			   if (cont_C25==1)
					$('#btn_menos').slideUp();
				//mas_consumo(1);
				});
});

	$("body").on("click",".arrow-l",function(){
		var paginaActual = parseInt($(".active").attr("data-slide"));
		if(paginaActual == 1)
		{
			console.log("error");
		}
		else if($('input:radio[name=D40]:checked').val()=='2' && slide == 14){
					$("div[data-slide='"+(paginaActual-4)+"']").show().addClass("active");
					$("#paginador").empty().text((paginaActual-4)+"/"+cant_paginas);
					$("div[data-slide='"+(paginaActual)+"']").hide().removeClass("active");
					$("#seguir").val(paginaActual-4);
					slide=slide-4;
					
					}
		
				else{
					//console.log($("div[data-slide]").length);
					$("div[data-slide='"+(paginaActual-1)+"']").show().addClass("active");
					$("#paginador").empty().text((paginaActual-1)+"/"+cant_paginas);
					$("div[data-slide='"+(paginaActual)+"']").hide().removeClass("active");
					$("#seguir").val(paginaActual-1);
					slide=paginaActual-1;
				
			 }
	   cambia_m();
	 //location.reload(true);
	 //location.replace('http://localhost/ecasv2/c_ecas');
	 //location.assign('http://localhost/ecasv2/index.php/c_ecas')
	});
		
	$("body").on("click",".itemMenu",function(){

		var paginaActual = parseInt($(".active").attr("data-slide"));
		var paginaSeleccionada = parseInt($(this).attr("data-pag"));
		
		if(slide > 15){
			alert("Pasar a capitulo Juegos");
			//$("#juegos").show();
			$(".itemMenu").hide();
		}
		else{
			if (paginaSeleccionada <= slide || $("#estado_e").val()==1){
				$("#avance").css('width',((100/cant_paginas)*paginaSeleccionada)+'%');
				$("#paginador").empty().text(paginaSeleccionada+"/"+cant_paginas);
				$("div[data-slide='"+(paginaActual)+"']").hide().removeClass("active");
				$("div[data-slide='"+paginaSeleccionada+"']").show().addClass("active");
				$("#seguir").val(paginaSeleccionada);
				slide = paginaSeleccionada;
			}
			else alert("Oprime el boton Siguiente..");
		}
		cambia_m();
	
	});
}