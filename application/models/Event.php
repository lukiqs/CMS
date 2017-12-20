<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Event
 *
 * @author lukiqs
 */
class Event extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getList(){
        $data = array();
        $query = $this->db->query("SELECT * FROM `spsm_events` ;");
        
        $i=0;
        foreach ($query->result_array() as $row){
            $data[$i]['id'] = $row['id'];
            $data[$i]['title'] = $row['title'];
            $data[$i]['content'] = $row['content'];
            $data[$i]['date'] = $row['date'];
                    
            ++$i;
        }
        
        return $data;
    }
    
    public function add($title,$content,$date){
        $this->safeTxt($title);
        $this->safeTxt($content);
        
        $this->db->query("INSERT INTO `spsm_events` (`title`,`content`,`date`) "
                . "VALUES('$title','$content','$date');");
    }
    
    public function edit($id,$title,$content,$date){
        $this->safeTxt($title);
        $this->safeTxt($content);
        
        $this->db->query("UPDATE `spsm_events` SET `title`='$title',`content`='$content',`date`='$date' "
                . " WHERE `id`=$id ;");
    }
    
    public function delete($id){
        $this->db->query("DELETE FROM `spsm_events` WHERE `id`=$id");
    }

    private function safeTxt(&$txt){
        $txt = str_replace("'", null, $txt);
        $txt = str_replace('"', null, $txt);
        $txt = str_replace("<", null, $txt);
        $txt = str_replace(">", null, $txt);
        $txt = trim(preg_replace('/\s+/', ' ', $txt));
    }
}