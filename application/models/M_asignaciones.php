<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Modelo para el manejo de las asignaciones de lotes
 * @author easiauchor
 **/
class M_asignaciones extends CI_Model {

    function __construct() {
        parent::__construct();
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
}