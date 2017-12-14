<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
        
    public function __construct() {
        parent::__construct();         
        $this->load->library('Auth');
        $this->load->model('category');
        $this->load->model('permissions');
        
        Auth::exitAuth();
        Auth::exitAuthAdmin();
        $this->ajax();
    }

    public function index(){ 
        $this->load->view('cms_menu');
        $this->load->view('cms_menues', $this->category->getMenu());
        $this->load->view('cms_footer');
    }
    
    private function ajax(){
        $this->dangerStream();
        
        $Data = array();
        if(isset($_POST['addCategory'])){ 
            $this->category->addToMenu($_POST['addName'],$_POST['addSubCat'],$_POST['addUrl']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['editCategory'])){
            $this->category->editMenu($_POST['editId'],$_POST['editName'],$_POST['editSubCat'],$_POST['editUrl']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['deleteCategory'])){
            $this->category->delete($_POST['deleteCategory']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['save'])){
            $idArray = $_POST['saveId'];
            $sortArray = $_POST['saveSort'];
            $this->category->saveSort($idArray,$sortArray);
            die(json_encode($Data));
        }
    }    
}

//0,1,4,6,17,7,2,18,21,5,24,23,22,16
//0,1,2,3,4,5,6,7,8,9,10,11,12,13