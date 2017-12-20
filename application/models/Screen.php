<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Screen
 *
 * @author lukiqs
 */
class Screen extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getList(){
        $data = array();
        $query = $this->db->query("SELECT * FROM `spsm_screens` ORDER BY `sort_id` ;");
        
        $i=0;
        foreach ($query->result_array() as $row){
            $data[$i]['id'] = $row['id'];
            $data[$i]['type'] = $row['type'];
            $data[$i]['plugin'] = $row['plugin'];
            $data[$i]['url'] = $row['url'];
            $data[$i]['nameFile'] = $this->hdd->getNameByUrl($row['url']);
            $data[$i]['content'] = $row['content'];
               
            ++$i;
        }
        
        return $data;
    }
    
    public function add($type,$content,$nameOfFile){
        $this->safeTxt($content);
        $query = $this->db->query("SELECT MAX(`sort_id`) AS `number` FROM `spsm_screens` ");
        $row = $query->row_array();
        $num = (int) $row['number'] + 1;
        $url = $this->hdd->getUrlByName($nameOfFile);
        
        $this->db->query("INSERT INTO `spsm_screens` (`type`,`content`,`sort_id`,`url`) "
                . "VALUES($type,'$content',$num,'$url');");
    }
    
    public function edit($type,$content,$nameOfFile,$id){
        $this->safeTxt($content);
        $query = $this->db->query("SELECT MAX(`sort_id`) AS `number` FROM `spsm_screens` ");
        $row = $query->row_array();
        $num = (int) $row['number'] + 1;
        $url = $this->hdd->getUrlByName($nameOfFile);
        
        $this->db->query("UPDATE `spsm_screens` SET `type`=$type,`content`='$content',"
                . "`url`='$url' WHERE `id`=$id;");
    }
    
    public function delete($id){
        $this->db->query("DELETE FROM `spsm_screens` WHERE id=$id ;");
    }
    
    public function saveSort($sortArray){
        for($i=1;$i<count($sortArray);$i++){
            $this->db->query("UPDATE `spsm_screens` SET `sort_id`=$i WHERE `id`={$sortArray[$i]};");
        }
    }
    
    public function getPlugList(){
        $Data = array('Wydarzenia','Artykuły','Statystyki mapa','KPS');
        
        $query = $this->db->query("SELECT `plugin` FROM `spsm_screens` ");
        
        foreach ($query->result_array() as $row){
            if(in_array($row['plugin'], $Data))
                    array_splice($Data, array_search($row['plugin'], $Data), 1);     
        }
        
        return $Data;
    }
    
    public function setPlug($id,$type="-"){
        $this->db->query("UPDATE `spsm_screens` SET `plugin`='$type' WHERE `id`=$id;");
    }

    private function safeTxt(&$txt){
        $txt = str_replace("'", null, $txt);
        $txt = str_replace('"', null, $txt);
        $txt = str_replace("<", null, $txt);
        $txt = str_replace(">", null, $txt);
        $txt = trim(preg_replace('/\s+/', ' ', $txt));
    }
}
