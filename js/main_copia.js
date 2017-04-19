var listaMenu = "";
var slide = 1;
var cant_paginas=parseInt($(".pagina").length);
if ($('#seguir').val()>0){
	slide = $('#seguir').val();

}
//var seguir=1;
//var vid = document.getElementById("vid");
$(function(){
	$.material.init()
	main();
	delegateEvents();
	
});
function main()
{

	$("#paginador").text(slide+"/"+cant_paginas);//origial
	var paginaActual = parseInt($(".active").attr("data-slide"));
	/*if (paginaActual)
		paginaActual=slide;*/
	//alert(paginaActual+" cant pg "+cant_paginas+"slide "+slide);
		if(paginaActual == cant_paginas)
		{
			console.log("error");
			alert("Por favor Informa al Monitor que terminaste la Encuesta!");
		}
		else
		{
		 if($('input:radio[name=D40]:checked').val()=='2' && slide == 11){
		 	 	//alert('saltar al slide 13');
			 	//alert ($('#seguir').text()+" slide"+slide+" "+$('input:radio[name=D40]:checked').val());
			 	$("#avance").css('width',((100/cant_paginas)*(slide+2))+'%');
				//$("div[data-slide='"+(paginaActual)+"']").hide().removeClass("active");
				$('div[data-slide=13]').show().addClass("active");
				$("#seguir").val('13');
				 slide=13;
			 }
			 else{
				$("#avance").css('width',((100/cant_paginas)*(slide))+'%');
				$("div[data-slide='"+(paginaActual)+"']").hide().removeClass("active");
				$('div[data-slide='+slide+']').show().addClass("active");
				}
/*Muestra las opciones ocultas de acuerso a la respuesta*/
		oculto();
		C23();
		//function ocultos(id)
		//oculto();
		B20();
		B19();
		C22();
		C23();
		D27();
		D26();
		ocultoa();
		sies();
		nt();
		if($("#A4l").prop("checked")){
			$(".A4").prop("disabled",true);
			$('#A5_1').prop("checked",true);
		}/*else {
			$(".A4").prop("disabled",false);
			$('.A5').prop("disabled",false);
			$('#A5_1').prop("checked",false);
		}*/
		if($("#A8g").prop("checked"))
		{
			//$(".A8").prop("disabled",true);
			$("#B15e").hide();
		}else
		{ 
			//$(".A8").prop("disabled",false);
			$("#B15e").show();
		}
		$("#input:radio[name=A9]").click(function(){
			$('input:radio[name=D44]').prop('checked',false);
		});

		if($('input:radio[name=A9]:checked').val()==2){
			$('#B15j').hide();
			$("input:radio[name=B15j]").prop('checked',false);
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
		
		if($('input:radio[name=A9]:checked').val()==1){
			//alert("HOla");
			$('#B15j').show();
			$("#not1").show();
			$("#not2").show();
			$("#not3").show();
			$("#B15japli").prop("disabled",true);
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

		if($('input:radio[name=B18]:checked').val()!='9'){
			$("#B18b").prop("disabled",true);
			$("#B18b").val('');
		}else
			if ($("#B18a").prop("checked"))
				{
				  $("#B18b").prop("disabled",false);					   
				}
		if($("#B13a").prop("checked"))
			$(".B13").prop("disabled",true);
		else $(".B13").prop("disabled",false);

		if($("#B19j").prop("checked"))
			  $(".B19").prop("disabled",true);
			else $(".B19").prop("disabled",false);

		if($("#B20t").prop("checked"))
			$(".B20").prop("disabled",true);
		else $(".B20").prop("disabled",false);


		if($("#C22i").prop("checked")){
			$(".C22").prop("disabled",true);
			$("#C22h").prop("disabled",true)
		}
		
		if($("#C22h").prop("checked")){
			$(".C22").prop("disabled",true);
			$("#C22i").prop("disabled",true);
			//$("#C22h").prop("disabled",false);

		}

		if($("#C23r").prop("checked"))
		$(".C23").prop("disabled",true);
		else $(".C23").prop("disabled",false);

		if($("#C24si").prop("checked"))					
		{ 
			$("#C25").show();
						   
		}
		if ($("input:radio[name=C25k]:checked").val()==7 || !$("input:radio[name=C25k]").prop("checked") ){
			$("#C25k_cual").prop('disabled',true);
		}
		
		

/**************************************/
		
/******************/

		if($("#D27r").prop("checked")){
			  $(".D27").prop("disabled",true);
			  $(".D27").prop("checked",false);
			}
			else $(".D27").prop("disabled",false);

		if($("#D30a").prop("checked")|| $("#D31a").prop("checked")|| $("#D32a").prop("checked")|| $("#D33a").prop("checked")||
		$("#D34a").prop("checked")|| $("#D35a").prop("checked")|| $("#D36a").prop("checked")||
		$("#D37a").prop("checked")|| $("#D38a").prop("checked")|| $("#D39a").prop("checked")||
		 $("#D40a").prop("checked")|| $("#D41a").prop("checked"))
		{
			$("#D40ab").show();
			
		}
		if($("#D31b").prop("checked")){
			$("#verD35").hide();
			$("#D35b").prop("checked",true);
		}
		/*if($("#D36a").prop("checked")||$("#D37a").prop("checked")){
			$("#btn_D40").prop('disabled',true);
		}*/
		if($("#D38ab").prop("checked"))
		{
			$("#D39ab").show();
			$("#D39").show();
		}		
		else 
		{
			$("#D39ab").hide();
			$("#D39").hide();
			$(".D39").prop('checked',false);
			$("#D39g_cual").val('');
		}

		if ($('#ch39').prop('checked'))
		    $('#D39g_cual').prop("disabled",false);
		 else
		 	$('#D39g_cual').prop("disabled",true);
/*****/
		if($('input:radio[name=D40]:checked').val()=='1')
				{
 			$('#grupo_sex').slideDown();
				}
		if($('input:radio[name=D43]:checked').val()!='10')
			$('#D43_cual').prop('disabled',true);

		if ($("#D47si").prop("checked")){
			$("#anti_c").show();
			//alert("Hola valida d48");
		}


		if ($('#D49si').prop("checked") ){
			$('#D50').show();
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
			}
		if($('input:radio[name=E59]:checked').val()=='1'){
					$('#E60').show();
					$('#E61').show();
					$('#E62').show();
				}
				/*else {
					$('#E60').slideUp();
					$('#E61').slideUp();
					$('#E62').slideUp();
				}*/
			
	}///Fin mostrar slide

	for(var i = 1;i<=cant_paginas;i++){
		if($(".titulo").eq([i-1]).parents(".pagina").attr("data-slide") === undefined){
			continue;
		}
		else{
			listaMenu+="<li class='itemMenu' data-pag='"+$(".titulo").eq([i-1]).parents(".pagina").attr("data-slide")+"'>"+$(".titulo").eq([i-1]).text()+"</li>";
		}
	}
	$(".menulista").html(listaMenu);
// }
 //else alert("Complete la respuesta!!");
}
function delegateEvents()
{
	$("body").on("click",".arrow-l",function(){
		var paginaActual = parseInt($(".active").attr("data-slide"));

		if(paginaActual == 1)
		{
			console.log("error");
		}
		else
		{
		if($('input:radio[name=D40]:checked').val()=='2' && slide == 13){
			$("div[data-slide='"+(paginaActual-3)+"']").show().addClass("active");
			$("#paginador").empty().text((paginaActual-3)+"/"+cant_paginas);
			$("div[data-slide='"+(paginaActual)+"']").hide().removeClass("active");
			$("#seguir").val(paginaActual-3);
			slide=slide-3;

			}
		else{
			console.log($("div[data-slide]").length);
			$("div[data-slide='"+(paginaActual-1)+"']").show().addClass("active");
			$("#paginador").empty().text((paginaActual-1)+"/"+cant_paginas);
			$("div[data-slide='"+(paginaActual)+"']").hide().removeClass("active");
			$("#seguir").val(paginaActual-1);
			slide=paginaActual-1;
		 }
		}
	 //location.reload(true);
	 //location.replace('http://localhost/ecasv2/c_ecas');
	 //location.assign('http://localhost/ecasv2/index.php/c_ecas')
	});
	$("body").on("click",".arrow-r",function(){
		/*var paginaActual = parseInt($(".active").attr("data-slide"));
		if(paginaActual == cant_paginas)
		{
			console.log("error");
		}
		else
		{
		//alert ($('#seguir').text());
	 	if ($('#seguir').text()==1 || $('#seguir').text()==''){
			 if($('input:radio[name=D40]:checked').val()=='2' && paginaActual == 10){
			 	//alert('saltar al slide 13');
			 	$("#avance").css('width',((100/cant_paginas)*(paginaActual+3))+'%');
				$("div[data-slide='"+(paginaActual)+"']").hide().removeClass("active");
				$("div[data-slide='"+(paginaActual+3)+"']").show().addClass("active");
			 }
			 else{
				$("#avance").css('width',((100/cant_paginas)*(paginaActual+slide))+'%');
				$("div[data-slide='"+(paginaActual)+"']").hide().removeClass("active");
				$("div[data-slide='"+(paginaActual+1)+"']").show().addClass("active");
			 }
		}else{
			alert('Te falta responde alguna pregunta!!');
			main();
		}

		}*/
	});
	/*$("body").on("click","#btn-Menu",function(){
		$(this).fadeOut();
		$("aside").show().removeClass("closeMenu").addClass("openMenu");

	});
	$("body").on("click","#cerrar",function(){
		$("aside").removeClass("openMenu").addClass("closeMenu").hide();
		$("#btn-Menu").fadeIn();
	});*/
	$("body").on("click",".itemMenu",function(){

		var paginaActual = parseInt($(".active").attr("data-slide"));
		var paginaSeleccionada = parseInt($(this).attr("data-pag"));
		if(slide >= 14){
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
		//alert("Pagina"+paginaSeleccionada+"valor para controlador"+$("#seguir").val());

	});
}