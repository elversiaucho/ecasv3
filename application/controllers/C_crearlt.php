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
        //$this->form_validation->set_rules('sis_recolecta', 'Sistema de recolección', 'trim|required');

         
         if($this->form_validation->run()==FALSE){
            
            $data['usuario'] = $usuario;
            $data['rol'] = $rol;
            $this->load->view('v_menult',$data);
            $data['colegios'] = $this->m_ecas->get_col_asignado();//get_colegio();
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
                  //$no_asistieron=set_value('nro_eregulares')-set_value('nro_presentes');
                  $lote = array(
                   'COD_COLEGIO_OP' => $colegio,
                   'JORNADA' => set_value('jornada'),
                   'GRADO' => set_value('grado'),
                   'CURSO' => set_value('curso'),
                   'MATRICULADOS' => set_value('nro_ecurso'),
                   'REGULARES' => set_value('nro_eregulares'),
                   'PRESENTES' => set_value('nro_presentes'),
                   //'NO_ASISTIERON' => $no_asistieron,
                  // 'SIS_RECOLECTA' => set_value('sis_recolecta'),
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
                   if ($result[0]->SLIDE_NRO > 0)
                       $data['slide'] = $result[0]->SLIDE_NRO;
                    $grado = "";
                    $curso = "";
                    $colegio = "";
                    $result=$this->m_ecas->get_lote(set_value('nro_lote'));
                    if(is_object($result)){
                      $grado = $result->GRADO;
                      $curso = $result->CURSO;
                      $colegio = $result->SEDE_NOMBRE;
                    }
                   
                    $data['encuestar'] = 1;
                    $data['id_encuesta'] = $encuesta['ID_ENCUESTA'];
                    $data['retomada'] = 1;
                    $data['usuario'] .= "<br><div class='pagination-centered'><h4>Se retomará la encuesta nro: <b>".set_value("nro_encuesta")."</b> del Lote <b>".set_value("nro_lote")."</b>. Grado: <b>".$grado ."</b>. Curso: <b>".$curso ."</b> colegio: <b>".$colegio." </b></h4></div>";//grado 8 curso 2 del colegio Liceo Juan Ramón Jimenez";
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
        $total_enc=0;
        /*se ingresan para  reconfirmar y/o corregir*/

        $this->form_validation->set_rules('matriculados' , 'Ingresa número de Estudiantes Matriculados','trim|is_natural|required');
        $this->form_validation->set_rules('regulares' , 'Ingresa número de Estudiantes Regulares','trim|is_natural|required');
        
        $this->form_validation->set_rules('sistema_r' , 'Selecciona el sistema de recoleccion del lote','trim|is_natural|required');
        $this->form_validation->set_rules('off_line','Ingrese la cantidad de encuestas off_line','trim|is_natural|callback_sistema_r');
        //$this->form_validation->set_rules('encuestados' , 'Ingresa número de estudiantes encuestados','trim|is_natural|required');

        /*variable para distribuir los que no asistieron*/
        $this->form_validation->set_rules('nro_lote', 'Ingresa Número de Lote', 'trim|required');
        $this->form_validation->set_rules('ocupados', 'Ingresa Número de Estudiantes Ocupados', 'trim|is_natural|callback_no_encuestados');
        $this->form_validation->set_rules('ausentes', 'Ingresa Número de Estudiantes Ausentes', 'trim|is_natural');
        $this->form_validation->set_rules('rechazaron', 'Ingresa Número de Estudiantes que rechazaron', 'trim|is_natural');
         $this->form_validation->set_rules('menores', 'Ingresa Número de Estudiantes que menores de 12 años', 'trim|is_natural');
        $this->form_validation->set_rules('otro_motivo', 'Ingresa Número de Estudiantes con otro motivo', 'trim|is_natural');
        $this->form_validation->set_rules('text_motivo', 'Ingresa el Motivo', '');
        $this->form_validation->set_rules('obs_lote', 'Ingresa las observaciones', 'trim');
       // $this->form_validation->set_rules('faltaron', '', 'trim');

        

      if($this->form_validation->run()==FALSE){
            
            $lotes = $this->m_ecas->get_lotes($data['usuario'],0);//caso puede ser 2.todos.. 0.solo abiertos... 1.solo cerrados. del usuarios
            switch ($lotes) {
              case (is_array($lotes)):
                  $mensaje="---Revise valores ingresados---";
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
          $data_l['inf_lote']="";
          if (is_numeric(set_value('nro_lote'))){//consulta la info del lote
             $data_l['inf_lote']=$this->m_ecas->get_infolt(set_value('nro_lote'));
             //$data_l['inf_lote']=['inf_lote']);
          }
          $this->load->view('v_menult',$data);
          $this->load->view('view_cerrarlt',$data_l);
          }
          else {//'LOTE_ENC' => set_value('nro_lote'),
              $nro_lote=set_value('nro_lote');
              $lote = array(
                
                'MATRICULADOS' => set_value('matriculados'),
                'REGULARES' => set_value('regulares'),
                'PRESENTES' => set_value('total_e'),//total de encuestas
                'OCUPADOS_LG' => set_value('ocupados'),
                'SIS_RECOLECTA' => set_value('sistema_r'),
                'OFFLINE' => set_value('off_line'),
                'AUSENTES_LG' => set_value('ausentes'),
                'RECHAZARON_LG' => set_value('rechazaron'),
                'MENORES_DE_12' => set_value('menores'),
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

  function no_encuestados(){
    #$faltan = $this->m_ecas->get_faltaron($this->input->post('nro_lote'));
    #$total_enc = $this->m_ecas->m_total_enc();
    
    $faltan=$this->input->post('faltaron');
    $est_noencuestados= $this->input->post('ocupados')+$this->input->post('ausentes')+$this->input->post('rechazaron')+$this->input->post('menores')+$this->input->post('otro_motivo');
        if (is_numeric($faltan)){
            #$faltan = $faltan[0]->NO_ASISTIERON;
            if ($faltan!=$est_noencuestados){
                 $this->form_validation->set_message('no_encuestados',"Estudiantes no encuestados( ".$faltan." ) no es igual a la suma de: ".$est_noencuestados." (Ocupados + No asistieron + Rechazaron + Menores de 12 años + Otro motivo)");
                 return false;
            }else
              return true;

        }
        else{
          $this->form_validation->set_message('no_encuestados','Error al consultar no asistentes');
                 return false;
        }
  }

  function sistema_r($cantidad_offline){
    if ($this->input->post('sistema_r')>1 && $cantidad_offline==0 ){
      $this->form_validation->set_message('sistema_r','Ingrese la cantidad de encuestas off_line');
      return false;
    }
    else return true;
  }

  
}