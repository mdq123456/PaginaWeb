<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelos extends CI_Controller {

    function __construct(){
		parent:: __construct();
    }


	public function index()
	{
        $data['contenido'] = "Modelos/index";
		$this->load->view('plantilla', $data);
	}

}
