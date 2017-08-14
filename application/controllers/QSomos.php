<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QSomos extends CI_Controller {

    function __construct(){
		parent:: __construct();
    }


	public function index()
	{
        $data['contenido'] = "QSomos/index";
		$this->load->view('plantilla', $data);
	}

}
