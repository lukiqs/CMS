<?php

class Category extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getMenu(){
        $data = array();
        $query = $this->db->query("SELECT * FROM `spsm_menu` WHERE `level`=0 ORDER BY `sort_id` ;");
        
        $i=0;
        foreach ($query->result_array() as $row){
            $data[$i]['name'] = $row['name'];
            $data[$i]['id'] = $row['id'];
            $data[$i]['url'] = $row['url'];
            
            $query2 = $this->db->query("SELECT * FROM `spsm_menu` WHERE `parent_id`={$row['id']} ORDER BY `sort_id` ;");
            $k=0;
            $data2 = array();
            foreach ($query2->result_array() as $row2){
                $data2[$k]['name'] = $row2['name'];
                $data2[$k]['id'] = $row2['id'];
                $data2[$k]['url'] = $row2['url'];
                
                $query3 = $this->db->query("SELECT `name` FROM `spsm_menu` WHERE `id`={$row2['parent_id']}");
                $row3 = $query3->row_array();
                $data2[$k]['name_parent'] = $row3['name'];
                ++$k;
            }
            $data[$i]['subCategory'] = $data2;
            
            ++$i;
        }
        
        return $data;
    }
    
    public function getCategory($id_user){
        $id_user = (int) $id_user;
        $listPer = $this->permissions->getList($id_user);
        
        $data = array();
        
        for($i=0;$i<count($listPer);$i++){
            $query = $this->db->query("SELECT `name` FROM `spsm_menu` WHERE `level`=1 AND `id`={$listPer[$i]};");
            $row = $query->row_array();
            
            $data[$i]=$row['name'];
        }               
        
        return $data;
    }
    
    public function getCategoryById($idArt){
        $data = array();
        $idArt = (int) $idArt;
        
        $query = $this->db->query("SELECT `id`,`name`,`url` FROM `spsm_menu` WHERE `level`=3 AND `parent_id`=$idArt;");             
        if($query->num_rows() == 0){
            $query0 = $this->db->query("SELECT `parent_id` FROM `spsm_menu` WHERE `id`=$idArt;");
            
            if($query0->num_rows() != 0){
                $row0 = $query0->row_array();
                $idArt = (int)$row0['parent_id'];
                $query = $this->db->query("SELECT `id`,`name`,`url` FROM `spsm_menu` WHERE `level`=3 AND `parent_id`=$idArt;");
            }                
        }
        
        $i=0;
        foreach ($query->result_array() as $row){
            $data[$i]['name'] = $row['name'];
            $data[$i]['id'] = $row['id'];
            $data[$i]['url'] = $row['url'];
            
            ++$i;
        }
        
        return $data;
    }
    
    public function getNameCategory($id){
        $id = (int) $id;
        $query = $this->db->query("SELECT `name` FROM `spsm_menu` WHERE  `id`=$id;");
        
        if($query->num_rows() != 0){
            $row = $query->row_array();
            return $row['name'];
        }
        else return false;
    }
    
    public function getLevelCategory($id){
        $id = (int) $id;
        $query = $this->db->query("SELECT `level` FROM `spsm_menu` WHERE  `id`=$id;");
        
        if($query->num_rows() != 0){
            $row = $query->row_array();
            return $row['level'];
        }
        else return false;
    }
    
    public function getIdParentCategory($id){
        $id= (int) $id;
        $query = $this->db->query("SELECT `parent_id` FROM `spsm_menu` WHERE  `id`=$id;");
        
        if($query->num_rows() != 0){
            $row = $query->row_array();
            return $row['parent_id'];
        }
        else return false;
    }

    public function getNavBar($idArt){
        $data = array();
        $idArt = (int) $idArt;
        
        $query = $this->db->query("SELECT * FROM `spsm_menu` WHERE  `id`=$idArt;");
        
        if($query->num_rows() != 0){
            $row = $query->row_array();
            if($row['level']==0){
                $data[0]['name'] = $row['name'];
                $data[0]['id'] = $row['id'];
            }
            elseif($row['level']==1){
                $data[1]['name'] = $row['name'];
                $data[1]['id'] = $row['id'];
                
                $query2 = $this->db->query("SELECT `name`,`id` FROM `spsm_menu` WHERE  `id`={$row['parent_id']};");
                $row2 = $query2->row_array();
                
                $data[0]['name'] = $row2['name'];
                $data[0]['id'] = $row2['id'];
            }
            else{
                $data[2]['name'] = $row['name'];
                $data[2]['id'] = $row['id'];
                
                $query2 = $this->db->query("SELECT `name`,`id`,`parent_id` FROM `spsm_menu` WHERE  `id`={$row['parent_id']};");
                $row2 = $query2->row_array();
                
                $data[1]['name'] = $row2['name'];
                $data[1]['id'] = $row2['id'];
                
                $query3 = $this->db->query("SELECT `name`,`id` FROM `spsm_menu` WHERE  `id`={$row2['parent_id']};");
                $row3 = $query3->row_array();
                
                $data[0]['name'] = $row3['name'];
                $data[0]['id'] = $row3['id'];
            }
        }
        
        return $data;
    }

    public function getSubCategory($id_user){
        $id_user = (int) $id_user;
        $listPer = $this->permissions->getList($id_user);
        
        $data = array();
        
        $i=0;
        $k=0;
        
        for($i=0;$i<count($listPer);$i++){
            $query = $this->db->query("SELECT * FROM `spsm_menu` WHERE `level`=3 AND `parent_id`={$listPer[$i]};");
            
            foreach ($query->result_array() as $row){
                $data[$k]['name'] = $row['name'];
                $data[$k]['id'] = $row['id'];
                $data[$k]['parent_id'] = $row['parent_id'];
                $data[$k]['url'] = $row['url'];
                
                $query0 = $this->db->query("SELECT `name` FROM `spsm_menu` WHERE `id`={$listPer[$i]} ;");
                $row0 = $query0->row_array();
            
                $data[$k]['parent_name'] = $row0['name'];
                ++$k;
            }
        }             
        
        return $data;
    }
    
    public function addToMenu($name,$category,$url){
        $this->safeTxt($name);
        $this->safeTxt($category);
        $this->safeTxt($url);
        
        if($category == ""){
            $query = $this->db->query("SELECT MAX(`sort_id`) AS `number` FROM `spsm_menu` WHERE `level`=0");
            $row = $query->row_array();
            $num = (int) $row['number'] + 1;
            
            $this->db->query("INSERT INTO `spsm_menu` (`name`,`level`,`sort_id`,`url`) "
                . "VALUES('$name',0,$num,'$url');");
        }
        else{
            $query0 = $this->db->query("SELECT `id` FROM `spsm_menu` WHERE `name`='$category' ;");
            $row0 = $query0->row_array();
            
            $query = $this->db->query("SELECT MAX(`sort_id`) AS `number` FROM `spsm_menu` WHERE `parent_id`={$row0['id']}");
            $row = $query->row_array();
            $num = (int) $row['number'] + 1;
            
            $this->db->query("INSERT INTO `spsm_menu` (`name`,`level`,`sort_id`,`url`,`parent_id`) "
                . "VALUES('$name',1,$num,'$url',{$row0['id']});");
        }
      
    }
    
    public function addSubCategory($name,$category,$url){
        $this->safeTxt($name);
        $this->safeTxt($category);
        $this->safeTxt($url);
        
        $query0 = $this->db->query("SELECT `id` FROM `spsm_menu` WHERE `name`='$category' ;");
        $row0 = $query0->row_array();
            
        $query = $this->db->query("SELECT MAX(`sort_id`) AS `number` FROM `spsm_menu` WHERE `parent_id`={$row0['id']}");
        $row = $query->row_array();
        $num = (int) $row['number'] + 1;
            
        $this->db->query("INSERT INTO `spsm_menu` (`name`,`level`,`sort_id`,`url`,`parent_id`) "
            . "VALUES('$name',3,$num,'$url',{$row0['id']});");
    }
        
    public function editMenu($id,$name,$category,$url){
        $id = (int) $id;
        $this->safeTxt($category);
        $this->safeTxt($name);
        $this->safeTxt($url);
        
        if($category == ""){
            $this->db->query("UPDATE `spsm_menu` SET `name`='$name',`parent_id`=NULL,`level`=0,`url`='$url' WHERE `id`=$id ;");
        }
        else{
            $query0 = $this->db->query("SELECT `id` FROM `spsm_menu` WHERE `name`='$category' ;");
            $row0 = $query0->row_array();
            
            if($row0['id'] != $id){
                $query = $this->db->query("SELECT MAX(`sort_id`) AS `number` FROM `spsm_menu` WHERE `parent_id`={$row0['id']}");
                $row = $query->row_array();
                $num = (int) $row['number'] + 1;
            
                $this->db->query("UPDATE `spsm_menu` SET `name`='$name',`parent_id`={$row0['id']},`level`=1,"
                . "`sort_id`=$num, `url`='$url' WHERE `id`=$id ;");
            }
        }
    }
    
    public function editCategory($id,$name,$category,$url){
        $id = (int) $id;
        $this->safeTxt($name);
        $this->safeTxt($category);
        $this->safeTxt($url);
        
        $query0 = $this->db->query("SELECT `id` FROM `spsm_menu` WHERE `name`='$category' ;");
        $row0 = $query0->row_array();
            
        if($row0['id'] != $id){
            $query = $this->db->query("SELECT MAX(`sort_id`) AS `number` FROM `spsm_menu` WHERE `parent_id`={$row0['id']}");
            $row = $query->row_array();
            $num = (int) $row['number'] + 1;
            
             $this->db->query("UPDATE `spsm_menu` SET `name`='$name',`parent_id`={$row0['id']},"
                . "`sort_id`=$num, `url`='$url' WHERE `id`=$id ;");
        }
        
    }
    
    public function delete($id){
        $id = (int) $id;
        $query = $this->db->query("SELECT COUNT(`id`) AS `numbers` FROM `spsm_menu` WHERE `parent_id`=$id");
        $row = $query->row_array();
        
        if((int)$row['numbers'] == 0){
            $this->db->query("DELETE FROM `spsm_menu` WHERE `id`=$id");
            $this->permissions->deleteCategory($id);
            return true;
        }
        else return false;
    }
    
    public function saveSort($idArray,$sortArray){
        $Data = array();
        $Parents = array();
        $query = $this->db->query("SELECT DISTINCT `parent_id` FROM `spsm_menu`");       
        foreach ($query->result_array() as $row){
            array_push($Parents, $row['parent_id']);
        }
        //var_dump($Parents);    
        $query = $this->db->query("SELECT `id`,`parent_id` FROM `spsm_menu` WHERE `level`=0 OR `level`=1");

        $i=0;
        foreach ($query->result_array() as $row){
            $Data[$i]['id'] = $row['id'];
            $Data[$i]['parent'] = $row['parent_id'];
            
            $index = array_search($row['id'], $idArray);
            $Data[$i]['sort'] = $sortArray[$index];
            ++$i;
        } 
        //var_dump($Data);
        //find parents rows grup
        $tempArray = array();
        for($i=0;$i<count($Parents);$i++){
            $tempArray = [];          
            for($k=0;$k<count($Data);$k++)
                if($Data[$k]['parent'] == $Parents[$i])
                    //array_push($tempArray, array("id_$k" => $Data[$k]['sort']));
                    $tempArray[$k] = $Data[$k]['sort'];
                
            asort($tempArray);
            
            $j=1;
            foreach($tempArray as $x => $x_sort){
                $tempArray[$x] = $j;
                ++$j;
            }
            
            foreach($tempArray as $x => $x_sort)
                $Data[$x]['sort'] = $x_sort;
            //var_dump($tempArray);
        }
        
        for($k=0;$k<count($Data);$k++)
        $this->db->query("UPDATE `spsm_menu` SET `sort_id`={$Data[$k]['sort']} WHERE `id`={$Data[$k]['id']} ;");
        //var_dump($Data);
    }


    private function safeTxt(&$txt){
        $txt = str_replace("'", null, $txt);
        $txt = str_replace('"', null, $txt);
        $txt = str_replace("<", null, $txt);
        $txt = str_replace(">", null, $txt);
    }
}

