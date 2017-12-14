<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContactData
 *
 * @author lukiqs
 */
class ContactData extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getContent($key){
        $query = $this->db->query("SELECT `content` FROM `spsm_contact` WHERE  `key`='$key';");
        
        if($query->num_rows() != 0){
            $row = $query->row_array();
            return htmlspecialchars_decode($row['content']);
        }
        else return null;
    }
    
    public function setContent($key, $content){
        $content = htmlspecialchars($content);
        $query = $this->db->query("UPDATE `spsm_contact` SET `content`='$content' WHERE  `key`='$key';");        
    }
    
    public function getToPage(){
        $Data['main_contact_home'] = $this->getContent('main_contact_home');
        $Data['main_contact_phone'] = $this->getContent('main_contact_phone');
        $Data['main_contact_envelope'] = $this->getContent('main_contact_envelope');
        $Data['main_contact_bank'] = $this->getContent('main_contact_bank');
        $Data['main_contact_card'] = $this->getContent('main_contact_card');
        $Data['main_contact_clock'] = $this->getContent('main_contact_clock');
        $Data['main_contact_text'] = $this->getContent('main_contact_text');
        $Data['team_contact_left'] = $this->getContent('team_contact_left');
        $Data['team_contact_right'] = $this->getContent('team_contact_right');
        $Data['proxy_contact'] = $this->getContent('proxy_contact');
        
        return $Data;
    }
}