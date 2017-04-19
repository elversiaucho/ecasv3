var listaMenu = "";
var slide = 1;
var cant_paginas=parseInt($(".pagina").length);
//var seguir=1;
//var vid = document.getElementById("vid");
$(function(){
	$.material.init()
	main();
	delegateEvents();
});
function main()
{
//if ($('#seguir').text()==1 || $('#seguir').text()==''){
    slide = $('#seguir').text();
    
	$("#avance").css('width',((100/cant_paginas)*1)+'%');//original
	$("div[data-slide='"+slide+"']").show().addClass("active");//original se agrega slide
	$("#paginador").text(1+"/"+cant_paginas);//origial
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
			console.log($("div[data-slide]").length);
			$("div[data-slide='"+(paginaActual-1)+"']").show().addClass("active");
			$("#paginador").empty().text((paginaActual-1)+"/"+cant_paginas);
			$("div[data-slide='"+(paginaActual)+"']").hide().removeClass("active");
		}
	});
	$("body").on("click",".arrow-r",function(){
		var paginaActual = parseInt($(".active").attr("data-slide"));
		if(paginaActual == cant_paginas)
		{
			console.log("error");
		}
		else
		{
		//alert ($('#seguir').text());
	 	if ($('#seguir').text()==1 || $('#seguir').text()==''){
			 if($('input:radio[name=D38]:checked').val()=='2' && paginaActual == 10){
			 	//alert('saltar al slide 13');
			 	$("#avance").css('width',((100/cant_paginas)*(paginaActual+3))+'%');
				$("div[data-slide='"+(paginaActual)+"']").hide().removeClass("active");
				$("div[data-slide='"+(paginaActual+3)+"']").show().addClass("active");
			 }
			 else{
				$("#avance").css('width',((100/cant_paginas)*(paginaActual+1))+'%');
				$("div[data-slide='"+(paginaActual)+"']").hide().removeClass("active");
				$("div[data-slide='"+(paginaActual+1)+"']").show().addClass("active");
			 }
		}else
			alert('Te falta responde alguna pregunta!!');

		}
	});
	$("body").on("click","#btn-Menu",function(){
		$(this).fadeOut();
		$("aside").show().removeClass("closeMenu").addClass("openMenu");

	});
	$("body").on("click","#cerrar",function(){
		$("aside").removeClass("openMenu").addClass("closeMenu").hide();
		$("#btn-Menu").fadeIn();
	});
	$("body").on("click",".itemMenu",function(){
		var paginaActual = parseInt($(".active").attr("data-slide"));
		var paginaSeleccionada = parseInt($(this).attr("data-pag"));
		$("#avance").css('width',((100/cant_paginas)*paginaSeleccionada)+'%');
		$("#paginador").empty().text(paginaSeleccionada+"/"+cant_paginas);
		$("div[data-slide='"+(paginaActual)+"']").hide().removeClass("active");
		$("div[data-slide='"+paginaSeleccionada+"']").show().addClass("active");
	});
}