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
          <label class="col-sm-11">Estado de Cursos</label>


   <!--  <div class="col-md-8">Información.</div> -->
  
    <table id="t1t1" title="Estado de cursos" class="easyui-datagrid" style="width:100%;height:400px"
      url="<?php echo base_url()?>index.php/C_seguimiento/ver_seguimiento/v_estadoCurso" pagination="true" rownumbers="true" singleSelect ="true" toolbar="#toolbar">
    <thead> 
      <tr>
        <th field="MUNICIPIO" width="100">MUNICIPIO</th>
        <th field="SEDE_CODIGO" width="90">SEDE CÓDIGO</th>
        <th field="SECTOR" width="90">SECTOR</th>
        <th field="SEDE_NOMBRE" width="350">NOMBRE SEDE</th>
        <th field="GRADO" width="100">GRADO</th>
        <th field="CURSO" width="100">CURSO</th>
        <th field="ESTADO_LOTE" width="100">ESTADO</th>
        <th field="TIPO_RECOLECCION" width="120">TIPO DE <BR>RECOLECCION</th>
      </tr>
    </thead>
  </table>
  Fila por curso
  <!-- formatter="" -->
  <div id="toolbar">
  <a  href = '<?php echo base_url('index.php/C_seguimiento/down_excel/v_estadoCurso'); ?>' class="easyui-linkbutton" iconCls="icon-add" plain="true" >Descargar</a>
  <span>CODIGO SEDE:</span>
    <input maxlength="13" id="cod_colegiot1" onkeypress="return solonumeros(event);" style="line-height:26px;border:1px solid #ccc">
    <span>SEDE NOMBRE:</span>
    <input id="SEDE_NOMBREt1" onkeypress="return soloLetras(event);"  maxlength="300" style="line-height:26px;border:1px solid #ccc">
    <a href="javascript:void(0)" id="t1" class="easyui-linkbutton" plain="true" onclick="buscarIe_seg(this.id)">Buscar</a>
  </div>

  <hr>

   <table id="t2t2" title="Resultados de cursos por establecimiento" class="easyui-datagrid" style="width:100%;height:400px"
      url="<?php echo base_url()?>index.php/C_seguimiento/ver_seguimiento/v_detCurso" pagination="true" rownumbers="true" singleSelect ="true" toolbar="#down_detalle">
    <thead> 
      <tr>
        <th rowspan ="2" field="MUNICIPIO" width="100">MUNICIPIO</th>
        <th rowspan ="2" field="SEDE_CODIGO" width="90">SEDE CÓDIGO</th>
        <th rowspan ="2" field="SECTOR" width="90">SECTOR</th>
        <th rowspan ="2" field="SEDE_NOMBRE" width="350">NOMBRE SEDE</th>
        <th colspan="6">CURSOS COMPLETOS</th>
        <th colspan="6">CURSOS INCOMPLETOS</th>
      </tr>
      <tr>
        <th field="C6" width="50">6°</th>
        <th field="C7" width="50">7°</th>
        <th field="C8" width="50">8°</th>
        <th field="C9" width="50">9°</th>
        <th field="C10" width="50">10°</th>
        <th field="C11" width="50">11°</th>
        <th field="INC6" width="50">6°</th>
        <th field="INC7" width="50">7°</th>
        <th field="INC8" width="50">8°</th>
        <th field="INC9" width="50">9°</th>
        <th field="INC10" width="50">10°</th>
        <th field="INC11" width="50">11°</th>
      </tr>
    </thead>
  </table>
  Fila de Establecimiento Educativo
  <!-- formatter="" -->
  <div id="down_detalle">
  <a  href = '<?php echo base_url('index.php/C_seguimiento/down_excel/v_detCurso'); ?>' class="easyui-linkbutton" iconCls="icon-add" plain="true" >Descargar</a>
  <span>CODIGO SEDE:</span>
    <input maxlength="13" id="cod_colegiot2" onkeypress="return solonumeros(event);" style="line-height:26px;border:1px solid #ccc">
    <span>SEDE NOMBRE:</span>
    <input id="SEDE_NOMBREt2" onkeypress="return soloLetras(event);"  maxlength="300" style="line-height:26px;border:1px solid #ccc">
    <a href="javascript:void(0)" id="t2" class="easyui-linkbutton" plain="true" onclick="buscarIe_seg(this.id)">Buscar</a>
  </div>  

   <hr>

   <table id="tt" title="Cobertura de Cursos" class="easyui-datagrid" style="width:100%;height:300px"
      url="<?php echo base_url()?>index.php/C_seguimiento/ver_seguimiento/v_cober_c" pagination="true" rownumbers="true" singleSelect ="true" toolbar="#down_cober">
    <thead> 
      <tr>
        <th rowspan ="2" field="MUNICIPIO" width="100">MUNICIPIO</th>
        <th colspan="6">CURSOS MUESTRA</th>
        <th colspan="6">% COBERTURA CURSOS <br>(completos + incompletos)</th>
      </tr>
      <tr>
        <th field="T6" width="50">6°</th>
        <th field="T7" width="50">7°</th>
        <th field="T8" width="50">8°</th>
        <th field="T9" width="50">9°</th>
        <th field="T10" width="50">10°</th>
        <th field="T11" width="50">11°</th>
        <th field="cb6" width="50">6°</th>
        <th field="cb7" width="50">7°</th>
        <th field="cb8" width="50">8°</th>
        <th field="cb9" width="50">9°</th>
        <th field="cb10" width="50">10°</th>
        <th field="cb11" width="50">11°</th>
      </tr>
    </thead>
  </table>
  Fila por ciudad
  <!-- formatter="" -->
  <div id="down_cober">
  <a  href = '<?php echo base_url('index.php/C_seguimiento/down_excel/v_cober_c'); ?>' class="easyui-linkbutton" iconCls="icon-add" plain="true" >Descargar</a>
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

</script>


</html>

