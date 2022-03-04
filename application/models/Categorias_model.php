<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends CI_Model {

	public function getCategorias(){
       
        $this->db->where("estado","1");
        $resultados=$this->db->get("categorias");

        return $resultados->result();
        
    }
    public function getCategoria($id){
        $this->db->where("id",$id);
        $resultado=$this->db->get("categorias");
        return $resultado->row();
    }

  
}
