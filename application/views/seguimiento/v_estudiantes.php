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
          <label class="col-sm-11">Estado de Estudiantes</label>



   <table id="t1t1" title="Estado de Estudiantes" class="easyui-datagrid" style="width:100%;height:400px"
      url="<?php echo base_url()?>index.php/C_seguimiento/ver_seguimiento/v_estudiantes" pagination="true" rownumbers="true" singleSelect ="true" toolbar="#down_est">
    <thead> 
      <tr>
        <th rowspan ="2" field="MUNICIPIO" width="100">MUNICIPIO</th>
        <th rowspan ="2" field="SEDE_CODIGO" width="90">SEDE CÓDIGO</th>
        <th rowspan ="2" field="SECTOR" width="90">SECTOR</th>
        <th rowspan ="2" field="SEDE_NOMBRE" width="350">NOMBRE SEDE</th>
        <th colspan="6">EST. MATRICULADOS</th>
        <th colspan="6">EST. ASISTEN REGULARMENTE</th>
        <th colspan="6">EST. ENCUESTADOS</th>
        <th colspan="6">EST. NO ENCUESTADOS</th>
      </tr>
      <tr>
        <th field="MTRI6" width="50">6°</th>
        <th field="MTRI7" width="50">7°</th>
        <th field="MTRI8" width="50">8°</th>
        <th field="MTRI9" width="50">9°</th>
        <th field="MTRI10" width="50">10°</th>
        <th field="MTRI11" width="50">11°</th>

        <th field="REG6" width="50">6°</th>
        <th field="REG7" width="50">7°</th>
        <th field="REG8" width="50">8°</th>
        <th field="REG9" width="50">9°</th>
        <th field="REG10" width="50">10°</th>
        <th field="REG11" width="50">11°</th>

        <th field="ENCUESTADOS6" width="50">6°</th>
        <th field="ENCUESTADOS7" width="50">7°</th>
        <th field="ENCUESTADOS8" width="50">8°</th>
        <th field="ENCUESTADOS9" width="50">9°</th>
        <th field="ENCUESTADOS10" width="50">10°</th>
        <th field="ENCUESTADOS11" width="50">11°</th>
        <th field="NO_E6" width="50">6°</th>
        <th field="NO_E7" width="50">7°</th>
        <th field="NO_E8" width="50">8°</th>
        <th field="NO_E9" width="50">9°</th>
        <th field="NO_E10" width="50">10°</th>
        <th field="NO_E11" width="50">11°</th>
      </tr>
    </thead>
  </table>
  Fila por establecimiento educativo
  <!-- formatter="" -->
  <div id="down_est">
  <a  href = '<?php echo base_url('index.php/C_seguimiento/down_excel/v_estudiantes'); ?>' class="easyui-linkbutton" iconCls="icon-add" plain="true" >Descargar</a>
  <span>CODIGO SEDE:</span>
    <input maxlength="13" id="cod_colegiot1" onkeypress="return solonumeros(event);" style="line-height:26px;border:1px solid #ccc">
    <span>SEDE NOMBRE:</span>
    <input id="SEDE_NOMBREt1" onkeypress="return soloLetras(event);"  maxlength="300" style="line-height:26px;border:1px solid #ccc">
    <a href="javascript:void(0)" id="t1" class="easyui-linkbutton" plain="true" onclick="buscarIe_seg(this.id)">Buscar</a>
  </div>  

   <hr>

    <table id="t2t2" title="Detalle de Estudiantes Encuestados por curso" class="easyui-datagrid" style="width:100%;height:400px"
      url="<?php echo base_url()?>index.php/C_seguimiento/ver_seguimiento/v_estxcurso" pagination="true" rownumbers="true" singleSelect ="true" toolbar="#down_estxcurso">
    <thead> 
      <tr>
        <th field="MUNICIPIO" width="100">MUNICIPIO</th>
        <th field="SEDE_CODIGO" width="90">SEDE CÓDIGO</th>
        <th field="SECTOR" width="90">SECTOR</th>
        <th field="SEDE_NOMBRE" width="350">NOMBRE SEDE</th>
        <th field="GRADO" width="90">GRADO</th>
        <th field="CURSO" width="90">CURSO</th>
        <th field="MATRICULADOS" width="90">MATRICULADOS</th>
        <th field="REGULARES" width="90">REGULARES</th>
        <th field="CARGADAS_BD" width="100">CARGADAS <br> EN BD</th>
        <th field="ENC_COMPLETA" width="100">ESTUDIANTES<br> ENC. COMPLETA</th>
        <th field="ENC_INCOMPLETA" width="100">ESTUDIANTES<br> ENC. INCOMPLETA</th>
        <th field="REGISTRADAS" width="100">REGISTRAGAS <br>WEB+OFF</th>
        <th field="NO_ENCUESTADOS" width="90">NO ENCUESTADOS</th>
        <th field="TIPO_RECOLECCION" width="120">TIPO DE <br>RECOLECCIÓN</th>
        <th field="ID_LOTE" width="90">ID LOTE</th>
        
      </tr>
    </thead>
  </table>
  Fila por curso
  <!-- formatter="" -->
  <div id="down_estxcurso">
  <a  href = '<?php echo base_url('index.php/C_seguimiento/down_excel/v_estxcurso'); ?>' class="easyui-linkbutton" iconCls="icon-add" plain="true" >Descargar</a>
   <span>CODIGO SEDE:</span>
    <input maxlength="13" id="cod_colegiot2" onkeypress="return solonumeros(event);" style="line-height:26px;border:1px solid #ccc">
    <span>SEDE NOMBRE:</span>
    <input id="SEDE_NOMBREt2" onkeypress="return soloLetras(event);"  maxlength="300" style="line-height:26px;border:1px solid #ccc">
    <a href="javascript:void(0)" id="t2" class="easyui-linkbutton" plain="true" onclick="buscarIe_seg(this.id)">Buscar</a>
  </div>  


   <hr>

    <table id="t3t3" title="Detalle de Estudiantes Encuestados" class="easyui-datagrid" style="width:100%;height:400px"
      url="<?php echo base_url()?>index.php/C_seguimiento/ver_seguimiento/v_det_est" pagination="true" rownumbers="true" singleSelect ="true" toolbar="#down_detalle">
    <thead> 
      <tr>
        <th rowspan ="2" field="MUNICIPIO" width="100">MUNICIPIO</th>
        <th rowspan ="2" field="SEDE_CODIGO" width="90">SEDE CÓDIGO</th>
        <th rowspan ="2" field="SECTOR" width="90">SECTOR</th>
        <th rowspan ="2" field="SEDE_NOMBRE" width="350">NOMBRE SEDE</th>
        <th colspan="6">EST. ENCUESTA COMPLETA</th>
        <th colspan="6">EST. ENCUESTA INCOMPLETA</th>
    
      </tr>
      <tr>
        <th field="E_COMPLETA6" width="50">6°</th>
        <th field="E_COMPLETA7" width="50">7°</th>
        <th field="E_COMPLETA8" width="50">8°</th>
        <th field="E_COMPLETA9" width="50">9°</th>
        <th field="E_COMPLETA10" width="50">10°</th>
        <th field="E_COMPLETA11" width="50">11°</th>

        <th field="E_INC6" width="50">6°</th>
        <th field="E_INC7" width="50">7°</th>
        <th field="E_INC8" width="50">8°</th>
        <th field="E_INC9" width="50">9°</th>
        <th field="E_INC10" width="50">10°</th>
        <th field="E_INC11" width="50">11°</th>

        
      </tr>
    </thead>
  </table>
  Fila por establecimiento educativo
  <!-- formatter="" -->
  <div id="down_detalle">
  <a  href = '<?php echo base_url('index.php/C_seguimiento/down_excel/v_det_est'); ?>' class="easyui-linkbutton" iconCls="icon-add" plain="true" >Descargar</a>
   <span>CODIGO SEDE:</span>
    <input maxlength="13" id="cod_colegiot3" onkeypress="return solonumeros(event);" style="line-height:26px;border:1px solid #ccc">
    <span>SEDE NOMBRE:</span>
    <input id="SEDE_NOMBREt3" onkeypress="return soloLetras(event);"  maxlength="300" style="line-height:26px;border:1px solid #ccc">
    <a href="javascript:void(0)" id="t3" class="easyui-linkbutton" plain="true" onclick="buscarIe_seg(this.id)">Buscar</a>
  </div>  

  <hr>
    <table id="t4t4" title="Detalle de Estudiantes NO Encuestados" class="easyui-datagrid" style="width:100%;height:400px"
      url="<?php echo base_url()?>index.php/C_seguimiento/ver_seguimiento/v_det_est2" pagination="true" rownumbers="true" singleSelect ="true" toolbar="#down_det2">
    <thead> 
      <tr>
        <th rowspan ="2" field="MUNICIPIO" width="100">MUNICIPIO</th>
        <th rowspan ="2" field="SEDE_CODIGO" width="90">SEDE CÓDIGO</th>
        <th rowspan ="2" field="SECTOR" width="90">SECTOR</th>
        <th rowspan ="2" field="SEDE_NOMBRE" width="350">NOMBRE SEDE</th>
        <th colspan="6">OCUPADOS</th>
        <th colspan="6">NO ASISTIERON</th>
        <th colspan="6">RECHAZO</th>
        <th colspan="6">MENORES DE 12 AÑOS</th>
        <th colspan="6">OTRO MOTIVO</th>
    
      </tr>
      <tr>
        <th field="OCUPADOS6" width="50">6°</th>
        <th field="OCUPADOS7" width="50">7°</th>
        <th field="OCUPADOS8" width="50">8°</th>
        <th field="OCUPADOS9" width="50">9°</th>
        <th field="OCUPADOS10" width="50">10°</th>
        <th field="OCUPADOS11" width="50">11°</th>

        <th field="AUSENTES6" width="50">6°</th>
        <th field="AUSENTES7" width="50">7°</th>
        <th field="AUSENTES8" width="50">8°</th>
        <th field="AUSENTES9" width="50">9°</th>
        <th field="AUSENTES10" width="50">10°</th>
        <th field="AUSENTES11" width="50">11°</th>
        
        <th field="RECHAZARON6" width="50">6°</th>
        <th field="RECHAZARON7" width="50">7°</th>
        <th field="RECHAZARON8" width="50">8°</th>
        <th field="RECHAZARON9" width="50">9°</th>
        <th field="RECHAZARON10" width="50">10°</th>
        <th field="RECHAZARON11" width="50">11°</th>

        <th field="MENORES6" width="50">6°</th>
        <th field="MENORES7" width="50">7°</th>
        <th field="MENORES8" width="50">8°</th>
        <th field="MENORES9" width="50">9°</th>
        <th field="MENORES10" width="50">10°</th>
        <th field="MENORES11" width="50">11°</th>

        <th field="CON_MOTIVO6" width="50">6°</th>
        <th field="CON_MOTIVO7" width="50">7°</th>
        <th field="CON_MOTIVO8" width="50">8°</th>
        <th field="CON_MOTIVO9" width="50">9°</th>
        <th field="CON_MOTIVO10" width="50">10°</th>
        <th field="CON_MOTIVO11" width="50">11°</th>
              
      </tr>
    </thead>
  </table>
  Fila por establecimiento educativo
  <!-- formatter="" -->
  <div id="down_det2">
  <a  href = '<?php echo base_url('index.php/C_seguimiento/down_excel/v_det_est2'); ?>' class="easyui-linkbutton" iconCls="icon-add" plain="true" >Descargar</a>
  <span>CODIGO SEDE:</span>
    <input maxlength="13" id="cod_colegiot4" onkeypress="return solonumeros(event);" style="line-height:26px;border:1px solid #ccc">
    <span>SEDE NOMBRE:</span>
    <input id="SEDE_NOMBREt4" onkeypress="return soloLetras(event);"  maxlength="300" style="line-height:26px;border:1px solid #ccc">
    <a href="javascript:void(0)" id="t4" class="easyui-linkbutton" plain="true" onclick="buscarIe_seg(this.id)">Buscar</a>
  </div>


    <hr>
    <table id="t5t5" title="NO Encuestados por curso" class="easyui-datagrid" style="width:100%;height:400px"
      url="<?php echo base_url()?>index.php/C_seguimiento/ver_seguimiento/v_detnoe" pagination="true" rownumbers="true" singleSelect ="true" toolbar="#down_det5">
    <thead> 
      <tr>
        <th field="MUNICIPIO" width="100">MUNICIPIO</th>
        <th field="SEDE_CODIGO" width="90">SEDE CÓDIGO</th>
        <th field="SECTOR" width="90">SECTOR</th>
        <th field="SEDE_NOMBRE" width="350">NOMBRE SEDE</th>
        <th field="grado" width="80">GRADO</th>
        <th field="CURSO" width="80">CURSO</th>
        <th field="OCUPADOS_LG" width="90">OCUPADOS</th>
        <th field="AUSENTES_LG" width="90">AUSENTES</th>
        <th field="RECHAZARON_LG" width="90">RECHAZARON</th>
        <th field="MENORES_DE_12" width="90">MENORES</th>
        <th field="CON_MOTIVO_LG" width="90">OTRO MOTIVO</th>
        <th field="TIPO_RECOLECCION" width="120">TIPO DE <br>RECOLECCIÓN</th>
        <th field="ID_LOTE" width="90">ID LOTE</th>
        
              
      </tr>
    </thead>
  </table>
  Fila por curso
  <!-- formatter="" -->
  <div id="down_det5">
  <a  href = '<?php echo base_url('index.php/C_seguimiento/down_excel/v_detnoe'); ?>' class="easyui-linkbutton" iconCls="icon-add" plain="true" >Descargar</a>
  <span>CODIGO SEDE:</span>
    <input maxlength="13" id="cod_colegiot5" onkeypress="return solonumeros(event);" style="line-height:26px;border:1px solid #ccc">
    <span>SEDE NOMBRE:</span>
    <input id="SEDE_NOMBREt5" onkeypress="return soloLetras(event);"  maxlength="300" style="line-height:26px;border:1px solid #ccc">
    <a href="javascript:void(0)" id="t5" class="easyui-linkbutton" plain="true" onclick="buscarIe_seg(this.id)">Buscar</a>
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

