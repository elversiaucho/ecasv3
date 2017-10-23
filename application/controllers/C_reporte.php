<?php

class C_reporte extends CI_Controller {

	function __construct()
	{
 		parent::__construct();
 		$this->load->model('m_seguimiento');
    //$this->load->library('phpGrid');
   }
function index()
   {  
     $session_data = $this->session->userdata('ingreso');
    $usuario = $session_data['usuario'];
    $rol = $session_data['rol'];
    $ingreso['ingreso'] = 1;
    $ingreso['usuario']= $usuario; 
    $this->load->helper('url');
    $this->load->view("encabezado",$ingreso);
    $this->load->view('seguimiento/v_reportes');

    
  //echo set_value('colegio');
       }

function ver_reporte(){
 
 $result = $this->m_seguimiento->get_reporte("v_rep_monitor");
 $this->output->set_content_type('application/json', 'utf-8')->set_output(json_encode($result));


}
      
   }
