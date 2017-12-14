<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
        
    public function __construct() {
        parent::__construct();
        $this->load->library('Auth');
        $this->load->model('event');
        
        Auth::exitAuth();
        Auth::exitAuthAdmin();
        $this->ajax();
    }

    public function index(){ 
        $this->load->view('cms_menu');
        $this->load->view('cms_events', $this->event->getList());
        $this->load->view('cms_footer');
    }
    
    private function ajax(){
        $this->dangerStream();
        
        $Data = array();
        if(isset($_POST['addEvent'])){ 
            $this->event->add($_POST['addTitle'],$_POST['addContent'],$_POST['addDate']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['deleteEvent'])){ 
            $this->event->delete($_POST['deleteEvent']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['editEvent'])){
            $this->event->edit($_POST['editEvent'],$_POST['editTitle'],$_POST['editContent'],$_POST['editDate']);
            die(json_encode($Data));
        }
    }
}