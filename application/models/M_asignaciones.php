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


public function get_asignaciones($cod_mpio=""){

    $campos= $this->db->field_data('v_temp_asignaciones');
    $result = $this->db->query("CALL ver_asignaciones('".$cod_mpio."')");
    return array('fields'=>$campos, 'query' =>$result);
    //print_r($result->result());
    //exit();


 }
}