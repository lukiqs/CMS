<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Register
 *
 * @author lukiqs
 */
class Register  extends CI_Model  {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function add($ar){
        $this->safeTxt($ar['DataNameSur']);
        $this->safeTxt($ar['DataName']);
        $this->safeTxt($ar['DataRegon']);
        $this->safeTxt($ar['DataNip']);
        $this->safeTxt($ar['DataAddressBen']);
        $this->safeTxt($ar['DataPhoneBen']);
        $this->safeTxt($ar['DataPostCode']);
        $this->safeTxt($ar['DataMailBen']);
        $this->safeTxt($ar['DataWWW']);
        $this->safeTxt($ar['DataBank']);
        $this->safeTxt($ar['DataBankName']);
        $this->safeTxt($ar['DataBankNumber']);
        $this->safeTxt($ar['DataNameRep']);
        $this->safeTxt($ar['DataFunc']);
        $this->safeTxt($ar['DataPhoneRep']);
        $this->safeTxt($ar['DataMailRep']);
        $this->safeTxt($ar['knowField']);
        
        $this->db->query("INSERT INTO `spsm_register` (`name_surname`,`name`,`regon`,`nip`,`address`,`phone`,"
                . "`voivodeship`,`city`,`postcode`,`mail`,`www`,`bank`,`bank_name`,`bank_number`,`rep_name_surname`,"
                . "`rep_function`,`rep_phone`,`rep_mail`,`register_like`,`know_from`,`know_from_field`) "
                . "VALUES('{$ar['DataNameSur']}','{$ar['DataName']}','{$ar['DataRegon']}',"
                . "'{$ar['DataNip']}','{$ar['DataAddressBen']}','{$ar['DataPhoneBen']}','{$ar['DataVoivodeship']}',"
                . "'{$ar['DataCity']}','{$ar['DataPostCode']}','{$ar['DataMailBen']}','{$ar['DataWWW']}',"
                . "'{$ar['DataBank']}','{$ar['DataBankName']}','{$ar['DataBankNumber']}','{$ar['DataNameRep']}',"
                . "'{$ar['DataFunc']}','{$ar['DataPhoneRep']}','{$ar['DataMailRep']}','{$ar['registerLike']}',"
                . "'{$ar['know']}','{$ar['knowField']}') ;");
                
        $mail = new APImail('lukiqs@gmail.com');
        $mail->contentRegister($ar);            
        $mail->send();
    }
    
    private function safeTxt(&$txt){
        $txt = str_replace("'", null, $txt);
        $txt = str_replace('"', null, $txt);
        $txt = str_replace("<", null, $txt);
        $txt = str_replace(">", null, $txt);
    }
}
