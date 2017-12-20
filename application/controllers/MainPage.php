<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainPage extends CI_Controller {
        
    public function __construct() {
        parent::__construct();
        $this->load->model('category');
        $this->load->model('screen');
        $this->load->model('hdd');
        $this->load->model('event');
        $this->load->model('KPSData');
        $this->load->model('text');
    }

    public function index(){         
        $this->load->view('menu',$this->category->getMenu());
        $this->load->view('index', $this->loaderData());
    }
    
    private function loaderData(){
        $Data = array();
        
        $Data['index'] = $this->screen->getList();
        $Data['event'] = $this->event->getList();
        $Data['kps'] = $this->KPSData->getList();
        $Data['art'] = $this->text->getArtToBoard();
        
        return $Data;
    }
}