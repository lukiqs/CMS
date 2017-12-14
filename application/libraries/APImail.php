<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class APImail {
    private $to;
    private $subject;
    private $content;
    private $domain = 'spsm1. pro'; 

    public function __construct($to = null, $subject = null) {
        $this->to = $to;
        $this->subject = $subject;
    }
    
    public function contentCreateUser(){
        $year = date('Y');
        $this->subject = "Konto";
        $this->content.=<<<MAIL
                <html>
                    <head></head>
                <body>
                    <div style='background-color:#101010;padding:20px;font-size:200%;color:#F05F40;'>
                        <strong>$this->domain</strong> <font size='1px' color='white' style='float:right;'>Twój dedykowany system zarządzania</font>
                    </div>
                    <div style='border:3px solid #101010;border-top:none;padding:30px;font-size:150%;'>
                        <strong>Konto zostało utworzone</strong><br><br>
                        Proces tworzenia konta edycji treści, na stronie spsm1.pro , został pozytywnie zakończony.
                    </div>
                    <div style='background-color:#101010;padding:10px;padding-left:20px;color:white;'>
                        QSCMS &copy; 2014 - $year
                    </div>
                </body>
                </html>
MAIL;
    }
    
    public function contentMail($name,$topic,$message,$mail){
        $year = date('Y');
        $this->subject = "$name - $topic";
        $agent = $_SERVER['HTTP_USER_AGENT'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $this->content.=<<<MAIL
                <html>
                    <head></head>
                <body>
                    <div style='background-color:#101010;padding:20px;font-size:200%;color:#F05F40;'>
                        <strong>$this->domain</strong> <font size='1px' color='white' style='float:right;'>Twój dedykowany system zarządzania</font>
                    </div>
                    <div style='border:3px solid #101010;border-top:none;padding:30px;font-size:150%;'>
                        <strong>Wiadomość ze strony spsm1.pro </strong><br><br>
                        $message<br><br>
                        Nadawca: $mail
                        <br><br><br>
                    <font size='1px'>USER AGENT: $agent<br> IP: $ip</font>
                    </div>
                    <div style='background-color:#101010;padding:10px;padding-left:20px;color:white;'>
                        QSCMS &copy; 2014 - $year
                    </div>
                </body>
                </html>
MAIL;
    }
    
    public function contentRegister($ar){
        $year = date('Y');
        $this->subject = "Rejestracja - {$ar['registerLike']}";
        $agent = $_SERVER['HTTP_USER_AGENT'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $this->content.=<<<MAIL
                <html>
                    <head></head>
                <body>
                    <div style='background-color:#101010;padding:20px;font-size:200%;color:#F05F40;'>
                        <strong>$this->domain</strong> <font size='1px' color='white' style='float:right;'>Twój dedykowany system zarządzania</font>
                    </div>
                    <div style='border:3px solid #101010;border-top:none;padding:30px;font-size:150%;'>
                        <strong>Rejestracja ze strony spsm1.pro </strong><br><br>
                          
                        <h3>Dane benef.</h3>
                          <strong>IMIE NAZWISKO:</strong> {$ar['DataNameSur']} <br>
                          <strong>NAZWA/ORZECZENIE:</strong> {$ar['DataName']} <br>
                          <strong>REGON:</strong> {$ar['DataRegon']} <br>
                          <strong>NIP:</strong> {$ar['DataNip']}<br>
                          <strong>ADRES:</strong> {$ar['DataAddressBen']} <br>
                          <strong>TELEFON:</strong> {$ar['DataPhoneBen']}<br>
                          <strong>WOJEWÓDZTWO:</strong> {$ar['DataVoivodeship']}<br>
                          <strong>MIASTO:</strong> {$ar['DataCity']}<br>
                          <strong>KOD POCZTOWY:</strong> {$ar['DataPostCode']}<br>
                          <strong>EMAIL:</strong> {$ar['DataMailBen']}
                          <strong>WWW:</strong> {$ar['DataWWW']}<br><br>
                
                        <h3>Dane rachunku</h3>
                          <strong>BANK:</strong> {$ar['DataBank']} <br>
                          <strong>NAZWA:</strong> {$ar['DataBankName']} <br>
                          <strong>NUMER:</strong> {$ar['DataBankNumber']} <br><br>
                
                        <h3>Dane rep.</h3>
                          <strong>IMIE NAZWISKO:</strong> {$ar['DataNameRep']} <br>
                          <strong>FUNKCJA:</strong> {$ar['DataFunc']}<br>
                          <strong>TELEFON:</strong> {$ar['DataPhoneRep']}<br>
                          <strong>EMAIL:</strong> {$ar['DataMailRep']}<br><br>
                          
                        <h3>Inne dane</h3>
                          <strong>REJ. JAKO:</strong> {$ar['registerLike']} <br>
                          <strong>DOWIEDZIAŁ SIĘ:</strong> {$ar['know']} {$ar['knowField']} <br>
                
                        <br><br><br>
                    <font size='1px'>USER AGENT: $agent<br> IP: $ip</font>
                    </div>
                    <div style='background-color:#101010;padding:10px;padding-left:20px;color:white;'>
                        QSCMS &copy; 2014 - $year
                    </div>
                </body>
                </html>
MAIL;
    }
    
    public function contentBeforeUpdate(){
        $year = date('Y');
        $this->subject = "Przerwa tachniczna";
        $this->content.=<<<MAIL
                <html>
                    <head></head>
                <body>
                    <div style='background-color:#101010;padding:20px;font-size:200%;color:#F05F40;'>
                        <strong>$this->domain</strong> <font size='1px' color='white' style='float:right;'>Twój dedykowany system zarządzania</font>
                    </div>
                    <div style='border:3px solid #101010;border-top:none;padding:30px;font-size:150%;'>
                        <strong>Aktualizacja</strong><br><br>
                        W terminie 25/06/2017 od godziny 02:00 do 05:00 panel CMS (system zarządzania treścią),
                         będzie nie aktywny z powodu przeprowadzanych aktualizacji.<br>
                        <br><br>
                        Przepraszamy za utrudnienia.
                    </div>
                    <div style='background-color:#101010;padding:10px;padding-left:20px;color:white;'>
                        QSCMS &copy; 2014 - $year
                    </div>
                </body>
                </html>
MAIL;
    }
    
    public function contentActivate($pass){
        $year = date('Y');
        $this->subject = "Aktywacja konta";
        $this->content.=<<<MAIL
                <html>
                    <head></head>
                <body>
                    <div style='background-color:#101010;padding:20px;font-size:200%;color:#F05F40;'>
                        <strong>$this->domain</strong> <font size='1px' color='white' style='float:right;'>Twój dedykowany system zarządzania</font>
                    </div>
                    <div style='border:3px solid #101010;border-top:none;padding:30px;font-size:150%;'>
                        <strong>Twoje konto zostało aktywowane</strong><br><br>
                        Hasło: $pass
                    </div>
                    <div style='background-color:#101010;padding:10px;padding-left:20px;color:white;'>
                        QSCMS &copy; 2014 - $year
                    </div>
                </body>
                </html>
MAIL;
    }
    
    public function contentReport($bug,$id = null){
        $year = date('Y');
        $this->subject = "Raport ".$this->domain;
        $agent = $_SERVER['HTTP_USER_AGENT'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $this->content.=<<<MAIL
                <html>
                    <head></head>
                <body>
                    <div style='background-color:#101010;padding:20px;font-size:200%;color:#F05F40;'>
                        <strong>$this->domain</strong> <font size='1px' color='white' style='float:right;'>Twój dedykowany system zarządzania</font>
                    </div>
                    <div style='border:3px solid #101010;border-top:none;padding:30px;font-size:150%;'>
                        <strong>Zgłoszono błąd</strong><br><br>
                        Treść błędu:<br><br>
                        $bug
                        <br>
                        ID:$id
                        <br><br>
                        <font size='1px'>Wiadomość wysłana automatycznie. Prosimy nie odpowiadać.</font>
                        <br><br><br>
                    <font size='1px'>USER AGENT: $agent<br> IP: $ip</font>
                    </div>
                    <div style='background-color:#101010;padding:10px;padding-left:20px;color:white;'>
                        QSCMS &copy; 2014 - $year
                    </div>
                </body>
                </html>
MAIL;
    }

    public function send(){
        $rC = curl_init("http://mail.lukaszkusy.pl");
        $sAgent = "QSCMS";
        $aPostFields['sendMail']= true;
        $aPostFields['sendMailTo']= $this->to;
        $aPostFields['sendMailSubject']= $this->subject;
        $aPostFields['sendMailContent']= $this->content;
        $aPostFields['sendMailHeaders']= "MIME-Version: 1.0" . "\r\n"."Content-type:text/html;charset=UTF-8" . "\r\n".
                'From: <spsm@spsm.pl>' . "\r\n".'Cc: root@lukaszkusy.pl' . "\r\n";
        
        curl_setopt($rC, CURLOPT_POST, 1);
        curl_setopt($rC, CURLOPT_POSTFIELDS,$aPostFields );
        curl_setopt($rC, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($rC, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($rC, CURLOPT_USERAGENT, $sAgent);
        curl_setopt($rC, CURLOPT_HEADER, 0);
        $sResult = curl_exec($rC);
        curl_close($rC);
    }
}