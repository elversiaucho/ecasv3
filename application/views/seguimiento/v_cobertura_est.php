<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


<div id="campo">
<head>
  <meta charset="UTF-8">

 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/asignaciones/easyui.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/asignaciones/icon.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/asignaciones/color.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/asignaciones/demo.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/seguimiento/seguimiento.css">


</head>


  <div class="estilo_campos">
       <div class="row pregunta-lote form-group">
          <div class="col-md-1 icono-lote"></div>
          <label class="col-sm-11">Cobertura Estudiantes</label>


   <!--  <div class="col-md-8">Información.</div> -->
  
    <table id="tt" title="Cobertura Estudiantes Encuestados" class="easyui-datagrid" style="width:100%;height:400px"
      url="<?php echo base_url()?>index.php/C_seguimiento/ver_seguimiento/v_x100_enc" pagination="true" rownumbers="true" singleSelect ="true" toolbar="#toolbar">
    <thead> 
      
        <tr>
          <th rowspan="2" field="MUNICIPIO" width="100">MUNICIPIO</th>
          <th colspan="6">TOTAL DE ESTUDIANTES ASISTEN REGULARMENTE</th>
          <th colspan="6">% ESTUDIANTES ENCUESTADOS</th>
        </tr>
        <tr>
          <th field="REGULARES6" width="90">6°</th>
          <th field="REGULARES7" width="90">7°</th>
          <th field="REGULARES8" width="90">8°</th>
          <th field="REGULARES9" width="90">9°</th>
          <th field="REGULARES10" width="90">10°</th>
          <th field="REGULARES11" width="90">11° o Más</th>
       
          <th field="X100_ENCUESTADOS6" width="90">6°</th>
          <th field="X100_ENCUESTADOS7" width="90">7°</th>
          <th field="X100_ENCUESTADOS8" width="90">8°</th>
          <th field="X100_ENCUESTADOS9" width="90">9°</th>
          <th field="X100_ENCUESTADOS10" width="90">10°</th>
          <th field="X100_ENCUESTADOS11" width="90">11° o Más</th>
      </tr>
    </thead>
  </table>
  Fila por ciudad
  <!-- formatter="" -->
  <div id="toolbar">
  <a  href = '<?php echo base_url('index.php/C_seguimiento/down_excel/v_x100_enc'); ?>' class="easyui-linkbutton" iconCls="icon-add" plain="true" >Descargar</a>
  </div>

  <hr>

   <table id="tt" title="Cobertura Estudiantes Completos" class="easyui-datagrid" style="width:100%;height:400px"
      url="<?php echo base_url()?>index.php/C_seguimiento/ver_seguimiento/v_x100e_completa" pagination="true" rownumbers="true" singleSelect ="true" toolbar="#down_detalle">
    <thead> 
       
        <tr>
          <th rowspan="2" field="MUNICIPIO" width="100">MUNICIPIO</th>
          <th colspan="6">TOTAL DE ESTUDIANTES ASISTEN REGULARMENTE</th>
          <th colspan="6">% ESTUDIANTES ENCUESTA COMPLETA</th>
        </tr>
        <tr>
          <th field="REGULARES6" width="90">6°</th>
          <th field="REGULARES7" width="90">7°</th>
          <th field="REGULARES8" width="90">8°</th>
          <th field="REGULARES9" width="90">9°</th>
          <th field="REGULARES10" width="90">10°</th>
          <th field="REGULARES11" width="90">11° o Más</th>
       
          <th field="X100_E_COMPLETA6" width="90">6°</th>
          <th field="X100_E_COMPLETA7" width="90">7°</th>
          <th field="X100_E_COMPLETA8" width="90">8°</th>
          <th field="X100_E_COMPLETA9" width="90">9°</th>
          <th field="X100_E_COMPLETA10" width="90">10°</th>
          <th field="X100_E_COMPLETA11" width="90">11° o Más</th>
      </tr>
    </thead>
  </table>
  Fila por ciudad
  <!-- formatter="" -->
  <div id="down_detalle">
  <a  href = '<?php echo base_url('index.php/C_seguimiento/down_excel/v_x100e_completa'); ?>' class="easyui-linkbutton" iconCls="icon-add" plain="true" >Descargar</a>
  </div>  

   

    <div id='ms' class="alert-danger">
  
    </div>

  </div><!--Fin estilo campo-->  
</div>
</div>
</body>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/asignaciones/jquery.easyui.min.js"></script> 
 <!-- <script type="text/javascript" src="<?php echo base_url();?>js/jquery.validate.min.js"></script> -->
<!--  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-dialog.js"></script> -->
<script type="text/javascript">
var base_url= '<?php echo base_url(); ?>';

</script>


</html>

