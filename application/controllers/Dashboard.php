<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct(){
	
        parent::__construct();
		$this->load->model("Estadisticas_model");
        if(!$this->session->userdata("login")){
            header("location:".base_url());
        }
    }
	
	public function index()
	{
		$data=array(
			'cantVentas'=>$this->Estadisticas_model->retDatos("ventas"),
			'cantUsuarios'=>$this->Estadisticas_model->retDatos("usuarios"),
			'cantClientes'=>$this->Estadisticas_model->retDatos("clientes"),
			'cantProductos'=>$this->Estadisticas_model->retDatos("productos"),

		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('layouts/footer');
	}

}
