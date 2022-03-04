<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estadisticas_model extends CI_Model {

	public function retDatos($tabla){

        if($tabla!="ventas"){
            $this->db->where("estado","1");
        }

        $resultado=$this->db->get($tabla);
        return $resultado->num_rows();
    }
}