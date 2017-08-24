

function getSelected(){

	var usuario = "";
	usuario = $("#usuario").val();
	 alert($('select[id=usuario]').val());
	var row = $('#tt').datagrid('getSelected');
	if (row){
		alert('ID lote:'+row.id_asignacion+"\nUsuario:"+usuario);
	}
}
function getSelections(event){
	var ids = [];
	var rows = $('#tt').datagrid('getSelections');
	var usuario = "";
	usuario = $('select[id=usuario]').val();
	if (usuario == ''){
		$("#errUsuario").text("Seleccione un usuario");
		event.preventDefault();
	 //alert();
	}else {
	for(var i=0; i<rows.length; i++){
		ids.push(rows[i].id_asignacion);
	}
	ids[i] = usuario;
	alert(ids.join('\n'));
  }
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

$(document).ready(function() {

var dialogo = new BootstrapDialog({
        title: 'Dialogo de prueba',
        message: 'Contenido del dialogo'
    });


    $('#formAsigna').validate({
       rules: {
            
            usuario: {required: true},
            esc_1s12: {
            required: function(element) {
                    var retorno = false;
                    var valor=0;
                    $("[name='esc_1s11']").each(function(){
                        if ($(this).val() != '' && $(this).prop('checked')){
                             valor=$(this).val();
                            retorno=true;
                        }
                    })
                    if (valor==6)
                        return false;
                    return retorno;
                }
            },
      
            esc_2s1: {required: function(){return verpr5;}},            
            esc_4s10: {required: function(){return valida_tex_cual('esc_4s9',2);}},
            
            //Validadciones de capitulo biblioteca.
            
        },
        messages: {
            usuario: {required: 'Seleccione el usaurio a asignar'},
            esc_2s1:{validaFj_p1: 'Selecciona una opción..'}
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
            
            var frm = $('#formAsigna').serializeArray();

                $.ajax({
                url: base_url + 'c_asignaciones/asignarUsers/',
                type: 'POST',
                dataType: 'json',
                data: frm
            })
            .done(function(data) {
                if(data.codiError == 0) {
                    BootstrapDialog.alert({
                        type: BootstrapDialog.TYPE_SUCCESS,
                        title: 'Guardar cuenta',
                        message: data.mensaje,
                        buttonLabel: 'Aceptar',
                        callback: function(result) {
                          
                            $(this).addClass('disabled').prop('disabled', true);
                            $(location).attr('href', base_url + 'C_asignaciones');

                        }
                    });
                } else {
                    dialogo.setTitle('Guardar Respuestas');
                    dialogo.setMessage(data.mensaje);
                    dialogo.setType(BootstrapDialog.TYPE_DANGER);
                    dialogo.open();
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
    /*
    *
    *funcion que retorna el valor de la opcion seleccionada de un grupo de radios casos esc_2 
    **/
});

