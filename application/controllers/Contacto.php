<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

    function __construct(){
		parent:: __construct();
		$this->load->helper('form');
    }


	public function index()
	{
		$msj = $this->session->flashdata('my_data');
		$Nro = $this->session->flashdata('imagen');
		$data['contenido'] = "Contacto/index";
		$data['msj'] = $msj;
		$data['Nro'] = $Nro;
		$this->load->view('plantilla', $data);
	}

	public function formImagen($Nro = "")
	{
		$this->session->set_flashdata('imagen', $Nro);
		redirect('Contacto');
	}

	public function envio_post()
	{
		// Envio de mensaje
		$datos = $this->input->post();
		// $imagen = '<br><br>
		// <img src="'.base_url().'Bootstrap/images/Modelos/NEA('.$datos['Nro'].').jpg">';
		// print_r($imagen);
		// exit;

		if (trim($datos['nombre']) == "" ||
			trim($datos['tel']) == "" ||
			trim($datos['msj']) == "")
			{
				$msj = "Complete su nombre, Telefono y Mensaje para enviar una consulta.";
				$this->session->set_flashdata('my_data', $msj);
				redirect('Contacto');
			}

		//configuracion para gmail

		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_user' => $this->config->item('emailGmail'),
			'smtp_pass' => $this->config->item('passGmail'),
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		
		$alert = "";

		if (trim($datos['email']) == "")
		{
			$this->email->from($this->config->item('emailGmail'), $datos['nombre']);
			$alert = "<h1>Correo sin dato de EMAIL</h1><br>";
		}else
		{
			$this->email->from($datos['email'], $datos['nombre']);
		}

		$imagen = "";
		if (trim($datos['Nro'] != ""))
		{
			
			$imagen = '<br><br>
			<img src="'.base_url().'Bootstrap/images/Modelos/NEA('.$datos['Nro'].').jpg" style="width: 293px;
			 height: 168px;">';
			
		}
		
		$this->email->to($this->config->item('emailHost'));
		$this->email->subject('Consulta WEB CONSTRUCCIONES NEA');
		$this->email->message($alert."<h3>Nombre y Apellido:</h3> ".$datos['nombre']."<br>
							   <h3>Email de la consulta:</h3> ".$datos['email']."<br>
							   <h3>Telefono:</h3> ".$datos['tel']."<br>
							   <h3>Mensaje:</h3> ".$datos['msj'].$imagen);

		if($this->email->send())
		{
			$msj = "Mensaje enviado correctamente. A la brevedad nos comunicaremos con usted!";
			$this->session->set_flashdata('my_data', $msj);
			redirect('Contacto');
		}
		
		$msj = "Su mensaje no pudo enviarse, por favor comunique a nuestros telefonos que estan al pie de página.";
		$this->session->set_flashdata('my_data', $msj);
		redirect('Contacto');
		
		// fin de envio de mensaje

	}

}
