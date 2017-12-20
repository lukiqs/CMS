<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of PersonalContact
 *
 * @author lukiqs
 */
class PersonalContact extends CI_Controller  {
    public function __construct() {
        parent::__construct();
        $this->load->library('Auth');
        $this->load->model('PersonalContactData');
        
        Auth::exitAuth();
        $this->ajax();
    }
    
    public function index(){
        $this->load->view('cms_menu');
        $this->load->view('cms_personalContact');
        $this->load->view('cms_footer');
    }
    
    private function ajax(){
        $this->dangerStream();
        
        $Data = array();
        if(isset($_POST['name'])){     
            $this->PersonalContactData->set(Auth::getIdUser(), $_POST['name'], $_POST['content'], $_POST['x'], $_POST['y']);
            die(json_encode($Data));
        }
        elseif(isset ($_POST['get'])){
            $Data = $this->PersonalContactData->get(Auth::getIdUser());
            die(json_encode($Data));
        }
    }
}
