<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StatsPanel
 * //do wdrożenia w wersji 1.2.6.0
 * @author lukiqs
 */
class StatsPanel extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function add(){
        
    }
}
