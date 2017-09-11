$(document).ready(function(){

/*$("#estadoIE").click(function(){
	alert("Mostrar reporte ajax"+base_url);
});*/


$('.reporte').click(function(){
	var vista = 0;

	if($('#campo').length>0)
		$('#campo').remove();
	    alert(this.id);
		$.ajax({
			url: base_url+"index.php/C_seguimiento?vista="+this.id,
			type: 'get',
			//data: $(this).serialize(),
			beforeSend : function(){
				$("#campos").html("<img src='"+base_url+"images/ajax-loader.gif'");
			},
			success:function (response) {
            	     if ($.trim(response)){
            	     	               	     	
            	     	//response+= "<div id='ms'>Texto Agregado</div>";
						$('#campos').html(response);
						//window.open('http://YOUR_URL','_blank' );
						//console.log(response);
					   }
					   else {
            			$("#campos").html("Error No se pudo generar reporte");
            		}
		     },
		     error: function(errorThrown){
    	 	 alert(errorThrown);
    	 	 alert("Ocurrio un error en AJAX!");
    	 	 }	
		});

	});

});