<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {
        
    public function __construct() {
        parent::__construct();
        $this->load->library('Auth');
        
        Auth::exitAuth();
    }

    public function index(){ 
        $this->load->view('cms_menu');
        $this->load->view('cms_info');
        $this->load->view('cms_footer');
    }
    
}