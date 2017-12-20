<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hdd
 *
 * @author lukiqs
 */
class Hdd extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getList($filter){
        
        if($filter != ''){
            $filter = str_replace('%20', ' ', $filter);
            $filter = "WHERE `type`='$filter' ";
        }
            
        $data = array();
        $query = $this->db->query("SELECT * FROM `spsm_hdd` $filter ORDER BY `created` DESC;");
        
        $i=0;
        foreach ($query->result_array() as $row){
            $data[$i]['id'] = $row['id'];
            $data[$i]['type'] = $row['type'];
            $data[$i]['name'] = $row['name'];
            $data[$i]['created'] = $row['created'];
            $data[$i]['user'] = $this->user->getNameUser($row['id_user']);
            $data[$i]['url'] = $row['url'];
                    
            ++$i;
        }
        
        return $data;
    }
    
    public function add($type,$name,$id_user,$url){
        $this->safeTxt($name);
        
        $this->db->query("INSERT INTO `spsm_hdd` (`type`,`name`,`id_user`,`url`) "
                . "VALUES('$type','$name',$id_user,'$url');");
    }
    
    public function delete($id){
        $query = $this->db->query("SELECT `url` FROM `spsm_hdd` WHERE `id`=$id ;");
        $row = $query->row_array();
        
        unlink("assets/hdd/".$row['url']);
        
        $this->db->query("DELETE FROM `spsm_hdd` WHERE `id`=$id ;");        
    }
    
    public function getUrlByName($name){
        $query = $this->db->query("SELECT `url` FROM `spsm_hdd` WHERE `name`='$name';");
        $row = $query->row_array();
        
        return $row['url'];
    }
    
    public function getNameByUrl($url){
        $query = $this->db->query("SELECT `name` FROM `spsm_hdd` WHERE `url`='$url';");
        $row = $query->row_array();
        
        return $row['name'];
    }
    
    private function safeTxt(&$txt){
        $txt = str_replace("'", null, $txt);
        $txt = str_replace('"', null, $txt);
        $txt = str_replace("<", null, $txt);
        $txt = str_replace(">", null, $txt);
        $txt = trim(preg_replace('/\s+/', ' ', $txt));
    }

}