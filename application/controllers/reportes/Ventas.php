<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("Ventas_model");
        if(!$this->session->userdata("login")){
            header("location:".base_url());
        }
    }
    public function index(){
        $data=array(
			'ventas'=>$this->Ventas_model->getVentas(),

		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/reportes/ventas',$data);
        $this->load->view('layouts/footer');
    }
}