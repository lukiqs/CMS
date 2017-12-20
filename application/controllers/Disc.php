<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disc extends CI_Controller {
        
    public function __construct() {
        parent::__construct(); 
        $this->load->library('Auth');
        $this->load->library('APImail');
        $this->load->library('FileExt');
        $this->load->model('user');
        $this->load->model('hdd');
        
        Auth::exitAuth();
        $this->ajax();
        $this->post();
    }

    public function index($filtr = ''){
        $this->load->view('cms_menu');
        $this->load->view('cms_hdd', $this->hdd->getList($filtr));
        $this->load->view('cms_footer');
    }
    
    private function post(){
        $this->dangerStream();
        
        if (isset($_FILES['uploadFile']['tmp_name']) && is_uploaded_file($_FILES['uploadFile']['tmp_name'])) {
            $temp = explode('.', $_FILES['uploadFile']['name']);
            $Type = $temp[count($temp)-1];
            $extFile = $Type;
            $Type = FileExt::getType($Type);
            
            $nameOfFile = md5(time());
            move_uploaded_file($_FILES['uploadFile']['tmp_name'],
                'assets/hdd/'.$nameOfFile.'.'.$extFile);
            
            if(file_exists('assets/hdd/'.$nameOfFile.'.'.$extFile)){
                $this->hdd->add($Type,$_POST['uploadName'], Auth::getIdUser(),$nameOfFile.'.'.$extFile);
            }
            
        } else {
            //echo 'Błąd przy przesyłaniu danych!';
        }
    }
    
    private function ajax(){
        $this->dangerStream();
        
        $Data = array();
        if(isset($_POST['idFileToDelete'])){ 
            $this->hdd->delete($_POST['idFileToDelete']);
            die(json_encode($Data));
        }
    }
}