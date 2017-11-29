<!DOCTYPE html>
<html>
<head>
  
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/asignaciones/easyui.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/asignaciones/icon.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/asignaciones/color.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/asignaciones/demo.css">
</head>
<body>

  <div id='campo' class="estilo_campos">
    <a href="<?php echo base_url('index.php/c_cheklg?menu=1');?>" class="btn"  >Regresar</a>

  <table id="tt" title="Reporte de lotes por monitor" class="easyui-datagrid" style="width:100%;height:350px"
      url="<?php echo base_url()?>index.php/C_seguimiento/ver_seguimiento/v_rep_monitor"
       pagination="true" toolbar="#tb"
      rownumbers="true"><!--  singleSelect="true" -->
    <thead>
      <tr>
     
        <th field="Monitor">MONITOR</th>
        <th field="Nro_lote" width="90">LOTE</th>
        <th field="SEDE_CODIGO" width="100">SEDE CODIGO</th>
        <th field="SEDE_NOMBRE" width="350">INSTITUCION</th>
        <th field="Municipio" width="120">MUNICIPIO</th>
        <th field="PRESENTES" width="80">ESTUDIANTES <br> PRESENTES</th>
        <th field="Registradas" width="90">ENCUESTAS <br>REGISTRADAS</th>
        <th field="COMPLETAS" width="100"> ENCUESTAS <br>COMPLETAS</th>
        <th field="IN_COMPLETAS" width="100">ENCUESTAS <br>IN_COMPLETAS</th>
        <th field="ENCUENTAS_VACIAS" width="90">ENCUENTAS <br> VACIAS</th>
        

      </tr>
    </thead>
  </table>

  <div id="tb" style="padding:3px">
    <a href='<?php echo base_url('index.php/C_seguimiento/down_excel/v_rep_monitor'); ?>' class="easyui-linkbutton" iconCls="icon-add" plain="true">Descargar</a>
    
  </div>
     
      <div id='result'></div>
   </div><!--Fin Reportes-->   	

<script type="text/javascript" src="<?php echo base_url();?>assets/js/asignaciones/jquery.easyui.min.js"></script> 

</body>
</html>
<script type="text/javascript">
	
$(document).ready(function(){
      $("#rep_monitor").click(function(){
      $.ajax({
          url: '<?php echo base_url('index.php/C_cheklg/rep_monitor?op=1');?>',
          type: 'GET',
          beforeSend : function(){
            $("#result").html("<img src='<?php echo base_url('images/ajax-loader.gif');?>'>");
          },
          success:function (response) {
                         if ($.trim(response)){
                $('#result').html(response);
                 }
                 else {
                        $("#result").html("Error No se exixte vista para Novedad");
                      }
             },
             error: function(errorThrown){
               alert(errorThrown);
               alert("Ocurrio un error en AJAX!");
               }  
        });
  });

		});

//---------------------
</script>


</body>
</html>

