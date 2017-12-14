<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Text
 *
 * @author lukiqs
 */
class Text extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function add($name, $idCategory, $idUser, $text){
        $text = htmlspecialchars($text);
        $this->quoteTxt($text);
        $this->safeTxt($name);
        
        $this->db->query("INSERT INTO `spsm_texts` (`name`,`id_category`,`id_user`,`text`) "
                . "VALUES('$name',$idCategory,$idUser,'$text') ;");
    }
    
    public function edit($idArt, $name, $idCategory, $text){
        $text = htmlspecialchars($text);
        $this->quoteTxt($text);
        $this->safeTxt($name);
        $idArt = (int) $idArt;
        
        $this->db->query("UPDATE `spsm_texts` SET `name`='$name',`id_category`=$idCategory,`text`='$text' "
                . "WHERE  `id`=$idArt ;");
    }
    
    public function getArtById($idArt){
        $idArt = (int) $idArt;
        $query = $this->db->query("SELECT * FROM `spsm_texts` WHERE `id`=$idArt ;");
        
        return $query->row_array();
    }

    public function get($idCat){
        $idCat = (int) $idCat;
        $query = $this->db->query("SELECT `text` FROM `spsm_texts` WHERE `id_category`=$idCat AND `block`=0 ORDER BY `id` DESC ;");
        
        $result = array();
        $i=0;
        
        foreach ($query->result_array() as $row){
            $result[$i] = htmlspecialchars_decode($row['text']);
            
            ++$i;
        }
        return $result;
    }
    
    public function getListArticles($idUser){
        $idUser = (int) $idUser;
        $cat = $this->permissions->getList($idUser);
        
        if(!$this->user->isAdmin($idUser))
            $query = $this->db->query("SELECT * FROM `spsm_texts` WHERE `id_user`=$idUser ORDER BY `id` DESC ;");
        else
            $query = $this->db->query("SELECT * FROM `spsm_texts` ORDER BY `id` DESC ;");
        $result = array();
        $i=0;
        
        foreach ($query->result_array() as $row){
            if($this->category->getLevelCategory($row['id_category']) == 3)
                $category = $this->category->getIdParentCategory($row['id_category']);
            else $category = $row['id_category'];
            if(in_array($category, $cat)){
                $result[$i]['id'] = $row['id'];
                $result[$i]['block'] = $row['block'];
                $result[$i]['name'] = $row['name'];
                $result[$i]['id_category'] = $row['id_category'];
                $result[$i]['name_category'] = $this->category->getNameCategory($row['id_category']);
                $result[$i]['name_user'] = $this->user->getNameUser($row['id_user']);
                $result[$i]['created'] = $row['created'];
                $result[$i]['error'] = false;
                ++$i;
            }
            else{
                //sprawdz czy istnieje kategoria jesli tak zostaw,
                // jesli nie alert ze nie ma kategori
                if(!$this->category->getNameCategory($row['id_category'])){
                    $result[$i]['id'] = $row['id'];
                    $result[$i]['block'] = $row['block'];
                    $result[$i]['name'] = $row['name'];
                    $result[$i]['name_category'] = $this->category->getNameCategory($row['id_category']);
                    $result[$i]['name_user'] = $this->user->getNameUser($row['id_user']);
                    $result[$i]['created'] = $row['created'];
                    $result[$i]['error'] = true;
                    ++$i;
                }
                
            }             
        }
        
        return $result;
    }
    
    public function getArtToBoard(){
        //WHERE CURRENT_TIMESTAMP<=(`created`+604800)
        $query = $this->db->query("SELECT * FROM `spsm_texts` WHERE  DATE_ADD(`created`, INTERVAL 7 DAY)>=NOW()  AND `block`=0;");
        $result = array();
        $i=0;
        
        foreach ($query->result_array() as $row){
            $result[$i]['id_category'] = $row['id_category'];
            $text = htmlspecialchars_decode($row['text']);
            $this->boardTxt($text);
            $text = substr($text, 0, 500);
            $result[$i]['text'] = strip_tags(trim($text));
            ++$i;
        }
        $result[0]['lenght'] = $i;
        return $result;
    }
    
    public function setBlock($idArt,$block){
        $idArt = (int) $idArt;
        $this->db->query("UPDATE `spsm_texts` SET `block`=$block WHERE `id`=$idArt;");
    }
    
    public function delete($idArt){
        $idArt = (int) $idArt;
        $this->db->query("DELETE FROM `spsm_texts` WHERE `id`=$idArt;");
    }

    private function safeTxt(&$txt){
        $txt = str_replace("'", null, $txt);
        $txt = str_replace('"', null, $txt);
        $txt = str_replace("<", null, $txt);
        $txt = str_replace(">", null, $txt);
    }
    
    private function boardTxt(&$txt){
        $txt = str_replace("'", "\'", $txt);
        $txt = str_replace('"', '\"', $txt);
        $txt = str_replace(PHP_EOL, "", $txt);
        $txt = str_replace("\r", "", $txt);
    }
    
    private function quoteTxt(&$txt){
        $txt = str_replace("'", "&‌rsquo; ", $txt);
        $txt = str_replace('"', '&‌rdquo;', $txt);
    }
}
