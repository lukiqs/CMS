<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Description of ArticlesList
 *
 * @author lukiqs
 */
class ArticlesList extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('Auth');
        $this->load->model('permissions');
        $this->load->model('category');
        $this->load->model('user');
        $this->load->model('text');
        
        Auth::exitAuth();
        $this->ajax();
    }
    
    public function index(){
        $this->load->view('cms_menu');
        $this->load->view('cms_articles',$this->text->getListArticles(Auth::getIdUser()));
        $this->load->view('cms_footer');
    }
    
    private function ajax(){
        $this->dangerStream();
        
        $Data = array();
        if(isset($_POST['unlink'])){ 
            $this->text->setBlock($_POST['unlink'],1);
            die(json_encode($Data));
        }
        elseif(isset($_POST['link'])){
            $this->text->setBlock($_POST['link'],0);
            die(json_encode($Data));
        }
        elseif(isset($_POST['deleteArt'])){
            $this->text->delete($_POST['deleteArt']);
            die(json_encode($Data));
        }
    }
    
}
