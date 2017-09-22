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
   
  if (isset($_GET['vista'])){
    if ($_GET['vista']!=''){
       $this->load->view('seguimiento/'.$_GET['vista']);
    }
    //echo $_GET['vista'];
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
/*
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends CI_Controller {
 
 public function __construct()
 {
 parent::__construct();
 $this->load->helper('mysql_to_excel_helper');
 }
 
 public function index()
 {
 $this->load->model('usuarios');
 to_excel($this->usuarios->get(), "archivoexcel");
 }
 
}
*/