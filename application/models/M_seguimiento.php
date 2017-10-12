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
	  $conn = @mysql_connect('192.168.1.200','dimpe','D1mP3D3s4rr0ll0');
	    if (!$conn) {
	      die('No se obtubo conexión: ' . mysql_error());
	    }
	    mysql_select_db('dane_ecas_v2', $conn);
	    mysql_query("SET NAMES UTF8");
	   //$conn=conn();
  	  if ($tabla=='v_estadoie' || $tabla=='v_estadoCurso' 
  	  	|| $tabla=='v_detCurso' || $tabla =='v_estudiantes' 
  	  	|| $tabla == 'v_det_est' || $tabla == 'v_det_est2' || $tabla == 'v_estxcurso' || $tabla == 'v_detnoe'){
  	  	$codicion = " where SEDE_CODIGO like '%$codColegio%' and SEDE_NOMBRE like '%$sedeNombre%'";
	  }
	 	  
	  $rs = mysql_query("SELECT COUNT(*) FROM $tabla".$codicion );
	  $row = mysql_fetch_row($rs);
	  $result["total"] = $row[0];
	  $rs = mysql_query("SELECT * FROM $tabla".$codicion." limit $offset,$rows");
	  //print_r($rs);
	  //exit();
	  $items = array();
	  while($row = mysql_fetch_object($rs)){
	      $items[] = $row;
	  }
	  $result["rows"] = $items;
	  mysql_close($conn);
	 return $result;
	 }

/*consulta toda la tabla del reporte para generar excel*/
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