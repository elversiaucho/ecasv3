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
          <label class="col-sm-11">Control de Asignación de Cursos  a Monitores</label>


   <!--  <div class="col-md-8">Información.</div> -->
  
    <table id="tt" title="Asignaciones" class="easyui-datagrid" style="width:100%;height:400px"
      url="<?php echo base_url()?>index.php/C_seguimiento/ver_seguimiento/v_asignaciones" pagination="true" rownumbers="true" singleSelect ="true" toolbar="#toolbar">
    <thead> 
      
     
          <th field="MUNICIPIO" width="90">MUNICIPIO</th>
          <th field="SEDE_CODIGO" width="90">CODIGO SEDE</th>
          <th field="SECTOR" width="90">SECTOR</th>
          <th field="SEDE_NOMBRE" width="380">NOMBRE ESTABLECIMIENTO EDUCATIVO</th>
          <th field="grado_asignado" width="80">GRADO</th>
          <th field="curso_nro" width="50">CURSO</th>
       
          <th field="estado" width="80">ESTADO</th>
          <th field="coordinador" width="280">COORDINADOR</th>
          <th field="monitor" width="280">MONITOR</th>
          <th field="fecha" width="90">FECHA</th>
          
      </tr>
    </thead>
  </table>
  Fila por curso
  <!-- formatter="" -->
  <div id="toolbar">
  <a  href = '<?php echo base_url('index.php/C_seguimiento/down_excel/v_asignaciones'); ?>' class="easyui-linkbutton" iconCls="icon-add" plain="true" >Descargar</a>
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

