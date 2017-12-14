<?php /* Smarty version 3.1.24, created on 2017-06-02 07:55:43
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29719593119ff7508c1_70281613%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f1d25fbac0b82988138a7ae8927abcdcf6de83' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_menu.tpl',
      1 => 1496390047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29719593119ff7508c1_70281613',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_593119ffbadcd5_34844998',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_593119ffbadcd5_34844998')) {
function content_593119ffbadcd5_34844998 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29719593119ff7508c1_70281613';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Łukasz Kusy">
    <link rel="Shortcut icon" href="../../assets/cms/qs2.ico" />
    <title>QSCMS - Panel SPSM</title>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"><?php echo '</script'; ?>
>

    <!-- Include Editor style. -->
<link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_style.min.css' rel='stylesheet' type='text/css' />

<!-- Include JS file. -->
<?php echo '<script'; ?>
 type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/js/froala_editor.min.js'><?php echo '</script'; ?>
>
    <style><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['css'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['css'];
}?></style>
    <?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['js'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['js'];
}?><?php echo '</script'; ?>
>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" style="color: #F05F40;" href="<?php echo @constant('URL_DOMAIN');?>
index.php/QSCMS/">QSCMS<font size="1px" color="white"> <?php echo @constant('CMS_VERSION');?>
</font>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li <?php if (strpos($_SERVER['PHP_SELF'],'Tutorial') != false) {?>class="active"<?php }?> title="FAQ">
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/Tutorial/">
                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span> 
                </a>
            </li>
            <li <?php if (strpos($_SERVER['PHP_SELF'],'Updates') != false) {?>class="active"<?php }?> title="Aktualizacje">
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/Updates/">
                    <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> 
                </a>
            </li>
            <li <?php if (strpos($_SERVER['PHP_SELF'],'Report') != false) {?>class="active"<?php }?>  title="Zgłoś błąd">
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/Report/">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 
                </a>
            </li>
            <li <?php if (strpos($_SERVER['PHP_SELF'],'Info') != false) {?>class="active"<?php }?> title="Informacje">
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/Info/">
                    <span class="glyphicon glyphicon-info-sign"></span>
                </a>
            </li>
            <?php if ($_SESSION['x9eA'] == 1) {?>
            <li <?php if (strpos($_SERVER['PHP_SELF'],'Settings') != false) {?>class="active"<?php }?> title="Ustawienia">
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/Settings/">
                    <span class="glyphicon glyphicon-cog"></span> 
                </a>
            </li>
            <?php }?>
            <li title="Wyloguj">
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/QSCMS/logout">
                    <span class="glyphicon glyphicon-off"></span> 
                </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php if ($_SESSION['x9eA'] == 1) {?>
          <ul class="nav nav-sidebar">
            <li <?php if (strpos($_SERVER['PHP_SELF'],'Users') != false) {?>class="active"<?php }?>>
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/Users/">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    Użytkownicy
                </a>
            </li>
            <li <?php if (strpos($_SERVER['PHP_SELF'],'Deduction') != false) {?>class="active"<?php }?>>
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/Deduction/">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                    Odpisy
                </a>
            </li>
            <li <?php if (strpos($_SERVER['PHP_SELF'],'KPS') != false) {?>class="active"<?php }?>>
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/KPS/">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    KPS
                </a>
            </li>
          </ul> 
          <?php }?>
          <ul class="nav nav-sidebar">            
            <?php if ($_SESSION['x9eA'] == 1) {?>
            <li <?php if (strpos($_SERVER['PHP_SELF'],'Menu') != false) {?>class="active"<?php }?>>
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/Menu/">
                    <span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span>
                    Menu
                </a>
            </li>
            <li <?php if (strpos($_SERVER['PHP_SELF'],'Slider') != false) {?>class="active"<?php }?>>
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/Slider/">
                    <span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>
                    Pokaz
                </a>
            </li>

            <li <?php if (strpos($_SERVER['PHP_SELF'],'Events') != false) {?>class="active"<?php }?>>
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/Events/">
                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                    Wydarzenia
                </a>
            </li>
            <li <?php if (strpos($_SERVER['PHP_SELF'],'Footer') != false) {?>class="active"<?php }?>>
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/Footer/">
                    <span class="glyphicon glyphicon-eject"></span> 
                    Stopka
                </a>
            </li>            
            <li <?php if (strpos($_SERVER['PHP_SELF'],'/Contact') != false) {?>class="active"<?php }?>>
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/Contact/">
                    <i class="fa fa-fax" aria-hidden="true"></i>
                    Kontakt
                </a>
            </li>
            <?php }?>
            <?php if ($_SESSION['x9RA'] == 1) {?>
            <li <?php if (strpos($_SERVER['PHP_SELF'],'PersonalContact') != false) {?>class="active"<?php }?>>
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/PersonalContact/">
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 
                    Kontakt
                </a>
            </li>
            <?php }?>
          </ul>
          
          <ul class="nav nav-sidebar">
            <li <?php if (strpos($_SERVER['PHP_SELF'],'Add') != false) {?>class="active"<?php }?>>
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/Add/">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                    Dodaj
                </a>
            </li> 
            <li <?php if (strpos($_SERVER['PHP_SELF'],'SubCategory') != false) {?>class="active"<?php }?>>
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/SubCategory/">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> 
                    Kategorie
                </a>
            </li>
            <li <?php if (strpos($_SERVER['PHP_SELF'],'ArticlesList') != false) {?>class="active"<?php }?>>
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/ArticlesList/">
                    <span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span> 
                    Artykuły
                </a>
            </li>
          </ul>
          <ul class="nav nav-sidebar">
            
            <li <?php if (strpos($_SERVER['PHP_SELF'],'Disc') != false) {?>class="active"<?php }?>>
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/Disc/">
                    <span class="glyphicon glyphicon-hdd" aria-hidden="true"></span> 
                    Dysk
                </a>
            </li>            
            <li <?php if (strpos($_SERVER['PHP_SELF'],'Links') != false) {?>class="active"<?php }?>>
                <a href="<?php echo @constant('URL_DOMAIN');?>
index.php/Links/">
                    <span class="glyphicon glyphicon-link" aria-hidden="true"></span> 
                    Linki
                </a>
            </li>
          </ul>
          <ul class="nav nav-sidebar">


<!--            <li><a href=""><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Informacje</a></li>
            <li><a href=""><span class="glyphicon glyphicon-compressed" aria-hidden="true"></span> Kopie zapasowe</a></li>
            <li><a href=""><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Statystyki</a></li>
            <li><a href=""><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Raporty</a></li>
            <li><a href=""><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Śledź</a></li>
            <li><a href=""><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Ustawienia</a></li>-->
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"><?php }
}
?>