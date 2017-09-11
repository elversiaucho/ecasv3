<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


<div id="campo">
<head>
  <meta charset="UTF-8">
   <!-- <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
  <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
  <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/color.css">
  <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script> 
 <script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>  -->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/asignaciones/easyui.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/asignaciones/icon.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/asignaciones/color.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/asignaciones/demo.css">
 

</head>




  <div class="estilo_campos">
  <a href="<?php echo base_url('index.php/c_cheklg?menu=1');?>" class="btn btn-menu1"  >Regresar</a>
      <div class="row pregunta-lote form-group">
          <div class="col-md-1 icono-lote"></div>
          <label class="col-sm-11">ALERTAS DE LOTES MIXTOS- OFFLINE </label>


    <div class="col-md-8">Estas alertas son generadas por inconsistencias de acuerdo a la verificación realizada en el cierre del lote, en la cantidad de encuestas registradas OFFLINE y las encuestas enviadas a la base de sistemas de DANE Central. Si se tiene pendiente el envío de las encuestas a DANE Central o no coincide la cantidad de encuestas enviadas con las registradas en el cierre. Verifique la alerta para cada lote: 
          </div>
  
    <table id="tt" title="Alertas" class="easyui-datagrid" style="width:100%;height:350px"
      url="<?php echo base_url()?>index.php/C_alertas/ver_alertas" pagination="true" rownumbers="true" singleSelect ="true">
    <thead>
      <tr>
        <th field="Cod_colegio_op" width="50">COD COLEGIO<br> OPERATIVO</th>
        <th field="SEDE_CODIGO" width="90">SEDE CODIGO</th>
        <th field="SEDE_NOMBRE" width="150">SEDE NOMBRE</th>
        <th field="id_lote" width="60">ID LOTE</th>
        <th field="alerta" width="300" formatter="formatoAlerta">ALERTA</th>
        <th field="USUARIO" width="80">USUARIO</th>
        <th field="GRADO" width="50">GRADO</th>
        <th field="CURSO" width="50">CURSO</th>
        <th field="regWeb" width="90">ENCUESTAS<br>WEB</th>
        <th field="OFFLINE" width="90">REPORTADAS <br> OFFLINE</th>
        <th field="regOff" width="80">CARGADAS<br>OFFLINE</th>
        <th field="PRESENTES" width="80">EST. <br>PRESENTES</th>
        <th field="REGULARES" width="80">EST. <br>REGULARES</th>
        <th field="COD_MUNI" width="80">MUNICIPIO</th>
        <th field="FECHA" width="90" fixed="true">FECHA LOTE</th>
        
        <th field="MATRICULADOS" width="80">EST. <br>matriculados</th>
        <th field="SIS_RECOLECTA" width="80">sistema de <br>recolección</th>
        <th field="OCUPADOS_LG" width="80">EST. <br>ocupados</th>
        <th field="AUSENTES_LG" width="80">EST. <br>ausentes</th>
        <th field="RECHAZARON_LG" width="80">EST. <br>rechazaron</th>
        <th field="MENORES_DE_12" width="80">EST. <br>menores de 12</th>
        <th field="CON_MOTIVO_LG" width="80">EST. con<br>otro motivo</th>
        <th field="MOTIVO_LG" width="80">EST. <br>motivo</th>
        <th field="OBSERVACIONES" width="80"><br>obs_lote</th>

      </tr>
    </thead>
  </table>
  <div id="toolbar">
    <!-- <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Opcion</a> -->
    <!-- <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Editar Monitor</a> -->
   <!--  <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove User</a> -->
  </div>

    <div id='ms' class="alert-danger">
  
    </div>

  <a  class='btn btn-menu1' id='verifica_lt'>VERIFICAR EL CIERRE DEL LOTE</a>

  </div><!--Fin estilo campo-->  

</div>
</div>
</body>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/asignaciones/jquery.easyui.min.js"></script> 
 <script type="text/javascript" src="<?php echo base_url();?>js/jquery.validate.min.js"></script>
<!--  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-dialog.js"></script> -->

 <script type="text/javascript" src="<?php echo base_url();?>assets/js/alertas/alertas.js"></script>
<script type="text/javascript">
var base_url= '<?php echo base_url(); ?>';

</script>

<style type="text/css">
    #fm{
      margin:0;
      padding:10px 30px;
    }
    .ftitle{
      font-size:14px;
      font-weight:bold;
      padding:5px 0;
      margin-bottom:10px;
      border-bottom:1px solid #ccc;
    }
    .fitem{
      margin-bottom:5px;
    }
    .fitem label{
      display:inline-block;
      width:80px;
    }
    .fitem input{
      width:160px;
    }
  </style>


</html>

