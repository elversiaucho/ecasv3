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
	if (isset($_POST["estado_e"]))
		$estado_e = $_POST["estado_e"];
	if (isset($_POST["seguir"]))
		$nro_slide= $_POST["seguir"];

	if (isset($_GET["id_e"])){
		$id_encuesta = $_GET["id_e"];
		
	//echo $nro_slide;
	
	}else
		{$id_encuesta = $_POST['id_e'];
		//echo "deste formulario".$id_encuesta.gettype($id_encuesta);
		}
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
	//if ($nro_slide==1)
	
	//$data_encuesta=json_encode($data_encuesta);
	//var_dump($this->input->post('B13[]'));
	//echo $id_encuesta;
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
	$this->form_validation->set_rules("A8[]","Selecciona una o más opciones",'required');
	$this->form_validation->set_rules("A8f_cual","Ingresa el texto",'callback_cual['.'1'.']');//callback_cual_A8
	$this->form_validation->set_rules("A9","Marca Sí o No",'required');
	$this->form_validation->set_rules("A10","cuántos(as) hijos(as) tienes",'max_length[1]|is_natural_no_zero|callback_total_h');
	$this->form_validation->set_rules("A11","",'callback_A9['.'Selecciona una opción'.']');
	$this->form_validation->set_rules("A12[]","",'callback_A9['.'Selecciona una o más opciones'.']');
}
if ($nro_slide >= 4){
	$this->form_validation->set_rules("B13[]","Selecciona una o más opciones",'required');
	$this->form_validation->set_rules("B14[]","Selecciona una o más opciones",'required');
	$this->form_validation->set_rules("B15a","Selecciona una opción",'required');
	$this->form_validation->set_rules("B15b","Selecciona una opción",'required');
	$this->form_validation->set_rules("B15c","Selecciona una opción",'required');
	$this->form_validation->set_rules("B15d","Selecciona una opción",'required');
	$this->form_validation->set_rules("B15e","Selecciona una opción",'callback_pareja');
	$this->form_validation->set_rules("B15f","Selecciona una opción",'required');
	$this->form_validation->set_rules("B15g","Selecciona una opción",'required');
	$this->form_validation->set_rules("B15h","Selecciona una opción",'required');
	$this->form_validation->set_rules("B15i","Selecciona una opción",'required');
	$this->form_validation->set_rules("B15j","Selecciona una opción",'callback_hijos');
	$this->form_validation->set_rules("B15k","Selecciona una opción",'required');
	$this->form_validation->set_rules("B15l","Selecciona una opción",'required');
	$this->form_validation->set_rules("B15m","Selecciona una opción",'required');
	$this->form_validation->set_rules("B15n","Selecciona una opción",'required');
}
if ($nro_slide >= 5){
	$this->form_validation->set_rules("B16","Selecciona una opción",'required');
	$this->form_validation->set_rules("B17","Selecciona una opción",'required');
	$this->form_validation->set_rules("B18","Selecciona una opción",'required');
	$this->form_validation->set_rules("B18_cual",'Cual','callback_cual['.'18'.']');
	$this->form_validation->set_rules("B19[]","Selecciona una o más opciones",'required');
	$this->form_validation->set_rules("B20[]","Selecciona una o más opciones",'required');
}
if ($nro_slide >= 6){
	$this->form_validation->set_rules("C21a","Marca Sí o No",'required');
	$this->form_validation->set_rules("C21b","Marca Sí o No",'required');
	$this->form_validation->set_rules("C21c","Marca Sí o No",'required');
	$this->form_validation->set_rules("C21d","Marca Sí o No",'required');
	$this->form_validation->set_rules("C21e","Marca Sí o No",'required');
	$this->form_validation->set_rules("C21f","Marca Sí o No",'required');
	$this->form_validation->set_rules("C21g","Marca Sí o No",'required'); 
	$this->form_validation->set_rules("C21h","Marca Sí o No",'required');
	$this->form_validation->set_rules("C21i","Marca Sí o No",'required');
	$this->form_validation->set_rules("C21j","Marca Sí o No",'required');
	$this->form_validation->set_rules("C21k","Marca Sí o No",'required');
	$this->form_validation->set_rules("C21l","Marca Sí o No",'required');
	$this->form_validation->set_rules("C21m","Marca Sí o No",'required');
	$this->form_validation->set_rules("C21n","Marca Sí o No",'required');
	$this->form_validation->set_rules("C21o","Marca Sí o No",'required');
	$this->form_validation->set_rules("C21p","Marca Sí o No",'required');
	$this->form_validation->set_rules("C22[]","Selecciona una o más opciones",'required');
	$this->form_validation->set_rules("C23[]","Selecciona una o más opciones",'required');
}
if ($nro_slide >= 7){
	$this->form_validation->set_rules("C24","Marca Sí o No",'callback_C24');
	$this->form_validation->set_rules("C25a","Selecciona una opción",'callback_C25');
	$this->form_validation->set_rules("C25b","Selecciona una opción",'callback_C25');
	$this->form_validation->set_rules("C25c","Selecciona una opción",'callback_C25');	
	$this->form_validation->set_rules("C25d","Selecciona una opción",'callback_C25');
	$this->form_validation->set_rules("C25e","Selecciona una opción",'callback_C25');
	$this->form_validation->set_rules("C25f","Selecciona una opción",'callback_C25');
	$this->form_validation->set_rules("C25g","Selecciona una opción",'callback_C25');
	$this->form_validation->set_rules("C25h","Selecciona una opción",'callback_C25');
	$this->form_validation->set_rules("C25i","Selecciona una opción",'callback_C25');
	$this->form_validation->set_rules("C25j","Selecciona una opción",'callback_C25');
	$this->form_validation->set_rules("C25k","Selecciona una opción",'callback_C25');
	$this->form_validation->set_rules("C25k_cual","Digita la otra sustancia",'callback_cual['.'C25'.']');//
}
if ($nro_slide >= 8){
	$this->form_validation->set_rules("D26[]","Selecciona una o más opciones",'required');
	$this->form_validation->set_rules("D27[]","Selecciona una o más opciones",'required');
	$this->form_validation->set_rules("D28a","Marca Sí o No",'required');
	$this->form_validation->set_rules("D28b","Marca Sí o No",'required');
}
if ($nro_slide >= 9){
	$this->form_validation->set_rules("D29","Marca Sí o No",'required');
	$this->form_validation->set_rules("D30","Marca Sí o No",'required');
	$this->form_validation->set_rules("D31","Marca Sí o No",'required');
	$this->form_validation->set_rules("D32","Marca Sí o No",'required');
	$this->form_validation->set_rules("D33","Marca Sí o No",'required');
	$this->form_validation->set_rules("D34","Marca Sí o No",'required');
	$this->form_validation->set_rules("D35","Marca Sí o No",'required');
	$this->form_validation->set_rules("D36","Marca Sí o No",'required');
	$this->form_validation->set_rules("D37a","Marca Sí o No",'required');
	$this->form_validation->set_rules("D37b","Marca Sí o No",'required');
	$this->form_validation->set_rules("D37c","Marca Sí o No",'required');
	$this->form_validation->set_rules("D37d","Marca Sí o No",'required');
	$this->form_validation->set_rules("D37e","Marca Sí o No",'required');
	$this->form_validation->set_rules("D38","Marca Sí o No",'callback_valida_D38');
	$this->form_validation->set_rules("D39[]","",'callback_D39');
	$this->form_validation->set_rules("D39g_cual","Ingresa a quien le comentaste.",'callback_cual['.'D39'.']');
}
if ($nro_slide >= 10){
	$this->form_validation->set_rules("D40","Marca Sí o No",'required');
	$this->form_validation->set_rules("D41","Edad de tu primera relación sexual",'numeric|callback_edad_relacion');
	$this->form_validation->set_rules("D42I","Selecciona una opción",'callback_tubo_relacion['.'Selecciona una opción'.']');
	$this->form_validation->set_rules("D42II","Selecciona una opción",'callback_tubo_relacion['.'Selecciona una opción'.']');
	$this->form_validation->set_rules("D42III","Selecciona una opción",'callback_tubo_relacion['.'Selecciona una opción'.']');
	$this->form_validation->set_rules("D43","Selecciona una opción",'callback_tubo_relacion['.'Selecciona una opción'.']');
	$this->form_validation->set_rules("D43_cual","Ingresa el otro motivo.",'callback_cual['.'D43'.']');
}
if ($nro_slide >= 11){
	$this->form_validation->set_rules("D44","Marca Sí o No",'callback_D44hijos');
	$this->form_validation->set_rules("D45","Marca Sí o No",'callback_tubo_relacion['.'Marca Sí o No'.']');
	$this->form_validation->set_rules("D46","Marca Sí o No",'callback_tubo_relacion['.'Marca Sí o No'.']');
	$this->form_validation->set_rules("D47","Marca Sí o No",'callback_tubo_relacion['.'Selecciona una opción'.']');
	$this->form_validation->set_rules("D48[]","Selecciona una o más opciones",'callback_conD47');
}
if ($nro_slide >= 12){
	$this->form_validation->set_rules('D49',"Marca Sí o No",'callback_D49recibio');
	$this->form_validation->set_rules('D50',"Marca Sí o No",'callback_relacion['.'1'.']');
	$this->form_validation->set_rules('D51',"Marca Sí o No",'callback_tubo_relacion['.'Marca Sí o No'.']');
	$this->form_validation->set_rules('D52',"Marca Sí o No",'callback_relacion['.'2'.']');
	$this->form_validation->set_rules('D53',"Marca Sí o No",'callback_relacion['.'3'.']');
	$this->form_validation->set_rules('D54[]',"",'callback_D54');
	$this->form_validation->set_rules('D54g_cual',"Selecciona",'callback_cual['.'D54'.']');
}
if ($nro_slide >= 13){
	$this->form_validation->set_rules('E55',"Marca Sí o No",'required');
	$this->form_validation->set_rules('E56[]',"Selecciona una o más opciones",'callback_navega['.'Selecciona una o más opciones'.']');
	$this->form_validation->set_rules('E57',"",'callback_navega['.'Selecciona una opción'.']');
}
if ($nro_slide == 14){
	$this->form_validation->set_rules('E58[]',"Selecciona una o más opciones",'callback_navega['.'Selecciona una o más opciones'.']');
	$this->form_validation->set_rules('E59',"Marca Sí o No",'callback_navega['.'Marca Sí o No'.']');
	$this->form_validation->set_rules('E60',"Marca Sí o No",'callback_E59');
	$this->form_validation->set_rules('E61',"Marca Sí o No",'callback_E59');
	$this->form_validation->set_rules('E62',"Marca Sí o No",'callback_E59');
	$this->form_validation->set_rules('E63[]',"Selecciona una o más opciones",'callback_navega['.'Selecciona una o más opciones'.']');
	$this->form_validation->set_rules('E64[]',"Selecciona una o más opciones",'callback_navega['.'Selecciona una o más opciones'.']');
}

  $validacion =$this->form_validation->run();

 $form_data = array(
			'A1' => set_value('A1'),
			'A2' => set_value('A2'),
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
		    'A8f_cual' => set_value('A8f_cual'),
		    'A9' => set_value('A9'),
		    'A10' => set_value('A10'),
		    'A11' => set_value('A11') ,  
		    'B15a' => set_value('B15a'),
		    'B15b' => set_value('B15b'),
		    'B15c' => set_value('B15c'),
		    'B15d' => set_value('B15d'),
		    'B15e' => set_value('B15e'),
		    'B15f' => set_value('B15f'),
		    'B15g' => set_value('B15g'),
		    'B15h' => set_value('B15h'),
		    'B15i' => set_value('B15i'),
		    'B15j' => set_value('B15j'),
		    'B15k' => set_value('B15k'),
		    'B15l' => set_value('B15l'),
		    'B15m' => set_value('B15m'),
		    'B15n' => set_value('B15n'),
		    'B16' => set_value('B16'),
		    'B17' => set_value('B17'),
		    'B18' => set_value('B18'),
		    'B18_cual' => set_value('B18_cual'),
		    'C21a' => set_value('C21a'),
			'C21b' => set_value('C21b'),
			'C21c' => set_value('C21c'),
			'C21d' => set_value('C21d'),
			'C21e' => set_value('C21e'),
			'C21f' => set_value('C21f'),
			'C21g' => set_value('C21g'),
			'C21h' => set_value('C21h'),
			'C21i' => set_value('C21i'),
			'C21j' => set_value('C21j'),
			'C21k' => set_value('C21k'),
			'C21l' => set_value('C21l'),
			'C21m' => set_value('C21m'),
			'C21n' => set_value('C21n'),
			'C21o' => set_value('C21o'),
			'C21p' => set_value('C21p'),
			'C24' => set_value('C24'),
			'C25a' => set_value('C25a'),
			'C25b' => set_value('C25b'),
			'C25c' => set_value('C25c'),
			'C25d' => set_value('C25d'),
			'C25e' => set_value('C25e'),
			'C25f' => set_value('C25f'),
			'C25g' => set_value('C25g'),
			'C25h' => set_value('C25h'),
			'C25i' => set_value('C25i'),
			'C25j' => set_value('C25j'),
			'C25k' => set_value('C25k'),
			'C25k_cual' => set_value('C25k_cual'),
			'D28a' => set_value('D28a'),
			'D28b' => set_value('D28b'),
			'D29' => set_value('D29'),
			'D30' => set_value('D30'),
			'D31' => set_value('D31'),
			'D32' => set_value('D32'),
			'D33' => set_value('D33'),
			'D34' => set_value('D34'),
			'D35' => set_value('D35'),
			'D36' => set_value('D36'),
			'D37a' => set_value('D37a'),
			'D37b' => set_value('D37b'),
			'D37c' => set_value('D37c'),
			'D37d' => set_value('D37d'),
			'D37e' => set_value('D37e'),
			'D38' => set_value('D38'),
			'D39g_cual' => set_value('D39g_cual'),
			'D40'	=> set_value('D40'),
			'D41'	=> set_value('D41'),
			'D42I'	=> set_value('D42I'),
			'D42II'	=> set_value('D42II'),
			'D42III' => set_value('D42III'),
			'D43' => set_value('D43'),
			'D43_cual' => set_value('D43_cual'),
			'D44' => set_value('D44'),
			'D45' => set_value('D45'),
			'D46' => set_value('D46'),
			'D47' => set_value('D47'),
			'D49' => set_value('D49'),
			'D50' => set_value('D50'),
			'D51' => set_value('D51'),
			'D52' => set_value('D52'),
			'D53' => set_value('D53'),
			'D54g_cual' => set_value('D54g_cual'),
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
		   if ($nro_slide >= 3){
				for($i=0; $i<7;$i++) //limpia valores
	        	 {
	         		$form_data['A8'.$letra[$i]]=0;
				 }
			  if (is_array($this->input->post('A8'))){
			    foreach ($this->input->post('A8[]') as $key => $val) {
	       	 		$form_data['A8'.$letra[$val-1]]=1;
	       	 	}
	       	}
			//A12[]

	       	 for($i=0; $i<4;$i++) //limpia valores
		         {
		         $form_data['A12'.$letra[$i]]=0;
				 }
				
			if (is_array($this->input->post('A12'))){
			    foreach ($this->input->post('A12[]') as $key => $val) {
			       	 $form_data['A12'.$letra[$val-1]]=1;
			       	 } 
			  }
			
		}

			//B13[]
		//if ($nro_slide >= 4){
			for($i=0; $i<14;$i++) //limpia valores
		         {
		         	$form_data['B13'.$letra[$i]]=0;
				 }
			   if (is_array($this->input->post('B13'))){
			    foreach ($this->input->post('B13[]') as $key => $val) {
			       	 	$form_data['B13'.$letra[$val-1]]=1;
			       	 } 
			    }
					//B14[]
				for($i=0; $i<11;$i++) //limpia valores
			         {
			         	$form_data['B14'.$letra[$i]]=0;
					 }
				if (is_array($this->input->post('B14'))){			
				    foreach ($this->input->post('B14[]') as $key => $val) {
				       	 $form_data['B14'.$letra[$val-1]]=1;
				       	 } 
			    }
		 //}	
			//B19[]
		if ($nro_slide >= 5){
			for($i=0; $i<6;$i++) //limpia valores
		         {
		         	$form_data['B19'.$letra[$i]]=0;
				 }
			if (is_array($this->input->post('B19'))){
		    	foreach ($this->input->post('B19[]') as $key => $val) {
		       	 	$form_data['B19'.$letra[$val-1]]=1;
		       	 } 
		      }
				//B20[]
			for($i=0; $i<20;$i++) //limpia valores
		         {
		         	$form_data['B20'.$letra[$i]]=0;
				 }
				if (is_array($this->input->post('B20'))){
		    		foreach ($this->input->post('B20[]') as $key => $val) {
		       	 	$form_data['B20'.$letra[$val-1]]=1;
		       	 } 
		      }
		 }
		if ($nro_slide >= 6){//C22[]
				for($i=0; $i<9;$i++) //limpia valores
			         {
			         	$form_data['C22'.$letra[$i]]=0;
					 }
				if (is_array($this->input->post('C22'))){
			    	foreach ($this->input->post('C22[]') as $key => $val) {
			       	 	$form_data['C22'.$letra[$val-1]]=1;
			       	 } 
			      }
					//C23[]
				for($i=0; $i<18;$i++) //limpia valores
			         {
			         	$form_data['C23'.$letra[$i]]=0;
					 }
				if (is_array($this->input->post('C23'))){
					    foreach ($this->input->post('C23[]') as $key => $val) {
					       	 	$form_data['C23'.$letra[$val-1]]=1;
					       	 }
			      }
		}
		if ($nro_slide >= 8){
			//D26[]
				for($i=0; $i<19;$i++) //limpia valores
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
		if ($nro_slide >= 11){

				for($i=0; $i<11;$i++) //limpia valores
			         {
			         	$form_data['D48'.$letra[$i]]=0;
					 }
				if(is_array($this->input->post('D48'))){
				    foreach ($this->input->post('D48[]') as $key => $val) {
			       	 	$form_data['D48'.$letra[$val-1]]=1;
			       	 }
			     } 
		}	  
		if ($nro_slide >= 12){
				for($i=0; $i<7;$i++) //limpia valores
			         {
			         	$form_data['D54'.$letra[$i]]=0;
					 }
				  if (is_array($this->input->post('D54'))){
				    foreach ($this->input->post('D54[]') as $key => $val) {
				       	 	$form_data['D54'.$letra[$val-1]]=1;
				       	 }
			      }
		}
		if ($nro_slide >= 13 ){
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
		if ($nro_slide == 14)
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
	}//Fin slide 14

  
if ($validacion == FALSE) // validation hasn't been passed
{
	if (isset($_POST['id_e']))
	   $result = $this->m_ecas->actualizar_encuesta($form_data,$id_encuesta);
	if ($nro_slide  > 1){
		$mensaje ='Respuestas incompletas.';
		//$result = $this->m_ecas->actualizar_encuesta($form_data,$id_encuesta);
	}
	else $mensaje ='';

	
	/*----------------------------------*/
	
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
	  	 		$mensaje .= "Tus respuestas se han Guardado";
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
	//$this->load->view('view_login');
}
else // passed validation proceed to post success logic
{
	if ($nro_slide==14)
		{
			$form_data['ESTADO_ENCUESTA']=1;
		}
	/*var_dump($form_data)*/
	//echo json_encode($id_encuesta);
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
	  	 		$mensaje = "Tus respuestas se han Guardado";
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
	
	if ($nro_slide==14){
		$mensaje = "<img src='".base_url('images/danecitos.jpg')."'>";
		$mensaje .= '<br>Muy bien. Tu Encuesta ha finalizado correctamente<br>Gracias por tu colaboración.';
		$mensaje .= "<p><a  href='http://pacman.platzh1rsch.ch' class='btn'>Jugar</a></p>";
		$control['mensaje'] = $mensaje;
		$contro['estado_e'] =1;
	}
	$this->load->view('v_encuesta_val',$control);
}
	
}

/**Fin de INDEX*/
function conD47($opcion){

	if ($opcion == null and  $this->input->post('D47') == 1){
			$this->form_validation->set_message('conD47', 'Selecciona una o más opciones.');
		return false;
		}
		else 
			return true;
}

function hijos($opcion){
	if ($opcion == null and  $this->input->post('A9') == 1){
			$this->form_validation->set_message('hijos', 'Selecciona una opción');
		return false;
		}
		else 
			return true;
}

function pareja($valor){
	$pareja=0; 	
	$select =$this->input->post('A8[]');
	for($i=0; $i< count($select) ; $i++) {

		if($select[$i]!=7)
			$pareja=1;
	}
	if($pareja==1 and $valor == null){
		$this->form_validation->set_message('pareja','Selecciona una opción');
		return false;
	}
	else return true;
}

function C24($opcion){

if ($opcion == 1){
	if (    $this->input->post('C25a')==7 
		and $this->input->post('C25b')==7 
		and $this->input->post('C25c')==7 
		and $this->input->post('C25d')==7 
		and $this->input->post('C25e')==7 
		and $this->input->post('C25f')==7 
		and $this->input->post('C25g')==7 
		and $this->input->post('C25h')==7 
		and $this->input->post('C25i')==7 
		and $this->input->post('C25j')==7 
		and $this->input->post('C25k')==7)
		{
		 $this->form_validation->set_message('C24', 'Nos indicaste haber consumido alguna sustancia psicoactiva, por favor revisa la respuesta a la pregunta 24.');
		    return false;
		}
		else 
			return true;
}
else if ($opcion == null){
	$this->form_validation->set_message('C24', 'Marca Sí o Nó.');
	return false;
 }
 else return true;
}

function valida_D38($opcion){
	if (($this->input->post('D30')==1 or
		$this->input->post('D31')==1 or
		$this->input->post('D32')==1 or
		$this->input->post('D33')==1 or
		$this->input->post('D34')==1 or
		$this->input->post('D35')==1 or
		$this->input->post('D36')==1 or
		$this->input->post('D37a')==1 or
		$this->input->post('D37b')==1 or
		$this->input->post('D37c')==1 or
		$this->input->post('D37d')==1 or
		$this->input->post('D37e')==1)
		and $opcion == null)
		{
			$this->form_validation->set_message('valida_D38', 'Marca Sí o No.');
			return false;

		}else
			return true;
}

function C25($opcion){
		if ($opcion == null and  $this->input->post('C24') == 1){
			$this->form_validation->set_message('C25', 'Selecciona una opcion.');
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
				if($this->input->post('D49') == 1 and $opcion==null){
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
			case 1:// un checkbox
				$select =$this->input->post('A8[]');
				for($i=0; $i< count($select) ; $i++) {
			
					if($select[$i]==6)
						$cual=1;
				}
				if($cual==1 and $texto == null){
					$this->form_validation->set_message('cual','Ingresa el texto.');
					return false;
				}
				else return true;
				break;
			case 18://de un radio
				
				if($this->input->post('B18')==9 and $texto == null){
					$this->form_validation->set_message('cual','Ingresa el texto.');
					return false;
				}

				break;
			case 'C25'://de un radio
			if($this->input->post('C25k')!= null and $texto == null){
				if ($this->input->post('C25k')!=7){
					$this->form_validation->set_message('cual','Ingresa el texto.');
					return false;
				}
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
	function total_h($op){
		if($this->input->post('A9') == 1 and $op == null){
			$this->form_validation->set_message('total_h','Ingresa el número de hijos(as) que tienes.');
			return false;
		}
		else
			return true;
	}

	function A9($opcion,$ms_err){
		if($this->input->post('A9') == 1 and $opcion == null){
			$this->form_validation->set_message('A9',$ms_err);
			return false;
		}
		else
			return true;
	}
	//Valida que la edad este entre 8 -25
	function edad($edad)
	{
		if($edad>=8 and $edad <= 25)
			return true;
		else{
			$this->form_validation->set_message('edad', 'Ingresa nuevamente tu edad.');
			return false;
		}
	}
	function tubo_relacion($opcion,$ms_err){
		if ($opcion == null and  $this->input->post('D40') == 1){
			$this->form_validation->set_message('tubo_relacion', $ms_err);
			return false;
		}
		else 
			return true;


	}
	function D49recibio($opcion){
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

	}

	function D44hijos($opcion){
		if ($opcion == null and  $this->input->post('D40') == 1){
			$this->form_validation->set_message('D44hijos', "Marca Sí o No");
			return false;
		}
		if ($opcion == '2' and $this->input->post('A9')==1)
		{
			$this->form_validation->set_message('D44hijos', "Por favor revisa tu respuesta, nos informaste tener hijos");
			return false;
		}
		else 
			return true;

	}
	function D41($edad_rel){

		if($edad_rel==null and $this->input->post('D40')==1)
		{
			$this->form_validation->set_message('D41', 'Ingresa la edad de tu primera relación sexual.');
		}
		else
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
	$clave =$this->input->post('clave');
	$id_e= $this->input->post('id_e');
	$motivo = $this->input->post('motivo');
	if (is_string($clave)){
		$result = $this->m_ecas->get_user($usuario,$clave);
		if (is_array($result)){
			if (is_numeric($id_e)){
				$info = array('ESTADO_ENCUESTA' => 2,
							  'OBSERVACIONES' => $motivo);
				$result = $this->m_ecas->m_cerrar_e($id_e, $info);
				if ($result==1){
					$mensaje="Encuesta cerrada con Exito.";
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

 function get_grados()//funcion llamada por ajar
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
	
   function crea_encuesta(){
       $session_data = $this->session->userdata('ingreso');
       $data['usuario'] = $session_data['usuario'];
       $data['rol'] = $session_data['rol'];
       $data_l[] = array();
       $encuesta=0;
      $mensaje ="";
            //$this->form_validation->set_rules('nro_lote', 'Número de Lote', 'trim|required');
      //$this->form_validation->set_rules('nro_encuesta', 'Número de Encuesta', 'trim|required|min_length[1]|max_length[2]|is_natural_no_zero');
      $lote=$_POST['id_lote'];
      if($lote==''){
            //$this->load->view('v_menult',$data);
            //$lotes = $this->m_ecas->get_lotes($data['usuario'],0);
            //$data['lotes']=$lotes;
            $data['mensaje']="Selecciona un lote";
            $data['encuestar'] = 0;
            print_r(json_encode($data));
            //$this->load->view('view_creaEnc',$data);
         }
         else {

              $encuesta = $this->m_ecas->get_infolt($lote);
              $encuesta=$encuesta[0];
              $encuesta=$encuesta->total_e+1;
              $encuesta = array(
               'ID_ENCUESTA' => $lote.$encuesta,
               'LOTE_ENC' => $lote,
               'NRO_ENCUESTA' => $encuesta,
               'ESTADO_ENCUESTA' => 0
               );
             
              $result = $this->m_ecas->crear_encuesta($encuesta);
             switch ($result) {
                case 1:
                   $data['id_encuesta'] = $encuesta['ID_ENCUESTA'];
                   $data['mensaje']="Se creo la encuesta ".$encuesta['NRO_ENCUESTA']." para el Lote ".$encuesta['LOTE_ENC'];
                   $data['encuestar'] = 1;
                   //echo json_encode($data);
                   print_r(json_encode($data));
                   
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

	//La funcion en cuestion que utilizamos es esta:

?>