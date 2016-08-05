<?php
class Account extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        
        $this->load->model('usuarios_model', 'usuarios');
    }
    
    public function login(){
        $this->form_validation->set_rules('usuario', 'USUÁRIO', 'trim|required');
        $this->form_validation->set_rules('senha', 'SENHA', 'trim|required');
        
        if($this->form_validation->run() == true){
            $dados = array(
                'email' => $this->input->post('usuario'),
                'senha' => md5($this->input->post('senha')),
            );
            
            if($data = $this->usuarios->getLogin($dados)){
                $sessao = array(
                    'id' => $data->idusuarios,
                    'empresa_id' => $data->empresa_id,
                    'nome' => $data->nome,
                    'email' => $data->email,
                    'tipo' => $data->tipo,
                    'logged' => true
                );
                
                $this->session->set_userdata($sessao);
                
                redirect('/home');
            }else{
                $this->session->set_flashdata('error', 'Login inválido, tente novamente');
                redirect('/home');
            }
            
            
        }else{
            $this->session->set_flashdata('error', 'Login inválido, tente novamente');
            redirect('/home');
        }
        
    }
    
}
