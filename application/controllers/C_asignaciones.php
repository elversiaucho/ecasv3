<?php

class C_asignaciones extends CI_Controller {
               
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
      //$this->load->view("encabezado",$ingreso);
 		//$this->load->helper('url');
   }
function index()
   {  
       $session_data = $this->session->userdata('ingreso');
       $usuario = $session_data['usuario'];
       $rol = $session_data['rol'];
      /* $this->form_validation->set_rules('IE', 'Digita el Colegio', 'trim|required');
       $this->form_validation->set_rules('grado', 'Grado', 'trim|required');
        $this->form_validation->set_rules('tot_cursos', 'tot_cursos', 'trim|required|min_length[1]|max_length[2]');
      
        $this->form_validation->set_rules('nro_eregulares', 'Ingresa Número de Estudiantes que asisten Regularmente.', 'trim|required|max_length[2]|is_natural_no_zero|callback_ecurso');
        $this->form_validation->set_rules('nro_presentes', 'Presentes', 'trim|required|max_length[2]|is_natural_no_zero|callback_presentes');
        $this->form_validation->set_rules('sis_recolecta', 'Sistema de recolección', 'trim|required');*/

         
         if($this->form_validation->run()==FALSE){
            
           /* $data['usuario'] = $usuario;
            $data['rol'] = $rol;
            $this->load->view('v_menult',$data);*/
            $data['colegios'] = $this->m_ecas->get_colegio();
            $colegio = set_value('IE');
            $lugar= strpos($colegio, '-');
            if ($lugar>0)
              $colegio = substr($colegio, 0,$lugar);
            if (is_numeric($colegio)){

                $data['grados'] = $this->m_ecas->mget_grado($colegio);
                //is_array
              }
            $this->load->view('view_asignaciones',$data);
            //echo set_value('colegio');
         }
         else {
             /* $colegio = set_value('IE');
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
                }*/
              }
              $mensaje = "Se esta trabajando...";
            $data['usuario']=$mensaje;
            $data['rol'] = $rol;
            //$this->load->view('v_menult',$data);
          }

   }