<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('APImail');
        $this->load->model('footerData');
        $this->load->model('category');
        $this->load->model('text');
        $this->load->model('ContactData');
        $this->load->model('PersonalContactData');
        $this->load->model('Register');
        
        $this->ajax();
        $this->post();
    }
    
    public function index($idArt){
        $this->load->view('menu', $this->dataMenu());
        $this->load->view('art_main', $this->loaderData($idArt));
        $this->load->view('art_footer',$this->data());
    }
    
    public function register(){
        $this->load->view('menu', $this->dataMenu());
        $this->load->view('register');
        $this->load->view('art_footer',$this->data());
    }
    
    public function contact(){
        $this->load->view('menu', $this->dataMenu());
        $this->load->view('contact', array_merge($this->ContactData->getToPage(),$this->PersonalContactData->getList()));
        $this->load->view('art_footer',$this->data());
    }

    private function urlFont(){
        $array = array();
        $url['urlFont'] = '';
        if(URL_DOMAIN == "http://localhost/SPSM/"){
            $link = str_replace('/SPSM/', "", $_SERVER['PHP_SELF']);
            // /SPSM/index.php/Article/index/sd
            $array = explode("/", $link);
            //var_dump($array);
        }
        else{
            $array = explode("/", $_SERVER['PHP_SELF']);
        }
        
        for($i=0;$i<count($array)-1;$i++){
            $url['urlFont'].='../';
        }
        return $url;
    }
    
    private function dataMenu(){
        $result = $this->category->getMenu();
        $urlFont = $this->urlFont();
        
        return array_merge($result,$urlFont);
    }
    
    private function loaderData($idArt = 0){
        $Data = array();
        
        $Data['navbar'] = $this->category->getNavBar($idArt);
        $Data['category'] = $this->category->getCategoryById($idArt);
        $Data['article'] = $this->text->get($idArt);
        
        return $Data;
    }

    private function data(){
        $Data = array();
        
        $Data['description'] = $this->footerData->get('DESCRIPTION');
        $Data['facebook'] = $this->footerData->get('FACEBOOK');
        $Data['twitter'] = $this->footerData->get('TWITTER');
        $Data['googlep'] = $this->footerData->get('GOOGLEP');
        $Data['pinterest'] = $this->footerData->get('PINTEREST');
        $Data['instagram'] = $this->footerData->get('INSTAGRAM');
        $Data['youtube'] = $this->footerData->get('YOUTUBE');
        
        return $Data;
    }
    
    private function ajax(){
        $this->dangerStream();
        
        $Data = array();
        if(isset($_POST['getById'])){ 
            $Data = $this->PersonalContactData->get($_POST['getById']);
            die(json_encode($Data));
        }
        elseif(isset($_POST['send'])){
            
            $this->Register->add($_POST);
            die(json_encode($Data));
        }
    }
    
    
    private function post(){
        $this->dangerStream();
        
        if(isset($_POST['name']) && $_POST['name']!="" && $_POST['topic']!="" 
                && $_POST['message']!="" && $_POST['mail']!=""){
            
            $mail = new APImail('lukiqs@gmail.com');
            $mail->contentMail($_POST['name'],$_POST['topic'],$_POST['message'],$_POST['mail']);            
            $mail->send();
        }
    }
}

//$ar = [
//                'registerLike' => $_POST['registerLike'],
//                'DataNameSur' => $_POST['DataNameSur'],
//                'DataName' => $_POST['DataName'],
//                'DataRegon' => $_POST['DataRegon'],
//                'DataNip' => $_POST['DataNip'],
//                'DataAddressBen' => $_POST['DataAddressBen'],
//                'DataPhoneBen' => $_POST['DataPhoneBen'],
//                'DataVoivodeship' => $_POST['DataVoivodeship'],
//                'DataCity' => $_POST['DataCity'],
//                'DataPostCode' => $_POST['DataPostCode'],
//                'DataMailBen' => $_POST['DataMailBen'],
//                'DataWWW' => $_POST['DataWWW'],
//                'DataBank' => $_POST['DataBank'],
//                'DataBankName' => $_POST['DataBankName'],
//                'DataBankNumber' => $_POST['DataBankNumber'],
//                'DataNameRep' => $_POST['DataNameRep'],
//                'DataFunc' => $_POST['DataFunc'],
//                'DataPhoneRep' => $_POST['DataPhoneRep'],
//                'DataMailRep' => $_POST['DataMailRep'],
//                'know' => $_POST['know'],
//                'knowField' => $_POST['knowField']
//            ];