<?php

class C_asignaciones extends CI_Controller {
  var $data;         
	function __construct()
	{
 		parent::__construct();
 		$this->load->model('m_asignaciones',"m_asigna");

    $this->load->model('m_ecas');
      $this->load->library('form_validation');
      
     /* $session_data = $this->session->userdata('ingreso');
      $usuario = $session_data['usuario'];
      $rol = $session_data['rol'];
      $mpio_user = $session_data['mpio_user'];
      $ingreso['ingreso'] = 1;
      $ingreso['usuario']= $usuario;*/
      $this->load->helper('mysql_to_excel_helper');
 		//$this->load->helper('url');
   }
function index()
   {  
       $session_data = $this->session->userdata('ingreso');
       $usuario = $session_data['usuario'];
       $rol = $session_data['rol'];
       $ingreso['ingreso'] = 1;
       $ingreso['usuario']= $usuario;
       $data_m['rol']=$rol;
      
      
   
       $this->form_validation->set_rules('usuario', 'Seleccione el usuario', 'trim|required');
       $this->form_validation->set_rules('IE', 'Digita el Colegio', 'trim|required');
       $this->form_validation->set_rules('grado', 'Seleccione el grado', 'trim|required');
       $this->form_validation->set_rules('tot_cursos', 'Digite la cantidad de cursos', 'trim|required|max_length[2]');

                   
         if($this->form_validation->run()==FALSE){
            
           
            $data['usuarios'] = $this->m_ecas->get_usuarios(2,$session_data['mpio_user']);// usuario con rol de monitor 
            $data['colegios'] = $this->m_ecas->get_colegio(); 
        
              if (!$this->input->is_ajax_request()) {
                
              $this->load->view("encabezado",$ingreso);
              //$this->load->view('v_menult',$data_m);
              //exit('NO ES PETICION AJAX');
              }
             $this->load->view('view_asignaciones',$data);
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
                  $id_asignacion=set_value('usuario').$colegio.set_value('grado');
                  $info = array(
                   'id_asignacion' => $id_asignacion,
                   'fk_id_colegio_op' => $colegio,
                   'grado_asignado' => set_value('grado'),
                   'cantidad_cursos' => set_value('tot_cursos'),
                   'fk_us_monitor' => set_value('usuario'),
                   'fk_us_asignador' => $usuario
                 );
                $retorno = $this->m_ecas->guarda_asignacion($info);
                //var_dump($retorno);
                switch ($retorno) {
                   case 0:
                        $mensaje = "Fallo creación de asignacion";
                      break;
                   case 1:
                         $mensaje = "Se Creó la asignacion: ".$id_asignacion;
                   break;
                   case 2:
                         $mensaje = "La asignacion ".$id_asignacion." ya Existe";
                   break;
                   
                   default:
                         $mensaje = "Error al intentar crear asignacion.";
                   break;
                }
            
            $data_m['usuario']=$mensaje;
            $this->load->view("encabezado",$ingreso);
            $this->load->view('v_menult',$data_m);
            
          }

      
   }
 }

function asignarUsers(){
  $data =array();
  $data["codiError"] = 1;
  $data["usuario"] = "";

  
  //if (isset($_POST['ids']))
    //echo $_POST['ids'];
  foreach ($_POST as $key => $value) {
        $data[$key]=$value;
    }
    if (isset($data['usuario']) && isset($data['asignador']) && isset($data['ids'])){
      
      $result = $this->m_asigna->setAsignacion($data['usuario'],$data['asignador'],$data['ids']);
      switch ($result) {
        case 1:
            $data["mensaje"] = "Se asigno el usuario ".$data['usuario']." a los lotes: ";  
          break;
        
        case 2:
          $data["mensaje"] = "No se ha asignado ningún usurio";  
          $data["codiError"] = 0;
          break;
      }
  }
  $this->output->set_content_type('application/json', 'utf-8')->set_output(json_encode($data));
  //var_dump($data); 
  //return json_encode($data);

}


 function conn(){
   $conn = @mysql_connect('192.168.1.200','dimpe','D1mP3D3s4rr0ll0');
    if (!$conn) {
      die('Could not connect: ' . mysql_error());
    }
    mysql_select_db('dane_ecas_v2', $conn);
    return $conn;
 }

 function ver_pre_lotes(){
 
 /**/
  //$result["rows"] = $this->m_asigna->get_pre_lotes(1, 10);

 }

 public function get_lotes(){
 
  //echo $page;
  //include 'conn.php';
  $conn = @mysql_connect('192.168.1.200','dimpe','D1mP3D3s4rr0ll0');
    if (!$conn) {
      die('Could not connect: ' . mysql_error());
    }
    mysql_select_db('dane_ecas_v2', $conn);
    mysql_query("SET NAMES UTF8");

    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
    $codColegio = isset($_POST['codColegio']) ? mysql_real_escape_string($_POST['codColegio']) : '';
    $sedeNombre = isset($_POST['sedeNombre']) ? mysql_real_escape_string($_POST['sedeNombre']) : '';

    $offset = ($page-1)*$rows;
    $result = array();
    $session_data = $this->session->userdata('ingreso');
    $mpio = $session_data['mpio_user'];
    
   //$conn=conn();
  
  //$where = "itemid like '$itemid%' and productid like '$productid%'";
  //$rs = mysql_query("select count(*) from item where " . $where);
  $qry = "select COUNT(*) from asig_monitor A join mtra_colegios M
on (A.cod_colegio = M.SEDE_CODIGO AND COD_MUNI ='$mpio' AND SEDE_CODIGO like '%$codColegio%' and SEDE_NOMBRE like  '%$sedeNombre%')";
  $rs = mysql_query($qry);
  $row = mysql_fetch_row($rs);
  $result["total"] = $row[0];
  $rs = mysql_query("select * from asig_monitor A join mtra_colegios M
on (A.cod_colegio = M.SEDE_CODIGO AND COD_MUNI ='$mpio' AND (SEDE_CODIGO like '%$codColegio%' and SEDE_NOMBRE like  '%$sedeNombre%')) limit $offset,$rows");
  /*print_r($rs);
  exit();*/
  $items = array();
  while($row = mysql_fetch_object($rs)){
    //array_push($items, $row);
    $items[] = $row;
  }
  $result["rows"] = $items;
 $this->output->set_content_type('application/json', 'utf-8')->set_output(json_encode($result));
 // echo json_encode($result);
 }

public function export_excel(){
  $session_data = $this->session->userdata('ingreso');
  $mpio_user = $session_data['mpio_user'];
  //$this->m_asigna->get_asignaciones($mpio_user);
   to_excel($this->m_asigna->get_asignaciones($mpio_user),"Asignaciones");
}


}