<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tecnicas extends CI_Controller {

    function __construct(){
		parent:: __construct();
    }


	public function index()
	{
        $data['contenido'] = "Tecnicas/index";
		$this->load->view('plantilla', $data);
	}

}
