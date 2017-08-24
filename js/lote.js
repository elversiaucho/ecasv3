
$(document).ready(function(){
   
    $("#btn_submit").click(function(){
          var enviar=true;
      
        nro_matri = parseInt($("#matriculados").val());
        nro_regulares = parseInt($("#regulares").val());
        total_e = parseInt($("#tot_encuestas").text());
       
        if (nro_matri<total_e){
          $("#err_matriculados").text("El valor debe ser mayor o igual al total encuestas");
          enviar = false;
        }
        else $("#err_matriculados").text("");

        if (nro_regulares>nro_matri || nro_regulares < total_e){

          $("#err_regulares").text("El valor debe ser menor o igual al número de matriculados y mayor igual al total encuestas");
          enviar = false;
        }
        else $("#err_regulares").text("");
       

        if(parseInt($("#val_motivo").val())>0 && $("#text_moti").val()=='')
        {
            $("#err_motivo").text('Ingresa el Motivo');
            $("#text_moti").addClass("focus");
            return false;
        }else $("#err_motivo").text("");
        if (enviar==true){
            $("#text_moti").prop("disabled",false);
        }

      return enviar;

    });


    $("#matriculados").blur(function(){
        
        //$("#err_matriculados").css("display", "inline").fadeOut(2000);
        $("#err_matriculados").text("");
    });
    faltaron = parseInt($("#regulares").val())-parseInt($("#tot_encuestas").text());
    $("#info_faltaron").text(" "+faltaron);

    $("#regulares").keyup(function(){
       // alert("om");
       faltan =  parseInt($("#regulares").val())-parseInt($("#tot_encuestas").text());
       $("#err_regulares").text("");
       $("#info_faltaron").text(" "+faltan);
       $("#faltaron").val(faltan);
       $("#err_ocupados").text("");
      
    });

    //$("#text_moti").prop("disabled",true);
    $("#val_motivo").keyup(function () {
       if (parseInt($("#val_motivo").val())>0)
            $("#text_moti").prop("disabled",false);
        else {
            $("#text_moti").prop("disabled",true);
            $("#text_moti").val("");
        }
    });

/*despliegue inicial de campo segun seleccion y/o valores */
    if(parseInt($("#off_line").val())>0){
        var total_e = parseInt($("#total_e").val())+ parseInt($("#off_line").val());
        $("#web_offline").text(" "+total_e);
        faltaron = parseInt($("#regulares").val()) - total_e;
        $("#info_faltaron").text(faltaron);
    }

    if(parseInt($('#val_motivo').val())>0)
        $("#text_moti").prop("disabled",false);
    else 
        $("#text_moti").prop("disabled",true);

    if ($("#lote").val()!= ''){
        $("#op_recoleccion").show();
        if ($("#sistema_r").val() != ''){
            $('#info_lt').show();
            if (parseInt($("#sistema_r").val()) > 1){
                $('#enc_offline').slideDown();
                $("#tot_web_offline").slideDown();
            }

        }
    }


    $("#sistema_r").change(function(){
        var op_rec = $(this);
        if ($(this).val() != '') {

            $("#err_sistema_r").text('');
            if (parseInt($(this).val())>1) {
                //alert($(this).val());
                $('#enc_offline').slideDown();
                $("#tot_web_offline").slideDown();
            }else{
                $('#off_line').val("");
                $('#enc_offline').slideUp();
                $("#tot_web_offline").slideUp();       
            }
            $('#info_lt').slideDown();
        }
        else
            $('#info_lt').slideUp();

    });
    /*Actualiza el valor de total encuestas*/
    $('#off_line').keyup(function (){
        var off_line = parseInt($(this).val());
        var total_e = parseInt($("#total_e").val())+ off_line;
         if ($(this).val()==""){
            total_e = $("#total_e").val();
         }
            
            faltaron = parseInt($("#regulares").val()) - total_e;
            
            $("#web_offline").text(" "+total_e);

            $("#info_faltaron").text(faltaron);
            $("#faltaron").val(faltaron);
            $("#encuestados").text(+total_e); 
         
         //alert(total_e.val());
    });

});


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
    return true;
}

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
