<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Modelo para el manejo de las alertas de lotes mixtos
 * @author easiauchor
 **/
class M_alertas extends CI_Model {

    function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Bogota');
    }


	 public function get_alertas(){
	  $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	  $rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	  $offset = ($page-1)*$rows;
	  $result = array();
	  $session_data = $this->session->userdata('ingreso');
	  $mpio = $session_data['mpio_user'];
	  $condicion="";

	  $condicion = "COD_MUNI = '".$mpio."' AND  alerta <> 'ok'";
	  $rs = $this->db->query("SELECT COUNT(*) as total FROM v_AlertaLotes WHERE ".$condicion);
	  $row = $rs->row();
	  $result["total"] = $row->total;
	  $rs = $this->db->query("SELECT * FROM v_AlertaLotes WHERE ".$condicion." limit $offset,$rows");
	  //$items[]= array();	  
	  foreach ($rs->result_array() as $row) {
	  	$items[] = $row;
	  }
	  $result["rows"] = $items;
	  return $result;
	 }
}