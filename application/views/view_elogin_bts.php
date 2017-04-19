<style type="text/css">
  
  #texto{
    font: 65% sans-serif;
    /*width: 50%;*/
    margin: 0 13px 0 0;
    text-align: justify;
  }


.line1{
  background-color: #91224C;
  height: 2px;
  width: 100%;
}

.cont_der {
    border-left: thick solid #ff0000;
}

</style>


    <div id='cont_ppal' class="row form-group" class="col-lg-12">
    </div>
      <div class="row form-group" >
        <div class="col-lg-2"></div>
        <div class="contenido" class="col-lg-8">
        <div id='cont_iz' class="col-lg-4">
          <h3>Bienvenido</h3> 
          <span>A la primera estrategia de recolección de información vía Web
               para la 
            <span class="negrita"><b>Encuesta de Comportamiento y Actitudes sobre Sexualidad en niñas, 
                 niños y adolecente escolarizados</b>
            </span>.
          </span>
          <div class="parrafo2">
              <h4>Confidencialidad</h4>
              Los datos que el DANE solicita en la encuestas de Comportamiento y Actitudes sobre Sexualidad en niñas, 
              niños y adolecente escolarizados vía Web son estrictamente confidenciales y en ningún caso tienen fines
               fiscales ni pueden utilizarse como prueba judicial.

          </div>
        </div>  
        <div id="cont_der" class="col-lg-4">
             <!--div id="campos"-->
                <?php 
                $attributes = array('class' => '', 'id' => 'form_lote' , 'method' => 'POST');
                echo form_open('index.php/c_cheklg', $attributes); ?>
               	
          <div class="login">
            <label>Usuario:</label><br>
              <input type="text" id="Usuario" name ='Usuario' value="<?php echo set_value('Usuario'); ?>"/>
              <p class="t_error"><?php echo strip_tags(form_error('Usuario')); ?></p>
          </div>

          <div class="login">
            <label for='clave'>Contraseña:</label><br>
            <input type="password" id="clave" name ='clave' value="<?php echo set_value('clave'); ?>"/>
            <p class="t_error"><?php echo strip_tags(form_error('clave')); ?></p>
          </div>
          <div id="ver_terminos">
            <p id="texto">
            Al hacer click en ingresar se está aceptando los
             terminos y condiciones y así podrá continuar con el proceso.<br>
            <a href="javascript:void(0)" id="condiciones">Ver términos y condiciones.</a>
            </p>  
             <input type="submit" class="btn bt_ini"  value="Ingresar" />                     
                  <?php echo form_close(); ?>    
          </div>
         
          
        </div>
        </div>
        <div class="col-lg-2"></div>
        <div class="terminos col-lg-8">
          <div class="line1"></div><!--822346-->

          La información que nos brindarás cuenta con la protección de los datos establecidos en la ley de reserva estadística: Los datos suministrados al Departamento Administrativo Nacional de Estadística (DANE), en el desarrollo de censos y encuestas, no podrán darse a conocer al público ni a las entidades u organismos oficiales, ni a las autoridades públicas, sino únicamente en resúmenes numéricos, que no hagan posible deducir de ellos información alguna de caracter individual que pudiera utilizarse para fines comerciales, de tributación fiscal, de investigación judicial o cualquier otro diferente del propiamente estadístico. LEY DE RESERVA ESTADÍSTICA (Art.5° Ley 79 de 1993).
        </div>        
      
      <div class="col-lg-2"></div>   
      </div> 
  
      <footer class="pie"  class="col-lg-12">
      <img style="width:100%; height:10px;" src="<?php echo base_url()?>images/linea_dane.png" class="img-responsive"/ >
      <p>Carrera 59 Nº 26 - 70 interior 1 - CAN Tel (571) 5978300 - Bogotá D. C.,. Colombia </p>   
      </footer>
    
<script type="text/javascript">

  $(document).ready(function(){

      $("#condiciones").click(function(){

        $(".terminos").slideDown();
        $(".contenido").css('height',"70%");

      });


  });
  

</script>
