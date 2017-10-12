
$(document).ready(function() {
	
	 $('#verifica_lt').click(function(){
		var dataString=0;
		var row = $('#tt').datagrid('getSelected');
		//	alert(row);
		if (row){
			//alert(Number(row.OFFLINE)+Number(row.regWeb));
		    dataString = 'nro_lote=' +row.id_lote+"&sede_nombre="+row.SEDE_NOMBRE+"&alerta=1";
			dataString += "&faltaron="+(Number(row.REGULARES)-(Number(row.OFFLINE)+Number(row.regWeb)));
			dataString += "&matriculados="+row.MATRICULADOS;
			dataString += "&sistema_r="+row.SIS_RECOLECTA;
			dataString += "&ocupados="+row.OCUPADOS_LG;
			dataString += "&ausentes="+row.AUSENTES_LG;
			dataString += "&rechazaron="+row.RECHAZARON_LG;
			dataString += "&menores="+row.MENORES_DE_12;
			dataString += "&otro_motivo="+row.CON_MOTIVO_LG;
			dataString += "&text_motivo="+row.MOTIVO_LG;
			dataString +=  "&obs_lote="+row.OBSERVACIONES;

			dataString +="&GRADO="+row.GRADO;
			dataString +="&CURSO="+row.CURSO;
			dataString +="&total_e="+row.regWeb;
			dataString +="&off_line="+row.OFFLINE;
			//dataString +="&off_line="+row.regOff;
			dataString +="&PRESENTES="+row.PRESENTES;
			dataString +="&regulares="+row.REGULARES;
			
               $.ajax({
                url: base_url+"index.php/C_crearlt/verifica_lt",
                type: 'POST',
                //dataType: 'json',
                data: dataString,
				beforeSend : function(){
					$("#campos").html("<img src='"+base_url+"images/ajax-loader.gif');?>'>");
				},
				success:function (response) {
                	     if ($.trim(response)){
                	     	$("header").remove();
							$('#campo').html(response);
						   }
						   else {
                			$("#campo").html("Error No se pudo verificar el Lote");
                		}
			     },
			     error: function(errorThrown){
        	 	 alert(errorThrown);
        	 	 alert("Ocurrio un error al consultar la información del lote.");
        	 	 }	
			});
          }else $("#ms").text("Seleccione un lote").fadeToggle(3000);

		});

 /*$('#verifica_lt').click(function () {
 	var row = $('#tt').datagrid('getSelected');
		if (row){
			alert('ID lote:'+row.id_lote);
		    }
        if (row.id_lote > 0) {
        	var dataString = 'lote=' +row.id_lote;
               $.ajax({
                url: base_url+"index.php/C_cheklg/verVerifica_lt",
                type: 'POST',
                dataType: 'json',
                data: dataString
            })
            .done(function(data) {
                if(data.codiError == 0) {
                    BootstrapDialog.alert({
                        type: BootstrapDialog.TYPE_SUCCESS,
                        title: 'Guardar Asignación',
                        message: data.mensaje,
                        buttonLabel: 'Aceptar',
                        callback: function(result) {
                        $(this).addClass('disabled').prop('disabled', true);
                            //$(location).attr('href', base_url + 'C_asignaciones');

                        }
                    });
                } else {
                     var info = getSelections2();
                    dialogo.setTitle('Asignacion exitosa');
                    dialogo.setMessage(data.mensaje+"\n"+info);
                    dialogo.setType(BootstrapDialog.TYPE_DANGER);
                    dialogo.open();
                    $('#tt').datagrid('reload'); 
                    $("#ms").text("");

                }
            })
            .fail(function(jqXHR) {
                dialogo.setTitle('Error al guardar');
                dialogo.setType(BootstrapDialog.TYPE_DANGER);
                dialogo.setMessage(jqXHR.responseText);
                dialogo.open();
            });
        }else{
        	dialogo.setTitle('Verifique');
                    dialogo.setMessage("Debe seleccionar un lote");
                    dialogo.setType(BootstrapDialog.TYPE_DANGER);
                    dialogo.open();
        }

    });
*/

});

function formatoAlerta(val,row){
		return '<span style="color:red;">('+val+')</span>';

	}

