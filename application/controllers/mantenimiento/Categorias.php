<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {
	public function __construct(){
        parent::__construct();

        $this->load->model("Categorias_model");
		if(!$this->session->userdata("login")){
            header("location:".base_url());
        }

    }

	public function index()
	{

		$data=array(
			'categorias'=>$this->Categorias_model->getCategorias(),

		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/categorias/list',$data);
		$this->load->view('layouts/footer');
	}

	public function add()
	{	
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/categorias/add');
		$this->load->view('layouts/footer');
	}
	public function guardar()
	{	
	
        $nombre=$this->input->post('nombre');
        $descripcion=$this->input->post('descripcion');


		$this->form_validation->set_rules("nombre","Nombre","required|is_unique[categorias.nombre]");
		$this->form_validation->set_rules("descripcion","Descripcion","required");
		
		if($this->form_validation->run()){
			$data=array(
         
				'nombre'=>$nombre,
				'descripcion'=>$descripcion,
				'estado'=>"1"
				
			);
	
			$this->db->insert('categorias',$data);
	
			header("location:".base_url()."mantenimiento/categorias");
	
		}else{
			$this->add();
	
		
		}
      
        
		

	}
	public function edit($id){
	
		$data=array(
        

			'categoria'=>$this->Categorias_model->getCategoria($id),
    
        );
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
        $this->load->view("admin/categorias/edit",$data);
        $this->load->view('layouts/footer');

	}
	public function edit_save(){
	
		$idcategoria=$this->input->post("idcategoria");
        $nombre=$this->input->post('nombre');
        $descripcion=$this->input->post('descripcion');


		$categoriaActual=$this->Categorias_model->getCategoria($idcategoria);
		
		if($nombre==$categoriaActual->nombre){
			$unique="";
		}else{
		$unique='|is_unique[categorias.nombre]';
		}

		$this->form_validation->set_rules("nombre","Nombre","required".$unique);
		$this->form_validation->set_rules("descripcion","Descripcion","required");
		if($this->form_validation->run()){

		
			$data=array(
         
           
				'nombre'=>$nombre,
				'descripcion'=>$descripcion,
			 
			);
	
			$this->db->update("categorias",$data,array('id'=>$idcategoria));
			header("location:".base_url()."mantenimiento/categorias");
    
	} 
	else{
		$this->edit($idcategoria);
	}
}
	
	public function delete($id){
		
   
        
 	$data = array(
			'estado'=>"0"
		); 
		$this->db->update("categorias",$data,array('id'=>$id));
	
		header("location:".base_url()."mantenimiento/categorias");
		

	}


}