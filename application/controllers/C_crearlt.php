<?php

class C_crearlt extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
 		$this->load->model('m_ecas');
      $this->load->library('form_validation');
      $session_data = $this->session->userdata('ingreso');
      $usuario = $session_data['usuario'];
      $rol = $session_data['rol'];
      $ingreso['ingreso'] = 1;
      $ingreso['usuario']= $usuario;
      $this->load->view("encabezado",$ingreso);
 		//$this->load->helper('url');
   }
function index()
   {  
       $session_data = $this->session->userdata('ingreso');
       $usuario = $session_data['usuario'];
       $rol = $session_data['rol'];
       $this->form_validation->set_rules('IE', 'Digita el Colegio', 'trim|required');
        //$this->form_validation->set_rules('colegio', 'Colegio', 'trim|required');
        $this->form_validation->set_rules('jornada', 'Jornada', 'trim|required');
        $this->form_validation->set_rules('grado', 'Grado', 'trim|required');
        $this->form_validation->set_rules('curso', 'Curso', 'trim|required|min_length[1]|max_length[2]');
        $this->form_validation->set_rules('nro_ecurso', 'Ingresa Número de Estudiantes Matriculados.', 'trim|required|is_natural_no_zero|max_length[2]');
        $this->form_validation->set_rules('nro_eregulares', 'Ingresa Número de Estudiantes que asisten Regularmente.', 'trim|required|max_length[2]|is_natural_no_zero|callback_ecurso');
        $this->form_validation->set_rules('nro_presentes', 'Presentes', 'trim|required|max_length[2]|is_natural_no_zero|callback_presentes');
        $this->form_validation->set_rules('sis_recolecta', 'Sistema de recolección', 'trim|required');

         
         if($this->form_validation->run()==FALSE){
            
            $data['usuario'] = $usuario;
            $data['rol'] = $rol;
            $this->load->view('v_menult',$data);
            $data['colegios'] = $this->m_ecas->get_colegio();
            $colegio = set_value('IE');
            $lugar= strpos($colegio, '-');
            if ($lugar>0)
              $colegio = substr($colegio, 0,$lugar);
            if (is_numeric($colegio)){

                $data['grados'] = $this->m_ecas->mget_grado($colegio);
                //is_array
              }
            $this->load->view('view_lote',$data);
            //echo set_value('colegio');
         }
         else {
              $colegio = set_value('IE');
              $lugar= strpos($colegio, '-');
              if ($lugar>0)
                $colegio = substr($colegio, 0,$lugar);
              if (!is_numeric($colegio))
                $mensaje="Codigo de colegio no válido";
              else{
                  $no_asistieron=set_value('nro_eregulares')-set_value('nro_presentes');
                  $lote = array(
                   'COD_COLEGIO_OP' => $colegio,
                   'JORNADA' => set_value('jornada'),
                   'GRADO' => set_value('grado'),
                   'CURSO' => set_value('curso'),
                   'MATRICULADOS' => set_value('nro_ecurso'),
                   'REGULARES' => set_value('nro_eregulares'),
                   'PRESENTES' => set_value('nro_presentes'),
                   'NO_ASISTIERON' => $no_asistieron,
                   'SIS_RECOLECTA' => set_value('sis_recolecta'),
                   'USUARIO' => $usuario
                 );
                $retorno = $this->m_ecas->guarda_lote($lote);
                $id_lote=$colegio.$lote["GRADO"].$lote["CURSO"];
                switch ($retorno) {
                   case 0:
                        $mensaje = "Fallo creación del lote";
                      break;
                   case 1:
                         $mensaje = "Se Creó el lote: ".$id_lote;
                   break;
                   case 2:
                         $mensaje = "El Lote ".$id_lote." ya Existe";
                   break;
                   
                   default:
                         $mensaje = "Error al intentar crear lote.";
                   break;
                }
              }
            $data['usuario']=$mensaje;
            $data['rol'] = $rol;
            $this->load->view('v_menult',$data);
          }

   }

/*Inicio Funciones de validación*/
  function presentes($valor){
      if ($valor==null)
      {
         $this->form_validation->set_message('presentes','Ingresa Número Estudiantes a encuestar.');
         return false;
      }
      else if($_POST['nro_eregulares']< $_POST['nro_presentes']){
        $this->form_validation->set_message('presentes','Número de Estudiantes a encuestar debe ser menor o igual al número de estudiantes que asisten regularmente.');
        return false;     
      }
      else
        return true;
   }
  function ecurso($valor){
    if($valor <= $this->input->post('nro_ecurso'))
      return true;
    else
      {
        $this->form_validation->set_message('ecurso','Número de Estudiantes que asisten regularmente debe ser menor o igual al número de estudiantes matriculados.');
        return false;
      }
  }


 /**FIN funciones de Validación************************/ 
function novedad_ie(){
    $session_data = $this->session->userdata('ingreso');
    $data['usuario'] = $session_data['usuario'];
    $data['rol'] = $session_data['rol'];
    $this->form_validation->set_rules('IE', 'Digita el codigo o nombre de la Institución Educativa', 'trim|required');
    $this->form_validation->set_rules('novedad_ie', 'Selecciona la Novedad', 'required');
    $this->form_validation->set_rules('otra_nov', 'Selecciona la Novedad', 'callback_otra_nov');
    $this->form_validation->set_rules('obs_ie', 'Observaciones', '');

    
    if($this->form_validation->run()==FALSE){
          
          $data_ie['colegios'] = $this->m_ecas->get_colegio();
          $this->load->view('v_menult',$data);
          $this->load->view('v_novedad_ie',$data_ie);
          
         }else{
         
          $colegio = set_value('IE');
            $lugar= strpos($colegio, '-');
            if ($lugar>0)
              $colegio = substr($colegio, 0,$lugar);
            if (is_numeric($colegio)){
              $info = array(
                'Novedad' => set_value('novedad_ie'),
                'otra_novedad' => set_value('otra_nov'),
                'Obs_campo' => set_value('obs_ie')
             );
              $result = $this->m_ecas->m_save_nov_ie($info,$colegio);
            switch ($result) {
               case 1:
                    $data['usuario']="Se Agregó la novedad ".$this->input->post('novedad_ie'). " a la IE ".set_value('IE');
                  break;
               
                 default:
                  $data['usuario']="Colegio ".set_value('IE')." Ya tiene la novedad ".set_value('novedad_ie') ;
                   break;
             }
             
              }
            else{
              $data['usuario']="Colegio invalido";
            }
          $this->load->view('v_menult',$data);
     }

 }

/*Funciones de validacion */
function otra_nov($valor){
   
   if ($this->input->post("novedad_ie")==5 and $valor==null){
       $this->form_validation->set_message('otra_nov','Digita la novedad');
       return false;    
   }
   return true;

}

/*Fin funciones de validacion*/

  function novedad_lt() {
       $session_data = $this->session->userdata('ingreso');
       $data['usuario'] = $session_data['usuario'];
       $data['rol'] = $session_data['rol'];
       $this->form_validation->set_rules('lote', 'Selecciona el Lote', 'trim|required|numeric');
       $this->form_validation->set_rules('novedad_lt', 'Selecciona la Novedad', 'required');
       $this->form_validation->set_rules('obs_lote', 'Observaciones', '');


       if($this->form_validation->run()==FALSE){
          
          $lotes = $this->m_ecas->get_lotes($data['usuario'],2);
          $data['lotes']=$lotes;
          $this->load->view('v_menult',$data);
          $this->load->view('v_novedad_lt',$data);
          
         }else{
          $estado_lt=1;//cerrado
          $nro_lote = set_value('lote');
          if($this->input->post('novedad_lt')==4)
            $estado_lt=0;//activa el lote para ingresar encuestas.

          $lote = array(
            'NOVEDAD' => set_value('novedad_lt'),
            'ESTADO_LOTE' => $estado_lt,
            'OBSERVACIONES' => set_value('obs_lote')
             );
          $result = $this->m_ecas->m_cerrarlt($lote,$nro_lote);
          switch ($result) {
               case 1:
                    $data['usuario']="Se Agregó la novedad ".$this->input->post('novedad_lt'). " al Lote ".$nro_lote;
                  break;
               
                 default:
                  $data['usuario']="Lote ".$nro_lote." Ya tiene la novedad ".set_value('novedad_lt') ;
                  break;
          }
          $this->load->view('v_menult',$data);
       
     }
  }
  function retomar(){
    
    $session_data = $this->session->userdata('ingreso');
    $data['usuario'] = $session_data['usuario'];
    $data['rol'] = $session_data['rol'];
    $this->form_validation->set_rules('nro_lote', 'Ingrese Número de Lote', 'trim|required|numeric');
    $this->form_validation->set_rules('nro_encuesta', 'Ingrese Número de Encuesta', 'trim|required|is_natural_no_zero|min_length[1]|max_length[2]');

    if($this->form_validation->run()==FALSE){
        $this->load->view('v_menult',$data);
        $lotes = $this->m_ecas->get_lotes($data['usuario'],0);
        $data['lotes']=$lotes;
        $this->load->view('view_retomar',$data);
       }else
       {$encuesta = array(
          'ID_ENCUESTA' => set_value('nro_lote').set_value('nro_encuesta'),
          'LOTE_ENC' => set_value('nro_lote')
           );
      
        $result = $this->m_ecas->m_retomar($encuesta);
        //echo $result;
        switch ($result) {
              case (is_array($result)):
                    //$data['encuesta']=$result; 
                    $data['encuestar'] = 1;
                    $data['id_encuesta'] = $encuesta['ID_ENCUESTA'];
                    $this->load->view('v_menult',$data);
                  break;
              case 2:
                 $data['usuario']="La encuesta ".$encuesta['ID_ENCUESTA']." NO existe";
                 //$data['encuestar'] = 1;
                 $this->load->view('v_menult',$data);
                 break;
             case 3:
                 $data['usuario']="El lote ".$encuesta['LOTE_ENC']." Ya está cerrado";
                 $this->load->view('v_menult',$data);
                 break;
              case 4://encuesta cerrada
                 $data['usuario']="La encuesta ".$encuesta['ID_ENCUESTA']." Ya está cerrada";
                 $this->load->view('v_menult',$data);
                 break;
              case 5://encuesta cerrada
                 $data['usuario']="La encuesta ".$encuesta['ID_ENCUESTA']." Está Completa";
                 $this->load->view('v_menult',$data);
                 break;


              default :
                 $data['usuario']="Lote ".$encuesta['LOTE_ENC']." no existe";
                 $this->load->view('v_menult',$data);
                 break;
          }
     }

  }
//------------funciones de modelo

	function cerrar_lt(){
        $session_data = $this->session->userdata('ingreso');
        $data['usuario'] = $session_data['usuario'];
        $data['rol'] = $session_data['rol'];
        $data_l[] = array();
        $mensaje ="";
        $this->form_validation->set_rules('nro_lote', 'Ingresa Número de Lote', 'trim|required');
        $this->form_validation->set_rules('ocupados', 'Ingresa Número de Estudiantes Ocupados', 'trim|is_natural|callback_no_encuesta');
        $this->form_validation->set_rules('ausentes', 'Ingresa Número de Estudiantes Ausentes', 'trim|is_natural');
        $this->form_validation->set_rules('rechazaron', 'Ingresa Número de Estudiantes que rechazaron', 'trim|is_natural');
        $this->form_validation->set_rules('otro_motivo', 'Ingresa Número de Estudiantes con otro motivo', 'trim|is_natural');
        $this->form_validation->set_rules('text_motivo', 'Ingresa el Motivo', '');
        $this->form_validation->set_rules('obs_lote', 'Ingresa las observaciones', 'trim');
        $this->form_validation->set_rules('faltaron', '', 'trim');

        

      if($this->form_validation->run()==FALSE){
            
                
            $lotes = $this->m_ecas->get_lotes($data['usuario'],0);//caso puede ser 2.todos.. 0.solo abiertos... 1.solo cerrados. del usuarios
            switch ($lotes) {
              case (is_array($lotes)):
                  $mensaje="---Revisar valores ingresados";
                break;
              case 1:
                  $mensaje="No hay lotes para cerrar";
                break;
              case 2:
                  $mensaje="Error al consultar lotes..";
                break;
            } 
          $data_l['lotes']=$lotes;
          $data_l['mensaje']=$mensaje;
          $this->load->view('v_menult',$data);
          $this->load->view('view_cerrarlt',$data_l);
          }
          else {//'LOTE_ENC' => set_value('nro_lote'),
              $nro_lote=set_value('nro_lote');

              $lote = array(
                
                'OCUPADOS_LG' => set_value('ocupados'),
                'AUSENTES_LG' => set_value('ausentes'),
                'RECHAZARON_LG' => set_value('rechazaron'),
                'CON_MOTIVO_LG' => set_value('otro_motivo'),
                'MOTIVO_LG' => set_value('text_motivo'),
                'OBSERVACIONES' => set_value('obs_lote'),
                'ESTADO_LOTE' => 1
                );
              $result = $this->m_ecas->m_cerrarlt($lote,$nro_lote);
              switch ($result) {
                 case 1:
                      $data['usuario']="Se cerro el Lote ".$nro_lote;
                       $this->load->view('v_menult',$data);
                    break;
                 
                   default:
                    $data['usuario']="Lote ".$nro_lote." Ya está cerrado o no existe";
                     $this->load->view('v_menult',$data);
                    break;
               }
            }
   }

  function no_encuesta(){
    #$faltan = $this->m_ecas->get_faltaron($this->input->post('nro_lote'));
    #$total_enc = $this->m_ecas->m_total_enc();
    
    $faltan=$this->input->post('faltaron');
    $est_noencuestados= $this->input->post('ocupados')+$this->input->post('ausentes')+$this->input->post('rechazaron')+$this->input->post('otro_motivo');
        if (is_numeric($faltan)){
            #$faltan = $faltan[0]->NO_ASISTIERON;
            if ($faltan!=$est_noencuestados){
                 $this->form_validation->set_message('no_encuesta',"Estudiantes no encuestados( ".$faltan." ) no coinciden con ".$est_noencuestados." Suma de Ocupados+Ausentes+rechazaron+otro_motivo.");
                 return false;
            }else
              return true;

        }
        else{
          $this->form_validation->set_message('no_encuesta','Error al consultar no asistentes');
                 return false;
        }
  }

  
}