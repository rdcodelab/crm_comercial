<?php
class Usuarios extends CI_Controller{        
    
    public function __construct(){
        parent::__construct();
        
        $this->load->model('Usuarios_model', 'usuarios');
    }
    
    public function index(){
        if($this->session->userdata('logged') == false){            
            $this->load->view('/template/login');
        }else{         
            
            $idEmpresa = $this->session->userdata('empresa_id');
            
            $dados = array(
                'usuarios' => $this->usuarios->getUsuarios($idEmpresa)
            );
             
            $this->load->view('/template/header_html');
            $this->load->view('/template/header');
            $this->load->view('/template/menu');
            $this->load->view('/usuarios/index', $dados);
            $this->load->view('/template/footer');
            $this->load->view('/template/footer_html');                
        }
    }
    
}