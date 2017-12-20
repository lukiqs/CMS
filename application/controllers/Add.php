<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Add
 *
 *
 * @author lukiqs
 */
class Add extends CI_Controller {
    
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
    
    public function index($id = null){
        $this->load->view('cms_menu');
        $this->load->view('cms_add', $this->dataLoader($id));        
        $this->load->view('cms_footer');
    }
    
    private function dataLoader($id){
        $result = [];
        
        $result['per'] = $this->permissions->getNameList(Auth::getIdUser());
        
        $list = $this->text->getListArticles(Auth::getIdUser());
            for($i=0;$i<count($list);$i++){
                if($list[$i]['id'] == $id){
                    $temp = $this->text->getArtById($id);
                    $result['art']['id'] = $temp['id'];
                    $result['art']['category'] = $this->category->getNameCategory($temp['id_category']);
                    $result['art']['name'] = $temp['name'];
                    $result['art']['text'] = htmlspecialchars_decode($temp['text']);
                }
            }
            
        return $result;
    }
    
    private function ajax(){
        $this->dangerStream();
        
        $Data = array();
        if(isset($_POST['addArt'])){ 
            $this->text->add($_POST['nameArt'], $_POST['categoryArt'], Auth::getIdUser(), $_POST['contentArt']);
            die(json_encode($Data));
        }
        if(isset($_POST['editArt'])){ 
            $this->text->edit($_POST['editArt'],$_POST['nameArt'], $_POST['categoryArt'], $_POST['contentArt']);
            die(json_encode($Data));
        }
    }
        
}
