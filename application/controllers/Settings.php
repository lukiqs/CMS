<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Procedura dołaczania nowych ustawień 
//Plik cms_settings.js
//  - var settings_XXX = null;
//  - settings_XXX : settings_XXX.toString() (data in ajax) 
//  - $("#settings_XXX").click(function() {});
//  - warunk w funkcji loadSettings()
//Plik cms_settings.tpl
//  - settings_XXX = {$_ci_vars.settings_XXX}; (w tagach <script>)
//  - <button class="switch" id="settings_XXX"></button>

class Settings extends CI_Controller {
        
    public function __construct() {
        parent::__construct(); 
        $this->load->library('Auth');
        $this->load->library('FileINI');
        $this->load->helper('file');
                
        Auth::exitAuth();
        Auth::exitAuthAdmin();
        $this->ajax();
    }

    public function index(){        
        $this->load->view('cms_menu');
        $this->load->view('cms_settings', $this->settingsConfig());
        $this->load->view('cms_footer');
    }
    
    private function ajax(){
        $this->dangerStream();
        
        $Data = array();
        if(isset($_POST['settings'])){ 
            $conf = new FileINI('assets/settings/settings.ini','settings');
            $conf->set('update',$_POST['settings_update']);
            $conf->set('news',$_POST['settings_news']);
            $conf->set('backup',$_POST['settings_backup']);
            $conf->set('backup_out',$_POST['settings_backup_out']);
            $conf->set('backup_hdd',$_POST['settings_backup_hdd']);
            $conf->set('login',$_POST['settings_login']);
            $conf->set('active',$_POST['settings_active']);
            $conf->set('analysis',$_POST['settings_analysis']);
            $conf->set('analysis_report',$_POST['settings_analysis_report']);
            
            $conf->save();
            die(json_encode($Data));
        }
    }
    
    private function settingsConfig(){
        $conf = new FileINI('assets/settings/settings.ini','settings');
        
        $settings['settings_update'] = $conf->get('update');
        $settings['settings_news'] = $conf->get('news');
        $settings['settings_backup'] = $conf->get('backup');
        $settings['settings_backup_out'] = $conf->get('backup_out');
        $settings['settings_backup_hdd'] = $conf->get('backup_hdd');
        $settings['settings_login'] = $conf->get('login');
        $settings['settings_active'] = $conf->get('active');
        $settings['settings_analysis'] = $conf->get('analysis');
        $settings['settings_analysis_report'] = $conf->get('analysis_report');
        
        return $settings;
    }
}

