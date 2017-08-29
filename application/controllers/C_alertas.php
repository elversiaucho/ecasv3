<?php

class C_alertas extends CI_Controller {
  var $data;         
	function __construct()
	{
 		parent::__construct();
 		$this->load->model('m_alertas');
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
    $this->load->view('view_alertas');
  //echo set_value('colegio');
       }

function ver_alertas(){
 
 $result = $this->m_alertas->get_alertas();
 $this->output->set_content_type('application/json', 'utf-8')->set_output(json_encode($result));


}
      
   }
