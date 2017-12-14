<?php /* Smarty version 3.1.24, created on 2017-05-29 15:42:23
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_faq.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31649592c415f6f33a2_76361615%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1471539356638a69572c57f5e2d3290db5f7c74c' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_faq.tpl',
      1 => 1495978194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31649592c415f6f33a2_76361615',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592c415f9ecfe2_48850285',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c415f9ecfe2_48850285')) {
function content_592c415f9ecfe2_48850285 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31649592c415f6f33a2_76361615';
?>
<style><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['css'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['css'];
}?></style>
<?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['js'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['js'];
}?><?php echo '</script'; ?>
>
<h1 class="page-header"><span class="glyphicon glyphicon-book"></span> FAQ</h1>

<p>
    
    <?php if ($_SESSION['x9eA'] == 1) {?>
        <form method="POST">
            <input type="hidden" name='faq' value="createUser">
            <button class="btn btn-info btn-xs">Jak stworzyć/edytować użytkownika ? (Panel Użytkownicy)</button>
        </form>
        <br>
        <form method="POST">
            <input type="hidden" name='faq' value="setMenu">
            <button class="btn btn-info btn-xs">Jak tworzyć/edytować kategorie ? (Menu)</button>
        </form><br>
        <form method="POST">
            <input type="hidden" name='faq' value="setFooter">
            <button class="btn btn-info btn-xs">Jak edytować stopkę strony ? (Stopka)</button>
        </form><br>
    <?php } else { ?>
    <form method="POST">
        <input type="hidden" name='faq' value="howStart">
        <button class="btn btn-info btn-xs">Jak zacząć ? (Intefrejs panelu)</button>
    </form><br>
    <?php }?>
    
    <form method="POST">
        <input type="hidden" name='faq' value="category">
        <button class="btn btn-info btn-xs">Jak zarządzać kategoriami ? (Kategorie)</button>
    </form><br>
    
    <form method="POST">
        <input type="hidden" name='faq' value="add">
        <button class="btn btn-info btn-xs">Jak utworzyć artykuł ? (Dodaj)</button>
    </form><br>
    
    <form method="POST">
        <input type="hidden" name='faq' value="hdd">
        <button class="btn btn-info btn-xs">Jak zarządzać plikami ? (Dysk)</button>
    </form><br>
    
    <form method="POST">
        <input type="hidden" name='faq' value="contactPersonal">
        <button class="btn btn-info btn-xs">Jak edytować kontakt ? (Kontakt)</button>
    </form><br>
    
    
    
</p>
<?php }
}
?>