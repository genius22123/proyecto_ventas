<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model("Usuarios_model");

    }
	public function index()
	{
        if($this->session->userdata("login")){

            header("location:".base_url()."dashboard");
        }else{
            $this->load->view('admin/login');
        }
		
	}
	public function login()
	{
		$username=$this->input->post("username");
		$password=$this->input->post("password");

        $res=$this->Usuarios_model->login($username,$password);

        if(!$res){

            $this->session->set_flashdata("error","Usuario y/o contraseña es invalido");
            return redirect(base_url());
        }else{
            $data=array(
                'id'=>$res->id,
             'nombre'=>$res->nombres, 
                'apellido'=>$res->apellidos, 
                'rol'=>$res->rol_id,
                'login'=>true
            );
            $this->session->set_userdata($data);
            header("location:".base_url()."dashboard");
        }
	}

    public function logout(){
        $this->session->sess_destroy();
        header("location:".base_url());

    }
}
