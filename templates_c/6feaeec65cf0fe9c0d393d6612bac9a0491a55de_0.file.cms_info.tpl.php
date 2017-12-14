<?php /* Smarty version 3.1.24, created on 2017-05-29 15:42:44
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_info.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21586592c4174d02e24_16392743%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6feaeec65cf0fe9c0d393d6612bac9a0491a55de' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_info.tpl',
      1 => 1491054570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21586592c4174d02e24_16392743',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592c4174f162a5_06895772',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c4174f162a5_06895772')) {
function content_592c4174f162a5_06895772 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21586592c4174d02e24_16392743';
?>
<style><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['css'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['css'];
}?></style>
<?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['js'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['js'];
}?><?php echo '</script'; ?>
>
<h1 class="page-header"><span class="glyphicon glyphicon-info-sign"></span> Informacje</h1>

<div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <font color="#F05F40">
              <h1><i class="fa fa-refresh"></i></h1>
              </font>
              <h4>Aktualizacje</h4>              
              <font size="1px">

              </font>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <font color="#F05F40">
              <h1><i class="fa fa-user-secret" aria-hidden="true"></i></h1>
              </font>
              <h4>Oprogramowanie dedykowane</h4>
              <font size="1px">
                <span class="text-muted">

                </span>
              </font>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <font color="#F05F40">
              <h1><i class="fa fa-object-group" aria-hidden="true"></i></h1>
              </font>
              <h4>Kompaktowy system modułów</h4>
              <font size="1px">
                
              </font>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <font color="#F05F40">
              <h1><i class="fa fa-shield" aria-hidden="true"></i></h1>
              </font>
              <h4>Bezpieczeństwo</h4>
              <font size="1px">
              <span class="text-muted">

              </span>
              </font>
            </div>
</div>
<div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              
              <font size="1px">
                <span class="text-muted">Zawsze najnowsze oprogramowanie</span>
              </font>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              
              <font size="1px">
                <span class="text-muted">
                    Decydujesz o funkcjonalności aplikacji.
                </span>
              </font>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              
              <font size="1px">
                <span class="text-muted">Możliwość wymiany modułów z zachowaniem pełnej
                    funkcjonalności aplikacji.
                </span>
              </font>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              
              <font size="1px">
              <span class="text-muted">
                  Twoje dane są dobrze chronione, a każdy ruch w aplikacji jest monitorowany.
              </span>
              </font>
            </div>
</div>

<div class="jumbotron">
System zarządzania treścią <strong><font color="#F05F40">QSCMS</font></strong> został napisany w bardzo efektywnym 
framework-u <strong><font color="#bf3e11"><span class="glyphicon glyphicon-fire"></span> Codeigniter</font></strong>
w nowszej wersji 3.1.2 . Tak to CMS stał się wtyczką do framework-u a nie oddzielnym frameworkiem. Największymi zaletami 
<strong><font color="#F05F40">QSCMS</font></strong> jest wysoka elastyczność systemu (szeroka możliwość zastosowań np:
strony OnePage, Blogi, strony z artykułami, sklepy internetowe, rozbudowane portale i inne aplikacje webowe), ponad to 
system <strong><font color="#F05F40">QSCMS</font></strong> jest regularnie aktualizowany a jego najnowsze wersje są 
wspierane.
</div>
              

<center>
    <strong>
        <font size="1px">
            ŁUKASZ KUSY COPYRIGHT &copy; 2014 - 2017 QSCMS <br>
            WSZELKIE PRAWA ZASTRZEŻONE
        </font>
    </strong>
</center><?php }
}
?>