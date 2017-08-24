


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

<div id="campo">
  <div class="estilo_campos">
   <?php 
        $attributes = array('class' => '', 'id' => 'formAsigna', 'rol' =>'form', 'name' => 'formAsigna' , 'method' => 'POST');
        echo form_open('index.php/C_asignaciones', $attributes);
    ?>
      <div class="row pregunta-lote form-group">
          <div class="col-md-1 icono-lote"></div>
          <label class="col-md-4">Seleccione el usuario:</label>
          <select class="col-md-7" id = 'usuario' name="usuario" >
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
          <table id="tt" title="Cursos" class="easyui-datagrid" style="width:900px;height:350px"
      url="<?php echo base_url()?>index.php/C_asignaciones/get_lotes"
      toolbar="#toolbar" pagination="true"
      rownumbers="true" fitColumns="true"  idField="id_asignacion" pagination="true" ><!--  singleSelect="true" -->
    <thead>
      <tr>
        <th field="ck" checkbox="true">Asignado</th>
        <th field="id_asignacion" width="50">id_curso</th>
        <th field="MUNICIPIO" width="50">MUNICIPIO</th>
        <th field="cod_colegio" width="50">CODIGO COLEGIO</th>
        <th field="SECTOR" width="50">SECTOR</th>
        <th field="SEDE_NOMBRE" width="50">NOMBRE</th>
        <th field="grado_asignado" width="50">GRADO</th>
        <th field="curso_nro" width="50">CURSO</th>
        <!-- <th field="email" width="50">ESTADO</th> -->
        <th field="us_asignador" width="50">COORDINADOR</th>
        <th field="us_monitor" width="50">MONITOR</th>
        <th field="estado" width="50">FECHA DE ASIGNACION</th>
      </tr>
    </thead>
  </table>
  <div id="toolbar">
    <!-- <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Opcion</a> -->
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Editar Monitor</a>
   <!--  <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove User</a> -->
  </div>

  <div style="margin-bottom:20px">
    <a href="#" onclick="getSelected()">Asignar al seleccionado</a>
    <a href="#" onclick="getSelections()">Asignar</a>
  </div>  
  
 </div>
      <div id='ms'>
    
      </div>

      
     <?php 
            $data = array('type' => 'button',
            'value' =>'Asignar lotes',
            'id' => 'btnAsignar',
            //'onclick' => 'getSelections(event)',
            'class' => 'btn btn-success abtn');
            echo form_submit($data);
            echo form_close();
        ?>
  </div><!--Fin estilo campo-->  
</div>
</body>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/asignaciones/jquery.easyui.min.js"></script> 
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/asignaciones/mis_funciones.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>js/jquery.validate.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-dialog.js"></script>
<script type="text/javascript">
var base_url= '<?php echo base_url(); ?>'+'index.php/';
/*propias e del demo*/
var url;
    function newUser(){
      $('#dlg').dialog('open').dialog('setTitle','New User');
      $('#fm').form('clear');
      url = 'save_user.php';
    }
    function editUser(){
      var row = $('#dg').datagrid('getSelected');
      if (row){
        $('#dlg').dialog('open').dialog('setTitle','Edit User');
        $('#fm').form('load',row);
        url = 'update_user.php?id='+row.id;
      }
    }
  
    function destroyUser(){
      var row = $('#dg').datagrid('getSelected');
      if (row){
        $.messager.confirm('Confirm','Are you sure you want to destroy this user?',function(r){
          if (r){
            $.post('destroy_user.php',{id:row.id},function(result){
              if (result.success){
                $('#dg').datagrid('reload');  // reload the user data
              } else {
                $.messager.show({ // show error message
                  title: 'Error',
                  msg: result.errorMsg
                });
              }
            },'json');
          }
        });
      }
    }
//fin propias del Demo

$(document).ready(function(){
  //$("#campo").show();
  //alert("cargado");


$("#asignar").click(function(){
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

