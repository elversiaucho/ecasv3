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
          <label class="col-sm-11">Seguimiento de Estado de Establecimientos Educativos</label>


    <table id="t1t1" title="Estado de Establecimientos Educativos" class="easyui-datagrid" style="width:100%;height:400px"
      url="<?php echo base_url()?>index.php/C_seguimiento/ver_seguimiento/v_estadoie" pagination="true" rownumbers="true" singleSelect ="true" toolbar="#toolbar">
    <thead>
      <tr>
        <th field="MUNICIPIO" width="100">MUNICIPIO</th>
        <th field="SEDE_CODIGO" width="90">CODIGO SEDE</th>
        <th field="SECTOR" width="90">SECTOR</th>
        <th field="SEDE_NOMBRE" width="300">NOMBRE SEDE</th>
         <th field="ESTADO_IE" width="120" fixed="true">ESTADO EE</th> 
      </tr>
    </thead>
  </table>
  Fila por Establecimiento Educativo
  <!-- formatter="" -->
  <div id="toolbar">
  <a  href = '<?php echo base_url('index.php/C_seguimiento/down_excel/v_estadoie'); ?>' class="easyui-linkbutton" iconCls="icon-add" plain="true" >Descargar</a>
  <span>CODIGO SEDE:</span>
    <input maxlength="13" id="cod_colegiot1" onkeypress="return solonumeros(event);" style="line-height:26px;border:1px solid #ccc">
    <span>SEDE NOMBRE:</span>
    <input id="SEDE_NOMBREt1" onkeypress="return soloLetras(event);"  maxlength="300" style="line-height:26px;border:1px solid #ccc">
    <a href="#" id="t1" class="easyui-linkbutton" plain="true" onclick="buscarIe_seg(this.id)">Buscar</a>
  </div>

  
  <div>
    <hr>
   <!--  <h4>Cobertura de Establecimientos Educativos</h4> -->
  </div>

   <table id="t2t2" title="Cobertura de Establecimientos Educativos" class="easyui-datagrid" style="width:100%;height:300px"
      url="<?php echo base_url()?>index.php/C_seguimiento/ver_seguimiento/v_coberturaee" pagination="true" rownumbers="true" singleSelect ="true" toolbar="#bar_c">
    <thead>
      <tr>
        <th field="MUNICIPIO" width="100">MUNICIPIO</th>
        <th field="TOTAL_MUESTRA" width="90">TOTAL <br>MUESTRA</th>
        <th field="TOTAL_COMPLETOS" width="90">TOTAL <br>COMPLETOS</th>
        <th field="TOTAL_INCOMPLETOS" width="90">TOTAL <br>INCOMPLETOS</th>
        <th field="SIN_INFORMACION" width="90">SIN <br>INFORMACION</th> 
        <th field="C_COMPLETOS" width="90">% <br>COMPLETOS</th> 
        <th field="INCOMPLETOS" width="90">% <br>INCOMPLETOS</th>
        <th field="SIN_INFO" width="90" fixed="true">% SIN <br>INFORMACION</th> 

      </tr>
    </thead>
  </table>
  Fila por ciudad
  <div id="bar_c">
  <a  href = '<?php echo base_url('index.php/C_seguimiento/down_excel/v_coberturaee'); ?>' class="easyui-linkbutton" iconCls="icon-add" plain="true" >Descargar</a>
  </div>

  <div>
    <hr>
 <!--    <h4>Datos por sector (OFICIAL/ NO OFICIAL)</h4> -->
  </div>

   <table id="tt3" title="Datos por sector (OFICIAL/ NO OFICIAL)" class="easyui-datagrid" style="width:100%;height:300px"
      url="<?php echo base_url()?>index.php/C_seguimiento/ver_seguimiento/v_det_cobertura" pagination="true" rownumbers="true" singleSelect ="true" toolbar ="#bar_det">
    <thead>
    
    <tr style="height: 100px">
        <th rowspan="2" field="MUNICIPIO" width="100">MUNICIPIO</th>
        <th colspan="2">EE ASIGNADOS EN LA MUESTRA</th>
        <th colspan="2">EE COMPLETOS</th>
        <th colspan="2">EE INCOMPLETOS</th>
        <th colspan="2">EE SIN INFORMACIÓN</th>
        <th colspan="2">% COBERTURA COMPLETOS</th>
        <th colspan="2">% INCOMPLETOS</th>
        <th colspan="2">% SIN INFORMACIÓN</th>
      </tr>
      <tr>
        <th rowspan="1" field="TOTAL_OFICIALES" width="100">OFICIALES</th>
        <th rowspan="1" field="TOTAL_NO_OFICIALES" width="100">NO OFICIALES</th>
        <th field="COMPLETOS_OF" width="100">OFICIALES</th>
        <th field="COMPLETOS_NO_OF" width="100">NO OFICIALES</th>
      
        <th field="INCOMPLETOS_OF" width="100">OFICIALES</th>
        <th field="INCOMPLETOS_NO_OF" width="100">NO OFICIALES</th>
      
        <th field="SIN_INFO_OF" width="100">OFICIALES</th>
        <th field="SIN_INFO_NO_OF" width="100">NO OFICIALES</th>
      
        <th field="X100_COMPLETOS_OF" width="100">OFICIALES</th>
        <th field="X100_COMPLETOS_NO_OF" width="100">NO OFICIALES</th>
       
        <th field="X100_INCOMPLETOS_OF" width="100">OFICIALES</th>
        <th field="X100_INCOMPLETOS_NO_OF" width="100">NO OFICIALES</th>
     
        <th field="X100_SIN_INFO_OF" width="100">OFICIALES</th>
        <th field="X100_SIN_INFO_NO_OF" width="100">NO OFICIALES</th>
      </tr> 
 
    </thead>
  </table>
  Fila por ciudad
  <div id="bar_det">
  <a  href = '<?php echo base_url('index.php/C_seguimiento/down_excel/v_det_cobertura'); ?>' class="easyui-linkbutton" iconCls="icon-add" plain="true" >Descargar</a>
  </div>

    <div id='ms' class="alert-danger">
  
    </div>

  </div><!--Fin estilo campo-->  
</div>
</div>
</body>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/asignaciones/jquery.easyui.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>js/lote.js"></script> 
<!--  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-dialog.js"></script> -->
<script type="text/javascript">
var base_url= '<?php echo base_url(); ?>';
/*
esta fucnion se utiliza en variasa vista para actualizar
*/


</script>



</html>

