<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Auth{
    
    public function __construct(){
        session_start();
    }
    
    static public function login($value,$admin = false,$contact = 0){
        $_SESSION['user'] = true;
        $_SESSION['x0eF'] = $value;
        $_SESSION['x9eA'] = $admin;
        $_SESSION['x9RA'] = $contact;
    }
    
    static public function exitAuth(){
        if(!self::isLoging()) header("Location: ".URL_DOMAIN);
    }
    
    static public function isAdmin(){
        return $_SESSION['x9eA'];
    }

    static public function getIdUser(){
        return $_SESSION['x0eF'];
    }

    static public function exitAuthAdmin(){
        if($_SESSION['x9eA'] == 0) header("Location: ".URL_DOMAIN."index.php/QSCMS/");
    }
    
    static public function isLoging(){
        return isset( $_SESSION['user'] ) ? $_SESSION['user'] : FALSE;
    }
    
    static public function logout(){
       session_destroy();
       session_commit();
    }
}