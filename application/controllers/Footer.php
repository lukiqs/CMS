<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Footer extends CI_Controller {
        
    public function __construct() {
        parent::__construct(); 
        $this->load->library('Auth');
        $this->load->model('footerData');
        
        Auth::exitAuth();
        $this->ajax();
    }

    public function index(){ 
        $this->load->view('cms_menu');
        $this->load->view('cms_footerSet', $this->data());
        $this->load->view('cms_footer');
    }
    
    private function ajax(){
        $this->dangerStream();
        
        $Data = array();
        if(isset($_POST['setFooter'])){     
            $this->footerData->set('DESCRIPTION',$_POST['setDesc']);
            $this->footerData->set('FACEBOOK',$_POST['setFace']);
            $this->footerData->set('TWITTER',$_POST['setTwit']);
            $this->footerData->set('GOOGLEP',$_POST['setGoog']);
            $this->footerData->set('PINTEREST',$_POST['setPint']);
            $this->footerData->set('INSTAGRAM',$_POST['setInst']);
            $this->footerData->set('YOUTUBE',$_POST['setYout']);
            
            die(json_encode($Data));
        }
    }
    
    private function data(){
        $Data = array();
        
        $Data['description'] = $this->footerData->get('DESCRIPTION');
        $Data['facebook'] = $this->footerData->get('FACEBOOK');
        $Data['twitter'] = $this->footerData->get('TWITTER');
        $Data['googlep'] = $this->footerData->get('GOOGLEP');
        $Data['pinterest'] = $this->footerData->get('PINTEREST');
        $Data['instagram'] = $this->footerData->get('INSTAGRAM');
        $Data['youtube'] = $this->footerData->get('YOUTUBE');
        
        return $Data;
    }
}