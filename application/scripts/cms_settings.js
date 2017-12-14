/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var settings_update = null;
var settings_news = null;
var settings_backup = null;
var settings_backup_out = null;
var settings_backup_hdd = null;
var settings_login = null;
var settings_active = null;
var settings_analysis = null;
var settings_analysis_report = null;
//var settings_alerts = null;

$(document).ready(function(){
    loadSettings();
    $( "#dialog" ).dialog({
      autoOpen: false,
      open: function(event, ui){
        setTimeout("$('#dialog').dialog('close')",2000);
      }
    }).prev(".ui-dialog-titlebar").css("background","#337ab7");
    
    $("#action_save").click(function() {
            $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               settings : true,
               settings_update : settings_update.toString(),
               settings_news : settings_news.toString(),
               settings_backup : settings_backup.toString(),
               settings_backup_out : settings_backup_out.toString(),
               settings_backup_hdd : settings_backup_hdd.toString(),
               settings_login : settings_login.toString(),
               settings_active : settings_active.toString(),
               settings_analysis : settings_analysis.toString(),
               settings_analysis_report : settings_analysis_report.toString()
            },
            success : function(json) {
                $( "#dialog" ).dialog( "open" );
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
    });
    
    $("#settings_update").click(function() {
        if(settings_update){
            settings_update = false;
            loadSettings();
        }
        else{
           settings_update = true;
            loadSettings(); 
        }
    });
    
    $("#settings_news").click(function() {
        if(settings_news){
            settings_news = false;
            loadSettings();
        }
        else{
           settings_news = true;
            loadSettings(); 
        }
    });
    
    $("#settings_backup").click(function() {
        if(settings_backup){
            settings_backup = false;
            loadSettings();
        }
        else{
           settings_backup = true;
            loadSettings(); 
        }
    });
    
    $("#settings_backup_out").click(function() {
        if(settings_backup_out){
            settings_backup_out = false;
            loadSettings();
        }
        else{
           settings_backup_out = true;
            loadSettings(); 
        }
    });
    
    $("#settings_backup_hdd").click(function() {
        if(settings_backup_hdd){
            settings_backup_hdd = false;
            loadSettings();
        }
        else{
           settings_backup_hdd = true;
            loadSettings(); 
        }
    });
    
    $("#settings_login").click(function() {
        if(settings_login){
            settings_login = false;
            loadSettings();
        }
        else{
           settings_login = true;
            loadSettings(); 
        }
    });
    
    $("#settings_active").click(function() {
        if(settings_active){
            settings_active = false;
            loadSettings();
        }
        else{
           settings_active = true;
            loadSettings(); 
        }
    });
    
    $("#settings_analysis").click(function() {
        if(settings_analysis){
            settings_analysis = false;
            loadSettings();
        }
        else{
           settings_analysis = true;
            loadSettings(); 
        }
    });
    
    $("#settings_analysis_report").click(function() {
        if(settings_analysis_report){
            settings_analysis_report = false;
            loadSettings();
        }
        else{
           settings_analysis_report = true;
            loadSettings(); 
        }
    });
    
});

function loadSettings(){
    if(settings_update)
        document.getElementById("settings_update").innerHTML = '<font size="4px" color="green"><i class="fa fa-toggle-on" aria-hidden="true"></i></font> Aktualizuj system automatycznie';
    else
        document.getElementById("settings_update").innerHTML = '<font size="4px" color="#d43f3a"><i class="fa fa-toggle-off" aria-hidden="true"></i></font> Aktualizuj system automatycznie';

    if(settings_news)
        document.getElementById("settings_news").innerHTML = '<font size="4px" color="green"><i class="fa fa-toggle-on" aria-hidden="true"></i></font> Newsletter QSCMS';
    else
        document.getElementById("settings_news").innerHTML = '<font size="4px" color="#d43f3a"><i class="fa fa-toggle-off" aria-hidden="true"></i></font> Newsletter QSCMS';

    if(settings_backup)
        document.getElementById("settings_backup").innerHTML = '<font size="4px" color="green"><i class="fa fa-toggle-on" aria-hidden="true"></i></font> Kopie bezpieczeństwa bazy danych (na serwerze)';
    else
        document.getElementById("settings_backup").innerHTML = '<font size="4px" color="#d43f3a"><i class="fa fa-toggle-off" aria-hidden="true"></i></font> Kopie bezpieczeństwa bazy danych (na serwerze)';
    
    if(settings_backup_out)
        document.getElementById("settings_backup_out").innerHTML = '<font size="4px" color="green"><i class="fa fa-toggle-on" aria-hidden="true"></i></font> Kopie bezpieczeństwa bazy danych (na zewnęczny serwer)';
    else
        document.getElementById("settings_backup_out").innerHTML = '<font size="4px" color="#d43f3a"><i class="fa fa-toggle-off" aria-hidden="true"></i></font> Kopie bezpieczeństwa bazy danych (na zewnęczny serwer)';
    
    if(settings_backup_hdd)
        document.getElementById("settings_backup_hdd").innerHTML = '<font size="4px" color="green"><i class="fa fa-toggle-on" aria-hidden="true"></i></font> Kopie zawartości dysku';
    else
        document.getElementById("settings_backup_hdd").innerHTML = '<font size="4px" color="#d43f3a"><i class="fa fa-toggle-off" aria-hidden="true"></i></font> Kopie zawartości dysku';
    
    if(settings_login)
        document.getElementById("settings_login").innerHTML = '<font size="4px" color="green"><i class="fa fa-toggle-on" aria-hidden="true"></i></font> Zapis logowań do panelu';
    else
        document.getElementById("settings_login").innerHTML = '<font size="4px" color="#d43f3a"><i class="fa fa-toggle-off" aria-hidden="true"></i></font> Zapis logowań do panelu';

    if(settings_active)
        document.getElementById("settings_active").innerHTML = '<font size="4px" color="green"><i class="fa fa-toggle-on" aria-hidden="true"></i></font> Zapis aktywności w panelu';
    else
        document.getElementById("settings_active").innerHTML = '<font size="4px" color="#d43f3a"><i class="fa fa-toggle-off" aria-hidden="true"></i></font> Zapis aktywności w panelu';
    
    if(settings_analysis)
        document.getElementById("settings_analysis").innerHTML = '<font size="4px" color="green"><i class="fa fa-toggle-on" aria-hidden="true"></i></font> Analiza ruchu';
    else
        document.getElementById("settings_analysis").innerHTML = '<font size="4px" color="#d43f3a"><i class="fa fa-toggle-off" aria-hidden="true"></i></font> Analiza ruchu';
    
    if(settings_analysis_report)
        document.getElementById("settings_analysis_report").innerHTML = '<font size="4px" color="green"><i class="fa fa-toggle-on" aria-hidden="true"></i></font> Wysyłaj raporty analizy';
    else
        document.getElementById("settings_analysis_report").innerHTML = '<font size="4px" color="#d43f3a"><i class="fa fa-toggle-off" aria-hidden="true"></i></font> Wysyłaj raporty analizy';
//
//    if(settings_alerts)
//        document.getElementById("settings_alerts").innerHTML = '<font size="4px" color="green"><i class="fa fa-toggle-on" aria-hidden="true"></i></font> Wyświetlanie wskazówek';
//    else
//        document.getElementById("settings_alerts").innerHTML = '<font size="4px" color="#d43f3a"><i class="fa fa-toggle-off" aria-hidden="true"></i></font> Wyświetlanie wskazówek';

}