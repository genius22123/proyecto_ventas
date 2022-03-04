<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model {
    public function getVentas(){
        $this->db->select("vent.*,clien.nombre,tip_comp.nombre as t_comprovante,usua.nombres");
        $this->db->from("ventas vent");
        $this->db->join("clientes clien","vent.cliente_id=clien.id");
        $this->db->join("tipo_comprobante tip_comp","vent.tipo_comprobante_id=tip_comp.id");
        $this->db->join("usuarios usua","vent.usuario_id=usua.id");
        $resultados=$this->db->get();
        return $resultados->result();

    }

	public function getComprobantes(){ // retorna datos de la table tipos_comprobante
        $resultados=$this->db->get("tipo_comprobante");
        return $resultados->result();
    }
    public function getproductos($valor){
        $this->db->select("id,codigo,nombre as label,precio,stock");//seleccionado los datos que requerimos 
        $this->db->from("productos");//selesccionando tablaa
        $this->db->like("nombre",$valor);//comparar el campo nombre con el valor que enviamos
        $res=$this->db->get();
        return $res->result_array();
    }
}
