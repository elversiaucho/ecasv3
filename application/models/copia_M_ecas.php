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
		$result = $this->db->get_where('encuesta',array('ID_ENCUESTA' => $id_encuesta));
		//echo "filas encontradas".$result->num_rows();
		if($result->num_rows()==1){
			//var_dump($form_data);
			$this->db->where('ID_ENCUESTA',$id_encuesta);
			$this->db->update('encuesta', $form_data);
			//echo "Filas actualizadas".$this->db->affected_rows();
			if ($this->db->affected_rows() == 1)
				{
				return 1;
				}
			else {	
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
	$this->db->update('encuesta',$info);
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
function total_creadas(){

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
	$this->db->from('encuesta');
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
	$this->db->from('encuesta');
	$this->db->where('LOTE_ENC',$id_lote);
	$result=$this->db->get();
   	if($result->num_rows()>0){
		$info_lt['total_e'] = $result->result();
	}
	else 
		$info_lt['total_e'] ="Error al Consultar el total de encuestas";
	//$this->db->reconnect();
	//CONSULTA ENCUESTAS COMPLETAS
	$this->db->select('COUNT(LOTE_ENC) as completas');
	$this->db->from('encuesta');
	$this->db->where('LOTE_ENC',$id_lote);
	$this->db->where('ESTADO_ENCUESTA',1);
	$result=$this->db->get();
   	if($result->num_rows()>0){
		$info_lt['e_completas'] = $result->result();
	}
	else 
		$info_lt['e_completas'] ="Error al Consultar el total de encuestas";
    //$this->db->reconnect();
    //CONSULTA CANTIDAD DE ESTUDIANTES..... 
	$this->db->select('MATRICULADOS,REGULARES,PRESENTES');
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

function get_lotes($usuario, $caso){

	$this->db->select('ID_LOTE, muestra_2016.SEDE_NOMBRE ,ESTADO_LOTE');
	$this->db->from('lote');
	if ($caso == 0 || $caso == 1)
			$this->db->join('muestra_2016',"lote.COD_COLEGIO_OP=muestra_2016.Cod_colegio_op AND USUARIO ='".$usuario."' AND ESTADO_LOTE='".$caso."'");
	else	
		$this->db->join('muestra_2016',"lote.COD_COLEGIO_OP=muestra_2016.Cod_colegio_op AND USUARIO ='".$usuario."'");//todos los lotes
	$result = $this->db->get();
	if($result->num_rows()>0){
		//var_dump($result->result());
     	return $result->result();
     }
     else return 1;//echo error_log("Fallo consulta");

	return false;
}

function get_encuesta($id_encuesta){
	$result = $this->db->get_where('encuesta',array('ID_ENCUESTA' => $id_encuesta));
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
				$result = $this->db->get_where('encuesta',array('ID_ENCUESTA' => $info['ID_ENCUESTA']));
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
					$result = $this->db->get_where('encuesta',array('ID_ENCUESTA' => $info['ID_ENCUESTA']));
					if($result->num_rows()==0){
						$this->db->insert('encuesta',$info);
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
/*Devuelve los colegios que tiene el usuario por municipio*/
	function get_colegio(){
		$session_data = $this->session->userdata('ingreso');
	    $cod_mpio= $session_data['mpio_user'];
	    $this->db->select('Cod_colegio_op, COD_MUNI, MUNICIPIO, SECTOR, SEDE_NOMBRE');
     	$this->db->from('muestra_2016');
     	$this->db->where('COD_MUNI', $cod_mpio);
     	$result = $this->db->get();
     	if($result->num_rows()>0)
     		return $result->result();
     	else
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


	/*function SaveForm($form_data)
	{
		$this->db->insert('lote', $form_data);
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}*/

}
?>