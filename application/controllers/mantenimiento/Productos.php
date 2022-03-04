<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->model("Productos_model");
        $this->load->model("Categorias_model");
        if(!$this->session->userdata("login")){
            header("location:".base_url());
        }

    }

public function index()
{
    $data=array(
        'productos'=>$this->Productos_model->getProductos(),

    );
    $this->load->view('layouts/header');
    $this->load->view('layouts/aside');
    $this->load->view('admin/productos/list',$data);
    $this->load->view('layouts/footer');
}
public function add()
	{	

        $data=array(
            'categorias'=>$this->Categorias_model->getCategorias(),
    
        );
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/productos/add',$data);
		$this->load->view('layouts/footer');
	}

    public function guardar()
	{	
	
        $codigo=$this->input->post('codigo');
        $nombre=$this->input->post('nombre');
        $descripcion=$this->input->post('descripcion');
        $precio=$this->input->post('precio');
        $stock=$this->input->post('stock');
        $categoria=$this->input->post('categoria');
        

        $this->form_validation->set_rules("codigo","Codigo","required|is_unique[productos.codigo]");
		$this->form_validation->set_rules("nombre","Nombre","required");
        $this->form_validation->set_rules("precio","Precio","required");
        $this->form_validation->set_rules("stock","Stock","required");
        
        if($this->form_validation->run()){
            $data=array(
                        'codigo'=>$codigo,
                        'nombre'=>$nombre,
                        'descripcion'=>$descripcion,
                        'precio'=>$precio,
                        'stock'=>$stock,
                        'categoria_id'=>$categoria,
                        'estado'=>"1"
                        
                    );

                    $this->db->insert('productos',$data);

                    header("location:".base_url()."mantenimiento/productos");
        }else{
            $this->add();
        }
      
     
		

	}
    public function edit($id){
        $data=array(
            "producto"=> $this->Productos_model->getProducto($id),
            'categorias'=>$this->Categorias_model->getCategorias(),
    
        );
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
        $this->load->view("admin/productos/edit",$data);
        $this->load->view('layouts/footer');

	}

    public function edit_save(){
	
        $idproducto=$this->input->post('idproducto');
        $codigo=$this->input->post('codigo');
        $nombre=$this->input->post('nombre');
        $descripcion=$this->input->post('descripcion');
        $precio=$this->input->post('precio');
        $stock=$this->input->post('stock');
        $categoria_id=$this->input->post('categoria');

        $productoActual= $this->Productos_model->getProducto($idproducto);

        if($codigo==$productoActual->codigo){
            $unique="";
        }else{
            $unique='|is_unique[productos.codigo]';
        }

        $this->form_validation->set_rules("codigo","Codigo","required".$unique);
		$this->form_validation->set_rules("nombre","Nombre","required");
        $this->form_validation->set_rules("precio","Precio","required");
        $this->form_validation->set_rules("stock","Stock","required");
    
        if($this->form_validation->run()){
            $data=array(
                
                
                
                    'codigo'=>$codigo,
                    'nombre'=>$nombre,
                    'descripcion'=>$descripcion,
                    'precio'=>$precio,
                    'stock'=>$stock,
                    'categoria_id'=>$categoria_id,
                
                
                );

                $this->db->update("productos",$data,array('id'=>$idproducto));
                header("location:".base_url()."mantenimiento/productos");
        }else{
            $this->edit($idproducto);
        }


   
	} 

    public function delete($id){
		
   
        $this->db->delete('productos',array('id'=>$id));

		header("location:".base_url()."mantenimiento/productos");

	}

}