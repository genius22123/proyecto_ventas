<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("Ventas_model");
        $this->load->model("Clientes_model");
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
    $this->load->view('admin/ventas/list',$data);
    $this->load->view('layouts/footer');
    }

    public function add()

    {
            $data=array(
                'tipocomprobantes'=>$this->Ventas_model->getComprobantes(),
                'clientes'=>$this->Clientes_model->getClientes() //retrona refistros de la table clientes

            );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/ventas/add',$data);
        $this->load->view('layouts/footer');
    }
    public function getproductos(){
        $valor=$this->input->post("valor"); //valor: daots  enviado mediante ajax
        $clientes=$this->Ventas_model->getproductos($valor); //clientes: donde se alamcena los registros de los producos
        echo json_encode($clientes); //retornado array tipo json
    }
    public function guardar(){
        $fecha = $this->input->post("fecha");
        $subtotal = $this->input->post("subtotal");
        $igv = $this->input->post("igv");
        $descuento = $this->input->post("descuento");
        $total = $this->input->post("total");
        $idcomprobante = $this->input->post("idcomprobante");
        $idcliente = $this->input->post("idcliente");
        $idusuario = $this->session->userdata("id");
        $numero = $this->input->post("numero");
        $serie = $this->input->post("serie");

        $data=array(
         
            'fecha'=>$fecha,
            'subtotal'=>$subtotal,
            'igv'=>$igv,
            'descuento'=>$descuento,
            'total'=>$total,
            'tipo_comprobante_id'=>$idcomprobante,
            'cliente_id'=>$idcliente,
            'usuario_id'=>$idusuario,
            'num_documento'=>$numero,
            'serie'=>$serie,
        );
        $this->db->insert('ventas',$data);
	
			header("location:".base_url()."movimientos/ventas/add");     
    }
    public function delete($id){
		
   
        $this->db->delete('ventas',array('id'=>$id));

		header("location:".base_url()."movimientos/ventas");

	}
}