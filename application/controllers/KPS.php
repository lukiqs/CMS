<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KPS extends CI_Controller {
        
    public function __construct() {
        parent::__construct();
        $this->load->library('Auth');
        $this->load->model('KPSData');
        
        Auth::exitAuth();
        Auth::exitAuthAdmin();
        $this->ajax();
        $this->post();
    }
    
    public function index(){ 
        $this->load->view('cms_menu');
        $this->load->view('cms_KPS',$this->KPSData->getList());        
        $this->load->view('cms_footer');
        
    }
    
    private function ajax(){
        $this->dangerStream();
        
        $Data = array();
        if(isset($_POST['eId'])){ 
            $this->KPSData->edit($_POST['eId'],$_POST['eName'],$_POST['eAddress'],
                    $_POST['ePhone'],$_POST['eMail'],$_POST['eWWW']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['deleteKPS'])){ 
            $this->KPSData->delete($_POST['deleteKPS']);
            die(json_encode($Data));
        }
    }
    
    private function post(){
        $this->dangerStream();
        
        if(isset($_POST['name'])){
            $this->KPSData->add($_POST['name'],$_POST['address'],$_POST['phone'],$_POST['mail'],$_POST['www']);
        }
    }
    
}