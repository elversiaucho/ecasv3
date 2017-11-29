


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
<!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/autocompletar/jquery-ui.css"> -->
 

</head>



<div id="campo">
  <div class="estilo_campos">
  <a href="<?php echo base_url('index.php/c_cheklg?menu=1');?>" class="btn btn-menu1"  >Regresar</a>
   <?php 
        $attributes = array('class' => '', 'id' => 'formAsigna', 'rol' =>'form', 'name' => 'formAsigna' , 'method' => 'POST');
        echo form_open('index.php/C_asignaciones', $attributes);
    ?>
      <div class="row pregunta-lote form-group">
          <div class="col-md-1 icono-lote"></div>
          <label class="col-sm-2">Seleccione el usuario:</label>
          <select class="col-md-5" id = 'usuario' name="usuario" >
            <?php 
              echo "<option value=''>Seleccione..</option>";
              if(isset($usuarios))
              {
              foreach ($usuarios as $fila){
                echo '<option value='.$fila->USUARIO.' '.set_select('usuario', $fila->USUARIO).'>'.$fila->NOMBRE.'</option>';
                }
              }
              ?>        
          </select>
          
</div>


<div>
          <table id="tt" title="Cursos" class="easyui-datagrid" style="width:100%;height:350px"
      url="<?php echo base_url()?>index.php/C_asignaciones/get_lotes"
       pagination="true" iconCls="icon-search" toolbar="#tb"
      rownumbers="true"  idField="id_asignacion" ><!--  singleSelect="true" -->
    <thead>
      <tr>
        <th field="ck" checkbox="true">Asignado</th>
        <th field="cod_colegio" width="90">CODIGO <br> COLEGIO</th>
        <th field="SEDE_NOMBRE" width="350">NOMBRE</th>
        <th field="grado_asignado" width="60">GRADO</th>
        <th field="curso_nro" width="50">CURSO</th>
        <th field="id_asignacion" width="60">id_curso</th>
        <th field="MUNICIPIO" width="70">MUNICIPIO</th>
        <th field="us_asignador" width="100">COORDINADOR</th>
        <th field="us_monitor" width="100">MONITOR</th>
        <th field="SECTOR" width="70">SECTOR</th>
        <th field="fecha" width="90" fixed="true">FECHA DE<br> ASIGNACION</th>
      </tr>
    </thead>
  </table>

  <div id="tb" style="padding:3px">
    <a href='<?php echo base_url('index.php/C_asignaciones/export_excel'); ?>' class="easyui-linkbutton" iconCls="icon-add" plain="true">Descargar</a>
    <span>CODIGO SEDE:</span>
    <input id="cod_colegio" style="line-height:26px;border:1px solid #ccc">
    <span>SEDE NOMBRE:</span>
    <input id="SEDE_NOMBRE" style="line-height:26px;border:1px solid #ccc">
    <a href="#" class="easyui-linkbutton" plain="true" onclick="buscarIe()">Buscar</a>
    
  </div>


  
 </div>
      <div id='ms' class="alert-danger">
    
      </div>

      
     <?php 
            $data = array('type' => 'button',
            'value' =>'Asignar lotes',
            'id' => 'btnAsignar',
            'class' => 'btn btn-success abtn');
            echo form_submit($data);
            echo form_close();
        ?>
  </div><!--Fin estilo campo-->  
</div>
</body>
 
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/asignaciones/jquery.easyui.min.js"></script> 
 <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-dialog.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/asignaciones/mis_funciones.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>js/jquery.validate.min.js"></script>
   
<script type="text/javascript">
var base_url= '<?php echo base_url(); ?>'+'index.php/';


function buscarIe(){
      $('#tt').datagrid('load',{
        codColegio: $('#cod_colegio').val(),
        sedeNombre: $('#SEDE_NOMBRE').val()
    });
}

$(document).ready(function(){
   var colegios=[];
//-----------------buscar colegios----

 /*   <?php 
        $i=0;
        if(isset($colegios))
            {
            foreach ($colegios as $fila){?>
                colegios[<?php echo $i++;?>]=<?php echo "'".$fila->SEDE_CODIGO.'-'.$fila->SEDE_NOMBRE."';"; ?>
    <?php }
        }
    ?>      
    $("#IE").autocomplete({
        source: colegios
    });*/

$("#buscar").click(function(){
  //result = jQuery.inArray($("#IE").val(),colegios);
  //console.log(info_colegios);

  //return false;
});


});

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

