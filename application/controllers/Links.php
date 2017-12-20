<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Add
 *
 * @author lukiqs
 */
class Links extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('Auth');
        
        Auth::exitAuth();
    }
    
    public function index(){
        $this->load->view('cms_menu');
        $this->load->view('cms_links');
        $this->load->view('cms_footer');
    }
    
}