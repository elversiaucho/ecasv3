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
	  //echo $page;
	  //include 'conn.php';
	  $conn = @mysql_connect('192.168.1.200','dimpe','D1mP3D3s4rr0ll0');
	    if (!$conn) {
	      die('No se obtubo conexión: ' . mysql_error());
	    }
	    mysql_select_db('dane_ecas_v2', $conn);
	    mysql_query("SET NAMES UTF8");
	   //$conn=conn();
	  
	  $rs = mysql_query("SELECT COUNT(*) FROM v_AlertaLotes WHERE COD_MUNI = '".$mpio."';");
	  $row = mysql_fetch_row($rs);
	  $result["total"] = $row[0];
	  $rs = mysql_query("SELECT * FROM v_AlertaLotes WHERE COD_MUNI = '".$mpio."' limit $offset,$rows");
	  //print_r($rs);
	  //exit();
	  $items = array();
	  while($row = mysql_fetch_object($rs)){
	    //array_push($items, $row);
	    $items[] = $row;
	  }
	  $result["rows"] = $items;
	 return $result;
	 }
}