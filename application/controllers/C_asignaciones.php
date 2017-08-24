<?php

class C_asignaciones extends CI_Controller {
  var $data;         
	function __construct()
	{
 		parent::__construct();
 		$this->load->model('m_asignaciones',"m_asigna");

    $this->load->model('m_ecas');
      $this->load->library('form_validation');
      //$this->load->library('phpGrid');
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
       $ingreso['ingreso'] = 1;
       $ingreso['usuario']= $usuario;
       $data_m['rol']=$rol;
      
      
   
       $this->form_validation->set_rules('usuario', 'Seleccione el usuario', 'trim|required');
       $this->form_validation->set_rules('IE', 'Digita el Colegio', 'trim|required');
       $this->form_validation->set_rules('grado', 'Seleccione el grado', 'trim|required');
       $this->form_validation->set_rules('tot_cursos', 'Digite la cantidad de cursos', 'trim|required|max_length[2]');
            
         if($this->form_validation->run()==FALSE){
            

            $data['usuarios'] = $this->m_ecas->get_usuarios(null,$session_data['mpio_user']);// usaurio con rol de monitor
            //var_dump($this->get_users());
            //var_dump($this->ver_pre_lotes());
            $data['colegios'] = $this->m_ecas->get_colegio();
            $colegio = set_value('IE');
            $lugar= strpos($colegio, '-');
            if ($lugar>0)
              $colegio = substr($colegio, 0,$lugar);
            if (is_numeric($colegio)){

                $data['grados'] = $this->m_ecas->mget_grado($colegio);
                //is_array
              }
              
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
  $data["mensaje"] = "Se va a guarda la siguinte info:";
  var_dump($data);
  return json_encode($data);

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
  $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
  $rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
  $offset = ($page-1)*$rows;
  $result = array();
  //echo $page;
  //include 'conn.php';
  $conn = @mysql_connect('192.168.1.200','dimpe','D1mP3D3s4rr0ll0');
    if (!$conn) {
      die('Could not connect: ' . mysql_error());
    }
    mysql_select_db('dane_ecas_v2', $conn);
   //$conn=conn();
  
  $rs = mysql_query("select count(*) from asig_monitor");
  $row = mysql_fetch_row($rs);
  $result["total"] = $row[0];
  $rs = mysql_query("select * from asig_monitor A join mtra_colegios M
on (A.cod_colegio = M.SEDE_CODIGO) limit $offset,$rows");
  
  $items = array();
  while($row = mysql_fetch_object($rs)){
    //array_push($items, $row);
    $items[] = $row;
  }
  $result["rows"] = $items;

  echo json_encode($result);
 }


 public function get_users(){
  $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
  $rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
  $offset = ($page-1)*$rows;
  $result = array();

  //include 'conn.php';
  $conn = @mysql_connect('192.168.1.200','dimpe','D1mP3D3s4rr0ll0');
    if (!$conn) {
      die('Could not connect: ' . mysql_error());
    }
    mysql_select_db('dane_ecas_v2', $conn);
   //$conn=conn();
  
  $rs = mysql_query("select count(*) from users");
  $row = mysql_fetch_row($rs);
  $result["total"] = $row[0];
  $rs = mysql_query("select * from users limit $offset,$rows");
  
  $items = array();
  while($row = mysql_fetch_object($rs)){
    //array_push($items, $row);
    $items[] = $row;
  }
  $result["rows"] = $items;

  echo json_encode($result);
 }
}