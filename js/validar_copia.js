//Desactiva cualquiera de las anteriores si selecciona la ultima opción




function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

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
    especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(numeros.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}
function ocultos(id)
{
	switch(id)
	{//d48si
		case "B19j":
			if($("#B19j").prop("checked"))
			  $(".B19").prop("disabled",true);
			else $(".B19").prop("disabled",false);
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
			  $('#E56').slideDown("slow");
			  $('#E57').show();
			  $('#E58').show();
			  $('#E59').show();
			  $('#E63').show();
			  $('#E64').show();
			  break;
		case 'E55no':
			  $('#E56').slideUp("slow");
			  $('#E57').hide();
			  $('#E58').hide();
			  $('#E59').hide();
			  $('#E63').hide();
			  $('#E64').hide();
			  $('.E56').prop("checked",false);
			  $('input:radio[name=E57]').prop("checked",false);
			  $('.E58').prop("checked",false);
			  $('input:radio[name=D59]').prop('checked',false);
			  $('input:radio[name=D60]').prop('checked',false);
			  $('input:radio[name=D61]').prop('checked',false);
			  $('input:radio[name=D62]').prop('checked',false);
			  $('.E63').prop("checked",false);
			  $('#E63e').prop("checked",false);
			  $('.E64').prop("checked",false);
			  
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
		case 'D53no': $('#D54').slideUp("slow");
					  $('.D54').prop('checked',false);
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
		/******************/	
		case 'D49si': $('#D50').slideDown("slow");
					  $('#D53').slideDown("slow");
					  $('input:radio[name=D50]').prop('checked',false);
					  $('input:radio[name=D53]').prop('checked',false);
					  
				  
			break; 
		case 'D49no':$("#D50no").prop("checked",true); 
					 $('#D50').slideUp("slow");
					 
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
		case "A12": if($("#A12a").prop("checked") || $("#A12b").prop("checked") || $("#A12c").prop("checked")){
					$("#A12d").prop("checked",false);
					$("#A12d").prop("disabled",true);
				}
				else
					$("#A12d").prop("disabled",false);
				
		break;

		case "A12d":if ($("#A12d").prop("checked")){ 
						 $("#A12a").prop("disabled",true);
						 $("#A12b").prop("disabled",true);
						 $("#A12c").prop("disabled",true);
						}
					else{
						 $("#A12a").prop("disabled",false);
						 $("#A12b").prop("disabled",false);
						 $("#A12c").prop("disabled",false);
						}
					// $("#A12d").prop("disabled",false);
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

		case "B20t": if($("#B20t").prop("checked"))
					  $(".B20").prop("disabled",true);
					else $(".B20").prop("disabled",false);
				
		break;
		case "C22i": if($("#C22i").prop("checked")){
					  $(".C22").prop("disabled",true);
					  $("#C22h").prop("disabled",true)
					}
					else {$(".C22").prop("disabled",false);
						$("#C22h").prop("disabled",false)
						}
				
		break;

		case "C22h": if($("#C22h").prop("checked")){
					  $(".C22").prop("disabled",true);
					  $("#C22i").prop("disabled",true);
					  $("#C22h").prop("disabled",false);

					}
					else {$(".C22").prop("disabled",false);
						  $("#C22i").prop("disabled",false);
						}
				
		break;

		case "C23r": if($("#C23r").prop("checked"))
					  $(".C23").prop("disabled",true);
					else $(".C23").prop("disabled",false);
				
		break;

		case "D27r": if($("#D27r").prop("checked")){
					  $(".D27").prop("disabled",true);
					  $(".D27").prop("checked",false);
					}
					else $(".D27").prop("disabled",false);
				
		break;

		 case "D30b": case "D31b": case "D32b": case "D33b": case "D34b": case "D35b": case "D36b": case "D37b": case "D38b": case "D39b":  case "D40b": case "D41b": 
		 case "D30a": case "D31a": case "D32a": case "D33a": case "D34a": case "D35a": case "D36a": case "D37a": case "D38a": case "D39a":  case "D40a": case "D41a":

		if($("#D30a").prop("checked")|| $("#D31a").prop("checked")|| $("#D32a").prop("checked")|| $("#D33a").prop("checked")||
		$("#D34a").prop("checked")|| $("#D35a").prop("checked")|| $("#D36a").prop("checked")||
		$("#D37a").prop("checked")|| $("#D38a").prop("checked")|| $("#D39a").prop("checked")||
		 $("#D40a").prop("checked")|| $("#D41a").prop("checked"))
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
					}

			if(id=='D31b'){
				$("#verD35").hide();
				$("#D35b").prop("checked",true);
			}
			if (id=='D31a'){
				$("#verD35").slideDown();
				$("#D35b").prop("checked",false);
			}
			if (id=='D36a' || id=='D37a'){
				$('input:radio[name=D40]').prop('checked',false);
			}
			if (id=='D32a'){
				$('#ver_D49').show();
				$("#D49no").prop('checked',false);
			}
			if (id=='D32b'){
				$("#D49no").prop('checked',true);
				$("#D50no").prop("checked",true);
				$('#ver_D49').hide();
			}//else $("#D49no").prop('checked',false);
				
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
								//$("#D39ab").show();
								$("#D39").show();
					}		
					else 
					{
						$(".D39").prop('checked',false);
						$("#D39g_cual").val('');
						$("#D39").hide();
					}	
				break;
	
		case "D26r": if($("#D26r").prop("checked"))
					{
					  $(".D26").prop("disabled",true);
					  $("#D26s").prop("disabled",true);
					}
					else
					{ $(".D26").prop("disabled",false);
				     $("#D26s").prop("disabled",false);
					}
				
		break;

		
		
		case "B13a": if($("#B13a").prop("checked"))
					  $(".B13").prop("disabled",true);
					else $(".B13").prop("disabled",false);
				
		break;

		case "A9b": if($("#A9b").prop("checked"))//No
					{
					   $('#B15j').hide();
					   $("input:radio[name=B15j]").prop('checked',false);
					   $("#not1").hide();
					   $("#not2").hide();
					   $("#not3").hide();
					   $("#i5").val('');
					   $("input:radio[name=A11]").prop('checked',false);
					   $("#A12a").prop("checked",false);
						$("#A12b").prop("checked",false);
						$("#A12c").prop("checked",false);
						$("#A12d").prop("checked",false);
						$("#A12a").prop("disabled",false);
						$("#A12b").prop("disabled",false);
						$("#A12c").prop("disabled",false);
						$("#A12d").prop("disabled",false);
						$("#B13j").prop("checked",false);
						$("#verB13j").hide();
						$("#B20j").prop("checked",false);
						$("#verB20j").hide();
						$("#C23j").prop("checked",false);
						$("#verC23j").hide();
					    			    
					  
					}
					
		break;

		case "A9a": if($("#A9a").prop("checked"))					
					{ 
					$("#B15j").show();
					$("#not1").show();
					$("#not2").show();
					$("#not3").show();
					$("#B15japli").prop("disabled",true);
					$('#err_A9').text('');
					}
				
		break;

		case "C24no": if($("#C24no").prop("checked"))
					{
					$("input:radio[name=C25a]").prop('checked',false);	
					$("input:radio[name=C25b]").prop('checked',false);
					$("input:radio[name=C25d]").prop('checked',false);
					$("input:radio[name=C25c]").prop('checked',false);
					$("input:radio[name=C25e]").prop('checked',false);
					$("input:radio[name=C25f]").prop('checked',false);
					$("input:radio[name=C25g]").prop('checked',false);
					$("input:radio[name=C25h]").prop('checked',false);
					$("input:radio[name=C25i]").prop('checked',false);
					$("input:radio[name=C25j]").prop('checked',false);
					$("input:radio[name=C25k]").prop('checked',false);
					$("#C25k_cual").val('');
					$("#C25").hide();
					
					}
					
		break;

		case "C24si": if($("#C24si").prop("checked"))					
					{ 
						$("#C25").show();
				  
					}
				
		break;





	}
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
	if (estado==0 ){
		$("#A4l").prop("disabled",true);
		$("#A4l").prop("checked",false);
		//$('#A5_1').prop("disabled",true);
	}
	else {
		$("#A4l").prop("disabled",false);
		//$('#A5_1').prop("disabled",false);
	    //if($('input:radio[name=D49]:checked').val()!=1){
		}
}
function B19()
{
	var objc = $('.B19');
    var estadoc = 1;
	for (var i=0; i< objc.length ; i++)
	{
		if(objc[i].checked==true)
		{
			estadoc = 0;
		}
	}
	if (estadoc==0 )
		$("#B19j").prop("disabled",true);
	else $("#B19j").prop("disabled",false);
}

function B20()
{
	var objc = $('.B20');
    var estadoc = 1;
	for (var i=0; i< objc.length ; i++)
	{
		if(objc[i].checked==true)
		{
			estadoc = 0;
		}
	}
	if (estadoc==0 )
		$("#B20t").prop("disabled",true);
	else $("#B20t").prop("disabled",false);
}

function C22()
{
	var objd = $('.C22');
    var estadod = 1;
	for (var i=0; i< objd.length ; i++)
	{
		if(objd[i].checked==true)
		{
			estadod = 0;
		}
	}
	if (estadod==0 ){
		$("#C22i").prop("disabled",true);
		$("#C22h").prop("disabled",true);
	}
	else {$("#C22i").prop("disabled",false);
		$("#C22h").prop("disabled",false);
	}
}

function C23()
{
	var obje = $('.C23');
    var estadoe = 1;
	for (var i=0; i< obje.length ; i++)
	{
		if(obje[i].checked==true)
		{
			estadoe = 0;
		}
	}
	if (estadoe==0 )
		$("#C23r").prop("disabled",true);
	else $("#C23r").prop("disabled",false);
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
		$("#D26r").prop("disabled",true);
		$("#D26s").prop("disabled",true);
	}
	else
	{ $("#D26r").prop("disabled",false);
      $("#D26s").prop("disabled",false);
	}

	if($("#D26s").prop("checked"))
	{
	    $(".D26z").prop("disabled",true);
	    $("#D26r").prop("disabled",true);
	}
	 
	else
	{
		$(".D26z").prop("disabled",false);		

	} 
}




function ocultoa()
{
	var obja = $('.A8');
    var estadoa = 0;
	for (var i=0; i< obja.length ; i++)
	{
		if(obja[i].checked==true)
		{
			estadoa = 1;
		}
	}
	if (estadoa==1 ){
		$("#A8g").prop("checked",false);
		$("#A8g").prop("disabled",true);
		$("#B15aplica").prop("disabled",true);
		$('#err_A8e').text("");
	}
	else{
		$("#A8g").prop("disabled",false);
		$("#B15aplica").prop("disabled",false);
	}


	if ($("#A8f").prop('checked')){
		$("#A8f_cual").prop('disabled',false);

	}
	else{
		
		$("#A8f_cual").val('');
		$("#A8f_cual").prop('disabled',true);
	}
	if($("#A8g").prop("checked"))	
	{
		$("#B15e").hide();
		$("input:radio[name=B15e]").prop('checked',false);
		obja.prop('disabled',true);
		if($('#A4e').prop('checked')){
			$('#err_A8e').text("Por favor revisa tu respuesta, en la pregunta 4 nos informaste vivir actualmente con tu pareja (novio/a, esposo/a, compañero/a)");
			if($("#A4i").prop('checked'))
				$('#btn_A8g').prop('disabled',true);
		}
	}
	else{
		$("#B15e").show();
		obja.prop('disabled',false);
		$('#btn_A8g').prop('disabled',false);
	}

}


function sies()
{
	
	var objb = $('.B13');
    var estadob = 1;
	for (var i=0; i< objb.length ; i++)
	{
		if(objb[i].checked==true)
		{
			estadob = 0;
		}
	}
	if (estadob==0 )
		$("#B13a").prop("disabled",true);
	else $("#B13a").prop("disabled",false);
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

