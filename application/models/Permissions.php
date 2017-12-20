<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Permissions extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getList($id){
        $query = $this->db->query("SELECT `id_category` FROM `spsm_permissions` WHERE `id_user`=$id ;");
        
        $result = array();
        $i=0;
        
        foreach ($query->result_array() as $row){
            $result[$i] = $row['id_category'];
            
            ++$i;
        }
        return $result;
    }
    
    public function getNameList($id){
        $query = $this->db->query("SELECT `id_category` FROM `spsm_permissions` WHERE `id_user`=$id ;");
        
        $result = array();
        $i=0;
        
        foreach ($query->result_array() as $row){
            $result[$i]['id'] = $row['id_category'];
            $result[$i]['name'] = $this->category->getNameCategory($row['id_category']);
            
            ++$i;
        }
        $sub = $this->category->getSubCategory($id);
        
        return array_merge($result, $sub);
    }
    
    public function save($id,$idCatArray){
        $this->db->query("DELETE FROM `spsm_permissions` WHERE `id_user`=$id ;");
        
        for($i=0;$i<count($idCatArray);$i++){
            $this->db->query("INSERT INTO `spsm_permissions` (`id_user`,`id_category`) VALUES($id,{$idCatArray[$i]}) ;");
        }
    }
    
    public function deleteCategory($id){
        $this->db->query("DELETE FROM `spsm_permissions` WHERE `id_category`=$id ;");
    }
}