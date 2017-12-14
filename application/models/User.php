<?php

class User extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function create($addName,$addEmail,$addPhone,$addAdmin){
        $this->safeTxt($addName);
        $this->safeTxt($addEmail);
        $this->safeTxt($addPhone);
        
        //zab UNIQUE
        $query = $this->db->query("SELECT `id` FROM `spsm_users` WHERE `name`='$addName' ;");
        
        if($query->num_rows() == 0){
            $this->db->query("INSERT INTO `spsm_users` (`name`,`mail`,`phone`,`status`) "
                . "VALUES('$addName','$addEmail','$addPhone',$addAdmin);");
        
            $mail = new APImail($addEmail);
            $mail->contentCreateUser();
            $mail->send();
        }
    }
    
    public function edit($editName,$editEmail,$editPhone,$editAdmin,$id){
        $id = (int) $id;
        $this->safeTxt($editName);
        $this->safeTxt($editEmail);
        $this->safeTxt($editPhone);
        
        $this->db->query("UPDATE `spsm_users` SET `name`='$editName',`mail`='$editEmail',"
                . "`phone`='$editPhone',`status`=$editAdmin WHERE `id`=$id; ");
    }
    
    public function delete($id){
        $id = (int) $id;
        $this->db->query("DELETE FROM `spsm_users` WHERE `id`=$id;");
    }

    public function setActive($id,$setActive){
        $id = (int) $id;
        if(!$setActive)
            $this->db->query("UPDATE `spsm_users` SET `active`=0 WHERE `id`=$id;");
        else{
            $pass = $this->generatePass();
            $this->db->query("UPDATE `spsm_users` SET `active`=1,`pass`='$pass' WHERE `id`=$id;");
            
            $query = $this->db->query("SELECT `mail` FROM `spsm_users` WHERE `id`=$id;");
            $row = $query->row_array();
        
            $mail = new APImail($row['mail']);
            $mail->contentActivate($pass);            
            $mail->send();
        }
    }
    
    public function setContact($id,$set){
        $id = (int) $id;
        $set = (int) $set;
        $this->db->query("UPDATE `spsm_users` SET `contact`=$set WHERE `id`=$id;");
    }
    
    public function loadList(){
        $query = $this->db->query("SELECT * FROM `spsm_users` ORDER BY `id`;");
        $result = array();
        $i=0;
        
        foreach ($query->result_array() as $row){
            $result[$i]['id'] = $row['id'];
            $result[$i]['name'] = $row['name'];
            $result[$i]['mail'] = $row['mail'];
            $result[$i]['phone'] = $row['phone'];
            $result[$i]['status'] = $row['status'];
            $result[$i]['active'] = $row['active'];
            $result[$i]['contact'] = $row['contact'];
            
            ++$i;
        }
        return $result;
    }
    
    public function getNameUser($id){
        $id = (int) $id;
        $query = $this->db->query("SELECT `name` FROM `spsm_users` WHERE `id`=$id;");
        $row = $query->row_array();
        
        return $row['name'];
    }
    
    public function isAdmin($id){
        $id = (int) $id;
        $query = $this->db->query("SELECT `status` FROM `spsm_users` WHERE `id`=$id;");
        $row = $query->row_array();
        
        return $row['status'];
    }
    
    public function checkLoginData($mail,$pass){
        $this->safeTxt($mail);
        $this->safeTxt($pass);
        
        $query = $this->db->query("SELECT `id`,`status`,`contact` FROM `spsm_users` WHERE `mail`='$mail' AND `pass`='$pass' AND `active`=1 ;");        
        
        if($query->num_rows() == 0)
            return false;
        
        $row = $query->row_array();
        return $row;
    }
    
    private function safeTxt(&$txt){
        $txt = str_replace("'", null, $txt);
        $txt = str_replace('"', null, $txt);
        $txt = str_replace("<", null, $txt);
        $txt = str_replace(">", null, $txt);
    }
    
    private function generatePass(){
        $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        $key = "";
    
        for ($i=0; $i < 7; $i++) {
            $randNumber = rand(0, 61);
            $key .= $characters[$randNumber];
        }
        
        return $key;
    }
}
