<?php
if (!defined('BASEPATH')) 	 	exit('No direct script access allowed');
class M_ecas extends CI_Model {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('America/Bogota');
	}

function actualizar_encuesta($form_data,$id_encuesta)
	{
		//echo "Se actualizara la Encuesta".$form_data['ID_ENCUESTA'];
		//echo $form_data['A2'];
		//echo gettype($id_encuesta).$id_encuesta;
		$result = $this->db->get_where('encuesta3',array('ID_ENCUESTA' => $id_encuesta));
		//echo "filas encontradas".$result->num_rows();
		if($result->num_rows()==1){
			//var_dump($form_data);
			$this->db->where('ID_ENCUESTA',$id_encuesta);
			$this->db->update('encuesta3', $form_data);
			//echo "Filas actualizadas".$this->db->affected_rows();
			if ($this->db->affected_rows() == 1)
				{
				//print_r($this->db->last_query());
				return 1;
				}
			else {	
				//print_r($this->db->last_query());
			//	var_dump($this->db->error());
				return 2;//error al actualizar
			  }
		}
		else{
			return 3;
			//echo "La encuesta ".$id_encuesta." no se encuentra registrada!!";
			/*$this->db->set('ID_ENCUESTA',$id_encuesta);
			$this->db->insert('encuesta',$id_encuesta);
			if ($this->db->affected_rows()==1)
			   return 1;
			else 
		       return 2;*/
		}


			
		
		
	}

function m_save_nov_ie($info,$cod_colegio){
	$this->db->where('Cod_colegio_op',$cod_colegio);
	$this->db->update('muestra_2016',$info);
	if($this->db->affected_rows()==1)
		return 1;
			//Se actualizó el lote"
	else
		return 0;

}
function m_cerrar_e($id_encuesta,$info){
	
	$this->db->where('ID_ENCUESTA',$id_encuesta);
	$this->db->update('encuesta3',$info);
	if($this->db->affected_rows()==1)
		return 1;
			//Se actualizó el lote"
	else
		return 0;
}


function m_cerrarlt($info, $nro_lote){
	$this->db->where('ID_LOTE', $nro_lote);
	$this->db->update('lote',$info);
	if($this->db->affected_rows()==1)
		return 1;
			//Se actualizó el lote"
	else
		return 0;
		//"Lote no exixte";
}

	
function get_faltaron($id_lote){
	$this->db->select('NO_ASISTIERON');
	$this->db->from('lote');
	$this->db->where('ID_LOTE',$id_lote);
	$result=$this->db->get();
	//echo $result;
	if($result->num_rows()>0){
		return $result->result(); //la encuesta existe
	}
	else 
		return 0;

}

function m_total_enc($id_lote){
	$this->db->select('COUNT(LOTE_ENC) as total_e');
	$this->db->from('encuesta3');
	$this->db->where('LOTE_ENC',$id_lote);
	$result=$this->db->get();
   	if($result->num_rows()>0){
		return $result->result();
	}
	else 
		return 2;
}

function get_infolt($id_lote){//infomacion del lote segun enceustas
	$info_lt= array();
	$this->db->select('COUNT(LOTE_ENC) as total_e');
	$this->db->from('encuesta3');
	$this->db->where("LOTE_ENC = $id_lote AND ESTADO_ENCUESTA > 0");
	$result=$this->db->get();
   	if($result->num_rows()>0){
		$info_lt['total_e'] = $result->result();
	}
	else 
		$info_lt['total_e'] ="Error al Consultar el total de encuestas";
	//$this->db->reconnect();
	//CONSULTA ENCUESTAS COMPLETAS
	$this->db->select('COUNT(LOTE_ENC) as completas');
	$this->db->from('encuesta3');
	$this->db->where('LOTE_ENC',$id_lote);
	$this->db->where('ESTADO_ENCUESTA',1);
	$result=$this->db->get();
   	if($result->num_rows()>0){
		$info_lt['e_completas'] = $result->result();
	}
	else 
		$info_lt['e_completas'] ="Error al Consultar el total de encuestas";
    //$this->db->reconnect();
    //consulta encuestas incompletas 2018
    $this->db->select('COUNT(LOTE_ENC) as incompletas');
	$this->db->where("(ESTADO_ENCUESTA > 1) 
                   AND LOTE_ENC = '$id_lote'");//ESTADO_ENCUESTA = 0 OR 
	$result=$this->db->get('encuesta3');
   	if($result->num_rows()>0){
		$info_lt['incompletas'] = $result->result();
	}
	else 
		$info_lt['e_completas'] ="Error al Consultar  encuestas incompletas";
    //CONSULTA CANTIDAD DE ESTUDIANTES..... 
	$this->db->select('MATRICULADOS,REGULARES,PRESENTES,GRADO,CURSO');
	$this->db->from('lote');
	$this->db->where('ID_LOTE',$id_lote);
    $result=$this->db->get();
    
    if($result->num_rows()>0){
		$info_lt['estudiantes'] = $result->result(); //la encuesta existe
	}
	else 
		$info_lt['estudiantes'] ="Error al Consultar cantidad de estudiantes";
	return $info_lt;
	
}
//modificar para ver encuestas incompletas
function get_lotes($usuario, $caso=""){
	$session_data = $this->session->userdata('ingreso');
	$cod_mpio= $session_data['mpio_user'];
	$this->db->select('ID_LOTE, muestra_2016.SEDE_NOMBRE ,ESTADO_LOTE');
	$this->db->from('lote');
	switch ($caso) {
		case 0: case 1:
			$this->db->join('muestra_2016',"lote.COD_COLEGIO_OP=muestra_2016.Cod_colegio_op AND USUARIO ='".$usuario."' AND ESTADO_LOTE='".$caso."'");//caso 0 lote abierto 1 cerrado 
			$result = $this->db->get();
			break;
		case  3://solo lotes que no tienen encuestas
			$sql = "select ID_LOTE,
			  (SELECT SEDE_NOMBRE FROM muestra_2016 M where M.Cod_colegio_op = L.Cod_colegio_op) AS SEDE_NOMBRE,
			  ESTADO_LOTE
			 from lote L
				where COD_MUNI ='".$cod_mpio."' AND id_lote not in (
				select id_lote from lote 
				join encuesta3 ON (lote_enc = id_lote))";
				$result = $this->db->query($sql);
			break;
		
		default:
			$this->db->join('muestra_2016',"lote.COD_COLEGIO_OP=muestra_2016.Cod_colegio_op AND USUARIO ='".$usuario."'");//todos los lotes
			$result = $this->db->get();
			break;
	}

	//print_r($this->db->last_query());
	if($result->num_rows()>0){
		//var_dump($result->result());
     	return $result->result();
     }
     else return 1;//echo error_log("Fallo consulta");

	return false;
}

function get_lote($lote_enc){
	//$result = $this->db->get_where('lote',array('id_lote' => $lote_enc));
	$this->db->select('ID_LOTE, muestra_2016.SEDE_NOMBRE ,GRADO, CURSO, MATRICULADOS,REGULARES,PRESENTES,ESTADO_LOTE');
	$this->db->from('lote');
	$this->db->join('muestra_2016',"lote.COD_COLEGIO_OP=muestra_2016.Cod_colegio_op AND ID_LOTE ='".$lote_enc."'");
	
	$result = $this->db->get();
	if($result->num_rows()>0){

		return $result->row();
		 //el lote esiste
	}
	else 
		return 2;//lote no esiste

}

function get_encuesta($id_encuesta){
	$result = $this->db->get_where('encuesta3',array('ID_ENCUESTA' => $id_encuesta));
	if($result->num_rows()>0){
		return $result->result(); //la encuesta existe
	}
	else 
		return 2;//encuesta no existe

}
function m_retomar($info){
	$estado_lt=1;
	$result = $this->db->get_where('lote',array('ID_LOTE' => $info['LOTE_ENC']));
	if($result->num_rows()==1){
		$lote = $result->result();
		$estado_lt =$lote[0]->ESTADO_LOTE;
		if ($estado_lt==0){
				$result = $this->db->get_where('encuesta3',array('ID_ENCUESTA' => $info['ID_ENCUESTA']));
				if($result->num_rows()>0){
					$encuesta = $result->result();
					if($encuesta[0]->ESTADO_ENCUESTA=='2'){
						return 4;
					}
					if($encuesta[0]->ESTADO_ENCUESTA=='1'){
						return 5;
					}
					
					return $result->result(); //la encuesta existe

				}
				else 
					return 2;//encuesta no existe
		}else
			return 3;//lote ya está cerrado
	}else
		return 0; //lote no existe

}

function crear_encuesta($info){
	$estado_lt = 0;
	$result = $this->db->get_where('lote',array('ID_LOTE' => $info['LOTE_ENC']));
	if($result->num_rows()==1){
		$lote = $result->result();
		$estado_lt =$lote[0]->ESTADO_LOTE;
		$max_encuestas = $lote[0]->REGULARES;
		if ($info['NRO_ENCUESTA'] <= $max_encuestas){
			if ($estado_lt==0){
					$result = $this->db->get_where('encuesta3',array('ID_ENCUESTA' => $info['ID_ENCUESTA']));
					if($result->num_rows()==0){
						$this->db->insert('encuesta3',$info);
	   					if ($this->db->affected_rows()==1)
							return 1;//echo "se creo la encuesta ".$info['NRO_ENCUESTA']."Lote ".$info['LOTE_ENC'];
						else 
							return 2;//echo "Error al crear la encuesta";
					}
					else 
						return 3;//echo "La encuesta".$info['NRO_ENCUESTA']."Ya existe";
			}else
				return 4;//lote ya está cerrado 
		}else
			return 5;//encuestas completas para el lote

		
	}else
		return 0;
			//echo "Lote no exixte";

}
function guarda_asignacion($info){
	$result = $this->db->get_where('asig_monitor',array('id_asignacion' => $info["id_asignacion"]));
		if ($result->num_rows() > 0)
			return 2;
	$this->db->insert('asig_monitor',$info);
	//echo $this->db->last_query();
	if($this->db->affected_rows() == '1')
		return 1;
		
	else
		return 0;
}

//--------GUARDAR ACTUALIZAR ENCUESTA
function guarda_lote($lote){
	      
		///echo json_encode($lote);
		$id_lote =$lote["COD_COLEGIO_OP"].$lote["GRADO"].$lote["CURSO"];
		//echo $id_lote."id_colegio".$lote["COD_COLEGIO_OP"];
		$result = $this->db->get_where('lote',array('ID_LOTE' => $id_lote));
		if ($result->num_rows() > 0)
			return 2;
			//echo "El Lote ".$id_lote."ya Exixte";
		else{//cConsulta los datos del colegio desde la muestra para guardarlos en Lote.
			$info_lote=$this->db->get_where('muestra_2016',	array('Cod_colegio_op' => $lote["COD_COLEGIO_OP"]));
			if($info_lote->num_rows()>0){
				$info_lote = $info_lote->result();

				$lote['COD_DEPTO'] = $info_lote[0]->COD_DEPTO;
				$lote['COD_MUNI'] = $info_lote[0]->COD_MUNI;
				$lote['SEDE_CODIGO'] = $info_lote[0]->SEDE_CODIGO;
				$lote['SECTOR'] = $info_lote[0]->SECTOR;
				$lote['FECHA'] = date('Y/m/d H:i:s');
				$lote['ESTADO_LOTE'] = 0;
				$lote['SIS_RECOLECTA'] = 1;
				/*
				echo json_encode($info_lote);
				echo "<br>";
				echo json_encode($lote);*/
				$lote['id_lote'] = $id_lote;
			//	echo "Se creará el lote".$id_lote;
			    $this->db->insert('lote',$lote);
				if($this->db->affected_rows() == '1')
					return 1;
					//echo "Se inserto el lote!";
				else
					return 0;
					//echo "Fallo creación del lote";
			}
		
		}
	        
   }
//------------------------
function mget_grado($cod_col){

	$this->db->select('GRADO6, GRADO7, GRADO8, GRADO9, GRADO10, GRADO11_OMAS');
	$this->db->from('muestra_2016');
	$this->db->where('Cod_colegio_op', $cod_col);
	$result = $this->db->get();
	if($result->num_rows()>0)
     	return $result->result();
     else echo error_log("Fallo consulta");

	return false;
}	
//------------------------

/*
version que consulta los colegios asignados
*/

function get_col_asignado(){
		$session_data = $this->session->userdata('ingreso');
	    $usuario= $session_data['usuario'];
	    $this->db->select("cod_colegio");
	    $this->db->from("asig_monitor");
	    $this->db->where("us_monitor",$usuario);
	    $colegios=$this->db->get();
	    if ($colegios->num_rows()>0) {
	    	$colegios=$colegios->result();
	    $i=0;
	    $lista = array();
	    foreach ($colegios as $key => $value) {
		    	$lista[$i++]=$value->cod_colegio;
		    }
	    }
	   else {
	   		echo $usuario." <b>No</b> tiene colegios asignados";
	   		exit();
	   }
	    
	    //where_in
	    //exit();
	    $this->db->select('Cod_colegio_op, COD_MUNI, MUNICIPIO, SECTOR, SEDE_NOMBRE, GRADO6, GRADO7, GRADO8, GRADO8, GRADO9, GRADO10, GRADO11_OMAS');
     	$this->db->from('muestra_2016');
     	$this->db->where_in('SEDE_CODIGO', $lista);
     	$result = $this->db->get();
     	//echo $this->db->last_query();
     	if($result->num_rows()>0)
     		return $result->result();
     	else
     		return false;
}

/*Devuelve los colegios que tiene el usuario por municipio*/
function get_colegio($caso =""){//TODOS LOS COLEGIOS DE LA MUESTRA
		$session_data = $this->session->userdata('ingreso');
	    $cod_mpio= $session_data['mpio_user'];
	    
	   switch($caso){
	    	case 'nov_ie':// solo mostrar los que no tienen encuestas
	    	  $sql = "select Cod_colegio_op, 
				COD_MUNI, 
				MUNICIPIO, 
				SECTOR, 
				SEDE_NOMBRE
				from muestra_2016 where COD_MUNI ='".$cod_mpio."' AND Cod_colegio_op not in (
				SELECT M.Cod_colegio_op FROM muestra_2016 M join 
				lote L ON (M.Cod_colegio_op = L.COD_COLEGIO_OP AND M.COD_MUNI ='".$cod_mpio."')
				JOIN encuesta3 E ON (L.id_lote =E.lote_enc) group by M.Cod_colegio_op);";
	  
	        $result = $this->db->query($sql);
	    	break;
	    	default: 
	    		$this->db->select('Cod_colegio_op, COD_MUNI, MUNICIPIO, SECTOR, SEDE_NOMBRE, GRADO6, GRADO7, GRADO8, GRADO8, GRADO9, GRADO10, GRADO11_OMAS');
     			$this->db->from('muestra_2016');
	    		$this->db->where("COD_MUNI = $cod_mpio AND Novedad is NULL");
	    		$result = $this->db->get();
	    	break;
	    }
	    //Colegios que no tienen encuestas para mostrar y agregar posible novedad
	  
      	 //
     	if($result->num_rows()>0){
     		$this->db->close();
     		return $result->result();
      	}else
     		return false;
}

	// --------------------------------------------------------------------

function get_user($usuario, $clave){

     	$clave = MD5($clave);
     	$this->db->select('USUARIO, COD_MUNI, CIUDAD, ROL, CLAVE');
     	$this->db->from('user_2016');
     	$this->db->where('USUARIO', $usuario);
     	$this->db->where('CLAVE', $clave);
     	$result = $this->db->get();
     	if($result->num_rows()==1)
     		return $result->result();
     	else
     		return false;

      }

function get_usuarios($rol='', $ciudad = ''){

     	$this->db->select('NOMBRE, USUARIO, COD_MUNI, CIUDAD, ROL');
     	$this->db->from('user_2016');
     	if ($rol!='')
     		$this->db->where('ROL', $rol);
     	if ($ciudad!='')
     		$this->db->where('COD_MUNI', $ciudad);
     	$result = $this->db->get();
     	if($result->num_rows()>0){
     		//echo $this->db->last_query();
     		return $result->result();
     	}
     	else{
			
     		return false;
     	}

      }

function get_rep_monitor($op){
	$result=null;
	if ($op==1){
			$session_data = $this->session->userdata('ingreso');
			$mpio= $session_data['mpio_user'];
			$result = $this->db->query("CALL rep_monitorv3('".$mpio."')");
		}
	 else
	 	$result = $this->db->query("CALL full_monitorv3()");
	
	  if($result->num_rows()>0)
	    {
	       return $result->result();
	    }else{
	       return 2;
	    }
  
}
  ####fin funciones
}
?>