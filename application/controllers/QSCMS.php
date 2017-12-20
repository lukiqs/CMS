<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QSCMS extends CI_Controller {
        
    public function __construct() {
        parent::__construct(); 
        $this->load->library('Auth');
        $this->load->model('user');
        
        $this->post();
    }

    public function index(){ 
        if(Auth::isLoging()){
            $this->load->view('cms_menu');
            if(!Auth::isAdmin())
                $this->load->view('faq_howStart');
            $this->load->view('cms_footer');
        }
        else{
            $this->load->view('cms_login');
        }       
    }
    
    public function logout(){
        Auth::logout();
        header("Location: index");
    }
    
    private function post(){
        $this->dangerStream();
        
        if(isset($_POST['user']) && isset($_POST['pass'])){
            $temp = $this->user->checkLoginData($_POST['user'],$_POST['pass']);
           
            if($temp)
                Auth::login($temp['id'],$temp['status'],$temp['contact']);
        }
    }
    
}