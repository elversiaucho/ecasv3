<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <div id='campo' class="estilo_campos">
  <?php 
    if(isset($cod_mpio))
        echo "Reportes para municipio: ".$cod_mpio."<br>";

  ?>

  	  <a  class="btn" id="rep_monitor">Reporte Monitores</a>

     <!--  <a  class="btn" id="full_monitor">Reporte Monitores Completo</a> -->
    
      <div id='result'></div>
   </div><!--Fin Reportes-->   	

</body>
</html>
<script type="text/javascript">
	
$(document).ready(function(){
      $("#rep_monitor").click(function(){
      $.ajax({
          url: '<?php echo base_url('index.php/C_cheklg/rep_monitor?op=1');?>',
          type: 'GET',
          //data: $(this).serialize(),
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

      $("#full_monitor").click(function(){
       
      $.ajax({
          url: '<?php echo base_url('index.php/C_cheklg/rep_monitor?op=2');?>',
          type: 'GET',
          //data: $(this).serialize(),
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

