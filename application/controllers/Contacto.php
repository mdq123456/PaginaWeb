<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

    function __construct(){
		parent:: __construct();
    }


	public function index()
	{
        $data['contenido'] = "Contacto/index";
		$this->load->view('plantilla', $data);
	}

}
