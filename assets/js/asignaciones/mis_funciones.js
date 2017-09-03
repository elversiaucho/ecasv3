



$(document).ready(function() {

var dialogo = new BootstrapDialog({
        title: 'Dialogo de prueba',
        message: 'Contenido del dialogo'
    });



    $('#formAsigna').validate({
       rules: {
            
            usuario: {required: true}
            
        },
        messages: {
            usuario: {required: 'Seleccione el usaurio a asignar'},
            
        },
        errorPlacement: function (error, element) {
            // debugger;
            if (element.parents('.input-group').hasClass('input-group')){
                element.parents('.input-group').parent().append(error);
            }else{
                element.parents('.form-group').append(error);
                // element.after(error.addClass('errorForm'));
            }

        },
        highlight: function (element, errorClass, validClass) {
            // debugger;
            if ($(element).parents('.input-group').hasClass('input-group')){
                $(element).parents('.input-group').parent().addClass('has-error text-danger');
            }else{
                $(element).parents('.form-group').addClass('has-error text-danger');
            }
            // $(element).parent().addClass('has-error text-danger');
        },
        unhighlight: function (element, errorClass, validClass) {
            if ($(element).parents('.input-group').hasClass('input-group') && $(element).attr('id')=='anioExpe'){
                $(element).parents('.input-group').parent().removeClass('has-error text-danger');
            }else{
                $(element).parents('.form-group').removeClass('has-error text-danger');
            }
                // $(element).parents('.form-group').removeClass('has-error text-danger');
        },
        submitHandler: function (form) {
            return true;
        }
    });

$('#btnAsignar').click(function () {

        if ($('#formAsigna').valid() == true) {
            
        	var ids = getSelections();
        	/*if (ids ==''){
        		$("#ms").text("Seleccione el o los cursos a asignar");
        		return false;
        	}*/
        	var dataString = 'ids=' + ids + '&usuario=' + $("#usuario").val()+ '&asignador='+ $("#nombreUser").text();
               $.ajax({
                url: base_url+'c_asignaciones/asignarUsers/',
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
        }
    });


/*----------------*/
 function getSelected(){

	var usuario = "";
	usuario = $("#usuario").val();
	 alert($('select[id=usuario]').val());
	var row = $('#tt').datagrid('getSelected');
	if (row){
		alert('ID lote:'+row.id_asignacion+"\nUsuario:"+usuario);
	}
}
/*
@comentario: Toma los ids de los cursos seleccionados para asignar usuario
*/
function getSelections(){
	var ids = [];
	var rows = $('#tt').datagrid('getSelections');
	
	for(var i=0; i<rows.length; i++){
		ids.push(rows[i].id_asignacion);
	}
	return ids.join("','");
}
/*
Para mostar info ampliada de los lotes que se asignaron 
*/
function getSelections2(){
    var ids = [];
    var rows = $('#tt').datagrid('getSelections');
    
    for(var i=0; i<rows.length; i++){
        ids.push(rows[i].id_asignacion+": "+rows[i].SEDE_NOMBRE+" GRADO "+rows[i].grado_asignado+" CURSO "+rows[i].curso_nro);
    }
    return ids.join('\n');
}


  function asignaUser(){
      $('#fm').form('submit',{
        url: url,
        onSubmit: function(){
          return $(this).form('validate');
        },
        success: function(result){
          var result = eval('('+result+')');
          if (result.errorMsg){
            $.messager.show({
              title: 'Error',
              msg: result.errorMsg
            });
          } else {
            $('#dlg').dialog('close');    // close the dialog
            $('#dg').datagrid('reload');  // reload the user data
          }
        }
      });
    }

  function saveUser(){
      $('#fm').form('submit',{
        url: url,
        onSubmit: function(){
          return $(this).form('validate');
        },
        success: function(result){
          var result = eval('('+result+')');
          if (result.errorMsg){
            $.messager.show({
              title: 'Error',
              msg: result.errorMsg
            });
          } else {
            $('#dlg').dialog('close');    // close the dialog
            $('#dg').datagrid('reload');  // reload the user data
          }
        }
      });
    }
});

