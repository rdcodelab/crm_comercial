<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
                                
        $this->load->view('/template/header_html');
        $this->load->view('/template/header');
        $this->load->view('/template/menu');
        $this->load->view('/home/index');
        $this->load->view('/template/footer');
        $this->load->view('/template/footer_html');                
    }
    
    public function cadastro(){
                                
        $this->load->view('/template/header_html');
        $this->load->view('/template/header');
        $this->load->view('/template/menu');
        $this->load->view('/empresa/cadastro_view');
        $this->load->view('/template/footer');
        $this->load->view('/template/footer_html');                
        
    }
    
}