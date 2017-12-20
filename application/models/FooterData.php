<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FooterData
 *
 * @author lukiqs
 */
class FooterData extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function set($key,$value = null){
        $this->safeTxt($value);
        
        $this->db->query("UPDATE `spsm_footer` SET `value`='$value' WHERE `key`='$key' ;");
    }
    
    public function get($key){
        $query = $this->db->query("SELECT `value` FROM `spsm_footer` WHERE `key`='$key' ;");
        
        foreach ($query->result_array() as $row){
            return $row['value'];
        }
        return false;
    }

    private function safeTxt(&$txt){
        $txt = str_replace("'", null, $txt);
        $txt = str_replace('"', null, $txt);
        $txt = str_replace("<", null, $txt);
        $txt = str_replace(">", null, $txt);
    }
}
