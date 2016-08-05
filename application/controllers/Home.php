<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
               
        if($this->session->userdata('logged') == false){            
            $this->load->view('/template/login');
        }else{         
            $this->load->view('/template/header_html');
            $this->load->view('/template/header');
            $this->load->view('/template/menu');
            $this->load->view('/home/index');
            $this->load->view('/template/footer');
            $this->load->view('/template/footer_html');                
        }
    }
    
}