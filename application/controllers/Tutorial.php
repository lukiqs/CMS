<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutorial extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('Auth');
        
        Auth::exitAuth();
    }
    
    public function index($help = null){
        $this->load->view('cms_menu');
//        $this->load->view('faq_howStart');
//        $this->load->view('faq_category');
//        $this->load->view('faq_add');
//        $this->load->view('faq_hdd');
//        $this->load->view('faq_contactPersonal');
        $this->post();
        $this->load->view('cms_footer');
    }
    
    private function post(){
        $this->dangerStream();
        
        if(isset($_POST['faq'])){
            $this->load->view('faq_'.$_POST['faq']);
        }
        else $this->load->view('cms_faq');
    }
}

