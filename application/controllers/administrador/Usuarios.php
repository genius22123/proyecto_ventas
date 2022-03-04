<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	public function __construct(){
        parent::__construct();

        $this->load->model("Usuarios_model");

    }

    public function index()
	{

		$data=array(
			'usuarios'=>$this->Usuarios_model->getUsuarios(),

		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/usuarios/list',$data);
		$this->load->view('layouts/footer');
	}

	public function add()
	{	
		$data=array(
			'roles'=>$this->Usuarios_model->getRoles(),

		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/usuarios/add',$data);
		$this->load->view('layouts/footer');
	}
		public function guardar()
	{	
	
        $nombres=$this->input->post('nombres');
        $apellidos=$this->input->post('apellidos');
		$telefono=$this->input->post('telefono');
        $email=$this->input->post('email');
		$username=$this->input->post('username');
        $password=$this->input->post('password');
		$rol=$this->input->post('rol');
     


		$this->form_validation->set_rules("nombres","Nombre","required");
		$this->form_validation->set_rules("apellidos","Apellidos","required");
		$this->form_validation->set_rules("telefono","Telefono","required");
		$this->form_validation->set_rules("email","Email","required|valid_email|is_unique[usuarios.email]");
		$this->form_validation->set_rules("username","Usuario","required|is_unique[usuarios.username]");
		$this->form_validation->set_rules("password","Contraseña","required");
	
		if($this->form_validation->run()){
			$data=array(
         
				'nombres'=>$nombres,
				'apellidos'=>$apellidos,
				'telefono'=>$telefono,
				'email'=>$email,
				'username'=>$username,
				'password'=>$password,
				'rol_id'=>$rol,
				'estado'=>"1"
				
			);
	
			$this->db->insert('usuarios',$data);
	
			header("location:".base_url()."administrador/usuarios");
	
		}else{
			$this->add();
	
		
		}
	}
	public function edit($id){
	
		$data=array(
        

			'roles'=>$this->Usuarios_model->getRoles(),
			'usuario'=>$this->Usuarios_model->getUsuario($id),
    
        );
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
        $this->load->view("admin/usuarios/edit",$data);
        $this->load->view('layouts/footer');

	}

	public function edit_save(){
		$idusuario=$this->input->post("idusuario");
		$nombres=$this->input->post('nombres');
        $apellidos=$this->input->post('apellidos');
		$telefono=$this->input->post('telefono');
        $email=$this->input->post('email');
		$username=$this->input->post('username');
        $password=$this->input->post('password');
		$rol=$this->input->post('rol');


	
		$this->form_validation->set_rules("nombres","Nombre","required");
		$this->form_validation->set_rules("apellidos","Apellidos","required");
		$this->form_validation->set_rules("telefono","Telefono","required");
		$this->form_validation->set_rules("email","Email","required");
		$this->form_validation->set_rules("username","Usuario","required");
		$this->form_validation->set_rules("password","Contraseña","required");
		

		
		if($this->form_validation->run()){

		
			$data=array(
         
           
				'nombres'=>$nombres,
				'apellidos'=>$apellidos,
				'telefono'=>$telefono,
				'email'=>$email,
				'username'=>$username,
				'password'=>$password,
				'rol_id'=>$rol,
			
			 
			);
	
			$this->db->update("usuarios",$data,array('id'=>$idusuario));
			header("location:".base_url()."administrador/usuarios");
    
	} 
	else{
		$this->edit($idusuario);
	}
}
public function delete($id){
		
   
        
	$data = array(
		   'estado'=>"0"
	   ); 
	   $this->db->update("usuarios",$data,array('id'=>$id));
   
	   header("location:".base_url()."administrador/usuarios");
	   

   }


}