<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("Productos_model");
        if(!$this->session->userdata("login")){
            header("location:".base_url());
        }
    }
    public function index(){
        $data=array(
			'productos'=>$this->Productos_model->getProductos(),

		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/reportes/productos',$data);
        $this->load->view('layouts/footer');
    }
}