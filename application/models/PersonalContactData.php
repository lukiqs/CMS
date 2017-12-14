<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PersonalContactData
 *
 * @author lukiqs
 */
class PersonalContactData  extends CI_Model  {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getList(){
        $query = $this->db->query("SELECT `id_user`,`name`,`content`,`x`,`y` FROM `spsm_personal_contact` ;");
        
        $result = array();
        $i=0;
        
        foreach ($query->result_array() as $row){
            $result[$i]['name'] = $row['name'];
            $result[$i]['id_user'] = $row['id_user'];
            //$result[$i]['content'] = htmlspecialchars_decode($row['content']);
            //$result[$i]['x'] = $row['x'];
            //$result[$i]['y'] = $row['y'];
            
            ++$i;
        }
        
        return $result;
    }
    
    public function get($id){
        $query = $this->db->query("SELECT `name`,`content`,`x`,`y` FROM `spsm_personal_contact` WHERE `id_user`=$id ;");
        $row = $query->row_array();
        
        if($query->num_rows() != 0){
            $result['name'] = $row['name'];
            $result['content'] = htmlspecialchars_decode($row['content']);
            $result['x'] = $row['x'];
            $result['y'] = $row['y'];
        }
        else{
            $result['name'] = '';
            $result['content'] = '';
            $result['x'] = 'null';
            $result['y'] = 'null';
        }
        return $result;
    }

    public function set($idUser, $name, $content, $x, $y){
        $this->safeTxt($name);
        $content = htmlspecialchars($content);
        $query = $this->db->query("SELECT `id` FROM `spsm_personal_contact` WHERE `id_user`=$idUser ;");
        
        if($query->num_rows() == 0){
            $this->db->query("INSERT INTO `spsm_personal_contact` (`name`,`content`,`id_user`,`x`,`y`) "
                . "VALUES('$name','$content',$idUser,$x,$y) ;");
        }
        else{
            $this->db->query("UPDATE `spsm_personal_contact` SET `name`='$name',"
                    . "`content`='$content',`id_user`=$idUser,`x`=$x,`y`=$y WHERE `id_user`=$idUser ;");
        }
        
    }
    
    private function safeTxt(&$txt){
        $txt = str_replace("'", null, $txt);
        $txt = str_replace('"', null, $txt);
        $txt = str_replace("<", null, $txt);
        $txt = str_replace(">", null, $txt);
    }
}
