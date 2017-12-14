<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
        
    public function __construct() {
        parent::__construct();
        $this->load->library('Auth');
        $this->load->model('ContactData');
        
        
        Auth::exitAuth();
        Auth::exitAuthAdmin();
        $this->ajax();        
    }
    
    public function index(){ 
        $this->load->view('cms_menu');
        $this->load->view('cms_contact');        
        $this->load->view('cms_footer');
        
    }
    
    private function ajax(){
        $this->dangerStream();
        
        $Data = array();
        if(isset($_POST['getMainContact'])){ 
            $Data = $this->ContactData->getContent($_POST['getMainContact']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['editMainContact'])){ 
            $Data = $this->ContactData->setContent($_POST['editMainContact'],$_POST['editMainContactC']);
            die(json_encode($Data));
        }
    }
    
}