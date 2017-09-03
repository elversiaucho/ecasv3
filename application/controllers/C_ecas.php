<?php 
class C_ecas extends CI_Controller {
               
function __construct()
	{
 		parent::__construct();
  		$this->load->model('m_ecas');
	}

function index(){
	$nro_slide = 1;
	$id_encuesta = 0;
	$data_encuesta = 0;
	$estado_e = 0;
	$mensaje ='';
	$result = 2;
	$validacion = FALSE;
	$info_encuesta = array();
	if (isset($_POST["estado_e"]))
		$estado_e = $_POST["estado_e"];
	if (isset($_POST["seguir"]))
		$nro_slide= $_POST["seguir"];

	if (isset($_GET["id_e"])){
		$id_encuesta = $_GET["id_e"];
	
	if (isset($_GET["seguir"]))
		$nro_slide= $_GET["seguir"];
	//echo $nro_slide;
	
	}else
		{$id_encuesta = $_POST['id_e'];
		//echo "deste formulario".$id_encuesta.gettype($id_encuesta);
		}
	$data_encuesta = $this->m_ecas->get_encuesta($id_encuesta);
	if (is_array($data_encuesta)){
		
		$data_encuesta = $data_encuesta[0];
		foreach ($data_encuesta as &$value) {
			if ($value == '0')
				$value=null;
			else if ($value == '1') 
					$value = 'checked';

			}
			

			if ($data_encuesta->NRO_ENCUESTA=="checked")
				$data_encuesta->NRO_ENCUESTA = 1;

			$info_encuesta =array('LOTE_ENC' =>$data_encuesta->LOTE_ENC,
				        'nro_encuesta'=> $data_encuesta->NRO_ENCUESTA,
				        'estado_e' => $data_encuesta->ESTADO_ENCUESTA,
				        );
	   }
	//if ($nro_slide==1)
	
	//$data_encuesta=json_encode($data_encuesta);
	/*print_r($info_encuesta);*/
	
	$this->session->set_userdata('info_enc',$info_encuesta);
	/*print_r($this->session->userdata('info_enc'));
	exit();*/
	$this->form_validation->set_rules("id_e");
    $this->form_validation->set_rules("A1","Selecciona tu género",'required');
	$this->form_validation->set_rules("A2","Ingresa tu edad",'required|is_natural_no_zero|max_length[2]|callback_edad');
	$this->form_validation->set_rules("A3","Selecciona una opción",'required');
	$this->form_validation->set_rules("A4[]","Selecciona una o más opciones",'required');
	$this->form_validation->set_rules("A5","Selecciona una opción",'required');//callback_aa5
 if ($nro_slide >= 2){
 	$this->form_validation->set_rules("A6a","Marca Sí o No",'required');
	$this->form_validation->set_rules("A6b","Marca Sí o No",'required');
	$this->form_validation->set_rules("A6c","Marca Sí o No",'required');
	$this->form_validation->set_rules("A6d","Marca Sí o No",'required');
	$this->form_validation->set_rules("A6e","Marca Sí o No",'required');
	$this->form_validation->set_rules("A7a","Marca Sí o No",'required');
	$this->form_validation->set_rules("A7b","Marca Sí o No",'required');
	$this->form_validation->set_rules("A7c","Marca Sí o No",'required');
	$this->form_validation->set_rules("A7d","Marca Sí o No",'required');
	$this->form_validation->set_rules("A7e","Marca Sí o No",'required');
	$this->form_validation->set_rules("A7f","Marca Sí o No",'required');
	$this->form_validation->set_rules("A7g","Marca Sí o No",'required');
	$this->form_validation->set_rules("A7h","Marca Sí o No",'required');
	$this->form_validation->set_rules("A7i","Marca Sí o No",'required');
	$this->form_validation->set_rules("A7j","Marca Sí o No",'required');
 } 

if ($nro_slide >= 3){
	$this->form_validation->set_rules("B8[]","Selecciona una o más opciones",'required');
	$this->form_validation->set_rules("B9[]","Selecciona una o más opciones",'required');
	$this->form_validation->set_rules("B10a","Selecciona una opción",'required');
	$this->form_validation->set_rules("B10b","Selecciona una opción",'required');
	$this->form_validation->set_rules("B10c","Selecciona una opción",'required');
	$this->form_validation->set_rules("B10d","Selecciona una opción",'required');
	$this->form_validation->set_rules("B10e","Selecciona una opción",'required');
	$this->form_validation->set_rules("B10f","Selecciona una opción",'required');
	$this->form_validation->set_rules("B10g","Selecciona una opción",'required');
	$this->form_validation->set_rules("B10h","Selecciona una opción",'required');
	$this->form_validation->set_rules("B10i","Selecciona una opción",'required');
	$this->form_validation->set_rules("B10j","Selecciona una opción",'required');
	$this->form_validation->set_rules("B10k","Selecciona una opción",'required');
	$this->form_validation->set_rules("B10l","Selecciona una opción",'required');
	$this->form_validation->set_rules("B10m","Selecciona una opción",'required');
	$this->form_validation->set_rules("B10n","Selecciona una opción",'required');
}
if ($nro_slide >= 4){
	$this->form_validation->set_rules("B11","Selecciona una opción",'required');
	$this->form_validation->set_rules("B12","Selecciona una opción",'required');
	$this->form_validation->set_rules("B13","Selecciona una opción",'required');
	$this->form_validation->set_rules("B13_cual",'Cual','callback_cual['.'13'.']');
	$this->form_validation->set_rules("B14[]","Selecciona una o más opciones",'required');
	$this->form_validation->set_rules("B15[]","Selecciona una o más opciones",'required');
}
if ($nro_slide >= 5){
	$this->form_validation->set_rules("C16a","Marca Sí o No",'required');
	$this->form_validation->set_rules("C16b","Marca Sí o No",'required');
	$this->form_validation->set_rules("C16c","Marca Sí o No",'required');
	$this->form_validation->set_rules("C16d","Marca Sí o No",'required');
	$this->form_validation->set_rules("C16e","Marca Sí o No",'required');
	$this->form_validation->set_rules("C16f","Marca Sí o No",'required');
	$this->form_validation->set_rules("C16g","Marca Sí o No",'required'); 
	$this->form_validation->set_rules("C16h","Marca Sí o No",'required');
	$this->form_validation->set_rules("C16i","Marca Sí o No",'required');
	$this->form_validation->set_rules("C16j","Marca Sí o No",'required');
	$this->form_validation->set_rules("C16k","Marca Sí o No",'required');
	$this->form_validation->set_rules("C16l","Marca Sí o No",'required');
	$this->form_validation->set_rules("C16m","Marca Sí o No",'required');
	$this->form_validation->set_rules("C16n","Marca Sí o No",'required');
	$this->form_validation->set_rules("C16o","Marca Sí o No",'required');
	$this->form_validation->set_rules("C16p","Marca Sí o No",'required');
	$this->form_validation->set_rules("C17[]","Selecciona una o más opciones",'required');
	$this->form_validation->set_rules("C18[]","Selecciona una o más opciones",'required');
}
if ($nro_slide >= 6){
	$this->form_validation->set_rules("C19","Marca Sí o No",'required');
	$this->form_validation->set_rules("C20","Marca Sí o No",'callback_consumioC19');;
	$this->form_validation->set_rules("C21","Selecciona una opción",'callback_consume');
	$this->form_validation->set_rules("C22","Selecciona una opción",'callback_C21Fuma');
	$this->form_validation->set_rules("C23","",'callback_consume');
	//$this->form_validation->set_rules("C23_cual","Ingresa el texto",'callback_cual['.'C23'.']');
	$this->form_validation->set_rules("C24","",'callback_consume_ahol');
	//
	$this->form_validation->set_rules("C25","",'callback_consume');
    $this->form_validation->set_rules("C25a_cual","",'');
	$this->form_validation->set_rules("C26a","",'');
	$this->form_validation->set_rules("C25b_cual","",'');
	$this->form_validation->set_rules("C26b","",'');
	$this->form_validation->set_rules("C25c_cual","",'');
	$this->form_validation->set_rules("C26c","",'');
	$this->form_validation->set_rules("C25d_cual","",'');
	$this->form_validation->set_rules("C26d","",'');
	$this->form_validation->set_rules("C25e_cual","",'');
	$this->form_validation->set_rules("C26e","",'');
	$this->form_validation->set_rules("C25f_cual","",'');
	$this->form_validation->set_rules("C26f","",'');
	$this->form_validation->set_rules("C25g_cual","",'');
	$this->form_validation->set_rules("C26g","",'');
	$this->form_validation->set_rules("C25h_cual","",'');
	$this->form_validation->set_rules("C26h","",'');
	$this->form_validation->set_rules("C25i_cual","",'');
	$this->form_validation->set_rules("C26i","",'');
	$this->form_validation->set_rules("C25j_cual","",'');
	$this->form_validation->set_rules("C26j","",'');
	$this->form_validation->set_rules("C27[]","Selecciona una o más opciones",'callback_consumioC19');
 }

  if ($nro_slide >= 7){
	//se cambio este bloque antes era 3
	$this->form_validation->set_rules("A8","Marca Sí o No",'required');
	$this->form_validation->set_rules("A9","Ingresa la edad que tenias en tu primera relación afectiva",'is_natural_no_zero|max_length[2]|callback_edad_rel_afectiva');
	$this->form_validation->set_rules("A10","",'callback_total_r');
	$this->form_validation->set_rules("A11","Marca Sí o No",'callback_A8['.'Marca Sí o No'.']');
	#$this->form_validation->set_rules("A12[]","",'callback_A8['.'Selecciona una o más opciones'.']');
	$this->form_validation->set_rules("A12","",'callback_tiene_rel['.'Selecciona una opción.'.']');
	$this->form_validation->set_rules("A13","",'callback_edad_per');
	$this->form_validation->set_rules("A14","",'callback_tiene_rel['.'Selecciona una opción.'.']');
	$this->form_validation->set_rules("A14_cual","Ingresa el texto",'callback_cual['.'1'.']');
	$this->form_validation->set_rules("A15","",'callback_tiene_rel['.'Selecciona una opción.'.']');
}

if ($nro_slide >= 8){
	$this->form_validation->set_rules("D26[]","Selecciona una o más opciones",'required');
	$this->form_validation->set_rules("D27[]","Selecciona una o más opciones",'required');
		
}
if ($nro_slide >= 9){
	$this->form_validation->set_rules("D28","Marca Sí o No",'required');//D38
	$this->form_validation->set_rules("D32","Marca Sí o No",'required');
	$this->form_validation->set_rules("D41a","Marca Sí o No",'callback_ofrecidoD41');
	$this->form_validation->set_rules("D33","Marca Sí o No",'required');
	 $this->form_validation->set_rules("D34","Marca Sí o No",'required');//
	 $this->form_validation->set_rules("D31","Marca Sí o No",'required');
	$this->form_validation->set_rules("D35","Marca Sí o No",'callback_siD31');//vaolidar es 40a(D35) depende de D40(D31)
	$this->form_validation->set_rules("D36","Marca Sí o No",'required');
	$this->form_validation->set_rules("D46a","Marca Sí o No",'required');
	$this->form_validation->set_rules("D46b","Marca Sí o No",'required');
	$this->form_validation->set_rules("D46c","Marca Sí o No",'required');
	$this->form_validation->set_rules("D46d","Marca Sí o No",'required');
	$this->form_validation->set_rules("D46e","Marca Sí o No",'required');
	$this->form_validation->set_rules("D38","Marca Sí o No",'callback_valida_D38');//D46
	$this->form_validation->set_rules("D39aux","Marca Sí o No",'required');
	$this->form_validation->set_rules("D39[]","",'callback_D39');
	$this->form_validation->set_rules("D39g_cual","Ingresa a quien le comentaste.",'callback_cual['.'D39'.']');
}
if ($nro_slide >= 10){
	$this->form_validation->set_rules("D40","Marca Sí o No",'required');
}
if ($nro_slide >= 11){//eran del 13
	$this->form_validation->set_rules('D49',"Marca Sí o No",'callback_tubo_relacion['.'Marca Sí o No'.']');//D50
	$this->form_validation->set_rules('D50',"Marca Sí o No",'callback_relacion['.'1'.']');
	$this->form_validation->set_rules('D50_51',"Marca Sí o No",'callback_relacion['.'51'.']');
	$this->form_validation->set_rules('D51',"Marca Sí o No",'callback_tubo_relacion['.'Marca Sí o No'.']');
	$this->form_validation->set_rules('D52',"Marca Sí o No",'callback_relacion['.'2'.']');
	$this->form_validation->set_rules('D53',"Marca Sí o No",'callback_relacion['.'3'.']');
	$this->form_validation->set_rules('D54[]',"",'callback_D54');
	$this->form_validation->set_rules('D54g_cual',"Selecciona",'callback_cual['.'D54'.']');

}
if ($nro_slide >= 12){//eran del 11 
	$this->form_validation->set_rules("D41","Edad de tu primera relación sexual",'numeric|callback_edad_relacion');
	$this->form_validation->set_rules("D42I","Selecciona una opción",'callback_tubo_relacion['.'Selecciona una opción.'.']');
	$this->form_validation->set_rules("D55II","Selecciona una opción",'callback_P55II');
	$this->form_validation->set_rules("D42III","Selecciona una opción",'callback_tubo_relacion['.'Selecciona una opción.'.']');
	$this->form_validation->set_rules("D43","Selecciona una opción",'callback_tubo_relacion['.'Selecciona una opción.'.']');
	$this->form_validation->set_rules("D43_cual","Ingresa el otro motivo.",'callback_cual['.'D43'.']');
//
}
if ($nro_slide >= 13){//eran del 12
	
	
	$this->form_validation->set_rules("D44","Marca Sí o No",'callback_tubo_relacion');//57
	  $this->form_validation->set_rules("D60","Marca Sí o No",'callback_embarazo');//D58
		$this->form_validation->set_rules("D61","cuántos(as) hijos(as) tienes",'max_length[1]|is_natural_no_zero|callback_total_h');//59
		$this->form_validation->set_rules("D62","Selecciona una o más opciones.",'callback_hijos['.'Selecciona una opción.'.']');//60
		$this->form_validation->set_rules("D63[]","Selecciona una o más opciones.",'callback_hijos['.'Selecciona una o más opciones.'.']');//60

	$this->form_validation->set_rules("D45","Marca Sí o No",'callback_hijos['.'Selecciona una opción'.']');//D62
	$this->form_validation->set_rules("D46","Marca Sí o No",'callback_tubo_relacion['.'Selecciona una opción'.']');//D63
	$this->form_validation->set_rules("D47","Marca Sí o No",'callback_tubo_relacion['.'Selecciona una opción'.']');//D64
	$this->form_validation->set_rules("D48[]","Selecciona una o más opciones",'callback_conD47');//D65
}
if ($nro_slide >= 14){
	$this->form_validation->set_rules('E55',"Marca Sí o No",'required');
	$this->form_validation->set_rules('E56[]',"Selecciona una o más opciones",'callback_navega['.'Selecciona una o más opciones.'.']');
	$this->form_validation->set_rules('E57',"",'callback_navega['.'Selecciona una opción'.']');
}
if ($nro_slide == 15){
	$this->form_validation->set_rules('E58[]',"Selecciona una o más opciones",'callback_navega['.'Selecciona una o más opciones.'.']');
	$this->form_validation->set_rules('E59',"Marca Sí o No",'callback_navega['.'Marca Sí o No.'.']');
	$this->form_validation->set_rules('E60',"Marca Sí o No",'callback_E59');
	$this->form_validation->set_rules('E61',"Marca Sí o No",'callback_E59');
	$this->form_validation->set_rules('E62',"Marca Sí o No",'callback_E59');
	$this->form_validation->set_rules('E63[]',"Selecciona una o más opciones",'callback_navega['.'Selecciona una o más opciones'.']');
	$this->form_validation->set_rules('E64[]',"Selecciona una o más opciones",'callback_navega['.'Selecciona una o más opciones'.']');
}

  $validacion =$this->form_validation->run();

 $form_data = array(
			'A1' => (int)set_value('A1'),
			'A2' => (int)set_value('A2'),
		    'A3' => set_value('A3'),
		    'A5' => set_value('A5'),
			'A6a' => set_value('A6a'),
		    'A6b' => set_value('A6b'),
		    'A6c' => set_value('A6c'),
		    'A6d' => set_value('A6d'),
		    'A6e' => set_value('A6e'),
		    'A7a' => set_value('A7a'),
		    'A7b' => set_value('A7b'),
		    'A7c' => set_value('A7c'),
		    'A7d' => set_value('A7d'),
		    'A7e' => set_value('A7e'),
		    'A7f' => set_value('A7f'),
		    'A7g' => set_value('A7g'),
		    'A7h' => set_value('A7h'),
		    'A7i' => set_value('A7i'),
		    'A7j' => set_value('A7j'),
		    'A8' => set_value('A8'),
		    'A9' => set_value('A9'),
		    'A10' => set_value('A10'),
		    'A11' => set_value('A11'), 
		    'A12' => set_value('A12'), 
		    'A13' => set_value('A13'), 
		    'A14' => set_value('A14'), 
		    'A14_cual' => set_value('A14_cual'),
		    'A15' => set_value('A15'), 
		    'B10a' => set_value('B10a'),
		    'B10b' => set_value('B10b'),
		    'B10c' => set_value('B10c'),
		    'B10d' => set_value('B10d'),
		    'B10e' => set_value('B10e'),
		    'B10f' => set_value('B10f'),
		    'B10g' => set_value('B10g'),
		    'B10h' => set_value('B10h'),
		    'B10i' => set_value('B10i'),
		    'B10j' => set_value('B10j'),
		    'B10k' => set_value('B10k'),
		    'B10l' => set_value('B10l'),
		    'B10m' => set_value('B10m'),
		    'B10n' => set_value('B10n'),
		    'B11' => set_value('B11'),
		    'B12' => set_value('B12'),
		    'B13' => set_value('B13'),
		    'B13_cual' => set_value('B13_cual'),
		    'C16a' => set_value('C16a'),
			'C16b' => set_value('C16b'),
			'C16c' => set_value('C16c'),
			'C16d' => set_value('C16d'),
			'C16e' => set_value('C16e'),
			'C16f' => set_value('C16f'),
			'C16g' => set_value('C16g'),
			'C16h' => set_value('C16h'),
			'C16i' => set_value('C16i'),
			'C16j' => set_value('C16j'),
			'C16k' => set_value('C16k'),
			'C16l' => set_value('C16l'),
			'C16m' => set_value('C16m'),
			'C16n' => set_value('C16n'),
			'C16o' => set_value('C16o'),
			'C16p' => set_value('C16p'),
			'C19' => set_value('C19'),//C19
			'C20' => set_value('C20'),//Nueva
			'C21' => set_value('C21'),//Nueva
			'C22' => set_value('C22'),//nueva
			'C23' => set_value('C23'),//nueva
			//'C23_cual' => set_value('C23_cual'),
			'C24' => set_value('C24'),
			'C25' => set_value('C25'),//nueva
			
			///////////Ciclo de mas sustancias consumidad
			'C25a_cual' => set_value('C25a_cual'),//nueva
			'C26a' => set_value('C26a'),
			'C25b_cual' => set_value('C25b_cual'),//nueva
			'C26b' => set_value('C26b'),
			'C25c_cual' => set_value('C25c_cual'),//nueva
			'C26c' => set_value('C26c'),
			'C25d_cual' => set_value('C25d_cual'),//nueva
			'C26d' => set_value('C26d'),
			'C25e_cual' => set_value('C25e_cual'),//nueva
			'C26e' => set_value('C26e'),
			'C25f_cual' => set_value('C25f_cual'),//nueva
			'C26f' => set_value('C26f'),
			'C25g_cual' => set_value('C25g_cual'),//nueva
			'C26g' => set_value('C26g'),
			'C25h_cual' => set_value('C25h_cual'),//nueva
			'C26h' => set_value('C26h'),
			'C25i_cual' => set_value('C25i_cual'),//nueva
			'C26i' => set_value('C26i'),
			'C25j_cual' => set_value('C25j_cual'),//nueva
			'C26j' => set_value('C26j'),
			/////////////////////
			'D28' => set_value('D28'),
			'D31' => set_value('D31'),
			'D32' => set_value('D32'),//Es D41
			'D41a' => set_value('D41a'),//
			'D33' => set_value('D33'),
			'D34' => set_value('D34'),
			'D35' => set_value('D35'),
			'D36' => set_value('D36'),
			'D46a' => set_value('D46a'),
			'D46b' => set_value('D46b'),
			'D46c' => set_value('D46c'),
			'D46d' => set_value('D46d'),
			'D46e' => set_value('D46e'),
			'D38' => set_value('D38'),
			'D39' => set_value('D39aux'),
			'D39g_cual' => set_value('D39g_cual'),
			'D40'	=> set_value('D40'),
			'D41'	=> set_value('D41'),
			'D42I'	=> set_value('D42I'),
			'D55II'	=> set_value('D55II'),
			'D42III' => set_value('D42III'),
			'D43' => set_value('D43'),
			'D43_cual' => set_value('D43_cual'),
			'D44' => set_value('D44'),
			'D45' => set_value('D45'),
			'D46' => set_value('D46'),
			'D47' => set_value('D47'),
			'D49' => set_value('D49'),
			'D50' => set_value('D50'),
			'D50_51' => set_value('D50_51'),
			'D51' => set_value('D51'),
			'D52' => set_value('D52'),
			'D53' => set_value('D53'),
			'D54g_cual' => set_value('D54g_cual'),
			'D60' => set_value('D60'),
			'D61' => set_value('D61'),
			'D62' => set_value('D62'),
			'E55' => set_value('E55'),
			'E57' => set_value('E57'),
			'E59' => set_value('E59'),
			'E60' => set_value('E60'),
			'E61' => set_value('E61'),
			'E62' => set_value('E62')
			);
	$letra= array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','v','w');

		  for($i=0; $i<12;$i++) //limpia valores
	         {
	         	$form_data['A4'.$letra[$i]]=0;
			 }

		  if (is_array($this->input->post('A4'))){
	     	 foreach ($this->input->post('A4[]') as $key => $val) {
	       	 	$form_data['A4'.$letra[$val-1]]=1;
	         	 }
		  }
		   
			//B8[]
		if ($nro_slide >= 3){
			for($i=0; $i<14;$i++) //limpia valores
		         {
		         	$form_data['B8'.$letra[$i]]=0;
				 }
			   if (is_array($this->input->post('B8'))){
			    foreach ($this->input->post('B8[]') as $key => $val) {
			       	 	$form_data['B8'.$letra[$val-1]]=1;
			       	 } 
			    }
					//B9[]
				for($i=0; $i<11;$i++) //limpia valores
			         {
			         	$form_data['B9'.$letra[$i]]=0;
					 }
				if (is_array($this->input->post('B9'))){			
				    foreach ($this->input->post('B9[]') as $key => $val) {
				       	 $form_data['B9'.$letra[$val-1]]=1;
				       	 } 
			    }
			  
			   if ($form_data['A11']==2) 
			    	  $form_data['B10e']=9;
			    
			   
		 }	
			//B14[]
		if ($nro_slide >= 4){
			for($i=0; $i<6;$i++) //limpia valores
		         {
		         	$form_data['B14'.$letra[$i]]=0;
				 }
			if (is_array($this->input->post('B14'))){
		    	foreach ($this->input->post('B14[]') as $key => $val) {
		       	 	$form_data['B14'.$letra[$val-1]]=1;
		       	 } 
		      }
				//B15[]
			for($i=0; $i<20;$i++) //limpia valores
		         {
		         	$form_data['B15'.$letra[$i]]=0;
				 }
				if (is_array($this->input->post('B15'))){
		    		foreach ($this->input->post('B15[]') as $key => $val) {
		       	 	$form_data['B15'.$letra[$val-1]]=1;
		       	 } 
		      }
		 }
		if ($nro_slide >= 5){//C17[]
				for($i=0; $i<9;$i++) //limpia valores
			         {
			         	$form_data['C17'.$letra[$i]]=0;
					 }
				if (is_array($this->input->post('C17'))){
			    	foreach ($this->input->post('C17[]') as $key => $val) {
			       	 	$form_data['C17'.$letra[$val-1]]=1;
			       	 } 
			      }
					//C18[]
				for($i=0; $i<18;$i++) //limpia valores
			         {
			         	$form_data['C18'.$letra[$i]]=0;
					 }
				if (is_array($this->input->post('C18'))){
					    foreach ($this->input->post('C18[]') as $key => $val) {
					       	 	$form_data['C18'.$letra[$val-1]]=1;
					       	 }
			      }
		}

		if ($nro_slide >= 6){
				//echo $nro_slide;
				for($i=0; $i<6;$i++) //limpia valores
			         {
			         	$form_data['C27'.$letra[$i]]=0;
					 }
				if (is_array($this->input->post('C27'))){
			    	foreach ($this->input->post('C27[]') as $key => $val) {
			       	 	$form_data['C27'.$letra[$val-1]]=1;
			       	 } 
			      }
			     // var_dump($form_data);
			}
		if ($nro_slide >= 8){
			//D26[]
				for($i=0; $i<18;$i++) //limpia valores
			         {
			         	$form_data['D26'.$letra[$i]]=0;
					 }
				if (is_array($this->input->post('D26'))){
			    	foreach ($this->input->post('D26[]') as $key => $val) {
			       	 	$form_data['D26'.$letra[$val-1]]=1;
			       	 } 
			      }
					//D27[]
				for($i=0; $i<18;$i++) //limpia valores
			         {
			         	$form_data['D27'.$letra[$i]]=0;
					 }
				if (is_array($this->input->post('D27'))){
			    	foreach ($this->input->post('D27[]') as $key => $val) {
			       	 	$form_data['D27'.$letra[$val-1]]=1;
			       	 } 
			      }
		}
		if ($nro_slide >= 9 ){
			for($i=0; $i<7;$i++) //limpia valores
		         {
		         	$form_data['D39'.$letra[$i]]=0;
				 }
				 if (is_array($this->input->post('D39'))){
				    foreach ($this->input->post('D39[]') as $key => $val) {
				       	 	$form_data['D39'.$letra[$val-1]]=1;
				       	 }
		      }
		}

		if ($nro_slide >= 10){
			for($i=0; $i<7;$i++) //limpia valores
		         {
		         	$form_data['D54'.$letra[$i]]=0;
				 }
			  if (is_array($this->input->post('D54'))){
			    foreach ($this->input->post('D54[]') as $key => $val) {
			       	 	$form_data['D54'.$letra[$val-1]]=1;
			       	 }
		      }
		     if ($form_data['D49']==2 and $form_data['D51']==2){
		     	 $form_data['D53']=0;
		     	 }
		//  }	       	  
		//if ($nro_slide >= 13){

				for($i=0; $i<11;$i++) //limpia valores
			         {
			         	$form_data['D48'.$letra[$i]]=0;
					 }
				if(is_array($this->input->post('D48'))){
				    foreach ($this->input->post('D48[]') as $key => $val) {
			       	 	$form_data['D48'.$letra[$val-1]]=1;
			       	 }
			     } 

				for($i=0; $i<4;$i++) //limpia valores
			         {
			         	$form_data['D63'.$letra[$i]]=0;
					 }
				if(is_array($this->input->post('D63'))){
				    foreach ($this->input->post('D63[]') as $key => $val) {
			       	 	$form_data['D63'.$letra[$val-1]]=1;
			       	 }
			     } 
		}	  
	
		if ($nro_slide >= 14 ){
			for($i=0; $i<6;$i++) //limpia valores
		         {
		         	$form_data['E56'.$letra[$i]]=0;
				 }
			if (is_array($this->input->post('E56'))){
			    foreach ($this->input->post('E56[]') as $key => $val) {
			       	 	$form_data['E56'.$letra[$val-1]]=1;
			       	 }
				      }
		}
		if ($nro_slide == 15)
		{	       
		 for($i=0; $i<8;$i++) //limpia valores
		     {
		    	$form_data['E58'.$letra[$i]]=0;
			}
			if (is_array($this->input->post('E58'))){
	   			 foreach ($this->input->post('E58[]') as $key => $val) {
	       	 		$form_data['E58'.$letra[$val-1]]=1;
	       	 		} 
		  }
		for($i=0; $i<5;$i++) //limpia valores
		         {
		         	$form_data['E63'.$letra[$i]]=0;
				 }
			if (is_array($this->input->post('E63'))){
				 foreach ($this->input->post('E63[]') as $key => $val) {
				    $form_data['E63'.$letra[$val-1]]=1;
		       	 } 
		      }
				
		for($i=0; $i<5;$i++) //limpia valores
	         {
	         	$form_data['E64'.$letra[$i]]=0;
			 }
		if (is_array($this->input->post('E64'))){
	       foreach ($this->input->post('E64[]') as $key => $val) {
	       	 	$form_data['E64'.$letra[$val-1]]=1;
	       	 } 
		 }
	}//Fin slide 15



  
if ($validacion == FALSE) // validation hasn't been passed
{   $mensaje ='';
	if ($nro_slide  == 1){
		if(set_value('A1') !='' || set_value('A2') !='' || set_value('A3') !='' || set_value('A5') !='' || is_array($this->input->post('A4'))){
			$form_data['ESTADO_ENCUESTA']=3;
			//echo is_array($this->input->post('A4'));
		}
	}
	else $mensaje ='Respuestas incompletas.';

	if (isset($_POST['id_e'])){
		$form_data['SLIDE_NRO']=$nro_slide;
	   $result = $this->m_ecas->actualizar_encuesta($form_data,$id_encuesta);
	  }
	
	
	/*----------------------------------*/
	
	switch ($result) {
	  	 	case 1:
	  	 		$data_encuesta = $this->m_ecas->get_encuesta($id_encuesta);
	  	 		if (is_array($data_encuesta)){
					$data_encuesta = $data_encuesta[0];
					foreach ($data_encuesta as &$value) {
						if ($value == '0' || $value == null)
							$value=null;//$value=' ';
						else if ($value == '1') 
								$value = 'checked';
						}
				}
	  	 		$mensaje .= "Tus respuestas se han guardado";
	  	 		break;
	  	 	case '2':
	  	 		$mensaje .= "";
	  	 		break;
	  	 	default:
	  	 		$mensaje .= "La encuesta ".$id_encuesta." no se encuentra registrada.";
	  	 		break;
	  }
	  /*---------------------------*/
	$control = array(
	'data_e' => $data_encuesta,
	'ID_ENCUESTA' => $id_encuesta,
	'mensaje' => $mensaje,
	'seguir' => $nro_slide,
	'estado_e' => $estado_e
	);
   $this->load->view('v_encuesta_val',$control);

}
else // passed validation proceed to post success logic
{
 $form_data['ESTADO_ENCUESTA']=3;

if ($this->input->post('E55')==2){
//pendiente por limpiar los valores en caso que se retome y cambien la respuesta a 2
 	$form_data['ESTADO_ENCUESTA']=1;
}

if ($nro_slide==15)
		{
			$form_data['ESTADO_ENCUESTA']=1;
		}
	/*var_dump($form_data)*/
	//echo json_encode($id_encuesta);
	 $form_data['SLIDE_NRO']=$nro_slide;
	 $result = $this->m_ecas->actualizar_encuesta($form_data,$id_encuesta);
	  	 switch ($result) {
	  	 	case '1':
	  	 		$data_encuesta = $this->m_ecas->get_encuesta($id_encuesta);
	  	 		if (is_array($data_encuesta)){
					$data_encuesta = $data_encuesta[0];
					foreach ($data_encuesta as &$value) {
						if ($value == '0' || $value == null)
							$value=null;//$value=' ';
						else if ($value == '1') 
								$value = 'checked';
						}
				}
	  	 		$mensaje = "Tus respuestas se han guardado";
	  	 		break;
	  	 	case '2':
	  	 		$mensaje = "Vamos Sigue respondiendo.";
	  	 		break;
	  	 	default:
	  	 		$mensaje = "La encuesta ".$id_encuesta." no se encuentra registrada.";
	  	 		break;
	  }
	  $control = array(
		'data_e' => $data_encuesta,
		'seguir' => ($nro_slide+1),
		'ID_ENCUESTA' =>  $id_encuesta,
		'mensaje' => $mensaje,
		'estado_e' => $estado_e
		);
	  if ($nro_slide==15 || ($nro_slide==14 && $this->input->post('E55')==2) )
		{
		$mensaje = "<div class='pagination-centered'>Tu Encuesta ha finalizado correctamente, ¡Gracias por tu participación!";
		$mensaje .= "<center><img src='".base_url('images/danecitos.jpg')."' class='img-responsive'></center>";
		
		$mensaje .= "<p><a  href='http://pacman.platzh1rsch.ch' class='btn'>Jugar</a></p></div>";
		$control['mensaje'] = $mensaje;
		$control['estado_e'] =1;
		}
	$this->load->view('v_encuesta_val',$control);
}
	
}


/**Fin de INDEX*/
function ofrecidoD41($op){//D32 es la D40
	if($this->input->post('D32') == 1 and $op == null){
			$this->form_validation->set_message('ofrecidoD41','Marca Sí o No.');
			return false;
		}
		else
			return true;
}

function P55II($op){
	if (($op == null || $op < 6 ) and  $this->input->post('D40') == 1){
			$this->form_validation->set_message('P55II', "Ingresa nuevamente la edad de esa persona.");
			return false;
		}
		else
			return true;
}
function total_h($op){
		if($this->input->post('D60') == 1 and $op == null){
			$this->form_validation->set_message('total_h','Ingresa el número de hijos(as) que tienes.');
			return false;
		}
		else
			return true;
	}

function conD47($opcion){

	if ($opcion == null and  $this->input->post('D47') == 1){
			$this->form_validation->set_message('conD47', 'Selecciona una o más opciones.');
		return false;
		}
		else 
			return true;
}

function embarazo($opcion){
	if ($opcion == null and  $this->input->post('D44') == 1){
			$this->form_validation->set_message('embarazo', 'Marca Sí o No.');
		return false;
		}
		else 
			return true;
}

function hijos($opcion, $ms){
	if ($opcion == null and  $this->input->post('D60') == 1){
			$this->form_validation->set_message('hijos', $ms);
		return false;
		}
		else 
			return true;
}
/*
function pareja($valor){
	
	if($this->input->post('A11')==1 and $valor == null){
		$this->form_validation->set_message('pareja','Selecciona una opción');
		return false;
	}
	else return true;
}
*/

function siD31($opcion){
	if ($opcion == null and  $this->input->post('D31') == 1){
			$this->form_validation->set_message('siD31', 'Marca Sí o No.');
		return false;
		}
		else 
			return true;
}

function valida_D38($opcion){
	if (($this->input->post('D39aux')==1 or
		$this->input->post('D31')==1 or
		$this->input->post('D32')==1 or
		$this->input->post('D33')==1 or
		$this->input->post('D26')==1 or
		$this->input->post('D35')==1 or
		$this->input->post('D36')==1 or
		$this->input->post('D46a')==1 or
		$this->input->post('D46b')==1 or
		$this->input->post('D46c')==1 or
		$this->input->post('D46d')==1 or
		$this->input->post('D46e')==1)
		and $opcion == null)
		{
			$this->form_validation->set_message('valida_D38', 'Marca Sí o No.');
			return false;

		}else
			return true;
}

function C21Fuma($opcion){
	if ($opcion == null and  $this->input->post('C21') == 1){
			$this->form_validation->set_message('C21Fuma', 'Selecciona una opcion.');
		return false;
		}
		else 
			return true;
}

function consume_ahol($opcion){
		if ($opcion == null and  $this->input->post('C23') == 1){
			$this->form_validation->set_message('consume_ahol', 'Selecciona una opcion.');
		return false;
		}
		else 
			return true;
}
function consume($opcion){
		if ($opcion == null and  $this->input->post('C20') == 1){
			$this->form_validation->set_message('consume', 'Marca Sí o No.');
		return false;
		}
		else 
			return true;
}
function consumioC19($opcion){
		if ($opcion == null and  $this->input->post('C19') == 1){
			$this->form_validation->set_message('consumioC19', 'Marca Sí o No.');
		return false;
		}
		else 
			return true;
}
function D39($opcion){
		if ($opcion == null and  $this->input->post('D38') == 1){
			$this->form_validation->set_message('D39', 'Selecciona una o más opciones');
		return false;
		}
		else 
			return true;
}

function D54($opcion){//(D49-D52)=1
		if ($opcion == null and $this->input->post('D53')==1 ){
			$this->form_validation->set_message('D54', 'Selecciona una o más opciones');
			return false;
		}
		else 
			return true;
}

function relacion($opcion, $caso){

	switch ($caso) {
		case 1:
				if($this->input->post('D49') == 1 and $opcion==null){///* || $this->input->post('D50_51') == 1 */
					$this->form_validation->set_message('relacion', 'Marca Sí o No');
			return false;
			}
			else 
				return true;
		break;
		case '51':
			if($this->input->post('D40') == 1  and $opcion==null){
					$this->form_validation->set_message('relacion', 'Marca Sí o No');
			return false;
			}
			else 
				return true;
		break;
		case 2:
			 if($this->input->post('D51') == 1 and $opcion==null){
					$this->form_validation->set_message('relacion', 'Marca Sí o No');
			return false;
			}
			else 
				return true;
		break;
		case 3:
			 if(($this->input->post('D51') == 1 || $this->input->post('D49') == 1) and $opcion==null){
					$this->form_validation->set_message('relacion', 'Marca Sí o No');
			return false;
			}
			else 
				return true;
		break;
	}
}
function E59($opcion){

		if(is_array($opcion) and count($opcion)==0){
			$this->form_validation->set_message('E59','Ingresa el texto.');
			return false;
		}
		if ($opcion == null and $this->input->post('E59') == 1){
				$this->form_validation->set_message('E59', 'Marca Si o No.');
			return false;
		}
		else 
			return true;
	}

	function navega($opcion,$texto_err){

		if(is_array($opcion) and count($opcion)==0){
			$this->form_validation->set_message('cual','Ingresa el texto.');
			return false;
		}
		if ($opcion == null and $this->input->post('E55') == 1){
				$this->form_validation->set_message('navega', $texto_err);
			return false;
		}
		else 
			return true;
	}

/*function cual_A8($texto){
	$cual=0;
	$select =$this->input->post('A8[]');
	for($i=0; $i< count($select) ; $i++) {

		if($select[$i]==6)
			$cual=1;
	}
	if($cual==1 and $texto == null){
		$this->form_validation->set_message('cual_A8','Ingresa el texto.');
		return false;
	}
	else if ($cual!=1)
		return TRUE;
}*/

	function cual($texto,$opcion){
		$cual=0;
		switch ($opcion) {
			case 1: 
				if(($this->input->post('A11')==1 and $this->input->post('A14')==6) and $texto == null){
					$this->form_validation->set_message('cual','Ingresa el texto.');
					return false;
				}
				else return true;
				break;
			case 13://de un radio
				
				if($this->input->post('B13')==9 and $texto == null){
					$this->form_validation->set_message('cual','Ingresa el texto.');
					return false;
				}

				break;
			/*case 'C25'://de un radio
			if($this->input->post('C25k')!= null and $texto == null){
				if ($this->input->post('C25k')!=7){
					$this->form_validation->set_message('cual','Ingresa el texto.');
					return false;
				}
			}
			break;*/

			case 'C23'://de un si no cosumo alcohol
			if($this->input->post('C23')== 1 and $texto == null){
					$this->form_validation->set_message('cual','Ingresa el texto.');
					return false;
				}
			break;

			case 'D39'://de un checkbox
			$select =$this->input->post('D39[]');
				for($i=0; $i< count($select) ; $i++) {
			
					if($select[$i]==7)
						$cual=1;
				}
				if($cual==1 and $texto == null){
					$this->form_validation->set_message('cual','Ingresa el texto.');
					return false;
				}
				break;
			case 'D43'://de un radio
			if($this->input->post('D43')==10 and $texto == null){
				$this->form_validation->set_message('cual','Ingresa el texto.');
				return false;
			}
			break;
			
			case 'D54'://de un checkbox
			$select =$this->input->post('D54[]');
				for($i=0; $i< count($select) ; $i++) {
			
					if($select[$i]==7)
						$cual=1;
				}
				if($cual==1 and $texto == null){
					$this->form_validation->set_message('cual','Ingresa el texto.');
					return false;
				}
				break;
		}
		return true;
	}
	/*function aa5($a5){
		$solo=0;
		$valA4 =$this->input->post('A4[]'); 
		for($i=0; $i< count($valA4) ; $i++) {
			
			if($valA4[$i]==12)
				$solo=1;
		}

		if($solo==1 and $a5!= 1){

			$this->form_validation->set_message('aa5','Marque que duerme solo'.json_encode($a5));
			return false;
		
		}else if ($a5 == null){
			$this->form_validation->set_message('aa5','Marque una opción.'.json_encode($a5));
			return false;
		}
		return true;
	}*/
	function total_r($op){
		if($this->input->post('A8') == 1 and $op == null || $op < 1 || $op > 9){
			$this->form_validation->set_message('total_r','Ingresa el número de relaciones afectivas.');
			return false;
		}
		else
			return true;
	}

	function A8($opcion,$ms_err){
		if($this->input->post('A8') == 1 and $opcion == null){
			$this->form_validation->set_message('A8',$ms_err);
			return false;
		}
		else
			return true;
	}
	//Valida que la edad este entre 8 -25 ahora 12 a 18
	function edad_per($edad)
	{
		if(($edad>=6 and $edad <= 99 )|| $this->input->post('A11') == 2 || $this->input->post('A8') == 2  )
			return true;
		else{
			$this->form_validation->set_message('edad_per', 'Ingresa nuevamente la edad de la persona con quien tienes una relación afectiva.');
			return false;
		}
	}

	function edad($edad)
	{
		if($edad>=12 and $edad <= 25)
			return true;
		else{
			$this->form_validation->set_message('edad', 'Ingresa nuevamente tu edad.');
			return false;
		}
	}
	function tiene_rel($opcion,$ms_err){
		if ($opcion == null and  $this->input->post('A11') == 1){
			$this->form_validation->set_message('tiene_rel', $ms_err);
			return false;
		}
		else 
			return true;
	}
	function tubo_relacion($opcion,$ms_err){
		if ($opcion == null and  $this->input->post('D40') == 1){
			$this->form_validation->set_message('tubo_relacion', $ms_err);
			return false;
		}
		else 
			return true;
	}
	/*function D49recibio($opcion){
		if ($opcion == null and  $this->input->post('D40') == 1){
			$this->form_validation->set_message('D49recibio', "Marca Sí o No");
			return false;
		}
		if ($opcion == '1' and $this->input->post('D32')==2)
		{
			$this->form_validation->set_message('D49recibio', "Nos informaste que NO te han ofrecido algo a cambio de tener relaciones sexuales");
			return false;
		}
		else 
			return true;

	}*/

	function D44rel_sex($opcion){
		if ($opcion == null and  $this->input->post('D40') == 1){
			$this->form_validation->set_message('D44rel_sex', "Marca Sí o No");
			return false;
		}
		else 
			return true;
		/*if ($opcion == '2' and $this->input->post('A8')==1)
		{
			$this->form_validation->set_message('D44rel_sex', "Por favor revisa tu respuesta, nos informaste tener hijos");
			return false;
		}*/
		

	}
	function D41($edad_rel){

		if($edad_rel==null and $this->input->post('D40')==1)
		{
			$this->form_validation->set_message('D41', 'Ingresa la edad de tu primera relación sexual.');
		}
		else
			return true;
	}

	function edad_rel_afectiva($edad_rel_a){
	
		if($edad_rel_a=='' and $this->input->post('A8')==1)
		{
			$this->form_validation->set_message('edad_rel_afectiva', 'Ingresa la edad de tu primera relación afectiva.');
			return false;
		}		
		else if ($edad_rel_a > $this->input->post('A2')){
			$this->form_validation->set_message('edad_rel_afectiva', 'La edad de tu primera relación afectiva no puede ser mayor a tu edad.');
			return false;
		}else if ($edad_rel_a < 6 and $this->input->post('A8')==1){
			$this->form_validation->set_message('edad_rel_afectiva', 'Ingresa la edad de tu primera relación afectiva.');
			return false;
		}else

			return true;

	}

	function edad_relacion($edad_rel){
	
		if($edad_rel=='' and $this->input->post('D40')==1)
		{
			$this->form_validation->set_message('edad_relacion', 'Ingresa la edad de tu primera relación sexual.');
			return false;
		}		
		else if ($edad_rel > $this->input->post('A2')){
			$this->form_validation->set_message('edad_relacion', 'La edad de tu primera relación sexual NO puede ser mayor a tu edad.');
			return false;
		}else
			return true;

	

		//echo $this->input->post('A2');
	}
/**************************************/

function cerrar_e(){
	//$this->form_validation->set_rules("clave","Ingresa la clave",'required');
	//$this->form_validation->set_rules("Motivo","Ingresa el Motivo",'required');
	//if($this->form_validation->run()==FALSE)
	$session_data = $this->session->userdata('ingreso');
    $usuario = $session_data['usuario'];
	$clave = $this->input->post('clave');
	$id_e = $this->input->post('id_e');
	$motivo = $this->input->post('motivo');


	$info_encuesta = $this->session->userdata('info_enc');
	if (is_string($clave)){
		$result = $this->m_ecas->get_user($usuario,$clave);
		if (is_array($result)){
			if (is_numeric($id_e)){
				$info = array('ESTADO_ENCUESTA' => 2,
							  'OBSERVACIONES' => $motivo);
				$result = $this->m_ecas->m_cerrar_e($id_e, $info);
				if ($result == 1){
					$grado = "";
					$curso = "";
					$colegio = "";
					$result=$this->m_ecas->get_lote($info_encuesta["LOTE_ENC"]);
					if(is_object($result)){
						$grado = $result->GRADO;
						$curso = $result->CURSO;
						$colegio = $result->SEDE_NOMBRE;
					}
					$mensaje ="Se ha cerrado la Encuesta Número: <b>".$info_encuesta["nro_encuesta"]."<br> Lote: ".
					$info_encuesta["LOTE_ENC"].
					"<br> Grado: ".$grado.
					"<br> Curso: ".$curso."</b> 
					<br> Institución Educativa: <b>".$colegio."</b>
					</b> <br> Estado: <b>INCOMPLETA</b> 
					 <p><b>Motivo:</b> ".$motivo."</p><p><a href ='".base_url()."' class='btn btn-raised btn-success arrow-r'>Aceptar</a></p>";
				}else
					$mensaje = "Fallo cierre de encuesta intenta reabrirla y volver a cerrarla.";

			}else
				$mensaje = "Número de encuesta inválido";
		}
		else
			$mensaje = "0";
   }
   print_r(json_encode($mensaje));
}

 function get_gradosUser()//funcion llamada por ajax
	{   
		$id_col = $_POST['id_colegio'];
		$data['colegios'] = $this->m_ecas->get_col_asignado();//get_colegio();
        $sede_cod='';
       foreach ($data['colegios'] as $key => $value) {
         if ($value->Cod_colegio_op == $id_col){
             $sede_cod =$value->SEDE_CODIGO;
             break 1;
           }
         }
         //print_r(json_encode($data));
		$grados = $this->m_ecas->mget_gradoUser($sede_cod,$_POST['usuario']);

		//$grados = $this->m_ecas->mget_grado($id_col);
		//echo json_encode($grados);
		//$result["rows"] = $items;
 		$this->output->set_content_type('application/json', 'utf-8')->set_output(json_encode($grados));
		 //print_r(json_encode($_POST));

	}

 function get_grados()//funcion llamada por ajax
	{   
		$id_col = $_POST['id_colegio'];
		$grados = $this->m_ecas->mget_grado($id_col);
		//echo json_encode($grados);
		 print_r(json_encode($grados));

	}
function infolt(){// Obtiene el resumen del lote
    if(!$this->input->is_ajax_request())
       {
       show_404();
       }
    else{
        $id_lote = (integer)$_POST['id_lote'];
        if (!is_integer($id_lote))
            print_r("El lote es inválido".gettype($id_lote));
        else{
            $info_lt = $this->m_ecas->get_infolt($id_lote);
            print_r(json_encode($info_lt));
            }
    }
    

    //echo '{"firstname":"Jesper","surname":"Aaberg","phone":["555-0100","555-0120"]}';
}

 function pre_encuesta(){
  	
  	 	$lote = $_POST["id_lote"];
  	 
	 if($lote==''){
            //$this->load->view('v_menult',$data);
            //$lotes = $this->m_ecas->get_lotes($data['usuario'],0);
            //$data['lotes']=$lotes;
            $data['mensaje']="Selecciona un lote";
            $data['encuestar'] = 0;
            print_r(json_encode($data));
            //$this->load->view('view_creaEnc',$data);
         }else{
         	  $grado = "";
			  $curso = "";
			  $colegio = "";
         	  $encuesta = $this->m_ecas->m_total_enc($lote);
              $encuesta=$encuesta[0];
              $encuesta=$encuesta->total_e+1;
              
		    $result=$this->m_ecas->get_lote($lote);
			if(is_object($result)){
				$grado = $result->GRADO;
				$curso = $result->CURSO;
				$colegio = $result->SEDE_NOMBRE;
				$sede_cod = $result->SEDE_CODIGO; 
			}
						
            $data['mensaje']="Confirme los datos de la encuesta: <br><h4>Colegio: ".$colegio."<br>
            CÓDIGO SEDE : ".$sede_cod."<br>
            Grado : ".$grado."<br>
            Curso : ".$curso."<br>
            Encuesta Nro: ".$encuesta." </h4>";
          	$data['encuestar'] = 1;
          	$data['nro_encuesta'] =  $encuesta;

            print_r(json_encode($data));
		 }

  } 

   function crea_encuesta(){
       $session_data = $this->session->userdata('ingreso');
       $data['usuario'] = $session_data['usuario'];
       $data['rol'] = $session_data['rol'];
       $data_l[] = array();
       $encuesta=0;
       $mensaje ="";
       $this->form_validation->set_rules('id_lote', 'Número de Lote', 'trim|required');
       $this->form_validation->set_rules('nro_encuesta', 'Número de Encuesta', 'trim|required|min_length[1]|max_length[2]|is_natural_no_zero');
      //$lote=$_POST['id_lote'];
      //if($lote==''){
      if($this->form_validation->run()==FALSE){
      		$this->load->view("encabezado",$data);
            $this->load->view('v_menult',$data);
            $lotes = $this->m_ecas->get_lotes($data['usuario'],0);
            $data['lotes']=$lotes;
            $data['mensaje']="Selecciona un lote";
            $data['encuestar'] = 0;
            $data['nro_e'] = set_value('nro_encuesta');
            $data['id_lote'] = set_value('id_lote');
            //print_r(json_encode($data));
            $this->load->view('view_creaEnc',$data);
         }
         else {

              /*$encuesta = $this->m_ecas->m_total_enc($lote);
              $encuesta=$encuesta[0];
              $encuesta=$encuesta->total_e+1;*/
              $lote = set_value('id_lote');
              $encuesta = set_value('nro_encuesta');
              $encuesta = array(
               'ID_ENCUESTA' => $lote.$encuesta,
               'LOTE_ENC' => $lote,
               'NRO_ENCUESTA' => $encuesta,
               'ESTADO_ENCUESTA' => 0
               );
             
              $result = $this->m_ecas->crear_encuesta($encuesta);
             switch ($result) {
                case 1:
                	$grado = "";
					$curso = "";
					$colegio = "";
					$result=$this->m_ecas->get_lote($lote);
					if(is_object($result)){
						$grado = $result->GRADO;
						$curso = $result->CURSO;
						$colegio = $result->SEDE_NOMBRE;
						$sede_cod = $result->SEDE_CODIGO; 
					}
                   $data['id_encuesta'] = $encuesta['ID_ENCUESTA'];
                   $data['mensaje']="<h4>Se creó la encuesta <b>".$encuesta['NRO_ENCUESTA']."</b> en el Lote <b>".$encuesta['LOTE_ENC']."</b>. Grado: ".$grado .". Curso: <b>".$curso ."</b> Colegio: <b>".$colegio."</b> (".$sede_cod.") </h4>";
                   $data['encuestar'] = 1;
                   $data['ingreso'] = 1;
                   /*ob_start(); # open buffer
	     		   include(base_url('application/views/v_recomenda.php');
				   $data['v_recomenda'] = echo ob_get_contents();
				   ob_end_clean(); # close buffer*/
				   //var_dump($data['v_recomenda']);
                   $this->load->view("encabezado",$data);
                   //print_r(json_encode($data));

                   $this->load->view("v_recomenda", $data);
                  /* echo "<br><div class='pagination-centered'><a href=<?php echo base_url('index.php/c_ecas?id_e=".$encuesta['NRO_ENCUESTA']."');?> class='btn btn-raised btn-danger' style='position:auto; 0px;' >Iniciar</a></div>";
                   */
                   //$this->load->view('v_menult',$data);
                   break;
                case 2:
                   $data['mensaje']="Error al crear la encuesta";
                   $data['encuestar'] = 0;
                   print_r(json_encode($data));

                   //$this->load->view('v_menult',$data);
                   break;
                case 3:
                   $data['mensaje']="La encuesta ".$encuesta['NRO_ENCUESTA']." Ya existe Seleccione retomar o crear encuesta.";
                   $data['encuestar'] = 0;
                   print_r(json_encode($data));
                   //$data['encuestar'] = 1;
                   //$this->load->view('v_menult',$data);
                   break;
                 case 4:
                   $data['mensaje']="El lote ".$encuesta['LOTE_ENC']." Ya está cerrado";
                   $data['encuestar'] = 0;
                   print_r(json_encode($data));
                   //$this->load->view('v_menult',$data);
                   break;
                 case 5:
                   $data['mensaje']="El número de la encuesta excede la cantidad de encuestas para el lote.Encuestas creadas ".($encuesta['NRO_ENCUESTA']-1);
                   $data['encuestar'] = 0;
                   print_r(json_encode($data));
                   //$this->load->view('v_menult',$data);
                   break;
                  //
                default :
                   $data['mensaje']="Lote ".$encuesta['LOTE_ENC']." no exixte";
                   $data['encuestar'] = 0;
                   print_r(json_encode($data));
                   //$this->load->view('v_menult',$data);
                   break;
             }
         }
  }

}


?>