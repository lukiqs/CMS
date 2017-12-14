<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter extends CI_Controller {
        
    public function __construct() {
        parent::__construct();   
        $this->load->library('Auth');
        
        Auth::exitAuth();
        Auth::exitAuthAdmin();
    }

    public function index(){ 
        $this->load->view('cms_menu');
        $this->load->view('cms_newsletter');
        $this->load->view('cms_footer');
    }
    
}