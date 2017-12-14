<?php
if ( ! defined('BASEPATH') )
    exit( 'No direct script access allowed' );

class CI_Auth
{
    public function __construct(){
        session_start();
    }

    private function set($key,$value){
        $_SESSION[$key] = $value;
    }

    private function regenerateId( $delOld = false ){
        session_regenerate_id( $delOld );
    }
    
    public function login($array){     
        $this->set('user', $array['user']);
        $this->set('status', $array['status']);
        $this->set('id', $array['id']);
    }
    
    public function getStatus(){
        return isset( $_SESSION['status'] ) ? $_SESSION['status'] : 0;
    }
    
    public function getID(){
        return isset( $_SESSION['id'] ) ? $_SESSION['id'] : 0;
    }

    public function logout(){
       session_destroy();
       session_commit();
    }
    
    public function isLogged(){
        return isset( $_SESSION['user'] ) ? $_SESSION['user'] : FALSE;
    }
    
}