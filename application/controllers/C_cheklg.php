<?php
class C_cheklg extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
 		$this->load->model('m_ecas');
 		//$this->load->helper('url');
	}	
	function index()
	{			
		//$ingreso['ingreso'] = 0;
		$ingresa = false;
		
 		$this->load->library('form_validation');
		//$session_data = $this->session->userdata('ingreso');
		$this->form_validation->set_rules('Usuario', 'Nombre de Usuario', 'trim|required');
   		$this->form_validation->set_rules('clave', 'Contraseña', 'trim|required|callback_verifica_user');
   		$ingresa = $this->form_validation->run();
   		if (isset($_GET['menu']))
   			$ingresa = true;

   		if($ingresa == FALSE){
   			$ingreso['usuario']='';
   			//$ingreso['ingreso'] = 0;
   			$this->load->view("encabezado",$ingreso);
   			$this->load->view('view_elogin');
   		}
   		else {
   			$session_data = $this->session->userdata('ingreso');
		    //print_r($session_data);
   			$data['usuario'] = $session_data['usuario'];
   			$data['rol'] = $session_data['rol'];
   			$ingreso['ingreso'] = 1;
   			$ingreso['usuario']= $data['usuario'];
   			if ($data['usuario']!=false){
   				$this->load->view("encabezado",$ingreso);
   				//if ($data['rol'] == 3){
   					//$this->load->view('v_menu',$data);
   				//}else
   				  $this->load->view('v_menult',$data);
   			}
   			else
   				echo "No se encuentra Ningún  usuario";
  
   		}
	}
	#funcion de validacion
	function verifica_user($clave){
		//echo "entro a verificar";
		$username = $this->input->post('Usuario');

		$result = $this->m_ecas->get_user($username,$clave);
		if($result){
			$session = array();
			foreach ($result as $fila) {
				$session = array('usuario' =>$fila->USUARIO ,
				        'mpio_user'=> $fila->COD_MUNI,
				        'rol' => $fila->ROL	
				        );
				$this->session->set_userdata('ingreso',$session);
			}
		return TRUE;
		}
		else {
			$this->form_validation->set_message('verifica_user','Usuario o clave invalido');
			return false;
		}
	}

	########Reportes
	function ver_reportes(){
		$session_data = $this->session->userdata('ingreso');
		$rol = $session_data['rol'];
		$data['cod_mpio'] = $session_data['mpio_user'];
		$data['usuario'] = $session_data['usuario'];
		$data['rol'] = $rol;
		if ($rol==1 || $rol == 3)
			$this->load->view('v_reportes',$data); 
		else
		 echo "Usuario no tiene privilegios para realizar esta accíon. rol:".$rol;	

	}


function rep_monitor(){
   $op= $_GET['op'];
   $datos['reporte'] = $this->m_ecas->get_rep_monitor($op);
  //echo json_encode($datos);
	$tabla ='<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><table border="1">
		<tr><th>Monitor</th>
		<th>NUMERO DE LOTE</th>
		<th>SEDE CODIGO</th>
		<th>INSTITUCION</th>
		<th>MUNICIPIO</th>
		<th>ESTUDIANTES PRESENTES</th>
		<th>ENCUESTAS REGISTRADAS</th>
		<th>ENCUESTAS COMPLETAS</th>
		<th>ENCUESTAS IN_COMPLETAS</th>
		<th>ENCUENTAS VACIAS</th>
		</tr>';
		if(isset($datos['reporte']) and is_array($datos['reporte'])){
			foreach ($datos['reporte'] as $fila) 
				{
				$tabla.= '<tr>
				<th>'.$fila->Monitor.'</th>
				<th>'.$fila->Nro_lote.'</th>
				<th>'.$fila->SEDE_CODIGO.'</th>
				<th>'.$fila->SEDE_NOMBRE.'</th>
				<th>'.$fila->Municipio.'</th>
				<th>'.$fila->PRESENTES.'</th>
				<th>'.$fila->Registradas.'</th>
				<th>'.$fila->COMPLETAS.'</th>
				<th>'.$fila->IN_COMPLETAS.'</th>
				<th>'.$fila->ENCUENTAS_VACIAS.'</th>
				</tr>';
			   }
	$tabla.='</table>';
	$path = "assets/rep_monitores".$op.".xls";//para local
	$handle = fopen($path, 'w+');
	$tabla = utf8_encode($tabla);
	fwrite($handle, $tabla);
	fclose($handle);
	echo "<a href=".base_url("assets/rep_monitores".$op.".xls").">Descargar Reporte Monitores ".$op.".</a>";

  }
  else echo "Error al consultar la información";
}
	###############

	function ver_novedad_lt(){
		$data[]= array();
		$session_data = $this->session->userdata('ingreso');
    	$usuario= $session_data['usuario'];
    	$lotes = $this->m_ecas->get_lotes($usuario,3);//3 solo muestra lotes sin encuesta
   		$data['lotes']=$lotes;
   		//print_r($lotes);
		$this->load->view('v_novedad_lt',$data);	
	}
	function ver_novedad_ie(){
		
		$data['colegios'] = $this->m_ecas->get_colegio("nov_ie");
		if ($data['colegios']!=false)
			$this->load->view('v_novedad_ie',$data);	
		else
			echo "No se encuentra ningún  Colegio para cerrar";
		
	}

/*

*/

	function vista_lote(){
			$data['colegios'] = $this->m_ecas->get_col_asignado();//get_colegio();
			//var_dump($data);
   			if ($data['colegios']!=false)
   				$this->load->view('view_lote',$data);
   			else
   				echo "El usuario no tiene asignado ningún colegio.";
		
	}

	
	function ver_retomar(){
		$data[]= array();
		$session_data = $this->session->userdata('ingreso');
    	$usuario= $session_data['usuario'];
		$lotes = $this->m_ecas->get_lotes($usuario,0);
		$data['lotes']=$lotes;
		$this->load->view('view_retomar',$data);

	}

	function ver_cerralt(){
	$mensaje ="";
	$caso = 0;
	$data[]= array();
	$session_data = $this->session->userdata('ingreso');
    $usuario= $session_data['usuario'];
    //print_r($session_data);
  /*  if ($session_data["rol"]==1)//Muestra todos los lotes de la ciudad abiertos para el monitor
    {
    	$caso = 2;
    }*/
   	$lotes = $this->m_ecas->get_lotes($usuario,$caso);//caso puede ser 2.todos.. 0.solo abiertos... 1.solo cerrados. del usuarios
   	switch ($lotes) {
    	case (is_array($lotes)):
    	  	$mensaje="---";
    		break;
    	case 1:
    	  	$mensaje="No hay lotes para cerrar";
    		break;
    	case 2:
    	  	$mensaje="Error al consultar lotes..";
    		break;
    } 
    $data['lotes']=$lotes;
    $data['mensaje']=$mensaje;
	    $this->load->view('view_cerrarlt',$data);
   			
	}

function verVerifica_lt(){
	$mensaje ="";
	$data[]= array();

	$session_data = $this->session->userdata('ingreso');
    $usuario= $session_data['usuario'];
     foreach ($_POST as $key => $value) {
        $lotes[$key]=$value;
    }
    $inf_lote="";
    if (isset($lotes['ID_LOTE'])){
   	  //$lotes = $this->m_ecas->get_lote($lotes['ID_LOTE']);
   	  $inf_lote=$this->m_ecas->get_infolt($lotes['ID_LOTE']);
   	}
   	switch ($lotes) {
    	case (is_array($lotes)):
    	  	$mensaje="---";
    		break;
    	case 1:
    	  	$mensaje="No hay lotes para cerrar";
    		break;
    	case 2:
    	  	$mensaje="Error al consultar lotes..";
    		break;
    } 
    $data['lotes']=$lotes;
    $data['inf_lote']=$inf_lote;//json_encode($inf_lote);
    //$this->output->set_content_type('application/json', 'utf-8')->set_output(json_encode($inf_lote));
    $data['mensaje']=$mensaje.$lotes['ID_LOTE'];
    /*print_r($lotes);
    exit();*/
	    $this->load->view('viewVerifica_lote',$data);
   			
	}


	function vista_encuesta(){
		$data[]= array();
		$session_data = $this->session->userdata('ingreso');
    	$usuario= $session_data['usuario'];
		$data['lotes'] = $this->m_ecas->get_lotes($usuario,0);
		//var_dump($data);
		//$result = $this->m_ecas->m_total_enc("2525119");
		//$result = $this->m_ecas->get_lote('2525119');
		//$result = pre_encuesta("2525119");
		//var_dump($result);
		$this->load->view('view_creaEnc',$data);
   		}
		 
}

?>