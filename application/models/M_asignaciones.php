<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Modelo para el manejo de las asignaciones de lotes
 * @author easiauchor
 **/
class M_asignaciones extends CI_Model {

    function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Bogota');

    }


public function setAsignacion($monitor,$asignador,$lotes){
    $fecha = date('Y/m/d H:i:s');
    $sql = "update asig_monitor set us_monitor ='".$monitor."',
               us_asignador = '".$asignador."' ,fecha ='".$fecha."' where id_asignacion in ('".$lotes."');";

    if ($this->db->query($sql)){
            return 1;
        }
        return 2;
}



    /**
     * Consulta los lotes que se van a asignar de la tabla previamente creada según ciudad del usuario
     * @author easiauchor
     * @param   String  $seccion    Seccion de la pregunta
     * @param   String  $pagina     Pagina de la pregunta
     * @param   Array   $seccion    Secciones de las preguntas
     * @return boolean
     */
    public function get_pre_lotes($offset = '', $rows) {

          $data = array();
        $cond = '';
        $i = 0;
       // if(!empty($ciudad))            $cond .= " AND  COD_MUNI= '" . $ciudad . "'";
        $sql = "select count(*) as total from users";
        $rs = $this->db->query($sql);
        if ($rs->num_rows()>0){
            
         //$row = mysql_fetch_row($rs);
         $result["total"] = $rs->row();
     }
         $rs = $this->db->query("select * from users limit $offset,$rows");
  
  $items = array();
foreach ($rs as $key => $value) {
    $items[$key]=$value;
}
  $result["rows"] = $items;

        while ($row = $rs->unbuffered_row('array')) {
            $data[$i] = $row;
            $i++;
        }
        var_dump($data); exit();
        $this->db->close();
        return $data;
    }


 public function get_lotes(){
 
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
  $qry = "select COUNT(*) as total from asig_monitor A join mtra_colegios M
on (A.cod_colegio = M.SEDE_CODIGO AND COD_MUNI ='$mpio' AND SEDE_CODIGO like '%$codColegio%' and SEDE_NOMBRE like  '%$sedeNombre%')";
  $rs = $this->db->query($qry);
  $row = $rs->row();
  $result["total"] = $row->total;
   
  $rs = $this->db->query("select * from asig_monitor A join mtra_colegios M
on (A.cod_colegio = M.SEDE_CODIGO AND COD_MUNI ='$mpio' AND (SEDE_CODIGO like '%$codColegio%' and SEDE_NOMBRE like  '%$sedeNombre%')) limit $offset,$rows");
   $items = array();
  foreach ($rs->result_array() as $row) {
     $items[] = $row;
  }
  $result["rows"] = $items;
  $this->output->set_content_type('application/json', 'utf-8')->set_output(json_encode($result));
 }


public function get_asignaciones($cod_mpio=""){

    $campos= $this->db->field_data('v_temp_asignaciones');
    $result = $this->db->query("CALL ver_asignaciones('".$cod_mpio."')");
    return array('fields'=>$campos, 'query' =>$result);
    //print_r($result->result());
    //exit();


 }
}