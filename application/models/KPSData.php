<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KPSData
 *
 * @author lukiqs
 */
class KPSData extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function edit($id, $name, $address, $phone, $mail, $www){
        $this->safeTxt($name);
        $this->safeTxt($address);
        $this->safeTxt($phone);
        $this->safeTxt($mail);
        $this->safeTxt($www);
        
        $this->db->query("UPDATE `spsm_kps` SET `name`='$name',`address`='$address',`phone`='$phone',"
                . "`mail`='$mail',`www`='$www' WHERE `id`=$id ; ");
    }
    
    public function add($name, $address, $phone, $mail, $www){
        $this->safeTxt($name);
        $this->safeTxt($address);
        $this->safeTxt($phone);
        $this->safeTxt($mail);
        $this->safeTxt($www);
        
        //zab UNIQUE
        $query = $this->db->query("SELECT `id` FROM `spsm_kps` WHERE `name`='$name' ;");
        
        if($query->num_rows() == 0)
            $this->db->query("INSERT INTO `spsm_kps` (`name`,`address`,`phone`,`mail`,`www`) "
                . "VALUES('$name','$address','$phone','$mail','$www');");
    }
    
    public function getList(){
        $data = array();
        $query = $this->db->query("SELECT * FROM `spsm_kps` ORDER BY `id` ;");
        
        $i=0;
        foreach ($query->result_array() as $row){
            $data[$i]['id'] = $row['id'];
            $data[$i]['name'] = $row['name'];
            $data[$i]['address'] = $row['address'];
            $data[$i]['phone'] = $row['phone'];
            $data[$i]['mail'] = $row['mail'];
            $data[$i]['www'] = $row['www'];
               
            ++$i;
        }
        $data[0]['lenght'] = $i;
        
        return $data;
    }
    
    public function delete($id){
        $this->db->query("DELETE FROM `spsm_kps` WHERE `id`=$id ;");
    }

    private function safeTxt(&$txt){
        $txt = str_replace("'", null, $txt);
        $txt = str_replace('"', null, $txt);
        $txt = str_replace("<", null, $txt);
        $txt = str_replace(">", null, $txt);
        $txt = trim(preg_replace('/\s+/', ' ', $txt));
    }
}
