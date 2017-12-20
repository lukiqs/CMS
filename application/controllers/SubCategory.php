<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of SubCategory
 *
 * @author lukiqs
 */
class SubCategory extends CI_Controller  {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('Auth');
        $this->load->model('category');
        $this->load->model('permissions');
        
        Auth::exitAuth();
        $this->ajax();
    }
    
    public function index(){
        $this->load->view('cms_menu');
        $this->load->view('cms_subCategory', $this->loaderData());        
        $this->load->view('cms_footer');
    }
    
    private function loaderData(){
        $Data = array();
        
        $Data['option'] = $this->category->getCategory(Auth::getIdUser());
        $Data['list'] = $this->category->getSubCategory(Auth::getIdUser());
        
        return $Data;
    }
    
    private function ajax(){
        $this->dangerStream();
        
        $Data = array();
        if(isset($_POST['addCategory'])){ 
            $this->category->addSubCategory($_POST['addName'],$_POST['addSubCat'],$_POST['addUrl']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['editCategory'])){
            $this->category->editCategory($_POST['editId'],$_POST['editName'],$_POST['editSubCat'],$_POST['editUrl']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['deleteCategory'])){
            $this->category->delete($_POST['deleteCategory']);
            die(json_encode($Data));
        }
    }
}
