<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
        
    public function __construct() {
        parent::__construct();
        $this->load->library('Auth');
        $this->load->library('APImail');
        $this->load->helper('file');
        
        Auth::exitAuth();
        $this->ajax();
    }

    public function index(){ 
        $this->load->view('cms_menu');
        $this->load->view('cms_report');
        $this->load->view('cms_footer');
    }
    
    private function ajax(){
        $this->dangerStream();
        
        $Data = array();
        if(isset($_POST['from_report'])){     
            write_file('assets/logs/report_'.date('d-m-Y'), $_POST['from_report'], 'w');
            
            $mail = new APImail('lukiqs@gmail.com');
            $mail->contentReport($_POST['from_report'], Auth::getIdUser());            
            $mail->send();
            
            die(json_encode($Data));
        }
    }
}
