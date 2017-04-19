<?php
//session_destroy();
class C_ecas_lg extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
	}	
	function index()
	{			
		$this->load->helper(array('form'));
		$this->load->view("encabezado");
		$this->load->view('view_elogin');
	}
	 
}

?>