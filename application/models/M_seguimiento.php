<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Modelo para el manejo de las alertas de lotes mixtos
 * @author easiauchor
 **/
class M_seguimiento extends CI_Model {

    function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Bogota');
    }



	 public function get_reporte($tabla ="" , $codColegio="", $sedeNombre=""){
	  $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	  $rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	  $offset = ($page-1)*$rows;
	  $result = array();
	  $session_data = $this->session->userdata('ingreso');
	  $mpio = $session_data['mpio_user'];
	  $codicion="";
	  //echo $page;
	  //include 'conn.php';
	 
	   //$conn=conn();
  	  if ($tabla=='v_estadoie' || $tabla=='v_estadocurso' 
  	  	|| $tabla=='v_detcurso' || $tabla =='v_estudiantes' 
  	  	|| $tabla == 'v_det_est' || $tabla == 'v_det_est2' || $tabla == 'v_estxcurso' || $tabla == 'v_detnoe'){
  	  	$codicion = " where SEDE_CODIGO like '%$codColegio%' and SEDE_NOMBRE like '%$sedeNombre%'";
	  }

	  if ($tabla == "v_rep_monitor")
	  {
	  	$codicion = " WHERE COD_MUNI = $mpio";
	  }
	 	  
	  $rs = $this->db->query("SELECT COUNT(*) as total FROM $tabla".$codicion );
	  $row = $rs->row();
	  $result["total"] = $row->total;

	  $rs = $this->db->query("SELECT * FROM $tabla".$codicion." limit $offset,$rows");
	  $items = array();
	  foreach ($rs->result_array() as $row) {
	  	$items[]= $row;
	  }
	  $result["rows"] = $items;
	 return $result;
	 }
	  

//**consulta toda la tabla del reporte para generar excel
 public function get_rep($vista ="")
 {
  if ($vista != ''){
	 $fields = $this->db->field_data($vista);
	 $query = $this->db->select('*')->get($vista);
	 return array("fields" => $fields, "query" => $query);
    }
 	return array("Campos" => "Sin información");
 }
}