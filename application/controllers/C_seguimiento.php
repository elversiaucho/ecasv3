<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_seguimiento extends CI_Controller {
  var $data;         
	function __construct()
	{
 		parent::__construct();
    $this->load->helper('mysql_to_excel_helper');
    $this->load->model('m_seguimiento');
    //$this->load->library('phpGrid');
   }
function index()
   {  
    $vista = $this->input->get('vista',TRUE);
    if ($vista!=''){
       $this->load->view('seguimiento/'.$vista);
    }else
      echo "No hay reporte para esta opción";
   }

/*--------------------------*/
function ver_seguimiento($vista){
  $codColegio = isset($_POST['codColegio']) ? ($_POST['codColegio']) : '';
  $sedeNombre = isset($_POST['sedeNombre']) ? ($_POST['sedeNombre']) : '';

 $result = $this->m_seguimiento->get_reporte($vista, $codColegio, $sedeNombre);
 $this->output->set_content_type('application/json', 'utf-8')->set_output(json_encode($result));

}


function down_excel($reporte =""){
  to_excel($this->m_seguimiento->get_rep($reporte), $reporte);
}
    


   }
