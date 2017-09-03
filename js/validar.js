

//cambi el Estilo del menú

function menu_enc(id){

	
	$("a").parent(".item_menu").css("background","gray");
	$(id).addclass("item_menu");
}

//valida que si responde que consume sustancia no registre ninguna
function siConsume(){

	if($('input:radio[name=C21]:checked').val()==2 && $('input:radio[name=C23]:checked').val()==2 && $('input:radio[name=C25]:checked').val()==2 ){
		$("#C27").hide();
		$("#btn7").hide();
		$("#mensa1").slideDown('slow');
		$("#errConsume").text("Revisa tus respuestas, nos dijiste haber consumido alguna sustancia psicoactiva en los últimos 12 meses.");
	}else {$("#errConsume").text("");
		   $("#C27").slideDown();
		   $("#btn7").show();
		 }

}


//Fusnion para agregar campos de ingreso de otra sustancia
function mas_consumo(op){
	var letra=['0','a','b','c','d','e','f','g','h','i','j'];
	var id_cualC25x='#C25_cual'+cont_C25;
	var err_cualC25x='#errC25_cual'+cont_C25;

	var nameC26="input:radio[name=C26"+letra[cont_C25]+"]";
	var err_C26x="#errC26_"+cont_C25;
	var sigueC25x= "#C26"+letra[cont_C25+1];
	
		if (cont_C25 <=10)
		{
			if($(id_cualC25x).val()=='')
				{
				  $(err_cualC25x).text("Ingresa el texto.");
				}
				else if (!$(nameC26).is(':checked'))
					{
						$(err_C26x).text("Selecciona una opcion.");
					}
				else{//agregar la otra
					if (op==1){//agregar
						$(err_C26x).text("");
						$(sigueC25x).slideDown("slow");
						if (cont_C25<10)
						   cont_C25=cont_C25+1;
						if (cont_C25==10)
							$("#btn_mas").hide();

						if (cont_C25==2)
							$("#btn_menos").slideDown('slow');
					}
					else {
						$("#C27").slideDown('slow');
						if($('.C27').is(':checked')) {
							$('#btn7').slideDown('slow');
						  }
						$("#btn_sigue").hide('slow');

					}
				}
		}

}


//Desactiva cualquiera de las anteriores si selecciona la ultima opción
function cual_tex(id,op){


	var id_aux="#"+id;
	var id_err="#err"+id;

	//$('input:radio[name=C25a]').prop('checked',false);

	if (op=="cls"){
		$(id_err).text("");
	}

    else if($(id_aux).val()==''){
   		$(id_err).text("Ingresa el texto.");
    }
   

  //alert(id_aux+"id_err"+id_err);
   	
}



function nroRel(e,id){
	id_aux="#"+id;
	err_id="#err"+id;
	if (solonumeros(e)){
		nro=Number($(id_aux).val()+String.fromCharCode(key).toString());
		if (nro==0) {
		   $(err_id).text("Valor inválido.");
	 	   return false;
	 	}
	
	$(err_id).text('');
	return true;	
	}
	return false;
}


function edadPrel(e){
	var edadP=0;
	if (solonumeros(e)){
		edadP=Number($("#A13").val()+String.fromCharCode(key).toString());
		if ((String(edadP).length==1 && ((/*edadP < 6 || */edadP==0) /*&& edadP!=1*/)) || (String(edadP).length==2 && edadP > 99)) {
		   $("#errA13").text("Edad inválida.");
	 	   return false;
	 	}
	$("#errA13").text('');
	return true;	
	}
	return false;
}

function valNumero(id, min, max, ms_err){
	id_tex="#"+id;
	id_err = "#err"+id;
	var valor=Number($(id_tex).val()); 
	if (max==41)
		max= $("#A2").val();
 if (valor < min || (valor > max && valor != 99) ){
		document.getElementById('sound_err').play();
		$(id_err).text(ms_err);
		$(id_tex).focus();
	}
	else 
		$(id_err).text('');
}

function edadPSexo(e){
	var edadP=0;
	if (solonumeros(e)){
		edadP=Number($("#D55II").val()+String.fromCharCode(key).toString());
		if ((String(edadP).length==1 && ((edadP==0) && edadP!=1)) || (String(edadP).length==2 && edadP > 99)) {
		   $("#errD55II").text("Edad inválida.");
	 	   return false;
	 	}
	
	$("#errD55II").text('');
	return true;	
	}
	return false;
	
}

function edadSexo(e){
	var edad=Number($("#A2").val());
	var edad_input = $("#D41").val();
	var edadS=0;
	if (solonumeros(e)){
		edadS=Number(edad_input+String.fromCharCode(key).toString());
		if (String(edadS).length==2 && edadS > edad || edad_input=='0') {
		   //	if ()
		     $("#errD41").text("El valor digitado no es válido.");
	 	   return false;
	 	}
	
	$("#errD41").text('');
	return true;	
	}
	return false;
	
}


function edadRel(e){
	var edad=Number($("#A2").val());
	var edadR=0;
	if (solonumeros(e)){
		edadR=Number($("#A9").val()+String.fromCharCode(key).toString());
		if ((String(edadR).length==1 && ((edadR > 2 && edadR < 6) || edadR==0) ) || (String(edadR).length==2 && edadR > edad)) {
		   $("#errA9").text("Edad inválida.");
	 	   return false;
	 	}
	
	$("#errA9").text('');
	return true;	
	}
	return false;
	
}
function valNumero(id){
	id_tex="#"+id;
	var valor=Number($(id_tex).val()); 

	switch(id){

		case 'D61'://edad del estudiante entre 12 y 18
				if (valor < 1){
					$("#errD61").text('Ingresa el número de hijos.');
					$(id_tex).focus();
				}
		 break;
		case 'A2'://edad del estudiante entre 12 y 18
				if (valor < 12 || valor > 25){
					$("#errA2").text('Ingresa una edad válida.');
					$(id_tex).focus();
				}
		 break;

        case 'A9'://edad de la relación 
				if (valor < 6){
					$("#errA9").text('Edad inválida.');
					$(id_tex).focus();
				}
		 break;

		
		 case 'A13': 
		 		if (valor < 6){
					$("#errA13").text('Edad inválida.');
				$(id_tex).focus();
				}
				else
					$("#errA13").text('');
		 break;
		 case 'D55II': 
		       if (valor < 6){
					$("#errD55II").text('Edad inválida.');
				$(id_tex).focus();
				}
				else
					$("#errD55II").text('');
		 break;


	}
}

function edad(e){
	var edad=0;
	if (solonumeros(e)){
		
		edad=$("#A2").val()+String.fromCharCode(key).toString();
		if ((edad.length==1 && (edad==0 || edad >2)) || edad.length>1 && (edad < 12 || edad > 25)) {
		   $("#errA2").text("Edad inválida.");
	 	   return false;
	 	}
	
	$("#errA2").text('');
	return true;	
	}
	return false;
}

function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}


function solonumeros(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    numeros = "0123456789";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8,6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.37% 46 es le punto, 08comilla

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(numeros.indexOf(tecla) == -1 && !tecla_especial)
        return false;
    return true;
}

function ocultos(id)
{
	switch(id)
	{//d48si
		

		case "B14j":
			if($("#B14j").prop("checked"))
			  $(".B14").prop("disabled",true);
			else $(".B14").prop("disabled",false);
		break;
		case 'E63e':
			var obj = $('.E63');
		    var estado = 0;
		    for (var i=0; i< obj.length ; i++)
			{
				if(obj[i].checked==true)
				{
					estado = 1;
				}
			}
			if (estado==1 ){
				$("#E63e").prop("disabled",true);
				$("#E63e").prop("checked",false);
				
			}
			else {
				$("#E63e").prop("disabled",false);
				}
			if($("#E63e").prop("checked"))
				$(".E63").prop("disabled",true);
			else
				$(".E63").prop("disabled",false);
		

		break;

		case 'E55si':
		  	  $("#internet").val('Siguiente');
			  $('#E56').slideDown("slow");
			  $('#E57').show();
			  $('#E58').show();
			  $('#E59').show();
			  $('#E63').show();
			  $('#E64').show();
			  $("#monitor").show();
			  break;
		case 'E55no':
			  $("#internet").val('Finalizar');
			  $('.E56').prop("checked",false);
			  $('input:radio[name=E57]').prop("checked",false);
			  $('.E58').prop("checked",false);
			  $('input:radio[name=E59]').prop('checked',false);
			  $('input:radio[name=E60]').prop('checked',false);
			  $('input:radio[name=E61]').prop('checked',false);
			  $('input:radio[name=E62]').prop('checked',false);
			  $('.E63').prop("checked",false);
			  $('#E63e').prop("checked",false);
			  $('.E64').prop("checked",false);
			  $('#E56').slideUp("slow");
			  $('#E57').hide();
			  $('#E58').hide();
			  $('#E59').hide();
			  $('#E63').hide();
			  $('#E64').hide();
			  $("#monitor").hide();
			  //$('#fin_internet').hide();
			  //aumetar las página en 1
			  break;
		case 'D54g' : 
			if($('#D54g').prop('checked'))
				$("#D54g_cual").prop("disabled",false);
			else{
				$("#D54g_cual").prop("disabled",true);
				$("#D54g_cual").val('');
			}

			break;
		case 'D53si': $('#D54').slideDown("slow");
			break;
		case 'D53no': 
					  $('.D54').prop('checked',false);
					  $('#D54').slideUp("slow");
					  $("#D54g_cual").val('');
				
		break;

		case 'D51si': $('#D52').slideDown("slow");
					  $('#D53').slideDown("slow");
					  $('input:radio[name=D52]').prop('checked',false);
					  $('input:radio[name=D53]').prop('checked',false);
			break;
		case 'D51no': $("#D52no").prop("checked",true);
					  $('#D52').slideUp("slow");
					  if($('input:radio[name=D49]:checked').val()!=1){
					  	$('.D54').prop('checked',false);
					    $("#D54g_cual").val('');
					  	$('#D53no').prop("checked",false);
					  	$('#D53').slideUp("slow");
					  	$('#D54').slideUp("slow");
					  }
			break;
		case 'D50_si':
				$('#D53').slideDown("slow");
		 break;
		case 'D50_no': 
				if($('input:radio[name=D49]:checked').val()!=1 && $('input:radio[name=D51]:checked').val()!=1){
					$('#D53').slideUp("slow");
				}

		break;
		/******************/	
		case 'D49si': $('#ver_D49a').slideDown("slow");
					  $('#D53').slideDown("slow");
					  $('input:radio[name=D50]').prop('checked',false);
					  $('input:radio[name=D53]').prop('checked',false);
				  
			break; 
		case 'D49no'://$("#D50no").prop("checked",true); 
					 $('#ver_D49a').slideUp("slow");
					 //$('input:radio[name=D50]:checked').val()!=1
					  if($('input:radio[name=D51]:checked').val()!=1){
					  	$('#D53no').prop("checked",false);
					  	$('.D54').prop('checked',false);
					    $("#D54g_cual").val('');
					  	$('#D53').slideUp("slow");
					  	$('#D54').slideUp("slow");
					  	
					  }
					  
					 
			break;
		case 'D47':	$('#anti_c').slideDown("slow");
			break;
		case 'D47no': $('#anti_c').slideUp("slow");
					  $('.D48').prop('checked',false);
			break;
		case 'D47no2': $('#anti_c').slideUp("slow");
						$('.D48').prop('checked',false);
			break;
		case "D63": if($("#D63a").prop("checked") || $("#D63b").prop("checked") || $("#D63c").prop("checked")){
					$("#D63d").prop("checked",false);
					$("#D63d").prop("disabled",true);
				}
				else
					$("#D63d").prop("disabled",false);
				
		break;

		case "D63d":if ($("#D63d").prop("checked")){ 
						 $("#D63a").prop("disabled",true);
						 $("#D63b").prop("disabled",true);
						 $("#D63c").prop("disabled",true);
						}
					else{
						 $("#D63a").prop("disabled",false);
						 $("#D63b").prop("disabled",false);
						 $("#D63c").prop("disabled",false);
						}
					 
		break;


		case "A4l": if($("#A4l").prop("checked")){
					  $(".A4").prop("disabled",true);
					  $('#A5_1').prop("checked",true);
					  $('.A5').prop("disabled",true);
					}
					else {
						$(".A4").prop("disabled",false);
						$('.A5').prop("disabled",false);
						$('#A5_1').prop("checked",false);
					}
				
		break;

		case "B15t": if($("#B15t").prop("checked"))
					  $(".B15").prop("disabled",true);
					else $(".B15").prop("disabled",false);
				
		break;
		case "C17i": if($("#C17i").prop("checked")){
					  $(".C17").prop("disabled",true);
					  $("#C17h").prop("disabled",true)
					}
					else {$(".C17").prop("disabled",false);
						$("#C17h").prop("disabled",false)
						}
				
		break;

		case "C17h": if($("#C17h").prop("checked")){
					  $(".C17").prop("disabled",true);
					  $("#C17i").prop("disabled",true);
					  $("#C17h").prop("disabled",false);

					}
					else {$(".C17").prop("disabled",false);
						  $("#C17i").prop("disabled",false);
						}
				
		break;

		case "C18r": if($("#C18r").prop("checked"))
					  $(".C18").prop("disabled",true);
					else $(".C18").prop("disabled",false);
				
		break;

		case "D27r": if($("#D27r").prop("checked")){
					  $(".D27").prop("disabled",true);
					  $(".D27").prop("checked",false);
					}
					else $(".D27").prop("disabled",false);
				
		break;

		 /*case "D30b": */case "D31b": /*case "D32b":*/ case "D33b": /*case "D26b":*/ case "D35b": case "D36b": case "D46b": case "D38b": case "D39auxb":  case "D40b": case "D41no": 
		 /*case "D30a":*/ case "D31a": /*case "D32a":*/ case "D33a": /*case "D26a":*/ case "D35a": case "D36a": case "D46a": case "D38a": case "D39a": 
		  case "D39b": case "D39auxa":  case "D40a": case "D41si": case "D34a": case "D34b": case "D41a": case "D41b":

		if(/*$("#D30a").prop("checked")||*/ $("#D31a").prop("checked")|| /*$("#D32a").prop("checked")||*/ $("#D33a").prop("checked")||
		/*$("#D26a").prop("checked")||*/ $("#D35a").prop("checked")|| $("#D36a").prop("checked")||
		$("#D46a").prop("checked")|| $("#D38a").prop("checked")|| $("#D39auxa").prop("checked")|| $("#D39a").prop("checked")||
		 $("#D40a").prop("checked")|| $("#D41si").prop("checked") || $("#D34a").prop("checked") || $("#D41a").prop("checked"))
					{
						$("#D40ab").show();
						$("input:radio[name=D38]").prop("checked",false);
						//$("#D40abc").show();
					}		
					else 
					{
						$("#D40ab").hide();
						$("#D39").hide();
						$(".D39").prop('checked',false);
						$("#D39g_cual").val('');
						$("#mensa2").slideUp('slow');
					}

			if(id=='D31b'){
				$("input:radio[name=D35]").prop("checked",false);
				//$("#D35b").prop("checked",true);
				$("#verD35").hide();
				
			}
			if (id=='D31a'){
				$("#verD35").slideDown();
				
			}
			if (id=='D36a' || id=='D46a'){
				$('input:radio[name=D40]').prop('checked',false);
			}
			/*if (id=='D32a'){
				$('#ver_D49').show();
				$("#D49no").prop('checked',false);
			}
			if (id=='D32b'){
				$("#D49no").prop('checked',true);
				$("#D50no").prop("checked",true);
				$('#ver_D49').hide();
			}//else $("#D49no").prop('checked',false);
				*/
		break;

		case 'ch39': if ($('#ch39').prop('checked')){//D39g
					    $('#D39g_cual').prop("disabled",false);
					}
					   else{
					   	 $("#D39g_cual").val("");
					     $('#D39g_cual').prop("disabled",true);
					   }
					

			break;

		case "D38ab": case "D38abc":
				if($("#D38ab").prop("checked"))
					{
								//$("#D39auxab").show();
								$("#D39").slideDown('slow');
					}		
					else 
					{
						$(".D39").prop('checked',false);
						$("#D39g_cual").val('');
						$("#D39").hide();
						$("#mensa2").slideDown('slow');
					}

				break;
	
		case "D26q": if($("#D26q").prop("checked"))
					{
					  $(".D26").prop("disabled",true);
					  $("#D26r").prop("disabled",true);
					}
					else
					{ $(".D26").prop("disabled",false);
				     $("#D26r").prop("disabled",false);
					}
				
		break;
		case "B8a": if($("#B8a").prop("checked"))
					  $(".B8").prop("disabled",true);
					else 
						$(".B8").prop("disabled",false);
				
		break;

		case "A8b": if($("#A8b").prop("checked"))//No
					{
					   
					   $("#not1").slideUp("slow");
					   $("#not2").slideUp("slow");
					   $("#A9").val('');
					   $("#A10").val('');
					   $("input:radio[name=A11]").prop('checked',false);
					   $("input:radio[name=A12]").prop('checked',false);
					   $("#A13").val('');
					   $("input:radio[name=A14]").prop('checked',false);
					   $("#A14_cual").val('');
					   $("input:radio[name=A15]").prop('checked',false);
					   pareja("A8b");
					 					  
					}
					
		break;

 
		case "A8a": if($("#A8a").prop("checked"))					
					{ 
					$("#not1").slideDown("slow");
					$('#errA8b').text('');
					}
					$('#btn8').prop("disabled",false);
		break;

		case "A11a": 
				$("#not2").slideDown("slow");
				$('#btn8').prop("disabled",false);
				$("#errA11b").text('');
								
			break;
		case "A11b":$("#not2").slideUp("slow");
					$("input:radio[name=A12]").prop('checked',false);
					$("#A13").val('');
					$("input:radio[name=A14]").prop('checked',false);
					$("#A14_cual").val('');
					$("input:radio[name=A15]").prop('checked',false);
				    pareja("A11b");
			break;

		case "C19no":
			 hide_C2x(19);			
		
		break;

		case "C19si":
					$('#C20').slideDown("slow");
					//$("#btn7").slideUp("slow");
			 break;

		case "C20no":
			 	hide_C2x(20);
			 	if($('.C27').is(':checked')) {
					$('#btn7').slideDown('slow');
				  }

		break;
	    case "C20si":
					$('#C21').slideDown("slow");
					////$('#btn7').slideUp('slow');
			 break;

		case "C21no":
			 $("input:radio[name=C22]").prop('checked',false);
			 $('#C22').slideUp("slow");
			 $('#C23').slideDown("slow");
		break;
		//La C23, C22, C24 se esta validando en v_encuesta_val con gquery
		case "C21si":
					$("#C22").slideDown("slow");
			 break;
	    case "D60a":
				$("#hijosp1").slideDown("slow");
				$("#hijosp2").slideDown("slow");
				$("#hijosp3").slideDown("slow");
				$("#btn_D60").prop("disabled",false);
				$('#err_D60').text('');
				$("#bq63").slideUp("slow");
			 break;
		  case "D60b":
		  		noHijos();
		  		//tieneHijos();
		  		if(($("#A4i").prop('checked') || $("#B8j").prop('checked') || $('input:radio[name=B10j]:checked').val()<=3 || $("#B15j").prop('checked') || $("#C18j").prop('checked'))
					&& $('input:radio[name=D60]:checked').val()=="2"){
				$('#err_D60').text('Nos informaste tener hijos por favor revisa tus respuestas.');
				$('#D60a').focus();
		    	$("#btn_D60").prop("disabled",true);
				}
				else{
					$("#bq63").slideDown("slow");
					$("#btn_D60").prop("disabled",false);
				}
			 break;

	}
}
function tieneHijos(id){
	id_err="#error_"+id;
	if($("#A4i").prop('checked') || $("#B8j").prop('checked') || $('input:radio[name=B10j]:checked').val()<=3 || $("#B15j").prop('checked') || $("#C18j").prop('checked')){
		$(id_err).text('Nos informaste tener hijos por favor revisa tus respuestas.');
		$("#btn_D60").prop("disabled",true);
	}
}

function noHijos(){
		$("#hijosp1").slideUp("slow");
		$("#hijosp2").slideUp("slow");
		$("#hijosp3").slideUp("slow");
		$("#D61").val('');
		$("input:radio[name=D62]").prop('checked',false);
		$("#D63a").prop('checked',false);
		$("#D63b").prop('checked',false);
		$("#D63c").prop('checked',false);
		$("#D63d").prop('checked',false);

  }

function pareja(id_caso){
	id_err="#err"+id_caso;
	
	 if ($("#A4e").prop("checked") || $("input:radio[name=B10e]:checked").val()!='4'){
		    $(id_err).text("Nos informaste tener pareja por favor revisa tus respuestas."); 
		    $('#btn8').prop("disabled",true);
		}
		else{
			$(id_err).text(""); 
		    $('#btn8').prop("disabled",false);
		}
}

function hide_C2x(op){
	if (op==19){
		$("input:radio[name=C20]").prop('checked',false);
		$('#C20').slideUp("slow");
		$("#mensa1").slideUp('slow');
		$('#C27').slideUp('slow');
 		$('.C27').prop('checked',false);
 		//$('#btn7').slideDown('slow');
 		}
 //
 $("input:radio[name=C21]").prop('checked',false);
 $("input:radio[name=C22]").prop('checked',false);
 $("input:radio[name=C23]").prop('checked',false);
 $("input:radio[name=C24]").prop('checked',false);
 $("input:radio[name=C25]").prop('checked',false);
 $('#C21').slideUp("slow");
 $('#C22').slideUp("slow");
 $('#C23').slideUp("slow");
 $('#C24').slideUp("slow");
 $('#C25').slideUp("slow");

 $("input:radio[name=C26a]").prop('checked',false);
 $("input:radio[name=C26b]").prop('checked',false);
 $("input:radio[name=C26c]").prop('checked',false);
 $("input:radio[name=C26d]").prop('checked',false);
 $("input:radio[name=C26e]").prop('checked',false);
 $("input:radio[name=C26f]").prop('checked',false);
 $("input:radio[name=C26g]").prop('checked',false);
 $("input:radio[name=C26h]").prop('checked',false);
 $("input:radio[name=C26i]").prop('checked',false);
 $("input:radio[name=C26j]").prop('checked',false);
 $('.cual_C25').val('');
 $('.verC26').hide();
 //
 $('#consume').slideUp();
 if (op==20){
 	$('.C27').prop('checked',false);
 	$('#C27').slideDown('slow');
 	$("#mensa1").slideDown('slow');
 	////$("#btn7").slideUp("slow");
 }
 
 cont_C25 = 1;
}
//Desactiva la ultima opcion si selecciona cualquiera de las anteriores
function oculto()
{
	var obj = $('.A4');
    var estado = 1;
	for (var i=0; i< obj.length ; i++)
	{
		if(obj[i].checked==true)
		{
			estado = 0;
		}
	}
	if (estado==0 ){//se lecciono una opcion de la clas A4
		$("#A4l").prop("disabled",true);
		$("#A4l").prop("checked",false);
		//$('#A5_1').prop("disabled",true);
	}
	else {
		$("#A4l").prop("disabled",false);
		$('#A5_1').prop("disabled",false);
	  }
}
function B14()
{
	var objc = $('.B14');
    var estadoc = 1;
	for (var i=0; i< objc.length ; i++)
	{
		if(objc[i].checked==true)
		{
			estadoc = 0;
		}
	}
	if (estadoc==0 )
		$("#B14j").prop("disabled",true);
	else $("#B14j").prop("disabled",false);
}

function B15()
{
	var objc = $('.B15');
    var estadoc = 1;
	for (var i=0; i< objc.length ; i++)
	{
		if(objc[i].checked==true)
		{
			estadoc = 0;
		}
	}
	if (estadoc==0 )
		$("#B15t").prop("disabled",true);
	else $("#B15t").prop("disabled",false);
}

function C17()
{
	var objd = $('.C17');
    var estadod = 1;
	for (var i=0; i< objd.length ; i++)
	{
		if(objd[i].checked==true)
		{
			estadod = 0;
		}
	}
	if (estadod==0 ){
		$("#C17i").prop("disabled",true);
		$("#C17h").prop("disabled",true);
	}
	else {$("#C17i").prop("disabled",false);
		$("#C17h").prop("disabled",false);
	}
}

function C18()
{
	var obje = $('.C18');
    var estadoe = 1;
	for (var i=0; i< obje.length ; i++)
	{
		if(obje[i].checked==true)
		{
			estadoe = 0;
		}
	}
	if (estadoe==0 )
		$("#C18r").prop("disabled",true);
	else $("#C18r").prop("disabled",false);
}


function D27()
{
	var obje = $('.D27');
    var estadoe = 1;
	for (var i=0; i< obje.length ; i++)
	{
		if(obje[i].checked==true)
		{
			estadoe = 0;
		}
	}
	if (estadoe==0 )
		$("#D27r").prop("disabled",true);
	else $("#D27r").prop("disabled",false);
}


function D26()
{
	var objf = $('.D26');
    var estadof = 1;
	for (var i=0; i< objf.length ; i++)
	{
		if(objf[i].checked==true)
		{
			estadof = 0;
		}
	}
	if (estadof==0 )
	{
		$("#D26q").prop("disabled",true);
		$("#D26r").prop("disabled",true);
	}
	else
	{ $("#D26q").prop("disabled",false);
      $("#D26r").prop("disabled",false);
	}

	if($("#D26r").prop("checked"))
	{
	    $(".D26").prop("disabled",true);
	    $("#D26q").prop("disabled",true);
	}
	 
	else
	{
		$(".D26").prop("disabled",false);		

	} 
}



function ocho()
{
	
	var objb = $('.B8');
    var estadob = 1;
	for (var i=0; i< objb.length ; i++)
	{
		if(objb[i].checked==true)
		{
			estadob = 0;
		}
	}
	if (estadob==0 )
		$("#B8a").prop("disabled",true);
	else $("#B8a").prop("disabled",false);
}

function nt()
{
	if($("#not").prop("checked"))
	{
		$("#not1").prop("disabled",true);	
		$("#not2").prop("disabled",true);	
		$("#not3").prop("disabled",true);		
	}
	else
	{
		$("#not1").prop("disabled",false);	
		$("#not2").prop("disabled",false);	
		$("#not3").prop("disabled",false);	
	}					  
				
}

