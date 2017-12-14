<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
        
    public function __construct() {
        parent::__construct(); 
        $this->load->library('Auth');
        $this->load->model('screen');
        $this->load->model('hdd');
        $this->load->model('user');
        
        Auth::exitAuth();
        Auth::exitAuthAdmin();
        $this->ajax();
    }

    public function index(){ 
        $this->load->view('cms_menu');
        $this->load->view('cms_slider', $this->screen->getList());
        $this->load->view('cms_footer');
    }
    
    private function ajax(){
        $this->dangerStream();
        
        $Data = array();
        if(isset($_POST['filterFile'])){     
            $Data = $this->hdd->getList($_POST['filterFile']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['addScreen'])){
            $this->screen->add($_POST['addType'],$_POST['addContent'],$_POST['addFile']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['idScreenToDelete'])){
            $this->screen->delete($_POST['idScreenToDelete']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['idScreenToEdit'])){
            $this->screen->edit($_POST['editType'],$_POST['editContent'],$_POST['editFile'],$_POST['idScreenToEdit']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['save'])){
            $this->screen->saveSort($_POST['saveSort']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['pluginList'])){
            $Data = $this->screen->getPlugList();
            die(json_encode($Data));
        }
        elseif(isset($_POST['plugId'])){
            $this->screen->setPlug($_POST['plugId'],$_POST['plugType']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['plugIdDelete'])){
            $this->screen->setPlug($_POST['plugIdDelete']);
            die(json_encode($Data));
        }
        
    }
    
}