<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
        
    public function __construct() {
        parent::__construct();
        $this->load->library('Auth');
        $this->load->library('APImail');
        $this->load->model('user');
        $this->load->model('category');
        $this->load->model('permissions');
        
        Auth::exitAuth();
        Auth::exitAuthAdmin();
        $this->ajax();
        $this->post();
    }

    public function index(){ 
        $this->load->view('cms_menu');
        $this->load->view('cms_users', $this->loaderData() );        
        $this->load->view('cms_footer');
        
    }
    
    private function loaderData(){
        $Data = array();
        
        $Data['user'] = $this->user->loadList();
        $Data['permissions'] = $this->category->getMenu();
        
        return $Data;
    }
    
    private function ajax(){
        $this->dangerStream();
        
        $Data = array();
        if(isset($_POST['addUser'])){ 
            $this->user->create($_POST['addName'],$_POST['addEmail'],$_POST['addPhone'],$_POST['addAdmin']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['deleteUser'])){
            $this->user->delete($_POST['deleteUser']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['editUser'])){
            $this->user->edit($_POST['editName'],$_POST['editEmail'],$_POST['editPhone'],$_POST['editAdmin'],$_POST['editId']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['permissions'])){
            $Data = $this->permissions->getList($_POST['permissions']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['setPermissions'])){
            if(!isset($_POST['setData']))
                $_POST['setData'] = [];
            $this->permissions->save($_POST['setPermissions'],$_POST['setData']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['contactId'])){
            $Data = $this->user->setContact($_POST['contactId'],$_POST['contactOption']);
            die(json_encode($Data));
        }
    }
    
    private function post(){
        $this->dangerStream();
        
        if(isset($_POST['lock'])){
            $this->user->setActive($_POST['lock'],false);
            //send mail with information about activate acount and password
        }
        elseif(isset($_POST['unlock'])){
            $this->user->setActive($_POST['unlock'],true);
        }
    }
    
}