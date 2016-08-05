<?php
class Usuarios_model extends CI_Model{        
    
    public function getUsuarios($empresa){
        $this->db->where('empresa_id', $empresa);
        $this->db->order_by('nome', 'asc');
        return $this->db->get('usuarios')->result();
    }
    
    
    public function getLogin($ln = array()){
        $this->db->where('email', $ln['email']);
        $this->db->where('senha', $ln['senha']);
        $this->db->where('status', 1);
        
        $query = $this->db->get('usuarios');
        
        if($query->num_rows() == 1){
            return $query->row(0);
        }else{
            return false;
        }
    }
    
}